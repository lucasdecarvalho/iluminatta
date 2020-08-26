<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cielo\API30\Merchant;

use Cielo\API30\Ecommerce\Environment;
use Cielo\API30\Ecommerce\Sale;
use Cielo\API30\Ecommerce\CieloEcommerce;
use Cielo\API30\Ecommerce\Payment;
use Cielo\API30\Ecommerce\CreditCard;
use Cielo\API30\Ecommerce\Request\CieloRequestException;

use Cart;
use App\Sold;
use App\Product;
use App\Shop;
use FlyingLuscas\Correios\Client;
use FlyingLuscas\Correios\Service;

class CieloController extends CartController
{
    private $environment;
    private $merchant;
    private $cielo;
    private $sale;
    private $payment;

    public function __construct(Request $request){
        $this->environment = Environment::production();
        $this->merchant = new Merchant(config('cielo.MerchantId'), config('cielo.MerchantKey'));
        $this->cielo = new CieloEcommerce($this->merchant, $this->environment);
        $this->sale = new Sale('123');
        $this->payment = Payment::PAYMENTTYPE_CREDITCARD;
    }
    
    public function index()
    {
        $data = CartController::index();
        $shop = new Shop;

        $shop->final = $data->shop->final;
        $shop->fmt_final = $data->shop->fmt_final;

        return view('checkout', compact('shop'));
    }
    
    public function payer(Request $request)
    {

        $data = CartController::index();
        $shop = new Shop;
        
        $shop->final = $data->shop->final;
        $shop->name = auth()->user()->name;
        $shop->email = auth()->user()->email;
        
        $saveCart = [
            'user_id' => auth()->user()->id,
            'street' => auth()->user()->address,
            'number' => auth()->user()->number,
            'comp' => auth()->user()->obs,
            'city' => auth()->user()->city,
            'state' => auth()->user()->state,
            'zipcode' => auth()->user()->zipcode,
            'id_shop' => 123,
            'tild' => 123,
            'payment_type' => $this->payment ." - ". $request->flag,
            'value' => $data->shop->final,
            'installments' => $request->installments,
            'cart' => Cart::content(),
            'tracking_number' => null
        ];       
        
        // Crie uma instância de Customer informando o nome do cliente
        $this->sale->customer($request->holder);
        
        // Crie uma instância de Payment informando o valor do pagamento
        $payment = $this->sale->payment($shop->final, $request->installments);
        
        // Crie uma instância de Credit Card utilizando os dados de teste
        // esses dados estão disponíveis no manual de integração
        // dd($request->installments);
        // $this->cardData($shop->final,$request->cvv,$request->date,$request->installments,$request->numberCard,$request->holder);
        $payment->setType($this->payment)
                    ->creditCard($request->cvv, CreditCard::MASTERCARD)
                    ->setExpirationDate($request->date)
                    ->setCardNumber($request->numberCard)
                    ->setHolder($request->holder);
        
        // Crie o pagamento na Cielo
        try {
            // Configure o SDK com seu merchant e o ambiente apropriado para criar a venda
            $sale = ($this->cielo)->createSale($this->sale);
            
            // Com a venda criada na Cielo, já temos o ID do pagamento, TID e demais
            // dados retornados pela Cielo
            $paymentId = $sale->getPayment()->getPaymentId();
            
            // Com o ID do pagamento, podemos fazer sua captura, se ela não tiver sido capturada ainda
            $sale = ($this->cielo)->captureSale($paymentId, $shop->final, 0);
            
            // Salvar no banco os dados da compra
            $saveCart["success"] = true;
            Sold::create($saveCart);
            
            // Enviar email de sucesso
            $details = [
                'idPed' => $paymentId,
                'title' => 'Agradecemos por sua compra em nossa loja.',
                'body' => 'Caso precise de alguma ajuda com o seu pedido, fale conosco através do WhatsApp® (19) 91234-5678.'
            ];
           
            \Mail::to($shop->email)->send(new \App\Mail\SoldMail($details));        

            return view('success', compact('shop'));

        } catch (CieloRequestException $e) {
            // Em caso de erros de integração, podemos tratar o erro aqui.
            // os códigos de erro estão todos disponíveis no manual de integração.
            // dd($e);

            // Salvar no banco os dados da compra
            $saveCart["success"] = false;
            Sold::create($saveCart);

            $error = $e->getCieloError();
            return view('error', compact('error'));
        }
    }
}

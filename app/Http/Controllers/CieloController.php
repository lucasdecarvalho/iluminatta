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
use App\Product;
use FlyingLuscas\Correios\Client;
use FlyingLuscas\Correios\Service;

class CieloController extends Controller
{
    private $environment;
    private $merchant;
    private $cielo;
    private $sale;
    private $payment;

    public function __construct(Request $request){
        $this->environment = Environment::sandbox();
        $this->merchant = new Merchant(config('cielo.MerchantId'), config('cielo.MerchantKey'));
        $this->cielo = new CieloEcommerce($this->merchant, $this->environment);
        $this->sale = new Sale('123');
        $this->payment = Payment::PAYMENTTYPE_CREDITCARD;
    }
    
    public function index()
    {
        $correios = new Client;
        $end = null;
        $frete = null;
        $cupom = null;
        
        if(auth()->user()) {

            $end = $correios->zipcode()
                            ->find(auth()->user()->zipcode);

            $frete = $correios->freight()
                            ->origin('13501-140') // endereço da loja
                            ->destination(auth()->user()->zipcode) // endereço da entrega
                            ->services(Service::SEDEX, Service::PAC) // serviços dos correios
                            ->item(11, 2, 16, .3, Cart::count()) // largura min 11, altura min 2, comprimento min 16, peso min .3 e quantidade
                            ->calculate();
        }

        // Total limpo
        $ctotal = str_replace(',','',Cart::total());
        // Taxa limpa
        $ctax = str_replace(',','',Cart::tax());
        // Total sem taxa limpo
        $nttotal = $ctotal - $ctax;
        // Total formatado
        $ftotal = number_format($nttotal,2,',','.');
        // Frete limpo
        $cship = str_replace(',','',$frete[0]["price"]);
        // Total sem taxa limpo + frete limpo
        $cftotal1 = $nttotal + $cship;
        $cftotal = number_format($cftotal1,2,'','');
        // Total sem taxa limpo + frete limpo formatado
        $fftotal = number_format($cftotal1,2,',','.');
        // dd($fftotal);
        
        return view('checkout', compact('fftotal','nttotal','ftotal','end','frete'));
    }
    
    public function payer(Request $request)
    {
        $correios = new Client;
        $end = null;
        $frete = null;
        $cupom = null;

        $frete = $correios->freight()
                            ->origin('13501-140') // endereço da loja
                            ->destination(auth()->user()->zipcode) // endereço da entrega
                            ->services(Service::SEDEX, Service::PAC) // serviços dos correios
                            ->item(11, 2, 16, .3, Cart::count()) // largura min 11, altura min 2, comprimento min 16, peso min .3 e quantidade
                            ->calculate();

        // Total limpo
        $ctotal = str_replace(',','',Cart::total());
        // Taxa limpa
        $ctax = str_replace(',','',Cart::tax());
        // Total sem taxa limpo
        $nttotal = $ctotal - $ctax;
        // Total formatado
        $ftotal = number_format($nttotal,2,',','.');
        // Frete limpo
        $cship = str_replace(',','',$frete[0]["price"]);
        // Total sem taxa limpo + frete limpo
        $cftotal1 = $nttotal + $cship;
        $cftotal = number_format($cftotal1,2,'','');
        // Total sem taxa limpo + frete limpo formatado
        $fftotal = number_format($cftotal1,2,',','.');
        // dd($cftotal);
        
        // Crie uma instância de Customer informando o nome do cliente
        $this->sale->customer($request->holder);
        
        // Crie uma instância de Payment informando o valor do pagamento
        $this->paymentInit($cftotal);
        
        // Crie uma instância de Credit Card utilizando os dados de teste
        // esses dados estão disponíveis no manual de integração
        $this->cardData($cftotal,$request->cvv,$request->date,$request->numberCard,$request->holder);
        
        // Crie o pagamento na Cielo
        try {
            // Configure o SDK com seu merchant e o ambiente apropriado para criar a venda
            $this->createSale();
            
            $total = $cftotal;
            // Com o ID do pagamento, podemos fazer sua captura, se ela não tiver sido capturada ainda
            $captura = $this->captureSale($cftotal);

            // Salvar no banco os dados da compra

            // Enviar email de sucesso

            return view('success', compact('total'));
        } catch (CieloRequestException $e) {
            // Em caso de erros de integração, podemos tratar o erro aqui.
            // os códigos de erro estão todos disponíveis no manual de integração.

            // dd($e);
            $error = $e->getCieloError();
            return view('error', compact('error'));
        }
    }

    private function createSale(){
        return ($this->cielo)->createSale($this->sale);
    }

    private function captureSale($price){
        return ($this->cielo)->captureSale($this->paymentId(), $price, 0);
    }

    private function cancelSale($price){
        return ($this->cielo)->cancelSale($this->paymentId(), $price);
    }

    private function paymentInit($price){
        return $this->sale->payment($price);
    }

    private function paymentId(){
        return $this->createSale()->getPayment()->getPaymentId();
    }

    private function cardData($price,$cvv,$date,$numberCard,$holder){
        $this->paymentInit($price)->setType($this->payment)
                ->creditCard($cvv, CreditCard::MASTERCARD)
                ->setExpirationDate($date)
                ->setCardNumber($numberCard)
                ->setHolder($holder);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cart;
use App\Product;
use FlyingLuscas\Correios\Client;
use FlyingLuscas\Correios\Service;

class CartController extends Controller
{

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
        $ftotal = number_format($nttotal,2,',','.');
        // Frete formatado
        $fship = number_format($frete[0]["price"],2,',','.');
        // dd($nttotal);
                
        return view('cart', compact('ftotal','fship','end','frete'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(!!$request->zipcode)
        {
            $correios = new Client;
            $cupom = null;

            $frete = $correios->freight()
                            ->origin('13501-140') // endereço da loja
                            ->destination($request->zipcode) // endereço da entrega
                            ->services(Service::SEDEX, Service::PAC) // serviços dos correios
                            ->item(11, 2, 16, .3, Cart::count()) // largura min 11, altura min 2, comprimento min 16, peso min .3 e quantidade
                            ->calculate();

            // Total limpo
            $ctotal = str_replace(',','',Cart::total());
            // Taxa limpa
            $ctax = str_replace(',','',Cart::tax());
            // Total sem taxa limpo
            $nttotal = $ctotal - $ctax;
            $ftotal = number_format($nttotal,2,',','.');
            // Frete formatado
            $fship = number_format($frete[0]["price"],2,',','.');

            return view('cart', compact('ftotal','fship','frete'));
        }

        if(!!$request->id)
        {

        Cart::add($request->id, $request->name, 1, $request->price)
            ->associate('App\Product');

            return redirect()->route('cart.index')->with('success_message', 'Item adicionado ao carrinho!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //                   
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        if($request->sub)
        {
            if($request->sub == "up")
            {
                $up = $request->qtd + 1;
            }
            else
            {
                $up = $request->qtd - 1;
            }
        
        Cart::update($id, $up); // Will update the quantity
        return back()->with('success_message', 'Quantidade alterada com sucesso');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Cart::remove($id);
        return back()->with('success_message', 'Item removido do carrinho');
    }
}

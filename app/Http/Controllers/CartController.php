<?php

namespace App\Http\Controllers;

use Cart;
use App\Product;
use Illuminate\Http\Request;

use FlyingLuscas\Correios\Client;
use FlyingLuscas\Correios\Service;

class CartController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $valor = Cart::total() - Cart::tax();
        $valor = number_format($valor, 2);

        $correios = new Client;

        $end = $correios->zipcode()
                        ->find(auth()->user()->zipcode);

        $frete = $correios->freight()
                        ->origin('13501-140')
                        ->destination(auth()->user()->zipcode)
                        ->services(Service::SEDEX, Service::PAC)
                        ->item(11, 2, 16, .3, Cart::count()) // largura min 11, altura min 2, comprimento min 16, peso min .3 e quantidade
                        ->calculate();
        
        // dd($end);
        
        return view('cart', compact('valor','end','frete'));
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
        Cart::add($request->id, $request->name, 1, $request->price)
            ->associate('App\Product');

            return redirect()->route('cart.index')->with('success_message', 'Item adicionado ao carrinho!');
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
        //
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

<?php

namespace App\Http\Controllers;

use App\Index;
use App\Product;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::take(3)->orderBy('id', 'DESC')->get();
  
        return view('index',compact('products'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('shop',compact('product'));
    }

    public function cart(Product $product)
    {
        $cart = [
            "client"  => [
                "id" => auth()->user()->id ?? null,
                "name" => auth()->user()->name ?? null,
                "email" => auth()->user()->email ?? null,
            ],
            "address" => [
                "logradouro" => "Rua Bela Cintra", 
                "numero" => 238, 
                "bairro" => "Jardins", 
                "uf" => "SP", 
                "cep" => "01234-567",
            ],
            "shop" => [
                "product" => $product->cvv ?? null,
            ],
        ];

        // return $cart;

        return view('cart',compact('product'));
    }

}

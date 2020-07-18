<?php

namespace App\Http\Controllers;

use App\Index;
use App\Product;
use App\Category;
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

        $pr = Product::offset(0)->limit(4)->orderBy('id','DESC')->get();
        
        foreach ($pr as $p) {

            $ca = Category::where('id', $p->category)->get();

            foreach ($ca as $cc) {

                $p->category = $cc->path;
            }

        }
        
        return view('index',compact('pr'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
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

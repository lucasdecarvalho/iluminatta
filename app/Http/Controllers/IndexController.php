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
        $products = Product::latest()->paginate(3);
  
        return view('index',compact('products'))
            ->with('i', (request()->input('page', 1) - 1) * 3);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('details',compact('product'));
    }

}

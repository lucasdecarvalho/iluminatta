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

        $pr = Product::offset(0)->limit(8)->orderBy('id','DESC')->where('status',true)->get();
        
        foreach ($pr as $p) {

            $ca = Category::where('id', $p->category)->get();

            foreach ($ca as $cc) {

                $p->category = $cc->path;
            }

        }
        
        return view('index',compact('pr'));
    }

}

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

    public function word(Request $request)
    {
        $keyword = $request->keyword;
        
        $result = Product::where('name','like','%'.$keyword.'%')->get();

        foreach($result as $p)
        {
            $slug = Category::where('id',$p->category)->get();
            
            foreach($slug as $ca)
            {
                $p->category = $ca->path;
            }
        }

        return view('search', compact('keyword','result'));
    }

}

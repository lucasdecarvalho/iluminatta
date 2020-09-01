<?php

namespace App\Http\Controllers;

use App\Product;
use Validator,Redirect,Response,File;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::latest()->paginate(10);
  
        return view('admin.products.products-list',compact('products'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        // começo

        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'fileUpload1' => 'image|mimes:jpeg,png,jpg,gif,svg|max:4096',
            'fileUpload2' => 'image|mimes:jpeg,png,jpg,gif,svg|max:4096',
            'fileUpload3' => 'image|mimes:jpeg,png,jpg,gif,svg|max:4096',
       ]);

       if ($files = $request->file('fileUpload1')) {
           $destinationPath = 'images/'; // upload path
           $profileImage1 = date('YmdHis') . "1." . $files->getClientOriginalExtension();
           $files->move($destinationPath, $profileImage1);
           $image1 = $destinationPath.$profileImage1;
        }
        else {
            $image1 = null;
        }

       if ($files = $request->file('fileUpload2')) {
           $destinationPath = 'images/'; // upload path
           $profileImage2 = date('YmdHis') . "2." . $files->getClientOriginalExtension();
           $files->move($destinationPath, $profileImage2);
           $image2 = $destinationPath.$profileImage2;
        }
        else {
            $image2 = null;
        }

       if ($files = $request->file('fileUpload3')) {
           $destinationPath = 'images/'; // upload path
           $profileImage3 = date('YmdHis') . "3." . $files->getClientOriginalExtension();
           $files->move($destinationPath, $profileImage3);
           $image3 = $destinationPath.$profileImage3;
        }
        else {
            $image3 = null;
        }

        $request->price = str_replace('.','',$request->price);
        $request->price = str_replace(',','.',$request->price);
        
        $data = [
            'name'  => $request->name,
            'category' => $request->category,
            'caption' => $request->caption,
            'price' => $request->price,
            'storage' => $request->storage,
            'promo' => $request->promo,
            'status' => $request->status,
            'details' => $request->details,
            'image1' => $image1,
            'image2' => $image2,
            'image3' => $image3,
        ];
        
        // fim

        Product::create($data);
   
        return redirect()->route('products.index')
                        ->with('success','Produto registrado com sucesso!');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $admin)
    {
        return view('admin.products.show',compact('admin'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $admin)
    {
        return view('admin.products.edit',compact('admin'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $admin)
    {

        $request->price = str_replace('.','',$request->price);
        $request->price = str_replace(',','.',$request->price);

        $data = [
            'name'  => $request->name,
            'category' => $request->category,
            'caption' => $request->caption,
            'price' => $request->price,
            'storage' => $request->storage,
            'promo' => $request->promo,
            'status' => $request->status,
            'details' => $request->details,
        ];

        // $request->validate([
        //     'name' => 'required',
        //     'price' => 'required',
        //     ]);
            

        $admin->update($data);
  
        return redirect()->route('admin.index')
                        ->with('success','Produto alterado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $admin)
    {
        $admin->delete();
  
        return redirect()->route('admin.index')
                        ->with('success','Produto deletado com sucesso!');
    }
}

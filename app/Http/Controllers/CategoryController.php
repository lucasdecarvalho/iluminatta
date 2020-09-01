<?php

namespace App\Http\Controllers;

use App\Category;
use Validator,Redirect,Response,File;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::latest()->paginate(10);
  
        return view('admin.categories.category-list',compact('categories'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.categories.category-create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'path' => 'required',
            'tag' => 'required',
        ]);

       $data = [
        'title'  => $request->title,
        'path' => $request->path,
        'tag' => $request->tag,
    ];

        Category::create($data);
   
        return redirect()->route('categories.index')
                        ->with('success','Categoria registrada com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Category $catg)
    {
        return view('admin.categories.category-show',compact('catg'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $catg)
    {
        return view('admin.categories.category-edit',compact('catg'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $catg)
    {

        $data = [
            'title'  => $request->name,
            'path' => $request->category,
            'tag' => $request->caption,
        ];

        // $request->validate([
        //     'name' => 'required',
        //     'price' => 'required',
        //     ]);

        $catg->update($data);
  
        return redirect()->route('categories.index')
                        ->with('success','Categoria alterada com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $catg)
    {
        dd($catg);
        $catg->delete();

        return redirect()->route('categories.index')
                        ->with('success','Categoria deletada com sucesso!');
    }
}

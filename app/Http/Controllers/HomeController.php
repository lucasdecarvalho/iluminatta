<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\User;

use FlyingLuscas\Correios\Client;
use FlyingLuscas\Correios\Service;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $correios = new Client;

        $end = $correios->zipcode()
                        ->find(auth()->user()->zipcode);

        return view('auth.index', compact('end'));
    }

    public function update(Request $request)
    {

        // dd($request);
        // $request->validate([
        //   'name' => 'required',
        //   'email' => 'required',
        // ]);

        User::where('id',$request->id)->first()->update($request->all());

        return redirect()->route('client.index')
                            ->with('success','Dados atualizados com sucesso!');
    }
    
}

<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Product;
use App\User;
use App\Auth;

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
        return view('auth.index');
    }

    public function update(Request $request, User $user)
    {

        $user = User::all()->first();

        // dd($request);
        // $request->validate([
        //     'name' => 'required',
        //     'email' => 'required',
        // ]);

        User::where('id',$user->id)->first()->update($request->all());

        return redirect()->route('client.index')
                            ->with('success','Dados atualizados com sucesso!');
    }
}

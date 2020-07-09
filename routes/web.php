<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('index');
// });

Route::get('/', 'IndexController@index')->name('index');
Route::get('details/{product}', 'IndexController@show')->name('details');
Route::get('carrinho', 'IndexController@cart')->name('carrinho');

Auth::routes();
Route::resource('admin','ProductController')->middleware('is_admin');;
Route::get('cliente', 'HomeController@index')->name('cliente');

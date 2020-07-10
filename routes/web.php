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

// Main
Route::get('/',                 'IndexController@index')->name('index');
Route::get('details/{product}', 'IndexController@show')->name('details');
Route::get('cart',              'IndexController@cart')->name('cartIndex');
Route::get('cart/{product}',    'IndexController@cart')->name('cart');
Route::get('checkout',          'CieloController@index')->name('checkout');
Route::post('checkout',         'CieloController@payer')->name('checkout');

// Authentications
Auth::routes();
Route::resource('admin',        'ProductController')->middleware('is_admin');
Route::get('client',            'HomeController@index')->name('client');

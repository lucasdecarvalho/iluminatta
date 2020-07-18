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
Route::get('/', 'IndexController@index')->name('index');

Route::get('/shop', 'IndexController@index')->name('index');
Route::get('/shop/{slug}', 'ShopController@index')->name('shop.index');
Route::get('/shop/{slug}/{productId}', 'ShopController@show')->name('shop.show');

Route::get('/cart', 'CartController@index')->name('cart.index');
Route::post('/cart', 'CartController@store')->name('cart.store');
Route::delete('/cart/{product}', 'CartController@destroy')->name('cart.destroy');

// Route::get('logout', function () {
//     auth()->user()->destroy();
// })->name('logout');

Route::get('/checkout', 'CieloController@index')->name('checkout.index');
Route::post('/checkout', 'CieloController@payer')->name('checkout.payer');

// Authentications
Auth::routes();
Route::resource('/admin', 'ProductController')->middleware('is_admin');
Route::get('/client', 'HomeController@index')->name('client.index');
Route::get('/home', 'HomeController@index')->name('client.index');

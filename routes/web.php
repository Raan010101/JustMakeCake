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

Route::get('/', 'IndexPageController@index')->name('index');

Route::get('/shop-grid', 'ShopController@index')->name('shop-grid');

Route::get('/cart', 'CartController@index')->name('cart'); 

Route::post('/cart', 'CartController@store')->name('cart.store'); 

Route::get('/empty', function() {
            Cart:: destroy(); 
        });

Route::delete('/cart-delete/{product}','CartController@destroy')->name('cart.destroy'); 




//Route::get('/shop-grid', function () {
//  return view('shop-grid');;

Route::get('/single-product', 'IndexPageController@singelProducts')->name('single-products');

Route::get('/about', function () {
    return view('about');
});

Route::get('/checkout', function () {
    return view('checkout');
});
Route::get('/my-account', function () {
    return view('my-account');
});

Route::get('/faq', function () {
    return view('faq');
});

Route::get('/portfolio', function () {
    return view('portfolio');
});

Route::get('/portfolio-details', function () {
    return view('portfolio-details');
});

Route::get('/build-a-cake', function () {
    return view('build-a-cake');
});
//Route::get('/cart', function () {
    //return view('cart');
//});

Route::get('/contact', function () {
    return view('contact');
});


Route::get('/team', function () {
    return view('team');
});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

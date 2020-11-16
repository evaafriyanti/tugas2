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

Route::group(['middleware'=>'auth'], function(){    
Route::get('/produk/', "ProdukController@index");
Route::get('/produkcreate', "ProdukController@create");
Route::post('/produk/store', "ProdukController@store");
Route::get('/{id}', "ProdukController@show");
Route::get('/produk/edit/{id}', "ProdukController@edit");
Route::post('/produk/update/{id}', "ProdukController@update");
Route::get('/produk/delete/{id}', "ProdukController@delete");
});


Route::get('/', function () {
    return view('welcome');
});
Route::get('/404', function () {
    return view('404');
});
Route::get('/account', function () {
    return view('account');
});
Route::get('/blog-archive-2', function () {
    return view('blog-archive-2');
});
Route::get('/blog-archive', function () {
    return view('blog-archive');
});
Route::get('/blog-single', function () {
    return view('blog-single');
});
Route::get('/cart', function () {
    return view('cart');
});
Route::get('/checkout', function () {
    return view('checkout');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/home', function () {
    return view("index");
});
Route::get('/product-detail', function () {
    return view('product-detail');
});
Route::get('/product', function () {
    return view('product');
});
Route::get('/wishlist', function () {
    return view('wishlist');
});
Route::get('/women', function () {
    return view('women');
});

Route::get('menu', function () {
    return view('template.menu');
});

Route::get('baju', function () {
    return view('kategori.baju');

});
Route::get('celana', function () {
    return view('kategori.celana');

});
Route::get('topi', function () {
    return view('kategori.topi');

});
Route::get('sepatu', function () {
    return view('kategori.sepatu');

});




Route::get('login', "loginController@login")->name('login');
Route::post('login', "loginController@loginProcess");
Route::post('logout', "loginController@logout");
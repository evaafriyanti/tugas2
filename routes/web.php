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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/', function () {
    return view('about');
});
Route::get('/', function () {
    return view('blog-detail');
});
Route::get('/', function () {
    return view('blog');
});
Route::get('/', function () {
    return view('contact');
});
Route::get('/', function () {
    return view('home-02');
});
Route::get('/', function () {
    return view('home-03');
});
Route::get('/', function () {
    return view('index');
});
Route::get('/', function () {
    return view('product-detail');
});
Route::get('/', function () {
    return view('product');
});
Route::get('/', function () {
    return view('shoping-cart');
});
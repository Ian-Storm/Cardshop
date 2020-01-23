<?php

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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/category/{id?}', 'CategoryController@index')->name('categories');
//{id?} = niet verplicht parameter

Route::get('/category/{cat_id}/product/{prod_id}', 'ProductController@index')->name('productview');

Route::get('/cart', 'CartController@index')->name('cart');
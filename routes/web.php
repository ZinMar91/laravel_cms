<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', 'PageController@index');

/*
|--------------------------------------------------------------------------
| For Products
|--------------------------------------------------------------------------
*/
Route::get('products', 'PageController@index');
Route::get('products/create', 'ProductController@create');
Route::post('products/create', 'ProductController@store');

Route::get('products/{id}/add-cart', 'PageController@addCart');
Route::get('products/cart', 'PageController@showCart');
Route::get('products/checkout', 'PageController@checkout');
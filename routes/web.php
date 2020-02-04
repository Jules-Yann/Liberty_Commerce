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

Auth::routes();


Route::get('/create/right', 'RightController@create')->name('createRight');
Route::get('/create/category', 'RightController@viewCat')->name('createCategory');
Route::get('/create/creationCategory', 'RightController@createCat');

Route::get('/', 'catalogController@index')->name('home');
Route::get('/home', 'catalogController@index')->name('home');

Route::get('/admin', 'adminController@index')->name('admin');
Route::post('/store', 'adminController@storeProd')->name('addProductCatalog');
Route::get('/delProd/{product}', 'adminController@deleteProd');

Route::get('/product/{product}', 'ProductController@show')->name('showProduct');

Route::get('/shoppingCart', 'shoppingCartController@view')->name('shoppingCart');

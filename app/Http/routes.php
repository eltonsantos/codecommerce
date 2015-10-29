<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('admin/category/{$id}', 'AdminCategoriesController@edit');
Route::post('admin/categories', 'AdminCategoriesController@index');
Route::delete('admin/category/{$id}', 'AdminCategoriesController@destroy');
Route::put('admin/category/{$id}', 'AdminCategoriesController@update');

Route::get('admin/product{$id}', 'AdminProductsController@edit');
Route::post('admin/products', 'AdminProductsController@index');
Route::delete('admin/product/{$id}', 'AdminProductsController@destroy');
Route::put('admin/product/{$id}', 'AdminProductsController@update');
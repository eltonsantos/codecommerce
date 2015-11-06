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

// Definindo a página inicial
Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'admin', 'where' => ['id' => '[0-9]+']], function(){
   /* Route::get('category/{id}', 'AdminCategoriesController@edit');
    Route::post('categories', 'AdminCategoriesController@index');
    Route::delete('category/{id}', 'AdminCategoriesController@destroy');
    Route::put('category/{id}', 'AdminCategoriesController@update');

    Route::get('product/{id}', 'AdminProductsController@edit');
    Route::post('products', 'AdminProductsController@index');
    Route::delete('product/{id}', 'AdminProductsController@destroy');
    Route::put('product/{id}', 'AdminProductsController@update');*/

    // Grupo de rotas para os produtos
    Route::group(['prefix' => 'products'], function(){
        Route::get('', ['as' => 'products' , 'uses' =>'ProductsController@index']);
        Route::get('create', ['as' => 'products.create', 'uses' => 'ProductsController@create']);
        Route::post('store', ['as' => 'products.store', 'uses' => 'ProductsController@store']);
        Route::get('{id}/edit', ['as' => 'products.edit', 'uses' => 'ProductsController@edit']);
        Route::put('{id}/update', ['as' => 'products.update', 'uses' => 'ProductsController@update']);
        Route::get('{id}/destroy', ['as' => 'products.destroy', 'uses' => 'ProductsController@destroy']);
    });

    // Grupo de rotas para as categorias
    Route::group(['prefix' => 'categories'], function(){
        Route::get('', ['as' => 'categories' , 'uses' =>'CategoriesController@index']);
        Route::get('create', ['as' => 'categories.create', 'uses' => 'CategoriesController@create']);
        Route::post('store', ['as' => 'categories.store', 'uses' => 'CategoriesController@store']);
        Route::get('{id}/edit', ['as' => 'categories.edit', 'uses' => 'CategoriesController@edit']);
        Route::put('{id}/update', ['as' => 'categories.update', 'uses' => 'CategoriesController@update']);
        Route::get('{id}/destroy', ['as' => 'categories.destroy', 'uses' => 'CategoriesController@destroy']);
    });

});
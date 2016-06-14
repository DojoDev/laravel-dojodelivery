<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
$repository = app()->make('DojoDelivery\Repositories\ProductRepository');

    return $repository->all();
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix'=>'admin', 'as'=>'admin.'], function(){

    Route::get('categories', ['as'=>'categories.index', 'uses'=>'CategoriesController2@index']);

    Route::get('categories/edit/{id}',  ['as'=>'categories.edit', 'uses'=>'CategoriesController2@edit']);

    Route::get('categories/create',  ['as'=>'categories.create', 'uses'=>'CategoriesController2@create']);

    Route::post('categories/update/{id}',  ['as'=>'categories.update', 'uses'=>'CategoriesController2@update']);

    Route::post('categories/store',  ['as'=>'categories.store', 'uses'=>'CategoriesController2@store']);


    Route::get('products', ['as'=>'products.index', 'uses'=>'ProductsController@index']);

    Route::get('products/edit/{id}',  ['as'=>'products.edit', 'uses'=>'ProductsController@edit']);

    Route::get('products/create',  ['as'=>'products.create', 'uses'=>'ProductsController@create']);

    Route::post('products/update/{id}',  ['as'=>'products.update', 'uses'=>'ProductsController@update']);

    Route::post('products/store',  ['as'=>'products.store', 'uses'=>'ProductsController@store']);

    Route::get('products/destroy/{id}',  ['as'=>'products.destroy', 'uses'=>'ProductsController@destroy']);

});


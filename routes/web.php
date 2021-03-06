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

Route::get('/', 'HomeController@getHome');

Route::group(['middleware' => 'auth'],function (){

    Route::get('productos', 'ProductoController@getIndex');

    Route::get('productos/show/{id}', 'ProductoController@getShow');

    Route::get('productos/create', 'ProductoController@getCreate');

    Route::post('productos/create', 'ProductoController@postCreate');

    Route::get('productos/edit/{id}', 'ProductoController@getEdit');

    Route::put('productos/edit/{id}', 'ProductoController@putEdit');

    Route::get('productos/buy/{id}', 'ProductoController@changeBuy');

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

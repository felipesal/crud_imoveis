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


Route::get('/imoveis/create',['uses' => 'ImovelController@create', 'as' => 'imoveis.create']);
Route::post('/imoveis/create',['uses' => 'ImovelController@store', 'as' => 'imoveis.store']);
Route::get('/imoveis',['uses' => 'ImovelController@index', 'as' => 'imoveis.index']);
Route::get('/imoveis/{id}',['uses' => 'ImovelController@show', 'as' => 'imoveis.show']);
Route::get('/imoveis/edit/{id}',['uses' => 'ImovelController@edit', 'as' => 'imoveis.edit']);
Route::put('/imoveis/edit/{id}',['uses' => 'ImovelController@update', 'as' => 'imoveis.update']);
Route::get('/imoveis/remove/{id}',['uses' => 'ImovelController@remove', 'as' => 'imoveis.remove']);
Route::delete('/imoveis/remove/{id}',['uses' => 'ImovelController@destroy', 'as' => 'imoveis.destroy']);

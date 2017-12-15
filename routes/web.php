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

Route::get('lista-televisores', 'TvController@listaTelevisor');
Route::get('index-televisores', 'TvController@homeTelevisor');	
Route::get('cria-televisor', 'TvController@formularioTelevisor');
Route::get('editar-televisor/{id}', 'TvController@editarTelevisor');
Route::put('altera-televisor/{id}', 'TvController@alteraTelevisor');
Route::post('salva-televisor','TvController@salvarTelevisor');
Route::delete('deletar-televisor/{id}', 'TvController@deletarTelevisor');

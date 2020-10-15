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
    //return view('Welcome');
    return view('LoginUser');
});

Route::get('/produtos', 'ProdutoController@index');

Route::get('produtos/novo','ProdutoController@create');

Route::post('/produtos','ProdutoController@store');

Route::get('/produtos/apagar/{id}','ProdutoController@destroy');

Route::get('/produtos/editar/{id}','ProdutoController@edit');

Route::post('/produtos/{id}','ProdutoController@update');

Route::post('/registrar','LoginUsuarioController@RegistroUsuario');

Route::post('/verificar','LoginUsuarioController@LoginUsuario');


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

Route::post('/registrar','LoginUsuarioController@RegistroUsuario');

Route::post('/verificar','LoginUsuarioController@LoginUsuario');


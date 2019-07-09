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

Route::get('/', function () {
    return view('home');
});

Route::get('/adm', 'AdmController@index')->name('adm')->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/users', 'UserController')->middleware('auth');

Route::resource('/colecionaveis', 'ColecionavelController')->middleware('auth');

Route::resource('/compras', 'CompraController');

Route::resource('/ofertas', 'OfertaController')->middleware('auth');

Route::resource('/posses', 'PosseController')->middleware('auth');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

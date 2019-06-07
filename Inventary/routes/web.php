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

Route::get('/', 'gestion@index');

Route::get('/provedores', 'gestion@provedores')->name('provedores');
Route::get('/productos', 'gestion@productos')->name('prductos');
Route::get('/clientes', 'gestion@clientes')->name('clientes');

Route::post('/provedoresproducs', 'gestion@guardarproductos')->name('provedoresproducs');

//provedoresproducsM

Route::post('/provedoresproducsM', 'gestion@edit')->name('provedoresproducsM');
Route::post('/clientesproductos', 'gestion@editclip')->name('clientesproductos');

Route::get('/totalventascli', 'gestion@totalVclientes')->name('totalventascli');
Route::get('/totalventasprove', 'gestion@totalVproveedore')->name('totalventasprove');

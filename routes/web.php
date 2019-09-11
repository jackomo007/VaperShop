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
    return view('principal.index');
});

Route::get('/contacto', function () {
    return view('principal.contacto');
});

Route::get('/registro', function () {
    return view('principal.registro');
});

Route::get('/productos', function () {
    return view('productos.index');
});

Route::get('/productos/editar', function () {
    return view('productos.editar');
});

Route::get('/cliente', 'ClientController@index')->name('client.index');
Route::put('/cliente/{cliente}', 'ClientController@update')->name('client.update');

Route::get('/carrito', function () {
    return view('carrito.index');
});

Route::get('/admin', function () {
    return view('admin.index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

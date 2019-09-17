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

Route::get('/admin', 'AdminController@index')->name('admin.index');
Route::get('/admin/categoria', 'CategoryController@index')->name('category.index');
Route::get('/admin/sub-categoria', 'SubCategoryController@index')->name('sub.category.index');
Route::get('/admin/productos', 'SubCategoryController@index')->name('sub.category.index');



Route::get('/categoria/all', 'CategoryController@all')->name('category.all');
Route::get('/categoria', 'CategoryController@table')->name('category.table');
Route::post('/categoria', 'CategoryController@store')->name('category.store');
Route::put('/categoria', 'CategoryController@update')->name('category.update');
Route::delete('/categoria', 'CategoryController@destroy')->name('category.destroy');

Route::get('/sub-categoria', 'SubCategoryController@table')->name('sub.category.table');
Route::post('/sub-categoria', 'SubCategoryController@store')->name('sub.category.store');
Route::put('/sub-categoria', 'SubCategoryController@update')->name('sub.category.update');
Route::delete('/sub-categoria', 'SubCategoryController@destroy')->name('sub.category.destroy');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

<?php

use App\Product;

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
    $products = Product::get();
    $user = auth()->user();
    return view('productos.index',['user' => $user, 'products' => $products]);
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
Route::get('/admin/producto', 'ProductController@index')->name('sub.category.index');



Route::get('/categoria/all', 'CategoryController@all')->name('category.all');
Route::get('/categoria', 'CategoryController@table')->name('category.table');
Route::post('/categoria', 'CategoryController@store')->name('category.store');
Route::put('/categoria', 'CategoryController@update')->name('category.update');
Route::delete('/categoria', 'CategoryController@destroy')->name('category.destroy');

Route::get('/sub-categoria/all', 'SubCategoryController@all')->name('sub.category.all');
Route::get('/sub-categoria', 'SubCategoryController@table')->name('sub.category.table');
Route::post('/sub-categoria', 'SubCategoryController@store')->name('sub.category.store');
Route::put('/sub-categoria', 'SubCategoryController@update')->name('sub.category.update');
Route::delete('/sub-categoria', 'SubCategoryController@destroy')->name('sub.category.destroy');

Route::get('/producto/all', 'SubCategoryController@all')->name('product.all');
Route::get('/producto', 'ProductController@table')->name('product.table');
Route::post('/producto', 'ProductController@store')->name('product.store');
Route::put('/producto', 'ProductController@update')->name('product.update');
Route::delete('/producto', 'ProductController@destroy')->name('product.destroy');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

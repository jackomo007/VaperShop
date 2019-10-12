<?php
use App\Carrousel;
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
    $images = Carrousel::get();
    return view('principal.index',['images' => $images]);
});

Route::get('/contacto', function () {
    return view('principal.contacto');
});

Route::get('/registro', function () {
    return view('principal.registro');
});

Route::get('/cliente', 'ClientController@index')->name('client.index');
Route::put('/cliente/{cliente}/edit', 'ClientController@update')->name('client.update');
Route::post('/cliente/contacto', 'ClientController@contact')->name('client.contact');

Route::get('/admin', 'AdminController@index')->name('admin.index');
Route::get('/admin/categoria', 'CategoryController@index')->name('category.index');
Route::get('/admin/sub-categoria', 'SubCategoryController@index')->name('sub.category.index');
Route::get('/admin/producto', 'ProductController@index')->name('sub.category.index');
Route::get('/admin/carrousel', 'CarrouselController@index')->name('carrousel.index');

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

Route::get('/productos', 'ProductController@show')->name('product.show');
Route::get('/productos/{filter}/filter', 'ProductController@filter')->name('product.filter');
Route::post('/productos/search', 'ProductController@search')->name('product.search');

Route::get('/producto/all', 'SubCategoryController@all')->name('product.all');
Route::get('/producto', 'ProductController@table')->name('product.table');
Route::post('/producto', 'ProductController@store')->name('product.store');
Route::post('/producto/image', 'ProductController@productImage')->name('product.image');
Route::put('/producto', 'ProductController@update')->name('product.update');
Route::delete('/producto', 'ProductController@destroy')->name('product.destroy');

Route::post('/carrito', 'InShoppingCartController@store')->name('carrito.store')->middleware('auth');
Route::delete('/carrito', 'InShoppingCartController@destroy')->name('carrito.destroy');

Route::get('/carrito/{carrito}/close', 'ShoppingCartController@close')->name('carrito.close');
Route::get('/carrito/completed', 'ShoppingCartController@show')->name('carrito.show');
Route::get('/carrito', 'ShoppingCartController@index')->name('carrito.index');
Route::post('/carrito/empty/close', 'ShoppingCartController@empty');

Route::get('/order', 'OrderController@index')->name('order.index');
Route::post('/order/{order}', 'OrderController@show')->name('order.show');
Route::post('/order', 'OrderController@store')->name('order.store');
Route::put('/order/{order}', 'OrderController@update')->name('order.update');
Route::delete('/order/{order}', 'OrderController@destroy')->name('order.destroy');

Route::get('/carrousel/all', 'CarrouselController@all')->name('carrousel.all');
Route::get('/carrousel', 'CarrouselController@table')->name('carrousel.table');
Route::post('/carrousel', 'CarrouselController@store')->name('carrousel.store');
Route::put('/carrousel', 'CarrouselController@update')->name('carrousel.update');
Route::delete('/carrousel', 'CarrouselController@destroy')->name('carrousel.destroy');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

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

Route::get('/clientes', function () {
    return view('clientes.index');
});

Route::get('/carrito', function () {
    return view('carrito.index');
});

Route::get('/admin', function () {
    return view('admin.index');
});

Route::get('/carrito', 'ShoppingCartController@index');
Route::post('/carrito', 'ShoppingCartController@checkout');

Auth::routes();

Route::resource('users', 'UsersController');

Route::resource('products','ProductsController');

Route::resource('in_shopping_carts','InShoppingCartsController', [ 
	'only' => ['store','destroy'] 
	]);

Route::resource('compras', 'ShoppingCartController', [
	'only' => ['show']
]);

Route::resource('orders', 'OrdersController', [
	'only' => ['index', 'update']
]);

Route::get('/home', 'HomeController@index');

Route::get('products/images/{filename}',function($filename){
	$path = storage_path("app/images/$filename");
	
	if(!\File::exists($path)) abort(404);
	
	$file = \File::get($path);
	
	$type = \File::mimeType($path);
	
	$response = Response::make($file,200);
	
	$response->header("Content-Type",$type);
	
	return $response;
});
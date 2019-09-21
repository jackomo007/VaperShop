<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShoppingCartController extends Controller
{

    public function show($id){

        $shopping_cart = ShoppingCart::where('customid',$id)->first();

        $order = $shopping_cart->order();

        return view("carrito.completed", ["shopping_cart" => $shopping_cart, "order" => $order]);
    }



    public function index(Request $request){

        $shopping_cart = $request->shopping_cart;

        $products = $shopping_cart->products()->get();

        $total = $shopping_cart->total();

        return view("carrito.index", ["products" => $products,"total" => $total]);

    }
}

<?php

namespace App\Http\Controllers;

use App\InShoppingCart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ShoppingCartController extends Controller
{

    public function show(){

        $shopping_cart = ShoppingCart::where('custom_id',auth()->user()->id)->where('status','incomplete')->first();

        $order = $shopping_cart->order();

        return view("carrito.completed", ["shopping_cart" => $shopping_cart, "order" => $order]);
    }

    public function index(Request $request){

        $products =  new InShoppingCart;
        $products =   DB::table('in_shopping_carts')->join('products', 'in_shopping_carts.product_id', '=', 'products.id')
                                                    ->select('in_shopping_carts.*', 'products.title')
                                                    ->get();
        $total = $products->sum("price_sale");
        
        return view("carrito.index", ["products" => $products, 'total' => $total]);
    }

    public function close(Request $request)
    {
        $shopping_cart = ShoppingCart::where('id',$request->shopping_cart)->update([
            'status' => 'completed'
        ]);
    }
}

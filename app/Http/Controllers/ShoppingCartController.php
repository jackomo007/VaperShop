<?php

namespace App\Http\Controllers;

use App\ShoppingCart;
use App\InShoppingCart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ShoppingCartController extends Controller
{

    public function index(){
        $user = auth()->user();

        $shoppingCart = new ShoppingCart;
        $userCart = $shoppingCart->getUserCart($user);
        if(null === $userCart){
            $products = [];
            $total = 0;
        }else{
            $cart =  new InShoppingCart;
            $products =   $cart->productsCart($userCart->id);
            $total = $cart->totalCart($products);
        }
        
        return view("carrito.index", ["products" => $products, 'total' => $total]);
    }

    public function show(){

        $cart = new ShoppingCart;

        $shopping_cart = $cart->getUserCart(auth()->user());

        $order = $shopping_cart->order();

        return view("carrito.completed", ["shopping_cart" => $shopping_cart, "order" => $order]);
    }

    public function close($carrito)
    {
        ShoppingCart::where('id',$carrito)->update([
            'status' => 'completed'
        ]);

        return redirect("/order");
    }

    public function destroy(Request $request)
    {
        // $shopping_cart = ShoppingCart::where('id',$request->shopping_cart)->update([
        //     'status' => 'completed'
        // ]);
    }
}

<?php

namespace App\Http\Controllers;

use App\User;
use App\Order;
use App\ShoppingCart;
use App\InShoppingCart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    public function __construct(){
        $this->middleware("auth");
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = Order::get();

        return view('order.index',['orders' => $orders]);
    }

    public function store(Request $request)
    {
        $id = $request->id_cart;

        $cart =  new InShoppingCart;
        $products =   $cart->productsCart($id);
        $total = $cart->totalCart($products);

        Order::create([
            "shopping_cart_id" => $id,
            "total" => $total,
            "status" => "creado"
        ]);

        foreach ($products as $product) {
            $stock = DB::table('stocks')->where('product_id', $product->id)->first();
            $quantity = $stock->quantity - $product->quantity;
            DB::table('stocks')->where('product_id', $product->id)->update(['quantity' => $quantity]);
        }
       return redirect()->route('carrito.close', ['carrito' => $id]);
    }

    public function show(Request $request)
    {
       $order = Order::find($request->id);

       $user = User::find($order->user_id);
       $cart = new ShoppingCart;
       $cart = $cart->getUserCart($user);

       $products = new InShoppingCart;
       $products = $products->productsCart($cart->id);

        return $products ? $products : [];
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        $order->update(['status' => $request->status]);
        return back()->with('success', 'Estado de la compra actualizado con exito');
    }

    public function destroy(Order $order)
    {
        $order->delete();
        return back()->with('success', 'Orden de compra eliminada con exito');
    }
}

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
        $orders = DB::table('orders')->join('users', 'orders.user_id', '=', 'users.id')
                                                    ->select('orders.*', 'users.name')
                                                    ->get();

        return view('order.index',['orders' => $orders]);
    }

    public function store(Request $request)
    {
        $id = $request->shopping_cart;

        $cart =  new InShoppingCart;
        $products =   $cart->productsCart($id);
        $total = $cart->totalCart($products);

        Order::create([
            "shopping_cart_id" => $id,
            "user_id" => auth()->user()->id,
            "total" => $total,
            "status" => "creado"
        ]);

        return redirect("/order");
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

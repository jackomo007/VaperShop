<?php

namespace App\Http\Controllers;

use App\InShoppingCart;
use App\Order;
use Illuminate\Http\Request;

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
        $orders = Order::latest()->get();

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

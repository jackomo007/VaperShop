<?php

namespace App\Http\Controllers;

use App\User;
use App\Order;
use App\Stock;
use App\ShoppingCart;
use App\InShoppingCart;
use App\Mail\OrdenDeCompra;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class OrderController extends Controller
{
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

        $order = Order::create([
            "shopping_cart_id" => $id,
            "total" => $total,
            "status" => "creado"
        ]);
        
        $this->updateStock($products);

        Mail::to(auth()->user()->email)->cc(env('MAIL_USERNAME'))->send(new OrdenDeCompra($request,$order));
        
        return redirect()->route('carrito.close', ['carrito' => $id]);
    }

    public function show(Request $request)
    {
       $order = Order::find($request->id);
       foreach($order->shopping_cart->inShoppingCart as $product){
           $products[] = $product->products;
       }
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
        $order->update(['status' => $request->estatus_order]);
        return back()->with('success', 'Estado de la compra actualizado con exito');
    }

    public function destroy(Order $order)
    {
        $order->delete();
        return back()->with('success', 'Orden de compra eliminada con exito');
    }

    public function updateStock($products)
    {
        foreach ($products as $product) {
            $s = new Stock;
            $stock = $s->where('product_id', $product->product_id)->first();
            $quantity = $stock->quantity - $product->quantity;
            $s->where('product_id', $product->product_id)->update(['quantity' => $quantity]);
        }
    }
}

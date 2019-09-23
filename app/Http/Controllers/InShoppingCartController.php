<?php

namespace App\Http\Controllers;

use App\ShoppingCart;
use App\InShoppingCart;
use App\Stock;
use Illuminate\Http\Request;

class InShoppingCartController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'quantity' => 'required|min:1|',
        ]);

        $stock = Stock::where('product_id',$request->product_id)->first();

        if($stock->quantity < $request->quantity){
            return back()->with('error-cart', 'Cantidad de producto no disponible, por favor seleccione una cantidad menor.');
        }

        $shopping_cart = new ShoppingCart;
        $shopping_cart = $shopping_cart->makeSession();

        InShoppingCart::create([
            "shopping_cart_id" => $shopping_cart->id,
            "product_id" => $request->product_id,
            "quantity" => $request->quantity,
            "price_sale" => $request->price_sale
        ]);

        return redirect("/productos");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @return \Illuminate\Http\Response
     */

    public function destroy(Request $request) {
        InShoppingCart::where('product_id', $request->id)->delete();
        return redirect("/carrito");
    }
}

<?php

namespace App;

use App\ShoppingCart;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class InShoppingCart extends Model
{
    protected $table = 'in_shopping_carts';

    protected $fillable = ["product_id", "shopping_cart_id","quantity","price_sale"];

    public function productsInCart()
    {
        $user = auth()->user();
        if(isset($user)){
            $activeCart = ShoppingCart::where('status','incompleto')->where('user_id',$user->id)->first();
            if(isset($activeCart)){
                $productsInCart = InShoppingCart::where('shopping_cart_id', $activeCart->id)->get();
                return $productsInCart;
            }
            return 0;
        }
        return 0;
    }

    public function productsCart($cart)
    {
        $products = DB::table('in_shopping_carts')->join('products', 'in_shopping_carts.product_id', '=', 'products.id')
                                                    ->where('in_shopping_carts.shopping_cart_id',$cart)
                                                    ->select('in_shopping_carts.*', 'products.title')
                                                    ->get();

        return $products;
    }

    public function totalCart($products)
    {
        foreach ($products as $product){
            $suma[] = $product->price_sale * $product->quantity;
        }

        $total = array_sum($suma);

        return  $total;
    }

   public function products()
   {
       return $this->belongsTo('App\Product', 'product_id', 'id');
   }

     public function shoppingCart()
    {
        return $this->belongsTo('App\ShoppingCart');
    }
}

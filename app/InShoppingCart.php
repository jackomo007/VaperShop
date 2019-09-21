<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InShoppingCart extends Model
{
    protected $table = 'in_shopping_carts';

    protected $fillable = ["product_id", "shopping_cart_id","quantity","price_sale"];

    public function productsInCart()
    {
        $user = auth()->user();
        if(!isset($user)){
            return 0;
        }

        $activeCart = ShoppingCart::where('status','incompleted')->where('custom_id',$user)->first();
        $productsInCart = InShoppingCart::where('shopping_cart_id', $activeCart->id)->count();
        return $productsInCart;
    }
}

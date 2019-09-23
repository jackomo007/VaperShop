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
        if(isset($user)){        
            $activeCart = ShoppingCart::where('status','incompleted')->where('custom_id',$user->id)->first();
            if(isset($activeCart)){
                $productsInCart = InShoppingCart::where('shopping_cart_id', $activeCart->id)->get();
                return $productsInCart;
            }
            return 0;
        }
        return 0;
    }

    public function products()
    {
        return $this->hasMany('App\Product');
    }
}

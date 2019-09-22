<?php

namespace App;

use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;

class ShoppingCart extends Model
{
    protected $table = 'shopping_carts';

    protected $fillable = ['status','custom_id'];

    public function approve(){
        $this->updateCustomIDAndStatus();
    }

    public function generateCustomID(){
        return md5("$this->id $this->update_at");
    }

    public function updateCustomIDAndStatus(){
        $this->status = "approved";
        $this->customid = $this->generateCustomID();
        $this->save();
    }


    public function inShoppingCarts(){
        return $this->hasMany('App\InShoppingCart');
    }

    public function order(){
        return $this->hasOne("App\Order")->first();
    }

    public function total(){
        return $this->products()->sum("pricing");
    }

    public function totalUSD(){
        return $this->products()->sum("pricing") / 100;
    }


    public static function findOrCreateBySessionID($shopping_cart_id){
        if($shopping_cart_id)
            // Buscar el carrito de compras con este ID
            return ShoppingCart::findBySession($shopping_cart_id);
        else
            // Crear un carrito de compras
            return ShoppingCart::createWithoutSession();
    }

    public static function findBySession($shopping_cart_id){
        return ShoppingCart::find($shopping_cart_id);
    }

    public static function createWithoutSession(){
        return ShoppingCart::create([
            "status" => "incompleted",
            "custom_id", Auth::user()->id
        ]);
    }

     public function makeSession(){
        $shopping_cart = ShoppingCart::where('custom_id', auth()->user()->id)
                        ->where('status','incompleted')
                        ->first();

        if(!$shopping_cart){
            $shopping_cart = $this->createWithoutSession();
        }

        return $shopping_cart;
    }
}

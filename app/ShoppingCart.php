<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShoppingCart extends Model
{
    protected $table = 'shopping_carts';

    protected $fillable = ['status','user_id'];

    public function generateCustomID(){
        return md5("$this->id $this->update_at");
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
            "user_id" => auth()->user()->id
        ]);
    }

    public function makeSession(){
        $shopping_cart = $this->getUserCart(auth()->user());

        if(!$shopping_cart){
            $shopping_cart = $this->createWithoutSession();
        }

        return $shopping_cart;
    }

    public function getUserCart($user)
    {
        $shopping_cart = ShoppingCart::where('user_id', $user->id)->where('status','incompleted')->first();

        return $shopping_cart;
    }
    
    public function user()
    {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }

    public function inShoppingCart()
    {
        return $this->hasMany('App\InShoppingCart', 'shopping_cart_id', 'id');
    }

    
    public function order()
    {
        return $this->hasOne('App\Order', 'shopping_cart_id', 'id');
    }
    
}

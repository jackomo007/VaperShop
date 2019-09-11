<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShoppingCart extends Model
{
    // Mass assignment
	protected $fillable = ['status'];
	
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
	
	public function products(){
		return $this->belongsToMany('App\Product', 'in_shopping_carts') ->withPivot('id');
	}
	
	public function order(){
		return $this->hasOne("App\Order")->first();
	}
	
	
	public function productsSize(){
		return $this->products()->count();
	}
	
	public function total(){
		return $this->products()->sum("pricing");
	}
	
	public function totalRs(){
		return $this->inShoppingCarts()->sum("price_sale");
	}
	
	public function totalUSD(){
		return $this->products()->sum("pricing");
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
			"status" => "incompleted"
		]);
	}
}

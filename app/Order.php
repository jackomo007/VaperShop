<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['recipient_name','line1','line2','city','country_code','state','postal_code',
		'email','shopping_cart_id','status','total','guide_number'];
	
	public function sendMail(){
		Mail::to("jeal.code47@gmail.com")->send(new OrderCreated($this));
		//Mail::to($this->email)->send(new OrderCreated());
		
	}
	
	public function sendUpdateMail(){
		Mail::to("jeal.code47@gmail.com")->send(new OrderUpdated($this));
		
	}
	
	public function shoppingCartID(){
		return $this->shopping_cart->customid;
	}
	
	public function scopeLastest($query){
		return $query->orderID()->monthly();
	}
	
	public function scopeOrderID($query){
		return $query->orderBy("id","desc");
	}
	
	public function scopeMonthly($query){
		return $query->whereMonth("created_at","=",date('m'));
	}
	
	public function address(){
		return "$this->line1 $this->line2";
	}
	
	public function shopping_cart(){
		return $this->belongsTo('App\ShoppingCart');
	}
	
	
	public static function totalMonth(){
		return Order::monthly()->sum("total");
	}
	
	public static function totalMonthCount(){
		return Order::monthly()->count();
	}
	
	
	public static function create($shopping_cart){

		
//		$orderData["email"] = $payer->payer_info->email;
//		$orderData["total"] = $shopping_cart->total();
//		$orderData["shopping_cart_id"] = $shopping_cart->id;
		
		
		return Order::create($orderData);
		
	}
}

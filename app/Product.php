<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
		'user_id','title', 'description', 'pricing','extension','sub_category_id'
	];
	
	public function scopeLastest($query){
		return $query->orderBy("id","desc");
    }
    
	public function paypalItem(){
		return \PaypalPayment::item()->setName($this->title)
			->setDescription($this->description)
			->setCurrency('USD')
			->setQuantity(1)
			->setPrice($this->pricing / 100);
	}
}

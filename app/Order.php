<?php

namespace App;

use Illuminate\Support\Facades\Mail;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['shopping_cart_id','total','status'];

    public function shopping_cart()
    {
        return $this->belongsTo('App\ShoppingCart', 'shopping_cart_id', 'id');
    }
}

<?php

namespace App;

use App\Mail\OrderCreated;
use Illuminate\Support\Facades\Mail;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['shopping_cart_id','user_id','total','status'];

    public function sendMail($email){
      Mail::to($email)->send(new OrderCreated($this));
    }

    public function shopping_cart()
    {
        return $this->belongsTo('App\ShoppingCart', 'shopping_cart_id', 'id');
    }
}

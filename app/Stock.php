<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    protected $fillable = ['quantity','product_id'];

    public function products()
    {
        return $this->hasMany('App\Product');
    }
}

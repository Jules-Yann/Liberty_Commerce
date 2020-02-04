<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ShoppingCart extends Model
{
    protected $table = "shopping_cart";

    public function product()
    {
        return $this->hasMany('App\Model\Product');
    }

    public function user()
    {
        return $this->belongsTo('App\Model\User');
    }
}

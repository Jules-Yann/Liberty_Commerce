<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class User extends Model
{
    protected $table = "users";

    public function right()
    {
        return $this->belongsTo('App\Model\Right');
    }

    public function shopping_cart()
    {
        return $this->hasMany('App\Model\ShoppingCart');
    }

    public function getConnectedPeople()
    {
        return count(User::where('id', '=', Auth::user()->id)->get());
    }
}

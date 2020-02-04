<?php

namespace App\Http\Controllers;

use App\Model\Product;
use App\Model\ShoppingCart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class shoppingCartController extends Controller
{
    public function view()
    {
        return view('nav.shoppingCart');
    }
}

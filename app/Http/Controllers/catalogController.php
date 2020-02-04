<?php

namespace App\Http\Controllers;

use App\Model\Product;
use Illuminate\Http\Request;

class catalogController extends Controller
{
    public function index()
    {
        $products = new Product();

        $all_product = $products::all();

        return view('nav.catalog')->withProducts($all_product);
    }
}

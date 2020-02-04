<?php

namespace App\Http\Controllers;

use App\Model\Category;
use App\Model\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show($product)
    {
        $prod = Product::where('id', $product)->firstOrFail();

        return view('nav.product')->withProduct($prod);
    }
}

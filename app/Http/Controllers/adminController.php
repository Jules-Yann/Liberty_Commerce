<?php

namespace App\Http\Controllers;

use App\Model\Category;
use App\Model\Product;
use Illuminate\Http\Request;

class adminController extends Controller
{
    public function index()
    {
        $cats = new Category();

        $all_cat = $cats::all();
        return view('nav.admin')->withCats($all_cat);
    }

    public function storeProd(Request $request)
    {
            $newProd = new Product();

            $newProd->name = ($request->get('name'));
            $newProd->price = ($request->get('price'));
            $newProd->description = ($request->get('description'));
            $newProd->quantity = ($request->get('quantity'));
            $newProd->category_id = ($request->get('category'));
            $newProd->image = $request->file('image');

            $newProd->save();

            return redirect()->route('home');
    }

    public function deleteProd($id)
    {
        product::find($id)->delete();

        return redirect()->route('home');
    }
}

<?php

namespace App\Http\Controllers;

use App\Model\Category;
use App\Model\Product;
use App\Model\Right;
use Illuminate\Http\Request;

class RightController extends Controller
{
    public function create ()
    {
        $right = new Right();

        $right->name = 'admin';
        $right->read = 1;
        $right->wright = 1;
        $right->delete = 1;

        $right->save();

        $viewer = new Right();

        $viewer->name = 'viewer';
        $viewer->read = 1;
        $viewer->wright = 0;
        $viewer->delete = 0;

        $viewer->save();

    }

    public function viewCat()
    {
        return view('nav.category');
    }

    public function createCat(Request $request)
    {
        $cat = new Category();

        $cat->name = ($request->get('name'));

        $cat->save();
        return redirect()->route('admin');
    }
}

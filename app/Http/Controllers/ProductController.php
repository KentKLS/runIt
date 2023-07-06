<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show()
    {
        return view('products-list');
    }

    public function detail()
    {
        return view('product-detail');
    }
}

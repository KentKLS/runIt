<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show()
    {
        $products = DB::select('select * from products');
        return view('products-list', ['products' => $products]);
    }

    public function detail($id)
    {
        $product = DB::table('products')->where('id', $id)->first();
        return view('product-detail',['products' => $product]);

    }

}


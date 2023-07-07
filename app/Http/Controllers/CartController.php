<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;


class CartController extends Controller
{
    public function show($id)
    {
        $product = DB::table('products')->where('id', $id)->first();
        return view('cart',['products' => $product]);

    }
}

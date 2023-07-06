<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function showProducts()
    {
        $products = DB::select('select * from products ');


        return view('products-list',compact('products'));
    }

    public function showProduct($id){

         return view('product-details')
                    ->with('key', $id);
     }
}

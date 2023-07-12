<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show()
    {
        //$products = Product::orderBy('name')->get();
        //$products = Product::orderBy('price','asc')->get();
        $products = Product::all();
        return view('products-list', ['products' => $products]);
    }


    public function detail($id)
    {
        //$product = DB::table('products')->where('id', $id)->first();
        $product = Product::find($id);
        return view('product-detail',['products' => $product]);

    }

    public function chaussures(){
        $products=Product::where('category_id', 1)->get();
        return view('products-list',['products' => $products]);
    }

    public function vetements(){
        $products=Product::where('category_id', 2)->get();
        return view('products-list',['products' => $products]);
    }

    public function electronique(){
        $products=Product::where('category_id', 3)->get();
        return view('products-list',['products' => $products]);
    }

    public function accessoires(){
        $products=Product::where('category_id', 4)->get();
        return view('products-list',['products' => $products]);
    }




}


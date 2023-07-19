<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Category;
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
        if (!$product) {
            return view('404');
        }
        else {
            return view('product-detail', ['products' => $product]);
        }
    }

    public function chaussures(){
        $category=Category::find(1);
        $products=$category->products;
        return view('products-list',['products' => $products]);
    }

    public function vetements(){
        $category=Category::find(2);
        $products=$category->products;
        return view('products-list',['products' => $products]);
    }

    public function electronique(){
        $category=Category::find(3);
        $products=$category->products;
        return view('products-list',['products' => $products]);
    }

    public function accessoires(){
        $category=Category::find(4);
        $products=$category->products;
        return view('products-list',['products' => $products]);
    }


}


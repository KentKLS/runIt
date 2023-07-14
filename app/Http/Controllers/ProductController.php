<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function showProducts()
    {
        $products = Product::all();
        return view('products-list', compact('products'));
    }
    public function showProductsOrderedByName()
    {
        $products = Product::orderBy('name')->get();
        return view('products-list', compact('products'));
    }
    public function showOrderedByGrowingPrice()
    {
        $products = Product::orderBy('price', 'asc')->get();
        return view('products-list', compact('products'));
    }
    public function showCategoryOne()
    {
        $category = Category::find(1);
        $products= $category->products;
        return view('products-list', compact('products'));
    }
    public function showCategoryTwo()
    {
        $category = Category::find(2);
        $products= $category->products;
        return view('products-list', compact('products'));
    }
    public function showCategoryThree()
    {
        $category = Category::find(3);
        $products= $category->products;
        return view('products-list', compact('products'));
    }
    public function showProduct($id)
    {   
        $product = Product::findOrFail($id);
        return view('product-detail', ['product' => $product])->with('key', $id);
    }
}

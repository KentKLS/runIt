<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class BackOfficeController extends Controller
{
    public function index(){

        $products = Product::all();
        return view('home-backoffice',["products"=>$products]);

    }
    public function showCreate(){
        return view('add-product');
    }

    public function create(Request $request){
        $request->validate([
            'name' => 'required|string',
            'price' => 'required|integer|min:0',
            'imgURL' => 'required|string',
            'oneliner' => 'required|string',
            'description' => 'required|string',
            'stock' => 'required|integer',
        ]);
        $product = new Product();
        $product->name = $request->name;
        $product->price = $request->price;
        $product->imgURL = $request->imgURL;
        $product->oneliner = $request->oneliner;
        $product->description = $request->description;
        $product->stock = $request->stock;
        $product->category_id = $request->category_id;
        $product->save();

        return redirect()->route('createCart');
    }

    public function showUpdate(Product $product){
        return view('update-product',['products' => $product]);
    }
    public function update(Request $request ,Product $product){
        $request->validate([
            'name' => 'required|string',
            'price' => 'required|integer|min:0',
            'imgURL' => 'required|string',
            'oneliner' => 'required|string',
            'description' => 'required|string',
            'stock' => 'required|integer',
        ]);
        $product->name = $request->name;
        $product->price = $request->price;
        $product->imgURL = $request->imgURL;
        $product->oneliner = $request->oneliner;
        $product->description = $request->description;
        $product->stock = $request->stock;
        $product->update();
        return redirect()->route('home.backoffice');
    }


    public function destroy(Product $product){
        $product->delete();
        return redirect()->route('home.backoffice');

    }
}

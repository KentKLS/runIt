<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class BackOfficeController extends Controller
{
    public function home(){
        $products = Product::all();
        return view('home-backoffice',["products"=>$products]);
    }
    public function backOffice(){
        return view('add-product');
    }

    public function addProduct(Request $request){
        $product = new Product();
        $product->name = $request->name;
        $product->price = $request->price;
        $product->imgURL = $request->imgURL;
        $product->oneliner = $request->oneliner;
        $product->description = $request->description;
        $product->stock = $request->stock;
        $product->save();
        return redirect('/backoffice/home')->with('status', 'Le produit a bien été ajouté');
    }

    public function updateView($id){
        $product=Product::find($id);
        return view('update-product',['products' => $product]);
    }
    public function updateProduct(Request $request ,$id){
        $product=Product::find($id);
        $product->name = $request->name;
        $product->price = $request->price;
        $product->imgURL = $request->imgURL;
        $product->oneliner = $request->oneliner;
        $product->description = $request->description;
        $product->stock = $request->stock;
        $product->update();
        return redirect("/backoffice/home")->with('status', 'Le produit a bien été mis à jour');
    }

    public function deleteView($id){
        $product=Product::find($id);
        return view('delete-product',['products' => $product]);
    }
    public function deleteProduct($id){
        $product = Product::find($id);
        $product->delete();
        return redirect("/backoffice/home")->with('status', 'Le produit a bien été supprimer');

    }
}

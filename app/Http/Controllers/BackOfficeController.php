<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class BackOfficeController extends Controller
{
    public function backOffice(){
        return view('templates/layout');
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
        return redirect('/run-it.com/backoffice')->with('status', 'Le produit a bien été ajouté');
    }

    public function updateProduct(){

    }
    public function deleteProduct($id){
        $delete = Product::where('id',$id)->delete();
    }
}

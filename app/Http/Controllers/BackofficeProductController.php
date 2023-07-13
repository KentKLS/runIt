<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddProductRequest;
use App\Http\Requests\ModifyProductRequest;
use App\Models\Product;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class BackofficeProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('backoffice.products', compact('products'));
    }
    public function create()
    {
        return view('backoffice.addProduct');
    }
    public function store(AddProductRequest $request)
    {
        $newData = new Product();
        $newData->name = $request->name;
        $newData->price = $request->price;
        $newData->imgURL = $request->image;
        $newData->oneliner = $request->oneliner;
        $newData->description = $request->description;
        $newData->stock = $request->stock;
        $newData->category_id = $request->category_id;
        $newData->save();
        return redirect()->route('product.index')->with('success','Produit ajouté avec succès');
    }
    public function edit(Product $product)
    {
        return view('backoffice.modifyProduct')->with('product', $product);
    }
    public function update(ModifyProductRequest $request,Product $product)
    {
        try{
        $product->name = $request->name;
        $product->price = $request->price;
        $product->imgURL = $request->image;
        $product->oneliner = $request->oneliner;
        $product->description = $request->description;
        $product->stock = $request->stock;
        $product->category_id = $request->category_id;
        $product->save();
        return redirect()->route('product.index')->with('success','Produit modifié avec succès');
        }catch(QueryException $e){
            return redirect()->back()->with('error','Bouhou you gonna cry ?');
        }
    }
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('product.index')->with('delete','Produit supprimé');
    }
}


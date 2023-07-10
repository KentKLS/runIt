<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\addProductRequest;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BackofficeController extends Controller
{
    public function showAddProduct()
    {
        return view('backoffice.addProduct');
    }

    public function showSeeData()
    {

        return view('backoffice.seeData');
    }

    public function showDeleteProduct()
    {
        return view('backoffice.deleteProduct');
    }
    public function showProductToModify(Product $id){
        return view('backoffice.modifyProduct')->with('product',$id);
    }

    public function modifyProduct(Request $request,Product $id){
        $id->name = $request->name;
        $id->price = $request->price;
        $id->imgURL = $request->image;
        $id->oneliner = $request->oneliner;
        $id->description = $request->description;
        $id->stock = $request->stock;
        $id->save();
        return view('backoffice.ModifySuccess');
    }

    public function getData(Request $request)
    {
        $tableName = $request->tableName;
        $data = DB::table(DB::raw("`$tableName`"))->get();
        return view('backoffice.seeData')->with('data', $data);
    }

    public function showProducts()
    {
        $products = Product::all();
        return view('backoffice.products', compact('products'));
    }

    public function addProduct(addProductRequest $request)
    {
        $newData = new Product();
        $newData->name = $request->name;
        $newData->price = $request->price;
        $newData->imgURL = $request->image;
        $newData->oneliner = $request->oneliner;
        $newData->description = $request->description;
        $newData->stock = $request->stock;
        $newData->save();
        return redirect()->back();
    }

    public function deleteProduct(Request $request)
    {
        $product = Product::where('name', $request->name)->delete();
        return redirect()->back();
    }
}

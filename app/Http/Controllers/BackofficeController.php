<?php

namespace App\Http\Controllers;

use App\Http\Requests\addProductRequest;
use App\Models\Product;
use Illuminate\Http\Request;

class BackofficeController extends Controller
{
    public function showAddProduct()
    {
        return view('backoffice.addProduct');

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
}

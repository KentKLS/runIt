<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class BackOfficeCategoryController extends Controller
{
    public function index(){

        $categories = Category::all();
        return view('home-backoffice-category',["categories"=>$categories]);

    }
    public function showCreate(){
        return view('add-category');
    }

    public function create(Request $request){
        $category = new Category();
        $category->name = $request->name;
        $category->save();
        return redirect()->route('home.backoffice.category');
    }

    public function showUpdate(Category $category){
        return view('update-category',['categories' => $category]);
    }
    public function update(Request $request ,Category $category){
        $category->name = $request->name;
        $category->update();
        return redirect()->route('home.backoffice.category');
    }


    public function destroy(Category $category){
        $category->delete();
        return redirect()->route('home.backoffice.category');

    }
}

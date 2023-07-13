<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class BackofficeCategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('backoffice.indexCategory', compact('categories'));
    }
    public function create()
    {
        return view('backoffice.createCategory');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['string','required']
        ]);
        $newData = new Category();
        $newData->name = $request->name;
        $newData->save();
        return redirect()->route('category.index')->with('success','Nouvel Catégorie ajouté avec succès');
    }
    public function edit(Category $category)
    {
        return view('backoffice.updateCategory')->with('category', $category);
    }
    public function update(Request $request,Category $category)
    {
        $request->validate([
            'name' => ['string','required']
        ]);

        $category->name = $request->name;
        $category->save();
        return redirect()->route('category.index')->with('success',"Catégorie $category->id  modifié avec succès");
    }
    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->route('category.index')->with('delete', "Catégorie $category->id supprimé");
    }
}

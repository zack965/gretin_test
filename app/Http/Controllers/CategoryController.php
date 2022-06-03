<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //
    public function CatgoryAll(){
        $categors = Category::all();
        return view("Category.CatgoryAll")->with("categors",$categors);
    }
    public function CreateCategory(){
        return view("Category.CreateCategory");
    }
    public function CreateCategoryPost(Request $request){
        $request->validate([
            "categorie_title"=>"required"
        ]);
        Category::create(["categorie_title"=>$request->categorie_title]);
        return redirect()->route("CatgoryAll");
    }

}

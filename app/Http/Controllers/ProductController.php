<?php

namespace App\Http\Controllers;

use App\Mail\SendOnCreate;
use App\Mail\SendOnDelete;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    //
    public function ProductAll(){
        $product = Product::All();
        return view("Product.ProductAll")->with("product",$product);
    }
    public function CreateProduct(){
        return view("Product.CreateProduct");
    }
    public function CrateProductPost(Request $request){
        $request->validate([
            "product_title" => "required",
            "product_description" => "required",
        ]);
        Product::create([
            "product_title" => $request->product_title,
            "product_description" => $request->product_description,
        ]);
        $name = ['Cloudways'];
        \Mail::to('elhosni.zakaria20@gmail.com')->send(new SendOnCreate($name));
        return redirect()->route("ProductAll");

    }
    public function DeleteProduct(Request $request){
        $request->validate(["product_id"=>"required"]);
        $product = Product::find($request->product_id);
        $product->delete();
        \Mail::to('elhosni.zakaria20@gmail.com')->send(new SendOnDelete());
        return redirect()->route("ProductAll");
    }

}

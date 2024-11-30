<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FrontController extends Controller
{
   public function products(){
    $products = Product::all();
    return view('user.products',compact('products'));
   }

   public function categories(){
    $categories = Category::all();
    return view('user.categories',compact('categories'));
   }

   public function categorizedProducts($id){
    $products = Product::where('category_id' , $id)->get();
    return view('user.cproducts',compact('products'));
   }
}

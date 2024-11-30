<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class ProductController extends Controller
{
    public function index(){
        $products = Product::all();
        return view('product.index',compact('products'));
       }
    
       public function create(){
        $categories = Category::all();
        return view('product.create',compact('categories'));
       }
    
       public function store(Request $request){
            $product = $request->all();
            $product['user_id'] = Auth::user()->id;

            if ($request->hasFile('image')) {
                $file = $request->file('image');
                $originalName = $file->getClientOriginalName();
                $uniqueName = time() . '_' . uniqid() . '_' . $originalName;
                $filePath = $file->move(public_path('product-images'), $uniqueName);
                $product['image'] = $uniqueName;
            }

            Product::create($product);
            return redirect()->route('product.index');
       }
    
       public function edit($id){
        $product = Product::find($id);
        $categories = Category::all();
        return view('product.edit',compact('product','categories'));
       }
    
       
       public function update(Request $request , $id){
            $product_old = Product::find($id);
            $product = $request->all();
            $product['user_id'] = Auth::user()->id;

            if ($request->hasFile('image')) {
                $file = $request->file('image');
                $originalName = $file->getClientOriginalName();
                $uniqueName = time() . '_' . uniqid() . '_' . $originalName;
                $filePath = $file->move(public_path('product-images'), $uniqueName);
                $product['image'] = $uniqueName;
            }

            $product_old->update($product);
            return redirect()->route('product.index');
        }
    
        public function destroy($id)
        {
            $product = Product::find($id);
            $product->delete();
            return redirect()->back();
        }
}

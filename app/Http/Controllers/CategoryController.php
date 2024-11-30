<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{
   public function index(){
    $categories = Category::all();
    return view('category.index',compact('categories'));
   }

   public function create(){
    return view('category.create');
   }

   public function store(Request $request){
    
        $category = $request->all();

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $originalName = $file->getClientOriginalName();
            $uniqueName = time() . '_' . uniqid() . '_' . $originalName;
            $filePath = $file->move(public_path('catimages'), $uniqueName);
            $category['image'] = $uniqueName;
        }
        $category['user_id'] = Auth::user()->id;
        Category::create($category);
        return redirect()->route('category.index');
   }

   public function edit($id){
    $category = Category::find($id);
    return view('category.edit',compact('category'));
   }

   
   public function update(Request $request , $id){
        $category_old = Category::find($id);
        $category = $request->all();

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $originalName = $file->getClientOriginalName();
            $uniqueName = time() . '_' . uniqid() . '_' . $originalName;
            $filePath = $file->move(public_path('catimages'), $uniqueName);
            $category['image'] = $uniqueName;
        }
        $category['user_id'] = Auth::user()->id;
        $category_old->update($category);
        return redirect()->route('category.index');
    }

    public function destroy($id)
    {
        $category = Category::find($id);

        if ($category) {
            if (file_exists(public_path('catimages/' . $category->image))) {
                unlink(public_path('catimages/' . $category->image));
            }
            $category->delete();

            return redirect()->back();
        }
    }

}

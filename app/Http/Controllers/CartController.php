<?php

namespace App\Http\Controllers;
use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function store(Request $request , $id){
        $cart = new Cart();
        $cart->user_id = Auth::user()->id;
        $cart->product_id = $id;
        $cart->save();
        return redirect()->back();
    }

    public function cart(){
        $carts  = Cart::where('user_id' , Auth::user()->id)->get();
        return view('user.cart',compact('carts'));
    }
}

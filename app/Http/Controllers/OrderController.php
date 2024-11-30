<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function store(Request $request , $id){
        $order = new Order();
        $order->user_id = Auth::user()->id;
        $order->product_id = $id;
        $order->save();
        return redirect()->back();
    }

    public function orders(){
        $orders  = Order::where('user_id' , Auth::user()->id)->get();
        return view('user.order',compact('orders'));
    }
}

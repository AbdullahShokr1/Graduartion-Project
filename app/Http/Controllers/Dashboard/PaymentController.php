<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function create(){
        $orders = Cart::whereHas('order')->with('producut')->get();
        return view('front.payment',compact('orders'));
    }

}

<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\Order;
use App\Models\Review;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $user = User::query()->get();
        $user = $user->count();
        $order = Order::query()->get();
        $orders =$order->count();
        $review=Review::query()->get();
        $reviews=$review->count();
        $message =Contact::query()->get();
        $message = $message->count();
        return view('dashboard.dashboard',compact('user','orders','reviews','message'));
    }
}

<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\OrderRequest;
use App\Models\Cart;
use App\Models\Moreinfo;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function index()
    {
        return view("dashboard.order.index",[
            'orders' => Order::with('user','cart','product')->latest()->paginate(10),
        ]);
    }

    public function store(OrderRequest $request)
    {
        $shoppings = $request->shopping_id;

        foreach ($shoppings as $key => $shoppings_value) {
            $devicesS[] = Order::create([
                'shopping_id' => $shoppings_value,
                'status' => "false",
                'user_id' => Auth::user('user')->id,
                'product_id'=>$shoppings_value,
            ]);
        }
        return redirect()->route('payment.create')->with(['success'=>'Product Added Successfully']) ;
    }

    public function destroy(Order $order,$id){
        $order = Order::select()->where('id',$id)->delete();
        return redirect()->route('dashboard.order')->with(['success'=>'Product Deleted Successfully']);
    }

    public function delete($name,$id){
        $order = Order::select()->where('id',$id)->delete();
        return redirect()->route('profile.order',Auth::user('user')->name)->with(['success'=>'Product Deleted Successfully']);
    }



}

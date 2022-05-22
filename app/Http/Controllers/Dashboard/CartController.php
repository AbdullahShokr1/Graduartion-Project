<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\CartRequest;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{

    public function index()
    {
        return view("front.cart",[
            'products'=>Cart::with('producut')->where('user_id','=',Auth::user('user')->id)->whereDoesntHave('order')->get(),
        ]);
    }

    public function store(Cart $cart, CartRequest $request)
    {
        if(route('shop')){
            Cart::create($request->validated());
            return redirect()->route('shop')->with(['success'=>'Message Added Successfully']) ;
        }else{
            Cart::create($request->validated());
            return redirect()->route('home')->with(['success'=>'Message Added Successfully']) ;
        }
    }

    //update Cart && Store in DB
    public function update($id, CartRequest $request){
        $myProduct = Cart::where('id','=',$id)->find($id);
        $myProduct->update($request->validated());
        return redirect()->route('cart.index',Auth::user('user')->name)->with(['success'=>'Category Updated Successfully']) ;
    }

    public function destroy(Cart $cart,$name,$id)
    {
        $cart = Cart::select()->where('id',$id)->delete();
        return redirect()->route('cart.index',Auth::user('user')->name)->with(['success'=>'Product Deleted Successfully']) ;
    }
    public function destroy_all()
    {
        $cart = Cart::where('user_id','=',Auth::user('user')->id)->whereDoesntHave('order')->delete();
        return redirect()->route('cart.index',Auth::user('user')->name)->with(['success'=>'All products have been removed from the basket for all users']) ;
    }

    ################Start Function For Cart Dashboard#######################
    public function show_all()
    {
        return view("dashboard.cart.index",[
            'carts' => Cart::query()->paginate(10),
        ]);
    }
    public function delete(Cart $cart,$id)
    {
        $cart = Cart::select()->where('id',$id)->delete();
        return redirect()->route('dashboard.cart')->with(['success'=>'The product has been successfully removed from the cart']) ;
    }
    public function deleteall()
    {
        $cart = Cart::truncate();
        return redirect()->route('dashboard.cart')->with(['success'=>'All products have been removed from the basket for all users']) ;
    }
}

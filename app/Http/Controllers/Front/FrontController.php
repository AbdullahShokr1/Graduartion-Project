<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateUserRequest;
use App\Models\About;
use App\Models\Cart;
use App\Models\Category;
use App\Models\Moreinfo;
use App\Models\Post;
use App\Models\Product;
use App\Models\SHome;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FrontController extends Controller
{
    public function index()
    {
        $home =SHome::query()->where('id','=',1)->find(1);
        return view("front.home",[
            'products' => Product::take(12)->get(),
            'last_products' => Product::latest()->take(5)->get(),
            'best_products' => Product::inRandomOrder()->limit(8)->get(),
            'abouts' => About::take(5)->get(),

        ],compact('home'));
    }
    public function shop()
    {
        return view("front.shop",[
            'products' => Product::query()->whereDoesntHave('cart')->paginate(12),
        ]);
    }
    public function mirror()
    {
        return view("front.shop",[
            'products' => Product::get(),
        ]);
    }
    public function blog()
    {
        return view("front.blog",[
            'posts' => Post::get(),
            'categories'=> Category::query()->get(),
        ]);
    }
    public function about()
    {
        return view("front.about",[
            'abouts' => About::get(),
        ]);
    }
    public function profile(User $user)
    {
        $user_id = Auth::user('user')->id;
        $myuser = User::with('more_info')->find($user_id);
        return view("front.profile.profile",compact('user','myuser'));
    }
    public function cart()
    {
        $user_id = Auth::user('user')->id;
        $myuser = User::with('more_info')->find($user_id);
        return view("front.cart",compact('myuser'));
    }
}

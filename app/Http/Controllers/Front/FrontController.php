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
            'last_products' => Product::with('review')->latest()->take(5)->get(),
            'best_products' => Product::with('review')->inRandomOrder()->limit(8)->get(),
            'abouts' => About::take(5)->get(),

        ],compact('home'));
    }
    public function shop()
    {
        if(Auth::user('user')){
            $products = Product::query()->whereDoesntHave('cart')->paginate(12);
        }else{
            $products = Product::query()->paginate(12);
        }
        return view("front.shop",compact('products'));
    }
    public function mirror()
    {
        return view("front.mirror");
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
    ################################Start##################################
    ////Controller For Blog =>> Post and Category
    public function blog()
    {
        return view("front.blog",[
            'post' => Post::where('id','=',1)->find(1),
            'posts' => Post::inRandomOrder()->limit(4)->get(),
            'categories'=> Category::query()->get(),
        ]);
    }
    public function category()
    {
        return view("front.category",[
            'categories'=> Category::with('post')->get(),
        ]);
    }
    public function categoryPage($slug){
        $category_id= Category::where('slug','=',$slug)->first();
        $category_id= $category_id->id;
        return view("front.category-page",[
            'posts'=> Post::with('category')->where('category_id','=',$category_id)->get(),
        ],compact('slug'));
    }
    public function post($slug){
        $post = Post::with('category')->where('slug','=',$slug)->first();
        return view("front.post",compact('post'));
    }
    ################################End##################################
//    public function product()
//    {
//        return view("front.shop",[
//            'products' => Product::query()->whereDoesntHave('cart')->paginate(12),
//        ]);
//    }
}

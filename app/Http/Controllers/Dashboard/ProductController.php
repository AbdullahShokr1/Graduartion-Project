<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Review;
use http\Client\Curl\User;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin')->except('show');
    }
    public function index()
    {
        return view("dashboard.products.index",[
            'products' => Product::query()->latest()->paginate(10)
        ],[
            'admins'=> Admin::get(),
        ]);
    }

    public function create()
    {
        return view('dashboard.products.create',[
            'admins'=> Admin::get(),
        ]);
    }

    public function store(StoreProductRequest $request)
    {
        if(($request -> photo) != Null && ($request -> glassesModel) != Null){
            $file_name = $this -> saveImages($request -> photo,'front/images/products');
            $glassesModel_name = $this -> saveGlassesModel($request -> glassesModel,'glasses3D');
        }else{
            $file_name = "Product Photo";
        }
        $my_product = [
            'title' => $request -> title,
            'describe'=> $request -> describe,
            'price'=> $request -> price,
            'photo'=> $file_name,
            'writer_id'=> $request -> writer_id,
            'offer'=>$request -> offer,
            'glassesModel'=>$glassesModel_name,
        ];

        Product::create($my_product,$request->validated());

        return redirect()->route('dashboard.products.index')->with(['success'=>'Product Added Successfully']) ;
    }

    public function edit(Product $product)
    {
        return view('dashboard.products.update',['admins'=> Admin::get(),],compact('product'));
    }

    public function update(StoreProductRequest $request, Product $product)
    {
        if(($request -> photo) != Null && ($request -> glassesModel) != Null){
            $file_name = $this -> saveImages($request -> photo,'front/images/products');
            $glassesModel_name = $this -> saveGlassesModel($request -> glassesModel,'glasses3D');
        }else{
            $file_name = $product -> photo;
        }
        $product->update([
            'title' => $request -> title,
            'description' => $request -> description,
            'price'=> $request -> price,
            'writer_id' => $request -> writer_id,
            'photo'=>$file_name,
            'offer'=>$request -> offer,
            'glassesModel'=>$glassesModel_name,
        ],$request->validated());

        return redirect()->route('dashboard.products.index')->with(['success'=>'Product Updated Successfully']) ;
    }


    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('dashboard.products.index')->with(['success'=>'Product Deleted Successfully']) ;
    }

    protected function saveImages($photo,$folder)
    {
        $file_ex = $photo->getClientOriginalExtension();
        $file_name = time() . '.' . $file_ex;
        $path = $folder;
        $photo->move($path, $file_name);
        return $file_name;
    }

    public function show($id,)
    {
        $product = Product::with('review')->where('id','=',$id)->find($id);
        $review =Review::with('user')->where('product_id','=',$id)->get();
        if(Auth::user('user')){
            $check =Review::with('User')->where('user_id','=',Auth::user('user')->id)->where('product_id','=',$id)->first();
        }else{
            $check="";
        }

        if($product){
            return view("front.product",compact('product','review','check'));

        }else{
            return redirect()->route('shop');
        }
    }

    ///To Save Glasses Model
    protected function saveGlassesModel($photo,$folder)
    {
        $file_ex = $photo->getClientOriginalExtension();
//        $file_name = $photo . $file_ex;
        $file_name = time() . '.' . $file_ex;
        $path = $folder;
        $photo->move($path, $file_name);
        return $file_name;
    }
}

<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\ReviewsRequest;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReviewsController extends Controller
{
    //Show all Categories
    public function index(){
        return view('dashboard.review.index',[
            'reviews'=>Review::with('product','User')->get(),
        ]);
    }

    //Store new Category in DB
    public function store($id,ReviewsRequest $request){
        Review::create($request->validated());
        return redirect()->route('product',$id)->with(['success'=>'Review Added Successfully']) ;

    }

    //update Category && Store in DB
    public function update($id,ReviewsRequest $request){
        $review= Review::where('user_id','=',Auth::user('user')->id)->first();
        $review->update($request->validated());

        return redirect()->route('product',$id)->with(['success'=>'Review Updated Successfully']) ;
    }

    //update Category && Store in DB
    public function destroy($id){
        $review = Review::where('id','=',$id)->find($id);
        $review->delete();
        return redirect()->route('dashboard.review')->with(['success'=>'Review Deleted Successfully']) ;
    }
}

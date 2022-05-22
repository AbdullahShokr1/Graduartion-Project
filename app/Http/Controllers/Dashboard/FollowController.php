<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\FollowRequest;
use App\Models\Follow;

class FollowController extends Controller
{
    public function index(){
        return view('dashboard.followers.index',[
            'follows' => Follow::query()->paginate(10),
        ]);
    }
    public function create(){
        return view('front.home');
    }
    //Store new Candidate in DB
    public function store(FollowRequest $request){
        Follow::create($request->validated());

        return redirect()->route('home')->with(['success'=>'New Follower make Subscribe']) ;
    }
    public function destroy(Follow $follow,$id){
        $follow = Follow::select()->where('id',$id)->delete();
        return redirect()->route('dashboard.contact')->with(['success'=>'Follower Deleted Successfully']) ;
    }
}

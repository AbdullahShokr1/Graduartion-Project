<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\More_InfoRequest;
use App\Http\Requests\ProfileRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Models\Cart;
use App\Models\Moreinfo;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class MoreInfoController extends Controller
{
    public function create(Moreinfo $info){
        $user_id = Auth::user('user')->id;
        $myuser = User::with('more_info')->find($user_id);
        $user_id = Auth::user('user')->id;
        return view('front.profile.create',compact('myuser','user_id'));
    }
    //Store new User in DB
    public function store(More_InfoRequest $request){

        Moreinfo::create($request->validated());

        return redirect()->route('profile',Auth::user('user')->name)->with(['success'=>'Admin Added Successfully']) ;
    }

    public function edit(Moreinfo $info){
        $user_id = Auth::user('user')->id;
        $myuser = User::with('more_info')->find($user_id);
        $info_id = $myuser->more_info->id;
        $moreinfo = Moreinfo::where('user_id','=',$user_id)->find($info_id);
        return view('front.profile.update',compact('moreinfo','myuser'));
    }
    //update User && Store in DB
    public function update(More_InfoRequest $request){
        $user_id = Auth::user('user')->id;
        $myuser = User::with('more_info')->find($user_id);
        $info_id = $myuser->more_info->id;
        $moreinfo = Moreinfo::where('user_id','=',$user_id)->find($info_id);
        $moreinfo->update($request->validated());
        return redirect()->route('profile',Auth::user('user')->name)->with(['success'=>'admins Updated Successfully']) ;
    }
    ///Edit Main User
    /// ###############################
    //Edit User
    public function editMyUser(User $user){
        $id=Auth::user('user')->id;
        $myuser = User::with('more_info')->find($id);
        return view('front.profile.change',compact('myuser'));
    }
    //update User && Store in DB
    public function updateMyUser(User $user,ProfileRequest $request){
        $id=Auth::user('user')->id;
        $myuser = User::with('more_info')->find($id);

        if(($request -> photo) != Null){
            $file_name = $this -> saveImages($request -> photo,'front/images/users');
        }else{
            $file_name = $user -> photo;
        }
        $myuser->update([
            'name' => $request -> name,
            'email'=> $request -> email,
            'password'=> $request -> password,
            'photo'=> $file_name,
        ],$request->validated());

        return redirect()->route('profile',Auth::user('user')->name)->with(['success'=>'User Updated Successfully']) ;
    }
    protected function saveImages($photo,$folder)
    {
        $file_ex = $photo->getClientOriginalExtension();
        $file_name = time() . '.' . $file_ex;
        $path = $folder;
        $photo->move($path, $file_name);
        return $file_name;
    }
    public function order(){
        $orders = Cart::whereHas('order')->with('producut')->get();
        $id=Auth::user('user')->id;
        $myuser = User::with('more_info')->find($id);
        return view('front.profile.order',compact('myuser','orders'));
    }
}

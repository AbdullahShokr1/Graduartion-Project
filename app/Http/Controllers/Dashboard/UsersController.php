<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateUserRequest;
use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index(){
        return view('dashboard.users.index',[
            'users' =>User::get(),
        ]);
    }
    public function create(){
        return view('dashboard.users.create');
    }
    //Store new User in DB
    public function store(UserRequest $request){

        if(($request -> photo) != Null){
            $file_name = $this -> saveImages($request -> photo,'front/images/users');
        }else{
            $file_name = "User_Photo";
        }
        $my_users = [
            'name' => $request -> name,
            'email'=> $request -> email,
            'password'=> $request -> password,
            'photo'=> $file_name,
        ];

        User::create($my_users,$request->validated());

        return redirect()->route('dashboard.users.index')->with(['success'=>'User Added Successfully']) ;
    }
    //Edit User
    public function edit(User $user){
        return view('dashboard.users.update',compact('user'));
    }
    //update User && Store in DB
    public function update(User $user,UpdateUserRequest $request){

        if(($request -> photo) != Null){
            $file_name = $this -> saveImages($request -> photo,'front/images/users');
        }else{
            $file_name = $user -> photo;
        }
        $user->update([
            'name' => $request -> name,
            'email'=> $request -> email,
            'password'=> $request -> password,
            'photo'=> $file_name,
        ],$request->validated());

        return redirect()->route('dashboard.users.index')->with(['success'=>'User Updated Successfully']) ;
    }
    //update User && Store in DB
    public function destroy(User $user){
        $user->delete();
        return redirect()->route('dashboard.users.index')->with(['success'=>'User Deleted Successfully']) ;
    }
    protected function saveImages($photo,$folder)
    {
        $file_ex = $photo->getClientOriginalExtension();
        $file_name = time() . '.' . $file_ex;
        $path = $folder;
        $photo->move($path, $file_name);
        return $file_name;
    }
}

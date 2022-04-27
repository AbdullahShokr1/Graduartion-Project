<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class FacebookController extends Controller
{
    public function redirect(){
        return Socialite::driver('facebook')->redirect();
    }
    public function callback(){
        $user = Socialite::driver('facebook')->user();
        $user = User::firstOrCreate(
            ['facebook_id'=> $user->id],
            [
                'name' => $user->name,
                'email' => $user->email,
            ]);
        Auth::login($user);
        return redirect("/");
    }
}

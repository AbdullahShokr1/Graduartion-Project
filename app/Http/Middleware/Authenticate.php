<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Support\Facades\Auth;


class Authenticate extends Middleware
{
    protected function redirectTo($request)
    {
        if (! $request->expectsJson()) {
            if ($request->routeIs('dashboard.*')) {
                return route('dashboard.login');
            }else{
                return route('login');
            }
        }
//        if (! $request->expectsJson()) {
//            return route('login');
//        }

    }
}

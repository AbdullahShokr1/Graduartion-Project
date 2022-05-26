<?php

namespace App\Http\Middleware;

use App\Models\Admin;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Marketer
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if(Auth::guard('admin')){
            $admin_id = $request->user('admin')->id;
            $admin = Admin::find($admin_id);
            if($admin->privileges == 2 || $admin->privileges == 0){
                return $next($request);
            }else{
                return redirect()->route('dashboard.home');
            }
        }else{
            return redirect()->route('dashboard.login');
        }
    }
}

<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('front.home');
});

Route::get('/user', function () {
    return view('dashboard');
})->middleware(['auth'])->name('user');

Route::namespace("Dashboard")->group(function(){
    Route::get("contact",'ContactController@create');
});


Route::namespace("Auth")->group(function(){
    Route::get("auth/redirect","FacebookController@redirect")->name('facebook.redirect');
    Route::get("auth/callback","FacebookController@callback")->name('facebook.callback');
});

require __DIR__.'/auth.php';


<?php

use App\Http\Controllers\Dashboard\AdminsController;
use App\Http\Controllers\Dashboard\CategoryController;
use App\Http\Controllers\Dashboard\ContactController;
use App\Http\Controllers\Dashboard\PostController;
use App\Http\Controllers\Dashboard\ProductController;
use App\Http\Controllers\Dashboard\UsersController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Dashboard Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::namespace("Dashboard")->prefix("dashboard")->name("dashboard.")->group(function(){
    Route::middleware(['auth:admin'])->group(function(){
        Route::get("/","DashboardController@index")->name('home');
        Route::resource("users",UsersController::class);
        Route::resource("admins",AdminsController::class);
        Route::resource("products",ProductController::class);
        Route::resource("contact",ContactController::class);
        Route::resource("category", CategoryController::class);
        Route::resource('post', PostController::class);
        //Route::get("contact","ContactController@show")->name('mycontact');
        //Route::get("contact/{id}","ContactController@showdetial")->name('showmessg');
        //Route::get("contact/delete/{id}","ContactController@destroy")->name('delcontact');
        //Route::get("candidate","CandidateController@show")->name('mycandidate');
        //Route::get("candidate/delete/{id}","CandidateController@destroy")->name('delcandidate');
    });
});
//Route::namespace("Dashboard")->group(function(){
//    Route::get("/candidates","CandidateController@index")->name('candidate');
//    Route::post("/candidates","CandidateController@store")->name('sendcandidate');
//    Route::get("/contact","ContactController@index")->name('contact');
//    Route::post("/contact","ContactController@store")->name('sendcontact');
//});
require __DIR__.'/admin.php';

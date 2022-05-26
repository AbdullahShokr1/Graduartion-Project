<?php

use App\Http\Controllers\Dashboard\AboutController;
use App\Http\Controllers\Dashboard\AdminsController;
use App\Http\Controllers\Dashboard\CategoryController;
use App\Http\Controllers\Dashboard\PostController;
use App\Http\Controllers\Dashboard\ProductController;
use App\Http\Controllers\Dashboard\UsersController;
use App\Models\Admin;
use Illuminate\Support\Facades\Auth;
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
        Route::middleware('developer')->group(function(){
            Route::resource("users",UsersController::class,['except' => [ 'show' ]]);
            Route::resource("admins",AdminsController::class,['except' => [ 'show' ]]);
            ///Start Home Page setting Route
            Route::get('/settings/home', 'SHomeController@index')->name('home.index');
            Route::get('/settings/home/edit', 'SHomeController@edit')->name('home.edit');
            Route::put('/settings/home/update', 'SHomeController@update')->name('home.update');
            ///End Home Page setting Route
            Route::resource('/settings/about', AboutController::class,['except' => [ 'show' ]]);
        });
        Route::middleware('writer')->group(function(){
            Route::resource("category", CategoryController::class,['except' => [ 'show' ]]);
            Route::resource('post', PostController::class,['except' => [ 'show' ]]);
        });
        Route::middleware('marketer')->group(function(){
            Route::resource("products",ProductController::class,['except' => [ 'show' ]]);
            //Contact us just here show & delete messages destroy
            Route::get("contact","ContactController@index")->name('contact');
            Route::get("contact/{id}","ContactController@show")->name('show-message');
            Route::delete("contact/delete/{id}","ContactController@destroy")->name('delete-contact');
            //Follower  just here show & delete Followers
            Route::get("follow","FollowController@index")->name('follow');
            Route::delete("follow/delete/{id}","FollowController@destroy")->name('delete-follow');
            /// Start Order Route
            Route::get("order","OrderController@index")->name('order');
            Route::delete("order/delete/{id}","OrderController@destroy")->name('order-del');
            ///End Order Route
            ////######################Start Route for Cart in Dashboard##########################
            Route::get('cart', 'CartController@show_all')->name('cart');
            Route::delete('cart/delete/{id}', 'CartController@delete')->name('cart.delete');
            Route::get('cart/delete/all', 'CartController@deleteall')->name('cart.deleteall');
            ////######################End Route for Cart in Dashboard############################
            Route::get('review', 'ReviewsController@index')->name('review');
            Route::delete('review/{id}/delete', 'ReviewsController@destroy')->name('review.delete');
        });
        Route::get("profile/{name}/",'AdminsController@show')->name('admin.profile');
    });
});

Route::namespace("Dashboard")->group(function(){
    //Contact us just here to create & store data of messages in DB
    Route::get("contact","ContactController@create")->name('contact');
    Route::post("contact","ContactController@store")->name('store-contact');
    //Follow us just here to create & store data of followers in DB
    Route::post("follow","FollowController@store")->name('store-follow');
    /// Start Order Route
    Route::get("order","OrderController@create")->name('order');
    Route::post("order","OrderController@store")->name('order-store');
    ///End Order Route
});
require __DIR__.'/admin.php';

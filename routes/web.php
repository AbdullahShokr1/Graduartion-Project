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
Route::namespace("Front")->group(function(){
    //Contact us just here to create & store data of messages in DB
    Route::get("/","FrontController@index")->name('home');
    Route::get("/shop","FrontController@shop")->name('shop');
    Route::get("/about","FrontController@about")->name('about');
    Route::get("/blog","FrontController@blog")->name('blog');
    Route::get("/blog/{title}","FrontController@about")->name('my-post');
});

//Route By Middleware Auth
Route::namespace("Front")->group(function(){
    Route::middleware(['auth'])->group(function(){
        Route::get("/profile/{name}","FrontController@profile")->name('profile');
    });
});
Route::middleware(['auth'])->namespace("Dashboard")->prefix("/profile/{name}")->group(function(){
    Route::get('create','MoreInfoController@create')->name('profile.create');
    Route::post('store','MoreInfoController@store')->name('profile.store');
    Route::get('edit/{id}','MoreInfoController@edit')->name('profile.edit');
    Route::put('update/{id}','MoreInfoController@update')->name('profile.update');
    ///Edit Main User
    Route::get('edit/my/{id}','MoreInfoController@editMyUser')->name('profile.editMyUser');
    Route::put('update/my/{id}','MoreInfoController@updateMyUser')->name('profile.updateMyUser');
    ///Route for Orders And Status
    Route::get('order','MoreInfoController@order')->name('profile.order');
    Route::delete("order/delete/{id}","OrderController@delete")->name('order-delete');
});

////######################Start Route for Cart in Dashboard##########################
///
Route::middleware(['auth'])->namespace("Dashboard")->prefix("/cart/{name}")->name("cart.")->group(function(){
    Route::get('/', 'CartController@index')->name('index');
    Route::delete('/destroy/{id}', 'CartController@destroy')->name('destroy');
    Route::get('/destroy/all', 'CartController@destroy_all')->name('destroy-all');
});
Route::middleware(['auth'])->namespace("Dashboard")->name("cart.")->group(function(){
    Route::post('cart/add/{id}', 'CartController@store')->name('store');
    Route::put('cart/update/{id}', 'CartController@update')->name('update');
});
////######################End Route for Cart in Dashboard############################

////######################Start Route for Payment in Front##########################

Route::middleware(['auth'])->namespace("Dashboard")->prefix("/payment")->name("payment.")->group(function(){
    Route::get('/', 'PaymentController@create')->name('create');
});
////######################End Route for Payment in Front############################

//Route::get('/', function () {
//    return view('front.home');
//})->name('home');

//Route::get('/about', function () {
//    return view('front.about');
//})->name('about');

Route::get('/user', function () {
    return view('dashboard');
})->middleware(['auth'])->name('user');

//Route::namespace("Dashboard")->group(function(){
//    Route::get("contact",'ContactController@create');
//});

////test
Route::get('/post', function () {
    return view('front.post');
});

/////////////Dont forget to delete this route and also delete function from controller
Route::namespace("Dashboard")->group(function(){
    Route::get('/product/{id}', 'ProductController@show')->name('product');

    Route::get('/test', 'CartController@test');
});

///Route for Blog >>>>> Post and Categories
//Route::get('/blog/category', 'CategoryController@showall');
//Route::namespace("Dashboard")->prefix("/blog")->name("blog.")->group(function(){
//
//
//});



Route::namespace("Auth")->group(function(){
    Route::get("auth/redirect","FacebookController@redirect")->name('facebook.redirect');
    Route::get("auth/callback","FacebookController@callback")->name('facebook.callback');
});

require __DIR__.'/auth.php';


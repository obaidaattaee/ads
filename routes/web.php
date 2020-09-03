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

Auth::routes();
Route::get("/singleAd",'FrontEnd\HomeController@adSingle')->name("listings");
Route::get("/",'FrontEnd\HomeController@index')->name("home-view");

<<<<<<< HEAD
Route::get('/', function () {
    return view('website.index');
});
Route::get('ads', function () {
    return view('website.ads');
});
=======

Route::post("/contactus",'FrontEnd\HomeController@postContact')->name("contactus");
Route::get("/contact",'FrontEnd\HomeController@contactme')->name("contact");

Route::get("/about",'FrontEnd\HomeController@about')->name("about");
Route::get("/contact",'FrontEnd\HomeController@contact')->name("contact");
Route::get("/blog",'FrontEnd\HomeController@blog')->name("blog");
>>>>>>> 9a50fa6b5a00e9c9b719fb2feda03aeef7627159


Route::prefix('admin')->namespace("Admin")->middleware('auth')->group(function () {
    Route::get('home' , function(){return view('dashboard.layouts.app');})->middleware('isadmin');
    Route::resource("categories",'CategoryController');
    Route::resource("comments",'CommentController');
    Route::resource("about",'AboutController');
    Route::resource("post",'PostController');
    Route::get("post/delete/{id}",'PostController@destroy')->name('post.delete');
    Route::resource('products' , 'ProductController');
    Route::get("contact_me",'ContactMeController@index')->name('contactme');


Route::get("settings",'SettingController@setting')->name('settings');
Route::post("settings",'SettingController@store')->name('post-settings');


});

Route::get('/home', 'HomeController@index')->name('home');
Route::post('postnewslatteremail' , 'Admin\NewsletterController@create')->name('post.email');


Route::get('/home', 'HomeController@index')->name('home');

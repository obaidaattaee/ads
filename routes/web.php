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
    return view('website.index');
});
Route::prefix('admin')->namespace('Admin')->middleware('auth')->group(function (){
    Route::get('home' , function(){
        return view('dashboard.layouts.app');
    });
    Route::resource('products' , 'ProductController');
//    Route::post('products/{product}/update' , 'ProductController@update')->name('product.update');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('postnewslatteremail' , 'Admin\NewsletterController@create')->name('post.email');

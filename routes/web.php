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
Route::group(['middleware'=>'web'],function(){
    Route::get('/', 'HomeController@index')->name('home');
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/faq', 'HomeController@faq')->name('faq');

    //redirect
    Route::get('contact', 'HomeController@contact')->name('homecontact');
    Route::get('/post/{posts}', 'HomeController@posting')->name('post');


    Route::group(['middleware' => 'role:Admin', 'prefix' => 'admin'], function() {
        Route::get('/posting', 'AdminController@posting')->name('posting');
        Route::get('/listing', 'AdminController@listing')->name('list');
        Route::get('/updates', 'AdminController@updates')->name('updates');
        Route::get('/destroy/{contacts}', 'AdminController@destroy')->name('destroy');
    });
});



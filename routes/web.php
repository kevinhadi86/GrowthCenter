<?php

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

Route::group(['namespace' => "Client"], function() {
    Route::get('/', 'HomeController@home')->name('home');
    Route::get('/contact-us', 'ContactUsController@page')->name('contact-us');
    Route::get('/about-us', "AboutUsController@page")->name("about-us");
});


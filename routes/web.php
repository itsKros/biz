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



Route::get('/', 'HomeController@index')->name('home');
Route::get('/pricing', 'HomeController@pricing')->name('pricing');
// /Route::post('/subscribe/{{status}}', 'Subscription@subscribe')->name('subscribe');

Auth::routes();
Route::resource('listings','ListingsController');

Route::get('/my-account', 'HomeController@myaccount')->name('my-account');
Route::get('/admin', 'AdminController@index')->middleware('admin');

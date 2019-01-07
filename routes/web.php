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

Auth::routes();

Route::get('/', function () {
    return view('site/home');
})->name('site_home');


Route::group(['prefix'=>'admin','as'=>'admin.'],function (){
    Route::get('/', 'AdminController@index')->middleware('is_admin')->name('index');
    Route::get('/login', 'AdminController@login')->middleware('is_admin')->name('login');
});





Route::get('/home', 'HomeController@index')->name('home');


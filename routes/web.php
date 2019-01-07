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
    Route::get('/', 'AdminController@index')->middleware('is_admin')->name('admin');
    Route::get('/users/create','UserController@create')->name('user.create');
    Route::post('/users','UserController@store')->name('user.store');
    Route::get('/users/{id}','UserController@show')->where(['id'=>'[0-9]+'])->name('user.show');
    Route::put('/users/{id}','UserController@update')->name('user.update');
    Route::delete('/users/{id}','UserController@delete')->name('user.delete');
});





Route::get('/home', 'HomeController@index')->name('home');


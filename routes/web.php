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

Route::get('/admin', function () {
    return view('admin/welcome');
});
Route::get('/admin', 'AdminController@admin')
    ->middleware('is_admin')
    ->name('admin');



Route::get('/home', 'HomeController@index')->name('home');


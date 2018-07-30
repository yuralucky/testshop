\<?php

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

Route::get('/', 'MainController@index');
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/phones','MainController@phones');
Route::get('/tablets','MainController@tablets');
Route::get('/laptops','MainController@laptops');
Route::get('/phones/{device}','MainController@single');
Route::get('/admin',function() {
    return view('admin.adminka');
});
Route::get('user',function(){
    return Auth::user()->name;
});
Route::get('/test',function(){
    return view('admin.layouts.app_admin');
});
Route::get('/single1',function(){
    return view('categories');
});
Route::resource('category','AdminCategoryController');
Route::resource('device','AdminDeviceController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

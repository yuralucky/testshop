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
Route::get('/categ',function (){
    return view('categories1');
});
Route::get('single1',function(){
    return view('single1');
});
Route::get('/single', function () {
    return view('single_item');
});
Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => ['auth']], function () {
    Route::get('/', 'DashboardController@dashboard')->name('admin.index');

});
Route::resource('category','AdminCategoryController');
Route::resource('device','AdminDeviceController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

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
Route::get('/phones', 'MainController@phones');
Route::get('/phonesByName', 'MainController@phonesByName');
Route::get('/phonesByPrice', 'MainController@phonesByPrice');
Route::get('/tablets', 'MainController@tablets');
Route::get('/tabletsByName', 'MainController@tabletsByName');
Route::get('/tabletsByPrice', 'MainController@tabletsByPrice');
Route::get('/laptops', 'MainController@laptops');
Route::get('/laptopsByName', 'MainController@laptopsByName');
Route::get('/laptopsByPrice', 'MainController@laptopsByPrice');
Route::get('/phones/{phone}', 'MainController@single_phone');
Route::get('/laptops/{laptop}', 'MainController@single_laptop');
Route::get('/tablets/{tablet}', 'MainController@single_tablet');

Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function () {
    Route::resource('category', 'AdminCategoryController');
    Route::resource('device', 'AdminDeviceController');
    Route::resource('phone', 'AdminPhoneController');
    Route::resource('tablet', 'AdminTabletController');
    Route::resource('laptop', 'AdminLaptopController');
    Route::get('users', 'MainController@showUsers');
    Route::get('/', function () {
        return view('admin.adminka');
    });
});
Route::get('upload','MainController@upload');
Route::post('upload','MainController@uploadImage');

Route::get('user', function () {
    return Auth::user()->name;
});
Auth::routes();



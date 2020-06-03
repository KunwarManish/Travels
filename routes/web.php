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
    return view('index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/aboutus', 'HomeController@about')->name('about');
Route::get('/offers', 'HomeController@offers')->name('offers');
Route::get('/blog', 'HomeController@blog')->name('blog');
Route::get('/contact', 'HomeController@contact')->name('contact');
Route::post('/search','HotelController@search')->name('search');
Route::get('/hotel-details/{id}','HotelController@details');



// Admin
Auth::routes(['register'=>false]);
Route::group(['prefix'=>'admin','middleware'=>['auth','admin']],function ()
{
    Route::get('/', 'AdminController@index')->name('admin_home');
    Route::get('/user','AdminController@registered')->name('admin.user'); 
    Route::get('/edit/{id}','AdminController@registeredit')->name('admin.editUser');
    Route::put('/update/{id}','AdminController@registerupdate');
    Route::get('/delete/{id}','AdminController@registerdelete')->name('admin.deleteUser');

    Route::get('/hotel','HotelController@index')->name('admin.hotel');
    Route::post('/save-hotel','HotelController@store')->name('admin.save-hotel');
    Route::get('/hotel/{id}','HotelController@edit')->name('admin.edithotel');


    Route::put('/hotel-update/{id}','HotelController@update');
    Route::delete('/hotel-delete/{id}','HotelController@delete')->name('admin.deletehotel');
});


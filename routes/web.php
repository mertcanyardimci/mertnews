<?php

use App\Http\Controllers;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;

/*
Front Routes
*/
Route::get('/','App\Http\Controllers\front\HomepageController@index')->name('homepage');
Route::get('/new/{id}','App\Http\Controllers\front\HomepageController@single')->name('new.single');
Route::get('/kategori/{category}','App\Http\Controllers\front\HomepageController@category')->name('category');
Route::get('/about','App\Http\Controllers\front\AboutController@about')->name('about');
Route::get('/news','App\Http\Controllers\front\NewsController@news')->name('news');
Route::get('/travel','App\Http\Controllers\front\TravelController@travel')->name('travel');
Route::get('/contact','App\Http\Controllers\front\ContactController@contact')->name('contact');
Route::post('/contact','App\Http\Controllers\front\ContactController@contactpost')->name('contact.post');


/*
Back Routes
*/

Route::prefix('admin')->name('admin.')->middleware('isLogin')->group(function(){
   Route::get('login','App\Http\Controllers\back\loginController@login')->name('login');
   Route::post('login','App\Http\Controllers\back\loginController@loginpost')->name('login.post');
});

Route::prefix('admin')->name('admin.')->middleware('isAdmin')->group(function(){
    Route::get('/','App\Http\Controllers\back\AdminController@index')->name('dashboard');
    Route::resource('haberler','App\Http\Controllers\back\NewsController');
    Route::post('haberler/delete','App\Http\Controllers\back\NewsController@delete')->name('delete.news');
    Route::get('cikis','App\Http\Controllers\back\LoginController@logout')->name('logout');
    Route::get('/kategoriler','App\Http\Controllers\back\CategoryController@index')->name('categories.index');
    Route::post('kategoriler/create','App\Http\Controllers\back\CategoryController@create')->name('categories.create');
    Route::post('kategoriler/update','App\Http\Controllers\back\CategoryController@update')->name('categories.update');
    Route::post('kategoriler/delete','App\Http\Controllers\back\CategoryController@delete')->name('categories.delete');
    Route::get('/kategoriler/edit','App\Http\Controllers\back\CategoryController@getData')->name('categories.getdata');
    Route::get('/yazars','App\Http\Controllers\back\YazarController@index')->name('yazars.index');
    Route::post('yazars/create','App\Http\Controllers\back\YazarController@create')->name('yazars.create');
    Route::get('/yazars/edit','App\Http\Controllers\back\YazarController@getData')->name('yazars.getdata');
    Route::post('yazars/update','App\Http\Controllers\back\YazarController@update')->name('yazars.update');
    Route::post('yazars/delete','App\Http\Controllers\back\YazarController@delete')->name('yazars.delete');
 
 });



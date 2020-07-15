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

Route::get('/', 'HomeController@index')->name('index');


Route::group(['prefix'=> 'news'], function (){
    Route::get('/categoriesItem/{slug}', 'NewsController@categoriesItem')->name('news.categoriesItem');
    Route::get('/news/{news}', 'NewsController@news')->name('news.news');
    Route::get('/authorization', 'NewsController@authorization')->name('news.authorization');
});

Route::group(['prefix'=> 'admin'], function (){
    Route::get('/', 'Admin\AdminController@admin')->name('admin');
    Route::get('/adding', 'Admin\AdminController@adding')->name('admin.adding');
});

Route::group(['prefix' => 'form'], function (){
    Route::get('/feedback', 'FormController@feedback')->name('form.feedback');
    Route::get('/uploading', 'FormController@uploading')->name('form.uploading');
    Route::put('/feedback', 'FormController@feedbackAdd')->name('form.feedbackAdd');
    Route::put('/uploading', 'FormController@uploadingAdd')->name('form.uploadingAdd');
});

Auth::routes();


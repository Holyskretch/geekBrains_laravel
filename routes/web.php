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

Route::get('/', 'NewsController@index')->name('index');


Route::group(['prefix'=> 'news'], function (){
    Route::get('/categoriesItem/{categoryId}', 'NewsController@categoriesItem')
            ->where('categoryId', '\d+')->name('news.categoriesItem');
    Route::get('/news/{id}', 'NewsController@news')
        ->where('id', '\d+')->name('news.news');
    Route::get('/authorization', 'NewsController@authorization')->name('news.authorization');
});

Route::group(['prefix'=> 'admin'], function (){
    Route::get('/', 'Admin\AdminController@admin')->name('admin');
    Route::get('/adding', 'Admin\AdminController@adding')->name('admin.adding');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

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
})->name('index');


Route::group(['prefix'=> 'news'], function (){
    //Route::get('/', 'NewsController@index')->name('news');
    Route::get('/categories', 'NewsController@categories')->name('news.categories');
    Route::get('/categoriesItem/{category}', 'NewsController@categoriesItem')
            ->where('category', '[\w+]')->name('news.categoriesItem');
    //Route::get('/news', 'NewsController@news')->name('news.news');
    Route::get('/authorization', 'NewsController@authorization')->name('news.authorization');
});

Route::group(['prefix'=> 'admin'], function (){
    Route::get('/admin', 'Admin\AdminController@index')->name('admin');
    Route::get('/admin/adding', 'Admin\AdminController@adding')->name('admin.adding');
});

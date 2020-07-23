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
});

Route::group(['middleware' => 'auth'], function(){
    Route::get('logout', function (){
        Auth::logout();
        return redirect('/login');
    });
    //account
    Route::get('/account', 'Account\IndexController@index')->name('account');
    //admin
    Route::group(['prefix'=> 'admin', 'middleware' => 'admin'], function (){
        Route::get('/', 'Admin\AdminController@admin')->name('admin');
        Route::resource('/categories', Admin\CategoryController::class);
        Route::resource('/news', Admin\NewsController::class);
        Route::resource('/users', Admin\UserController::class);
        //Route::get('/Users', 'Admin\AdminController@users')->name('admin.users');
        //Route::get('/editUser', 'Admin\AdminController@editUser')->name('admin.editUser');
    });
});

Route::group(['prefix' => 'form'], function (){
    Route::get('/feedback', 'FormController@feedback')->name('form.feedback');
    Route::get('/uploading', 'FormController@uploading')->name('form.uploading');
    Route::put('/feedback', 'FormController@feedbackAdd')->name('form.feedbackAdd');
    Route::put('/uploading', 'FormController@uploadingAdd')->name('form.uploadingAdd');
});

Auth::routes();


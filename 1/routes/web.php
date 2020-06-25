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

Route::get('/first.php', function () {
    include_once "resources/views/firstTest.php";
});


Route::get('/second.php', function () {
    include_once "resources/views/secondTest.php";
});

Route::get('/third.php', function () {
    include_once "resources/views/thirdTest.php";
});

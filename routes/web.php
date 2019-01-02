<?php

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
    return view('welcome');
});


Route::resource('admin/index','admin\IndexController');






























//用户控制器
Route::resource('admin/users','admin\UsersController');

// 轮播图控制
Route::resource('admin/slideshow','admin\SlideshowController');















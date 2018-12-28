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
Route::resource('admin/users','admin\UsersController');















































































//会馆列表
Route::resource('admin/club','admin\ClubController');
//添加详情提交
Route::post('admin/club/add/{id}','admin\ClubController@add');
//查看详情
Route::get('admin/club/details/{id}','admin\ClubController@details');

//会馆分类列表
Route::resource('admin/clubsort','admin\ClubsortController');
//添加子类
Route::get('admin/clubsort/create/{id}','admin\ClubsortController@create');
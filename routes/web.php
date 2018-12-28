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
//视频资源控制器
Route::resource('admin/videos','admin\VideosController');
//视频详情资源控制器
Route::resource('admin/videoinfo','admin\VideoinfoController');
//课程资源控制器
Route::resource('admin/class','admin\ClassController');
//课程详情资源控制器
Route::resource('admin/classinfo','admin\ClassinfoController');
//资讯资源控制器
Route::resource('admin/news','admin\NewsController');
//课程详情资源控制器
Route::resource('admin/newinfo','admin\NewinfoController');

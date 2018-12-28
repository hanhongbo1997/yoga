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

Route::resource('admin/index','admin\IndexController');































Route::resource('admin/users','admin\UsersController');
Route::post('admin/users','admin\UsersController@index');
Route::resource('admin/slideshow','admin\SlideshowController');




















































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


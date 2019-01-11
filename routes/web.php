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
//评论表控制器
Route::resource('admin/videocomment','admin\VideocommentController');
//课程资源控制器
Route::resource('admin/class','admin\ClassController');
//课程详情资源控制器
Route::resource('admin/classinfo','admin\ClassinfoController');
//资讯资源控制器
Route::resource('admin/news','admin\NewsController');
//课程详情资源控制器
Route::resource('admin/newinfo','admin\NewinfoController');
//视频分类资源控制器
Route::resource('admin/videosort','admin\VideosortController');
//添加視頻子分類
Route::get('admin/videosort/create/{id}','admin\VideosortController@create');
//課程分类资源控制器
Route::resource('admin/lessonsort','admin\LessonsortController');
//添加課程子分類
Route::get('admin/lessonsort/create/{id}','admin\LessonsortController@create');
































//后台主页
Route::resource('admin/index','admin\IndexController');

//用户控制器
Route::resource('admin/users','admin\UsersController');

// 轮播图控制
Route::resource('admin/slideshow','admin\SlideshowController');

//后台登录
// Route::resource('admin/login','admin\LoginController');
Route::get('admin/login','admin\LoginController@index'); 
Route::post('admin/login/dologin','admin\LoginController@dologin'); 
Route::get('admin/logout','admin\LoginController@logout'); 


//前台注册
Route::resource('home/register','home\RegisterController');

//前台报名体验
Route::resource('home/enroll','home\EnrollController');

//后台报名者显示
Route::resource('admin/enroll','admin\EnrollController');

//前台个人中心
Route::resource('home/personal','home\Personalcontroller');

//前台页尾关于我们显示
Route::get('home/aboutus','home\PagetailController@index');

//前台页尾隐私条款
Route::get('home/privacy','home\PagetailController@index1');

//前台页尾社群规范
Route::get('home/community','home\PagetailController@index2');





















































//admin 后台
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

//添加老师列表
Route::resource('admin/teacher','admin\TeacherController');

//前台 首页 home
Route::resource('/','home\IndexController');



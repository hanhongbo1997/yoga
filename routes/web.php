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
//个人中心 密码设置
Route::post('home/userinfo/codon_pass/{id}','home\UserinfoController@codon_pass');
//个人中心 密码验证 
Route::get('home/userinfo/pass','home\UserinfoController@pass');
//个人中心 头像无刷新上传
Route::post('home/userinfo/profile/{id}','home\UserinfoController@profile');
//个人中心 vip 确定订单
Route::post('home/vip/updates/{id}','home\VipController@updates');
//个人中心 VIP 支付中心
Route::get('home/vip/order/{id}','home\VipController@order');
//后台
//视频资源控制器
Route::resource('admin/videos','admin\VideosController')->middleware('Alogin');
//视频详情资源控制器
Route::resource('admin/videoinfo','admin\VideoinfoController')->middleware('Alogin');
//视频评论控制器
Route::resource('admin/videocomment','admin\VideocommentController')->middleware('Alogin');
//课程资源控制器
Route::resource('admin/class','admin\ClassController')->middleware('Alogin');
//课程详情资源控制器
Route::resource('admin/classinfo','admin\ClassinfoController')->middleware('Alogin');
//课程评论控制器
Route::resource('admin/lessoncomment','admin\LessoncommentController')->middleware('Alogin');
//资讯资源控制器
Route::resource('admin/news','admin\NewsController')->middleware('Alogin');
//课程详情资源控制器
Route::resource('admin/newinfo','admin\NewinfoController')->middleware('Alogin');
//视频分类资源控制器
Route::resource('admin/videosort','admin\VideosortController')->middleware('Alogin');
//添加視頻子分類
Route::get('admin/videosort/create/{id}','admin\VideosortController@create')->middleware('Alogin');
//課程分类资源控制器
Route::resource('admin/lessonsort','admin\LessonsortController')->middleware('Alogin');
//添加課程子分類
Route::get('admin/lessonsort/create/{id}','admin\LessonsortController@create')->middleware('Alogin');

//前台控制器
//视频页面控制器
Route::resource('home/video','home\VideoController');
//课程页面控制器
Route::resource('home/lesson','home\LessonController');
//资讯页面控制器
Route::resource('home/news','home\NewsController');
//个人信息页面控制器
Route::get('home/userinfo/common','home\UserinfoController@common');
Route::get('home/userinfo/allbuy','home\UserinfoController@allbuy');
Route::get('home/userinfo/fav','home\UserinfoController@fav');
Route::get('home/userinfo/vip','home\UserinfoController@vip');
Route::get('home/userinfo/order','home\UserinfoController@order');
Route::get('home/userinfo/cart','home\UserinfoController@cart');
Route::get('home/userinfo/safe','home\UserinfoController@safe');
Route::resource('home/userinfo','home\UserinfoController');
//订单控制器
Route::get('home/order/order','home\OrderController@order');
Route::resource('home/order','home\OrderController');
//视频评论控制器
Route::resource('home/comment','home\CommentController');
//会馆评论控制器
Route::resource('home/clubcomment','home\ClubcommentController');
//课程评论控制器
Route::resource('home/lessoncomment','home\LessoncommentController');
//购物车控制器
Route::post('home/cart/order','home\CartController@order');
Route::get('home/cart/success','home\CartController@success');
Route::resource('home/cart','home\CartController');






























//后台主页
Route::resource('admin/index','admin\IndexController')->middleware('Alogin');

//用户控制器
Route::resource('admin/users','admin\UsersController')->middleware('Alogin');

// 轮播图控制
Route::resource('admin/slideshow','admin\SlideshowController')->middleware('Alogin');

//后台登录
// Route::resource('admin/login','admin\LoginController');
Route::get('admin/login','admin\LoginController@index'); 
Route::post('admin/login/dologin','admin\LoginController@dologin'); 
Route::get('admin/logout','admin\LoginController@logout'); 




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




















































//js判断用户是否登录
Route::get('home/logon/Register','home\LogonController@Register');
//admin 后台
//会馆列表
Route::resource('admin/club','admin\ClubController')->middleware('Alogin');
//添加详情提交
Route::post('admin/club/add/{id}','admin\ClubController@add')->middleware('Alogin');
//查看详情
Route::get('admin/club/details/{id}','admin\ClubController@details')->middleware('Alogin');
//会馆分类列表
Route::resource('admin/clubsort','admin\ClubsortController')->middleware('Alogin');
//添加子类
Route::get('admin/clubsort/create/{id}','admin\ClubsortController@create');

//添加老师列表
Route::resource('admin/teacher','admin\TeacherController')->middleware('Alogin');
Route::get('admin/teacher/details/{id}','admin\TeacherController@details');


//前台 首页 home
Route::resource('/','home\IndexController');
//前台 瑜伽馆
Route::resource('home/club','home\ClubController');

//前台 名师
Route::get('home/teacher/index','home\TeacherController@index');
Route::get('home/teacher/show/{id}','home\TeacherController@show');
//搜索
Route::post('home/teacher/add','home\TeacherController@add');


//前台 登录
//软件许可及服务协议
Route::get('home/logon/agreement','home\LogonController@agreement');
//注册 手机号认证
Route::get('home/logon/sendMessage','home\LogonController@sendMessage');
//注册 ajx 用户是否存在验证
Route::get('home/logon/verification','home\LogonController@verification');
//忘记密码home/logon/passwd
// 忘记密码
Route::get('home/logon/passwd','home\LogonController@passwd');

//cryptography 忘记密码AJX
Route::get('home/logon/cryptography','home\LogonController@cryptography');
Route::post('home/logon/pass','home\LogonController@pass');


Route::resource('home/logon','home\LogonController');



//前台注册
Route::resource('home/register','home\RegisterController');

//后台 个人中心 home/userinfo/update/
// Route::post('home/userinfo/update/{id}','home\UserinfoController@update');

//前台 首页 home
Route::get('home/user/add',function(){
 dump('后台商品');
})->middleware('logon');



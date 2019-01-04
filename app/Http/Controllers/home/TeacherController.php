<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Teacher;

class TeacherController extends Controller
{
    
    /**
     * 老师首页
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	//加载模板
    	return view('home.teacher.index',['title'=>'名师列表']);
    }
}

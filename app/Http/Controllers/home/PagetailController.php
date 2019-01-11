<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PagetailController extends Controller
{
    //关于我们
    public function index()
    {
    	return view('home.pagetail.aboutus');
    }

    //隐私条款
    public function index1()
    {
    	return view('home.pagetail.privacy');
    }

    //社群规范
    public function index2()
    {
    	return view('home.pagetail.community');
    }
}

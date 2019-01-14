<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User_info;
use App\Models\Logon;

class UserinfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        
        $data = Logon::find(session('admin_login')->uid);
        
      
       //加载视图
        return view('home.userinfo.index',['title'=>'个人信息','data'=>$data]); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //接收数据
        $user = $request->all();
       
        $data = Logon::find($id);
        $data->email = $request->input('email');
        $data->birthday = $user['birthday'];
        $data->email = $user['email'];
        $data->save();
        $info = User_info::find($id);
        $info->uid = $id;
        $info->sex = $user['sex'];
        $info->add = $user['add'];
        $info->sdf = $user['sdf'];
        if($info->save()){
                // dump(session('mobile_code') == $request->smsCode);
                return redirect('/home/userinfo/$id')->with('success', '添加成功!');
               
                }else{
                    
                     return back()->with('error', '添加失败!');
              
        }
        

         
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function common()
    {
        return view('home.userinfo.common');
    }

    public function fav()
    {
        return view('home.userinfo.fav');
    }

    public function allbuy()
    {
        return view('home.userinfo.allbuy');
    }

    public function vip()
    {
        return view('home.userinfo.vip');
    }

    public function order()
    {
        return view('home.order.index');
    }

    public function cart()
    {
        return view('home.order.cart');
    }

    /**
     * 账号设置
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function safe(Request $request)
    {
        return view('home.userinfo.safe');
    }
    /**
     * 密码设置提交
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function codon_pass(Request $request,$id)
    {
        //接收数据
        $data = $request->all();
        dump($data);
    }
}

<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Logon;
use Hash;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //加载模板
        return view('home.register.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('home.register.register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //接收数据
        $user = $request->all();
        $data = new Logon;
        $data->phone = $request->input('phone');
        $data->pass = Hash::make($request->input('pass'));
      

         if(session('mobile_code') == $request->smsCode){

           if($data->save()){
                // dump(session('mobile_code') == $request->smsCode);
                return redirect('/home/logon')->with('success', '添加成功!');
               
                }else{
                    
                     return back()->with('error', '添加失败!');
              
            }
         }else{
            
             // echo "<script>alert('注册失败，验证码不正确');</script>";
              return redirect('/home/register')->with('error', '验证码不正确');
         }
             

        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        
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
        //
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
    
   
}

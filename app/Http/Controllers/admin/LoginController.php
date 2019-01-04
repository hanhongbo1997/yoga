<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Users;
use DB;
use Hash;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('admin.layout.login');
        $this->validate($request, [
            'uname' => 'required',
            'pwd' => 'required',
                ],
            [
                'uname.required'=>'用户名必填',
                'pwd.required'=>'密码必填',
            ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function dologin(Request $request)
    {
        //
        $params = $request->all();

        // dd($params);
        $data = Users::where('uname',$params['uname'])->first();
        if (!$data) {
             return back()->with('error','没有这个用户');
        }
          //验证密码
         if (!Hash::check($params['pass'],$data['pass'] )) 
        {
            return back()->with('error','密码错误');
        }
       
        session(['data'=>$data]);
        return redirect('/admin/users');

            

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($id)
    {
        //

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
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

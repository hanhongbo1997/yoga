<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Users;
use App\Models\User_info;
use Hash;
class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {   
       
        
        $params = $request->all();
        if(empty($params['limit'])){
            $params['limit']=5;
        }
        if(empty($params['sousuo'])){
            $params['sousuo']='';
        }
        // dd($params);
        $search_uname = $request->input('search_uname','');
        // dd($search_uname);
        //获取数据便里面的所有数据
        $data = Users::where('uname','like','%'.$params['sousuo'].'%')->paginate($params['limit']);
        // $res = User_info::all();
        $title = '用户列表';
        // dd($data1);
        return view('admin.users.index',['data'=>$data,'title'=>$title,'params'=>$params]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //用户添加模板
        // echo '1111';
        $title = '用户添加';
        return view('admin.users.create',['title'=>$title]);
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
        // $data = $request->all();
        // dump($data);
        //注册用户的限制
            $this->validate($request, [
            'uname' => 'required|regex:/^[a-zA-Z]{1}[\w]{5,11}$/',
            'pass' => 'required|regex:/^[\w]{6,12}$/',
            'repwd' => 'same:pass',
            'email' => 'required|email',
            'phone' => 'required|regex:/^1{1}[3-9]{1}[0-9]{9}$/'
        ],[
            'uname.required'=>'用户必填',
            'uname.regex'=>'用户格式不正确',
            'pass.required'=>'密码必填',
            'pass.regex'=>'密码格式不正确',
            'repwd.same'=>'两次密码不一致',
            'phone.required'=>'手机号必填',
            'phone.regex'=>'手机号格式不正确',
            'email.required'=>'邮箱必填',
            'email.email'=>'邮箱格式不正确'
        ]);
            $data = $request->except(['_token','_method','status','repwd']);
            //获取添加数据的uid
            $users = new Users;
            $pass = $request -> input('pass');
            // dd($pass);
            $data['pass'] = Hash::make($pass);
            $uid = $users -> insertGetId($data);
            // dd($uid);
            //获取所添加的status
            $status = $request->input('status');

            // dd($data['pass']);

            $arr = [];
            $arr['uid'] = $uid;
            $arr['status']=$status;
            $res=User_info::insert($arr);
            // dd($res2);
           if($res){
                 return redirect('admin/users')->with('success', '添加成功');
            }else{
                 return back()->with('error', '添加失败');
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
        
        $data = Users::find($id);
        // dd($data);
        $title = '用户详情';
        return view('admin.users.show',['data'=>$data,'title'=>$title]);
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
        $data = Users::find($id);
        // dd($data);
        $title = '用户修改';
        return view('admin.users.edit',['data'=>$data]);
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
        $this->validate($request, [
            'uname' => 'required|regex:/^[a-zA-Z]{1}[\w]{5,11}$/',
            'email' => 'required|email',
            'phone' => 'required|regex:/^1{1}[3-9]{1}[0-9]{9}$/'
        ],[
            'uname.required'=>'用户必填',
            'uname.regex'=>'用户格式不正确',
            'phone.required'=>'手机号必填',
            'phone.regex'=>'手机号格式不正确',
            'email.required'=>'邮箱必填',
            'email.email'=>'邮箱格式不正确'
        ]);
        //
        $data=$request->except(['_token','_method']);
        // dd($data);
        $res =Users::find($id)->update($data);      
        // dd($res);
        if ($res) {
            return redirect('admin/users')->with('success', '修改成功');
        }else{
            return back()->with('error', '修改失败');
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
        $data = Users::destroy($id);
        
        // $user_info = User_info::find($id);
       
        // $res1 = $data->delete();
        // $res2 = $user_info->delete();
        // dd($res1);
       if($data){

            return redirect('admin/users')->with('success', '删除成功!');
           
        }else{
             return back()->with('error', '删除失败!');
        }
    }
}

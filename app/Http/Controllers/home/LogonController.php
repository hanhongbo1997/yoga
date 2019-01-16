<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Logon;
use Hash;

class LogonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //加载模板
        return view('home.logon.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //加载模板
        return view('home.logon.create',['title'=>'软件许可及服务协议']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //获取提交数据
         $phone = $request->input('phone');
         $admin_login = Logon::where('phone',$phone)->first();
         $pass = $request->input('pass');
         if(empty($pass)){

            return back()->with('error', '密码不能为空');exit();

         }
         // dump(md5($pass));
         // dump($data->pass);
          //密码

          session(['admin_login'=>$admin_login]);
           // dump($data);

         if (!Hash::check($pass,$admin_login['pass'] )) 
        {
            return back()->with('error','密码错误');
        }else{

            // dd(session('admin_login'));

            return redirect('/')->with('success', '登录成功!');
        }   

       
        // dump(session('admin_login'));


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
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
    public function agreement()
    {
       
        //加载模板
        return view('home.logon.agreement',['title'=>'软件许可及服务协议']);
    }
     /**
     *手机号认证
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function sendMessage(Request $request)
    {
       //接收手机号
       $mobile = $request->input('phone','');
       $mobile_code = rand(1000,9999);
       session(['mobile_code'=>$mobile_code]);
       // dump(session('mobile_code'));
      //短信接口地址
      $target = "http://106.ihuyi.com/webservice/sms.php?method=Submit";
      $target .= "&account=C91149619&password=3f2dc708c2fe3fed652c58e4ce04df4a&format=json&mobile=".$mobile."&content=".rawurlencode("您的验证码是：".$mobile_code."。请不要把验证码泄露给其他人。");
      //请求接口GET、POST
      //CURL
      $ch = curl_init();
        /*post基本设置如下*/
        curl_setopt($ch, CURLOPT_URL, $target);//设置url
        curl_setopt($ch, CURLOPT_POST, 1);//设置不自动输出

        $res = curl_exec($ch);    //输出到浏览器
        curl_close($ch);        //关闭资源，他们总是较大占内存的
        
       //返回json格式
       // return response()->json($res);
       // echo session('mobile_code');
       echo $res;
        }

         /**
     * 注册电话号码验证
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function verification(Request $request)
    {
        
        // 接收用户名
            // $phone = isset($request->input('phone')) ? $request->input('phone') : 'null';
            // if(!$phone){
            //     echo '用户名不能为空';
            //     exit;
            // }

           $phone = $request->input('phone');
           $data = Logon::where('phone',$phone)->first();

           if($data){
                echo 'error';
            }else{
                echo 'success';
            }
    }
     /**
     * 忘记密码
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function passwd()
    {
        //加载模板
        return view('home.logon.passwd',['title'=>'忘记密码']);
        
    }
     /**
     * 忘记密码密码验证
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function pass(Request $request)
    {
       //接收数据
    
     $user = $request->all();
     $phone = $request->input('phone');
     $data = Logon::where('phone',$phone)->first();
     $pass = $request->input('pass');
     // dump(Hash::check($pass,$data['pass'] ));
     // dump(session('mobile_code'))exit();
     if (Hash::check($pass,$data['pass'] )) 
        {
            return back()->with('error','密码和原来密码相同');exit();
        }else{
            $data->pass = Hash::make($request->input('pass'));      
        } 
      //验证码判断
      
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
     * 判断用户是否登录
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function Register()
    {
        //判断用户session是否有值
        // dump(session('admin_login'));
        if (empty(session('admin_login'))) { 
            echo 'error';
        }else{
            echo 'success';
        }
    }
    //loginOut
    public function loginOut(Request $request)
    {
        $request->session()->forget('key');
    }
     

}

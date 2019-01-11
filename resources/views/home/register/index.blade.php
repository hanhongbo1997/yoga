@extends('home.layout.layout')

@section('content')
                     @if (session('success'))
                    <script>alert('{{ session("success") }}');</script>";
                     
                    @endif
                    @if (session('error'))

                    <script>alert('{{ session("error") }}');</script>";

                    @endif
  <link rel="stylesheet" type="text/css" href="/home/base.css" >
    <link rel="stylesheet" type="text/css" href="/home/yoga_new.css">
    <script type="text/javascript" src="/home/js/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="/home/js/common.js"></script>
    <script>
    var _hmt = _hmt || [];
    (function() {
      var hm = document.createElement("script");
      hm.src = "https://hm.baidu.com/hm.js?bb62d7379cd5d363a61fe19d7a644ae3";
      var s = document.getElementsByTagName("script")[0]; 
      s.parentNode.insertBefore(hm, s);
    })();
    </script>
    <script>
    var hasLogined=false;
    var logintimer;
    var isVip=false
   var userName ='';
    var userImage ='';
    </script>
    <script type="text/javascript" src="/home/js/jquery.qrcode.min.js"></script>
    <script type="text/javascript" src="/home/js/header.js"></script>
    <script>
            /**
             * [处理未读消息]
             * @param  {[string, object]} msg [string: 'hasBeenRead',
             object: 未读消息数据]
             */
            function yourFunction(msg) {
                var text = '',
                        num = 0;
                if (msg === 'hasBeenRead') { // 消息已被阅读
                    num = 0;
                } else if (typeof(msg) === 'object') {
                    var unreadNum = document.getElementById('unreadNum').innerHTML,
                            lastMsg = msg[msg.length - 1];
                    num = isNaN(+unreadNum) ? msg.length : +unreadNum + msg.length;
                }
                // 未读消息数量
                if(num==0){
                    $("#unreadNum").hide();
                }else {
                    $("#unreadNum").show();
                    document.getElementById('unreadNum').innerHTML = num;
                }
            }
        </script>
        <script type='text/javascript'>
            (function(m, ei, q, i, a, j, s) {
                m[i] = m[i] || function() {
                            (m[i].a = m[i].a || []).push(arguments)
                        };
                j = ei.createElement(q),
                        s = ei.getElementsByTagName(q)[0];
                j.async = true;
                j.charset = 'UTF-8';
                j.src = 'https:///home.meiqia.com/dist/meiqia.js?_=t';
                s.parentNode.insertBefore(j, s);
            })(window, document, 'script', '_MEIQIA');
            _MEIQIA('entId', 65153);
            _MEIQIA('withoutBtn');
            // 获取未读消息
            _MEIQIA('getUnreadMsg', yourFunction);
        </script>
    </div>
    <script>
        window.onscroll=function(){
                 if($(this).scrollTop() > 100){
                     $('#backTop').fadeIn();
                     $("header").addClass("headerCur");
                 }else{
                     $('#backTop').fadeOut();
                     $("header").removeClass("headerCur");
                 }
             }
        $(function(){
            /*返回顶部------------------------------------------------------*/
            $("#backTop").click(function(){
                $('html,body').animate({scrollTop: '0px'}, 1000);
            })
        })
    </script>
    <style>
        body,html{
            background: #fafafa;
        }
        .method_nav{
            margin-left: auto;
            margin-right: auto;
            
            margin-left: 80px;
            
        }
        .method_nav span{
            


        }
       .number_out input{
        /*display: none; */
        transition:background-color 5000s ease-in-out 0s;
        border: 1px solid #ccc;
        border-radius: 3px; 
       } 
       .login_method{
        width: 48%;
        height: 53.5%;
       }
       .loginAcsess a{
        width: 70%;
       }
      .loginAcsess input{
        width: 70%;
        height: 2rem;
        background: #f85f1c;
        color: white;
        text-align: center;
        line-height: 2rem;
        border-radius: 2rem;
        display: block;
        margin: 0 auto;
       
    }
    .loginAcsess input:visited, .loginAcsess input:hover {
        background-color: #313538;
    }
    </style>
<script type="text/javascript" src="/home/js/jquery.qrcode.min.js"></script>
<script type="text/javascript" src="/home/js/login.js"></script>
<div class="content2">
    <div class="loginPage oh">
        <div class="fl club_show">
            <img src="/home/images/clubbj.png"/>
        </div>
        <div class="fr login_method" style="height: 80%;">
            <div class="method_nav2 tc">
                <span>注册</span>
            </div>
            <!--账号登录-->
            <div class="dengluArea" style="display: block;">
            <form action="/home/register" method="post" id="form_fl">
             {{ csrf_field() }}
                <ul class="loginList">
                    <li class="oh">
                        <span class="fl">手机号</span>
                        <div class="number_out oh">
                            <input type="text" name="phone" value="" class="fl" id="phone" autocomplete="off">
                            <span class="deleteSpan" ></span>

                        </div>
                        <span style="margin-left: 60px;" class="show_fi"></span>
                    </li>
                    <li class="oh yzCode">
                        <span class="fl">验证码</span>
                        <div class="number_out oh fl">
                            <input type="text" name="smsCode" value="" class="fl" id="smsCode" autocomplete="off">
                            <span class="deleteSpan"></span>
                        </div>
                        <!-- <input type="button" name="" value="发送验证码" onClick="sendMessage()" class="fr sendMessage" id="sendMessage" > -->
                        <a href="javascript:void(0);" class="btn" onClick="sendMessage();" ">
                           <span class="" style="display: block;width: 120px; height: 40px;border: 1px solid #ededed; float:left; text-align: center; margin-left: 20px;color: #fff; background-color: #D4D4D4;" id="sendMessage">发送验证码</span> 
                        </a>
                        
                    </li>

                    <li class="oh">
                        <span class="fl">密&nbsp;&nbsp;&nbsp;码</span>
                        <div class="number_out oh">
                            <input type="password" name="pass" value="" class="fl" id="pass" >
                            <span class="deleteSpan"></span>
                        </div>
                        <span style="margin-left: 60px;" class="show_fi"></span>
                    </li>
                    <li class="oh">
                        <span class="fl">确认密码</span>
                        <div class="number_out oh">
                            <input type="password" name="repass" value="" class="fl" id="passwd"/>
                            <span class="deleteSpan"></span>
                        </div>
                        <span style="margin-left: 60px;" class="show_fi"></span>
                    </li>
                   <!--  <li class="loginAcsess" style="margin-top: 3rem;"> -->
                        <li class="loginAcsess">
                        
                        <input type="submit" value="登录" style="font-size: 22px;">
                        
                    </li>
                    <dl class="codeLogin">
                        <dd>点击注册即表示并同意 <a href="/home/logon/create">用户协议</a> 、<a href="/home/logon/agreement">服务协议</a></dd>
                    </dl>
                </ul>
                </form>
            </div>
            <script>
            $(function(){
                    //提示信息
                    var isPhone,isPass,isPasswd,isSmsCode = false;
                    $('#phone').focus(function(){
                        $('.show_fi').eq(0).html('<font style="color:#71bd9c">请输正确的手机号</font>');
                        
                    });
                    $('#phone').blur(function(){
                        $('#sendMessage').css('background-color','#fb9966');
                        //用电话号码
                        var phone = $(this).val();
                        // 验证
                        var phone_preg = /^1{1}[3-9]{1}[\d]{9}$/;
                         //验证用户名 
                         
                        if(phone_preg.test(phone)){
                         //发送ajax
                                $.get('/home/logon/verification',{'phone':phone},function(msg){
                                        
                                        if(msg == 'success'){
                                            isPhone = true;
                                             $('.show_fi').eq(0).html('<font style="color:#71bd9c">恭喜手机号可用</font>');
                                        }else{
                                            isPhone = false;
                                            $('.show_fi').eq(0).html('<font style="color:#fb9966">用户已注册</font>');
                                        }
                                    
                                    },'html');   
                        }else{
                            isUname = false;
                            $('.show_fi').eq(0).html('<font style="color:#fb9966">手机号格式不正确</font>');
                        }

                    });
                    
                    //密码
                    $('#pass').focus(function(){
                        
                        $('.show_fi').eq(0).html('<font style="color:#71bd9c"></font>');
                        $('.show_fi').eq(1).html('<font style="color:#71bd9c">请输以字母开头6-16数字、字母、下划线</font>');
                        $('#sendMessage').css('background-color','#D4D4D4');

                        
                    });
                    $('#pass').blur(function(){
                       //密码
                        var pass = $(this).val();
                        // 验证
                        var pass_preg = /^[a-zA-Z]{1}[\w]{5,15}$/;
                         //验证用户名 
                         
                        if(pass_preg.test(pass)){
                            isPass = true;
                             $('.show_fi').eq(1).html('<font style="color:#71bd9c">恭喜密码可用</font>');
                        }else{
                            isPass = false;
                            $('.show_fi').eq(1).html('<font style="color:#fb9966">密码格式不正确</font>');
                        }
                        
                    });
                    //确认密码
                    $('#passwd').blur(function(){
                         $('.show_fi').eq(1).html('<font style="color:#fb9966"></font>');
                            
                        //获取确认密码
                        var passwd = $(this).val();
                        //验证
                        if(passwd == $('#pass').val()){
                            
                            isPasswd = true;

                        }else{
                            isPasswd = false;
                            $('.show_fi').eq(2).html('<font style="color:#fb9966">两次密码不一致</font>');
                        }
                        
                        
                    });
                    $('#form_fl').submit(function(){
                            if(isPass && isPhone && isPasswd){
                                return true;
                            }
                            // 阻止表单提交
                            return false;
                         });

                        $('#form_fl').reset(function(){
                            return false;
                         });

             });
                        
                       
                            
                             
                       
            
            // 手机验证码
            function sendMessage()
            {
                //获取手机号
                var phone = $('#phone').val();
                //验证
                var phone_preg = /^1{1}[3-9]{1}[\d]{9}$/;
                if(!phone_preg.test(phone)){
                    return false;
                }
                //发送ajax
                $.get('/home/logon/sendMessage',{'phone':phone},function(msg){
                    console.log(msg);
                    if(cod ==2){
                        return '提交成功';
                    }else{
                        return '提交失败';
                    }
                },'json');
            }
            </script>
            <!--二维码登录-->
            <div class="dengluArea">
                <dl class="codeLogin">
                    <dt></dt>
                    <dd><a href="javascript:;" class="shuaxin"></a></dd>
                    <dd>请打开Wake App进入【我的页面】点击扫一扫<br/>还没有Wake？<a href="javascript:;">立即注册!</a></dd>
                </dl>
            </div>
        </div>
    </div>
</div>
<!--底部-->

 

@endsection
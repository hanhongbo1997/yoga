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
            <img src="/home/images/clubbj.png">
        </div>
        <div class="fr login_method">
            <div class="method_nav oh">
                <span class="fl cur" style="margin-left: 80px; ">账<i>号登</i>录</span>
                <!-- <span class="fl" onclick="getLoginCode()">二<i>维码登</i>录</span> -->
            </div>
            <!--账号登录-->
            <div class="dengluArea" style="display: block;">

            <form action="/home/logon" method="post">
             {{ csrf_field() }}
                <ul class="loginList">
                    <li class="oh">
                        <span class="fl">手机号</span>
                        <div class="number_out oh">
                            <input type="text" id="phone" name="phone" value="" class="fl" autocomplete="on">
                            <span class="deleteSpan"></span>
                             
                        </div>
                        <span style="margin-left: 60px;" class="show_fi"></span>
                    </li>
                    <li class="oh">
                        <span class="fl">密&nbsp;&nbsp;&nbsp;码</span>
                        <div class="number_out oh">
                            <input type="password" name="pass" id="password" value="" class="fl" autocomplete="on">
                            <span class="deleteSpan"></span>
                             <span style="margin-left: 60px;" class="show_fi"></span>
                        </div>
                    </li>
                    <li class="oh registerLi">
                        <span class="fl">还没有Wake账号？<a href="/home/register">立即注册！</a></span>
                        <a href="/home/logon/passwd" class="fr">忘记密码</a>
                    </li>
                    <li class="loginAcsess">
                        
                        <input type="submit" value="登录" style="font-size: 22px;">
                        
                    </li>
                </ul>
                </form>

                <div class="otherStep">
                    <span>其他登录方式</span>
                </div>
                <div class="other_login">
                    <span class="weibo1" onclick="login(3)"></span><!--微博-->
                    <span class="qq3" onclick="login(1)"></span><!--QQ-->
                </div>
            </div>
            <!--二维码登录-->
            <div class="dengluArea" id="codeLogin">
                <dl class="codeLogin">
                    <dt id="loginCodeImg"></dt>
                    <dd id="refreshCode" style="display: none"><a href="javascript:;" class="shuaxin" onclick="getLoginCode()"></a></dd>
                    <dd>请打开Wake App进入【我的页面】点击扫一扫<br>还没有Wake？<a href="http://wakeyoga.com/2register.html">立即注册!</a></dd>
                </dl>
            </div>
        </div>
    </div>
</div>
<script>
        $(function(){
            //电话号码验证
            $('#phone').blur(function(){
                        var isPhone,isPass = false;
                        //用电话号码
                        var phone = $(this).val();
                      
                         //发送ajax
                                $.get('/home/logon/verification',{'phone':phone},function(msg){
                                        
                                        if(msg == 'success'){
                                            isPhone = false;
                                             $('.show_fi').eq(0).html('<font style="color:#fb9966">用户未存在</font>');
                                        }else{
                                            isPhone = true;
                                           
                                        } 
                                    
                                    },'html');   
          

             });
            //密码验证
            $('#phone').blur(function(){
                        var isPhone,isPass = false;
                        //用电话号码
                        var phone = $(this).val();
                      
                         //发送ajax
                                $.get('/home/logon/verification',{'phone':phone},function(msg){
                                        
                                        if(msg == 'success'){
                                            isPhone = false;
                                             $('.show_fi').eq(0).html('<font style="color:#fb9966">用户未存在</font>');
                                        }else{
                                            isPhone = true;
                                           
                                        } 
                                    
                                    },'html');   
          

             });


        });

</script>

@endsection
@extends('home.userinfo.layout')

@section('contents')
                    @if (session('success'))
                    <script>alert('{{ session("success") }}');</script>";
                     
                    @endif
                    @if (session('error'))

                    <script>alert('{{ session("error") }}');</script>";

                    @endif
<div class="xui-member-content" style="padding-left:260px;">
        <div class="xui-content xui-margin-b-15" style="line-height:30px;">
            <div class="span7">
                <h3 class="xui-margin-0">账号设置</h3>
            </div>
        </div>
        <div class="xui-content xui-bg-white">
            <div class="sui-msg msg-large msg-tips msg-block" style="height: 25px;">
                <div class="msg-con" style="font-weight:normal;">

                <span id="DateTime">系统时间加载中...</span>     

                <button type="button" class="sui-close" style="line-height: 25px;" >×</button>
                </div>
                <s class="msg-icon"></s>
            </div>
            <ul class="ulset">
                <li style="overflow: hidden;
						    position: relative;
						    padding: 10px 10px 10px 30px;
						    border-bottom: 1px dotted #dbdbdb;
						  	">
                    <div class="ul-icon" style="float: left;">
                        <img src="/home/picture/phone.png" style="width: 40px;margin-right: 13px;margin-top: 12px;">
                    </div>
                    <div class="ul-content" style="float: left;">
                        <h4>手机<span class="sui-text-danger xui-margin-l-5">{{ session('admin_login')->phone }}</span></h4>
                        <p>可用手机号加密码登录瑜伽网，可通过手机号找回密码 </p>
                    </div>

                </li>
                <li style="overflow: hidden;
						    position: relative;
						    padding: 10px 10px 10px 30px;
						    border-bottom: 1px dotted #dbdbdb;">
                    <div class="ul-icon" style="float: left;">
                        <img src="/home/picture/lock.png" style="width: 40px;margin-right: 13px;margin-top: 12px;">
                    </div>
                    <div class="ul-content" style="float: left;">
                        <h4>密码<span class="xui-margin-l-5">已设置</span></h4>
                        <p>用于保护账号信息和登录安全</p>
                    </div>
                    <div class="ul-button" style="float: right;margin-top: 25px;">
                        <div class="sui-btn btn-large" id="savePass">更改</a></div>
                    </div>
                </li>
            </ul> 
        </div>
        <!-- 添加商品属性 -->
        <div id="myModal" tabindex="-1" role="dialog" data-hasfoot="false" class="sui-modal hide " style="display: none;">

    
            <div class="modal-dialog">
   <form class="sui-form form-horizontal sui-validate" style="min-height:130px;" novalidate="novalidate" action="/home/userinfo/codon_pass/{{ session('admin_login')->uid }}" method="post" id="form_fl">
     {{ csrf_field() }}
                <div class="modal-content">

                    <div class="modal-header">
                        <button type="button" data-dismiss="modal" aria-hidden="true" class="sui-close" id="button_add">×</button>
                        <h4 id="myModalLabel" class="modal-title">修改密码</h4>
                    </div>
                    <div class="modal-body" id="modalBody">

                      
                            <div class="control-group">
                                <label class="control-label">原密码：</label>
                                <div class="controls">
                                    <input type="password" class="input-large input-xfat" name="ori_pwd"   id="ori_pwd" >
                                    <span  class="show_fi"></span>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">新密码：</label>
                                <div class="controls">
                                    <input type="password" class="input-large input-xfat" name="pass" id="pass" value="">
                                     <span  class="show_fi"></span>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">确认密码：</label>
                                <div class="controls">
                                    <input type="password" class="input-large input-xfat" name="password" id="password" value="">
                                     <span  class="show_fi"></span>
                                </div>
                            </div>
                            
                       
                    </div>
                    <div class="modal-footer">
                        
                        <input type="submit" class="sui-btn btn-primary btn-large" value="提交">
                        <input type="reset" class="sui-btn btn-default btn-large" value="重设">
                    </div>
                </div>
     </form>
            </div>

        </div>

        <!-- //添加商品属性 -->
    </div>
    <script>
    $(function(){
                    var isOri_pwd,isPass,isPasswd = false;
                    //原始密码
                    $('#ori_pwd').blur(function(){
                            var ori_pwd = $('#ori_pwd').val();

                                 $.get('/home/userinfo/pass',{'ori_pwd':ori_pwd},function(msg){
                                        
                            
                                        if(msg == 'success'){
                                            isOri_pwd = true;
                                            
                                        }else{
                                            isOri_pwd = false;
                                            $('.show_fi').eq(0).html('<font style="color:#fb9966">密码不正确</font>');
                                        }
                                    
                                 },'html'); 
                    });

                    //密码
                    $('#pass').focus(function(){                        
                        $('.show_fi').eq(1).html('<font style="color:#71bd9c">请输以字母开头6-16数字、字母、下划线</font>');         
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
                    $('#password').blur(function(){
                         $('.show_fi').eq(1).html('<font style="color:#fb9966"></font>');
                            
                        //获取确认密码
                        var passwd = $(this).val();

                        //验证
                       // console.log(passwd);
                       // console.log($('#pass').val());

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

                    // $('#form_fl').reset(function(){
                    //         return false;
                    //      });
    });

    window.onload = function () {
        //定时器每秒调用一次fnDate()
        setInterval(function () {
            fnDate();
        }, 1000);
    }
    
 
    //js 获取当前时间
    function fnDate() {
        var oDiv = document.getElementById("DateTime");
        var date = new Date();
        var year = date.getFullYear();//当前年份
        var month = date.getMonth();//当前月份
        var data = date.getDate();//天
        var hours = date.getHours();//小时
        var minute = date.getMinutes();//分
        var second = date.getSeconds();//秒
        var time = year + "-" + fnW((month + 1)) + "-" + fnW(data) + " " + fnW(hours) + ":" + fnW(minute) + ":" + fnW(second);
        var a = new Array("日", "一", "二", "三", "四", "五", "六");
        var week = new Date().getDay();
        var str = "星期" + a[week];
        oDiv.innerHTML = time + "　" + str;
    }
    //补位 当某个字段不是两位数时补0
    function fnW(str){return str > 9 ?  str :  "0" + str;}

    //修改密码
        $(function(){

            $('#savePass').click(function(){
               
                $('#myModal').css('display','block');

            });

            $('#button_add').click(function(){
                 $('#myModal').css('display','none');
            });
           
        });

        
            
    </script>
@endsection
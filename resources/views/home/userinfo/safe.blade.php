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
   <form class="sui-form form-horizontal sui-validate" style="min-height:130px;" novalidate="novalidate" action="/home/userinfo/codon_pass/{{ session('admin_login')->uid }}" method="post">
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
                                    <input type="password" class="input-large input-xfat" name="ori_pwd" data-rules="required"  id="ori_pwd" >
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">新密码：</label>
                                <div class="controls">
                                    <input type="password" class="input-large input-xfat" name="pass" data-rules="required|maxlength=12"  id="pass">
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">确认密码：</label>
                                <div class="controls">
                                    <input type="password" class="input-large input-xfat" name="password" data-rules="required|match=new_pwd|maxlength=12"  id="password">
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
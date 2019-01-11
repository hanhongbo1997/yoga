@extends('home.userinfo.layout')

@section('contents')
<div class="xui-member-content" style="padding-left:260px;">
        <div class="xui-content xui-margin-b-15" style="line-height:30px;">
            <div class="span7">
                <h3 class="xui-margin-0">账号设置</h3>
            </div>
        </div>
        <div class="xui-content xui-bg-white">
            <div class="sui-msg msg-large msg-tips msg-block" style="height: 25px;">
                <div class="msg-con" style="font-weight:normal;">本次登录时间：2019-01-08 16:09:51   地点：人马座星系β星二卫                    
                <button type="button" class="sui-close" style="line-height: 25px;">×</button>
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
                        <h4>手机<span class="sui-text-danger xui-margin-l-5">11011011011</span></h4>
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
                        <div class="sui-btn btn-large" id="savePass">更改</div>
                    </div>
                </li>
            </ul>
        </div>
        <!-- 添加商品属性 -->
        <div id="myModal" tabindex="-1" role="dialog" data-hasfoot="false" class="sui-modal hide fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" data-dismiss="modal" aria-hidden="true" class="sui-close">×</button>
                        <h4 id="myModalLabel" class="modal-title">修改密码</h4>
                    </div>
                    <div class="modal-body" id="modalBody">
                        <form class="sui-form form-horizontal sui-validate" style="min-height:130px;" novalidate="novalidate">
                            <div class="control-group">
                                <label class="control-label">原密码：</label>
                                <div class="controls">
                                    <input type="password" class="input-large input-xfat" name="ori_pwd" data-rules="required">
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">新密码：</label>
                                <div class="controls">
                                    <input type="password" class="input-large input-xfat" name="new_pwd" data-rules="required|maxlength=12">
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">确认密码：</label>
                                <div class="controls">
                                    <input type="password" class="input-large input-xfat" name="t_pwd" data-rules="required|match=new_pwd|maxlength=12" data-error-msg="密码输入不一致">
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <span class="sui-btn btn-primary btn-large" id="change_save_btn">提交</span>
                        <span data-dismiss="modal" class="sui-btn btn-default btn-large">关闭</span>
                    </div>
                </div>
            </div>
        </div>
        <!-- //添加商品属性 -->
    </div>
@endsection
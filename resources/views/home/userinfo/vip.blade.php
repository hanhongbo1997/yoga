@extends('home.userinfo.layout')

@section('contents')

<div class="xui-member-content" style="padding-left:224px;">
<div class="xui-content xui-margin-b-15" style="line-height:30px;">
    <div class="span4">
        <h3 class="xui-margin-0">年卡会员</h3>
    </div>
</div>

<form action="/home/vip/updates/{{ session('admin_login')->uid }}" method="post">
 {{ csrf_field() }}
 
            <!--未开通年卡-->
    <div class="xui-content">
        <div class="xui-row">
            <div class="xui-row-padded">
                <div class="vip-card-content" style="margin: 0 auto;width: 320px;height: 400px;" >
                        <h4>VIP</h4>
                        <img src="/home/picture/viplogo.png" style="width: 300px;margin: 0 auto;">
                        <p style="margin-left: 80px;">尚未开通瑜伽网VIP会员</p>
                        <div class="xui-content">
                            <label class="radio-pretty inline checked" style="margin-left: 100px;">
                                <input type="radio" checked="checked" name="radio">
                                <span class="xui-text-green" style="font-size:22px;margin: 0 auto;">365天</span>
                            </label>
                        </div>
                   
                </div>
            </div>
        </div>

        <div class="xui-text-center">
            <div class="xui-padded-15 xui-margin-15 xui-bg-gary">应付：
                <strong class="sui-text-warning">
                    <span class="xui-font-size-18 xui-margin-10 xui-margin-r-5"><input type="text" value="3588" style="width:120px;color: #f85f1c;font-size:30px;display:inline;" name="oprice"></span>元

                </strong>
            </div>
            
            <input type="submit" value="立即开通" class="sui-btn btn-xlarge btn-success">
        </div>

    </div>
    <!--未开通年卡 end-->
</form>

    <style>
       
        .btn-success{

            background-color: #fb9966;
            border: 1px solid #f85f1c;
        }
        .btn-success:focus, .btn-success:hover {
        color: #fff;
        background-color: #f85f1c;
        border: 1px solid #fb9966;
}
    </style>


    <div class="xui-content-padded">
        <h3>会员特权</h3>
        <div class="xui-row xui-bg-gary xui-padded-t-15 tequan-content">
            <div class="xui-row-padded">
                <div class="xui-col-xs-3 xui-text-center">
                    <i class="xui-iconfont xui-icon-mianfei"></i>
                    <p>会员专区教学视频免费学</p>
                </div>
                <div class="xui-col-xs-3 xui-text-center">
                    <i class="xui-iconfont xui-icon-wuguanggao"></i>
                    <p>拒绝广告，无忧学习</p>
                </div>
                <div class="xui-col-xs-3 xui-text-center">
                    <i class="xui-iconfont xui-icon-gaoqing"></i>
                    <p>高清课程，尊享服务</p>
                </div>
                <div class="xui-col-xs-3 xui-text-center">
                    <i class="xui-iconfont xui-icon-youxian"></i>
                    <p>上新课程抢先体验</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
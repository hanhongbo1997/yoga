@extends('home.layout.layout')

@section('content')
                    @if (session('success'))
                    <script>alert('{{ session("success") }}');</script>";
                     
                    @endif
                    @if (session('error'))

                    <script>alert('{{ session("error") }}');</script>";

                    @endif
<link href="/home/css/sui.css" rel="stylesheet" type="text/css">
<link href="/home/css/sui-append.css" rel="stylesheet" type="text/css">
<link href="/home/css/idangerous.swiper.css" rel="stylesheet" type="text/css">
<link href="/home/css/style.css" rel="stylesheet" type="text/css">
<script src="/home/js/jquery.min.js" type="text/javascript"></script>
<script src="/home/js/sui.min.js" type="text/javascript"></script>
<script src="/home/js/idangerous.swiper.min.js" type="text/javascript"></script>
<script src="/home/js/require.js" type="text/javascript"></script>
<br>
<br>
<br>
<br>
<div class="xui-container" style="margin:20px auto;">
    <h1>确认订单</h1>
    <div class="sui-steps steps-auto">
        <div class="wrap">
            <div class="finished">
                <label>
                    <span class="round">
                        <i class="sui-icon icon-pc-right"></i>
                    </span>
                    <span>确认订单信息</span>
                </label>
                <i class="triangle-right-bg"></i>
                <i class="triangle-right"></i>
            </div>
        </div>
        <div class="wrap">
            <div class="todo">
                <label>
                    <span class="round">2</span>
                    <span>选择支付方式并支付</span>
                </label>
                <i class="triangle-right-bg"></i>
                <i class="triangle-right"></i>
            </div>
        </div>
        <div class="wrap">
            <div class="todo">
                <label>
                    <span class="round">3</span>
                    <span>交易成功，用户评论</span>
                </label>
            </div>
        </div>
    </div>
    <div class="xui-content">
        <h4>{{ $title }}</h4>
        <div class="xui-margin-b-15">
            <ul class="xui-bg-gary pro-order"  style="margin-bottom: 0;overflow: hidden; padding: 20px 30px;margin-bottom: 4px;background: #f8fafc!important;">
                <li class="xui-pull-l xui-margin-r-15 pro-img">
                    <a href="/siftclass/6935.html" target="_blank">
                        <img src="/home/images/1.png" width="150">
                    </a>
                </li>
                <li class="xui-pull-l pro-cont">
                    <h2>
                        <a href="/siftclass/6935.html" target="_blank" style="color:#333; ">{{ $data->oname }}</a>
                        <span style="float:right;padding-left:10px;font-size:14px;color:#ff7300;line-height:20px;"> 1 件</span>
                    </h2>
                    <p class="xui-text-gary">付款成功后，您将成为尊贵的<strong class="xui-margin-l-5 xui-margin-r-5 sui-text-warning">vip</strong>用户</p>
                </li>
                <li class="xui-pull-r pro-price">
                    <span class="xui-font-size-18 sui-text-warning">
                    <i class="xui-font-size-12" style="line-height: 90px;" >￥</i>{{ $data->oprice }}.00</span>
                </li>
            </ul>
           
        </div>
        <div style="float: right;text-align: right;">
        <div class="xui-pay-box" style="width: 400px;">
            <div class="xui-pay-control" style="padding: 10px;" >
                <div class="xui-nature" style="float: left;margin-left: 101px;">共
                    <strong class="sui-text-warning xui-font-size-16">1</strong>件商品，商品总金额：
                </div>
                <div class="xui-nature xui-text-left sui-text-warning" style="float: left;">
                    <em>￥</em>
                    <span id="total-price">{{ $data->oprice }}.00</span>
                
                </div>
            <div style="clear: both;"></div>
        </div>
        <div class="xui-pay-control" style="padding: 10px;">
            <div class="xui-nature" style="float: left;margin-left: 212px;">优惠券：</div>
            <div class="xui-nature xui-text-gary xui-text-left" style="float: left;">暂无可用优惠券</div>
            <div style="clear: both;"></div>
        </div>
        <div class="xui-pay-control" style="padding: 10px;">
            <span></span>
            <div class="xui-nature" data-placement="bottom" data-toggle="tooltip" data-type="attention" data-original-title="<div style='line-height:10px;'><p>如何赚取积分？</p><p>1、每日首次登录瑜伽网<b class='sui-text-info xui-margin-l-5'>积分+1</b></p><p>2、每日签到<b class='sui-text-info xui-margin-l-5'>积分+2</b></p><p>3、文章/资讯等内容加入收藏<b class='sui-text-info xui-margin-l-5'>积分+1</b></p><p>4、首次评论留言<b class='sui-text-info xui-margin-l-5'>积分+2</b></p><p>5、注册后完善个人资料<b class='sui-text-info xui-margin-l-5'>积分+10</b></p><p>6、在线投稿，并被采纳<b class='sui-text-info xui-margin-l-5'>积分+100</b></p><p>瑜伽网拥有本次活动最终解释权</p></div>" style="float: left;margin-left: 202px;"> 
                <i class="sui-icon icon-tb-question xui-margin-l-5" style="color: #00b852;"></i>
                    积分：
            </div>
            <div class="xui-nature xui-text-left" style="vertical-align: top;float: left;">
                <div style="position: relative;">
                    <span data-placement="bottom"><em id="jfPrice">0</em></span>
                    <div class="xui-font-size-12 xui-pull-r">
                        <a href="javascript:;" id="useAllsc" data-score="3" style="display: block;">全部使用</a>
                        <a href="javascript:;" class="closeCreat" style="display: none;">取消使用</a>
                    </div>
                </div>
                <div style="position: relative;float: left;">
                    <p class="xui-margin-0" style="line-height: 24px;">可使用积分<b class="sui-text-info xui-margin-l-5 xui-margin-r-5" id="nowScore">3</b>分
                    </p>
                </div>
                
            </div>
            <div style="clear: both;"></div>
        </div>
        <div class="xui-pay-control" style="padding: 10px;">
            <div class="xui-nature" style="float: left;margin-left: 225px;">实付：</div>
            <div class="xui-nature xui-text-left sui-text-warning" style="float: left;">
                <em>￥</em>
                <strong class="xui-font-size-18" id="actual-price">{{ $data->oprice }}.00</strong>
            </div>
            <div style="clear: both;"></div>
        </div>
        <div class="xui-pay-control" style="padding: 10px;">
            <div class="xui-nature" style="float: left;margin-left: 197px;">购买账号：</div>
            <div class="xui-nature xui-text-left xui-text-black" style="float: left;">
                <b>{{ session('admin_login')->uname }}</b>
            </div>
            <div style="clear: both;"></div>
        </div>
        <div class="xui-pay-control" style="padding: 10px;">
            <div class="xui-nature"></div>
            <div class="xui-nature xui-text-right">
                <a href="/home/vip/order/{{ $data->oid }}" class="sui-btn btn-xlarge btn-danger" id="paySubmit">提交订单</a>
            </div>
        </div>
        </div>
    </div>
</div>
</div>
@endsection
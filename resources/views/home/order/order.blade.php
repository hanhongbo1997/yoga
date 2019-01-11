@extends('home.layout.layout')

@section('content')
<link href="/home/css/sui.css" rel="stylesheet" type="text/css">
<link href="/home/css/sui-append.css" rel="stylesheet" type="text/css">
<link href="/home/css/idangerous.swiper.css" rel="stylesheet" type="text/css">
<link href="/home/css/style.css" rel="stylesheet" type="text/css">
<script src="/home/js/jquery.min.js" type="text/javascript"></script>
<script src="/home/js/sui.min.js" type="text/javascript"></script>
<script src="/home/js/idangerous.swiper.min.js" type="text/javascript"></script>
<script src="/home/js/require.js" type="text/javascript"></script>
<br><br><br><br>
	<div class="xui-container" style="margin:20px auto;">
    <h1>支付中心</h1>
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
            <div class="finished">
                <label>
                    <span class="round">
                        <i class="sui-icon icon-pc-right"></i>
                    </span>
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
        <h4>订单编号：<span class="xui-font-size-12 xui-text-gary">201812211711113660</span></h4>
        <p class="older_lose" style="text-align:center;color:lightslategrey;display:none;font-size:22px;font-weight:bold;">当前订单已失效请重新购买</p>
        <div class="xui-margin-b-15">
                <ul class="xui-bg-gary pro-order" style="margin-bottom: 0;overflow: hidden;
    padding: 20px 30px;
    margin-bottom: 4px;background: #f8fafc!important;">
                    <li class="xui-pull-l xui-margin-r-15 pro-img">
                        <a href="javascript:;">
                            <img src="/home/images/1.png" width="150">
                        </a>
                    </li>
                    <li class="xui-pull-l pro-cont">
                        <h2>
                            <a href="javascript:;">[教练进阶] 建立身体正确姿态丨私教应用</a>
                            <span style="float:right;padding-left:10px;font-size:14px;color:#ff7300;line-height:20px;"> 1 件</span>
                        </h2>
                        <p class="xui-text-gary">付款成功后，提供<strong class="xui-margin-l-5 xui-margin-r-5 sui-text-warning">90天</strong>学习服务</p>
                    </li>
                    <li class="xui-pull-r pro-price">
                        <span class="xui-font-size-18 sui-text-warning">
                            <i class="xui-font-size-12">￥</i>228.80                        </span>
                    </li>
                </ul>
                    </div>
        <div class="xui-nature xui-text-right">
            <a href="/yuketang.html" class="sui-btn btn-xlarge btn-danger" style="display:none;" id="afresh_buy">重新购买</a>
        </div>
        <div id="pay_way" style="display: block;">
            <h4>支付方式：</h4>
            <ul>
                <li style="float: left;padding: 10px;">
                    <img src="/home/images/1ma.png" width="200">
                </li>
                <li style="float: left;padding: 10px;">
                    <img src="/home/images/2ma.png" width="200">
                </li>
            </ul>
            <div class="xui-pay-box">
                <div class="xui-pay-control" style="float: right;padding: 10px;">
                    <div class="xui-nature" style="float: left;">实付金额：</div>
                    <div class="xui-nature xui-text-left sui-text-warning" style="float: left;">
                        <em>￥</em>
                        <strong class="xui-font-size-18" id="actual-price">228.80</strong>
                    </div>
                    <div style="clear: both;"></div>
                </div>
                <div style="clear: both;"></div>
                <div class="xui-pay-control">
                    <div class="xui-nature" style="float:left;font-size:1rem;color:#745d5d;padding-top:1.2rem;" id="count_down">
                        等待买家付款：剩
                        <b id="hour">00</b><span>时</span>
                        <b id="minute">23</b><span>分</span>
                        <b id="second">05</b><span>秒</span>
                        <span> 系统将自动取消订单</span>
                    </div>
                    <div class="xui-nature"></div>
                    <div class="xui-nature xui-text-left" style="float: right;">
                        <a href="javascript:void(0);" class="sui-btn btn-xlarge btn-danger" id="payNow">立即支付</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
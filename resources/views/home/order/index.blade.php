@extends('home.userinfo.layout')

@section('contents')
<div class="xui-member-content" style="padding-left:260px;">
        <div class="xui-content xui-margin-b-15" style="line-height:30px;">
            <div class="span4">
                <h3 class="xui-margin-0">我的订单</h3>
            </div>
            <ul class="sui-nav nav-tabs nav-large tab-navbar xui-margin-b-0" style="float:right;">
                <li class="active"><a href="/pc/member/orderform.html">全部</a></li>
                <li><a href="/pc/member/orderform/status/-1.html">未付款</a></li>
                <li><a href="/pc/member/orderform/status/1.html">已付款</a></li>
                <li><a href="/pc/member/orderform/status/-2.html">已过期</a></li>
                <li><a href="/pc/member/orderform/status/2.html">已评价</a></li>
            </ul>
        </div>
                <div style="margin-top: 5rem;"></div>
            <p style="margin:0 auto;background: url(/static/mobile/image/sike-sprite.png) no-repeat -66px 0;width:50px;height:50px;"></p>
            <p style="text-align:center;">暂无订单</p>
</div>
@endsection
@extends('home.userinfo.layout')

@section('contents')
<div class="xui-member-content" style="padding-left:260px;">
        <div class="xui-content xui-margin-b-15" style="line-height:30px;">
            <div class="span4">
                <h3 class="xui-margin-0">已购视频</h3>
            </div>
            <ul class="sui-nav nav-tabs nav-large tab-navbar xui-margin-b-0" style="float:right;">
                <li class="active"><a href="/pc/member/myvideo.html">全部</a></li>
                <li><a href="/pc/member/myvideo/types/unout.html">未过期</a></li>
                <li><a href="/pc/member/myvideo/types/out.html">已过期</a></li>
            </ul>
        </div>
        <div class="xui-content">
            <ul class="collect-list">
            </ul>
        </div>
    </div>
@endsection
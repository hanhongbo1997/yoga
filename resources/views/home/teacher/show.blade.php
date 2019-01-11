@extends('home.layout.layout')

@section('content')

	<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
	<link href="/home_club/css/sui.css" rel="stylesheet" type="text/css">
	<link href="/home_club/css/sui-append.css" rel="stylesheet" type="text/css">
	<link href="/home_club/css/idangerous.swiper.css" rel="stylesheet" type="text/css">
	<link href="/home_club/css/style.css" rel="stylesheet" type="text/css">
	<script src="/home_club/js/jquery.min.js" type="text/javascript"></script>
	<script src="/home_club/js/sui.min.js" type="text/javascript"></script>
	<script src="/home_club/js/idangerous.swiper.min.js" type="text/javascript"></script>
	<script src="/home_club/js/require.js" type="text/javascript"></script>

	<script src="/home_club/js/suanfa.js" type="text/javascript"></script>
	<!-- 百度统计 -->
	<script>
        var _hmt = _hmt || [];
        (function() {
            var hm = document.createElement("script");
            hm.src = "https://hm.baidu.com/hm.js?86d144dfa4311089b25a147bd070b9d6";
            var s = document.getElementsByTagName("script")[0]; 
            s.parentNode.insertBefore(hm, s);
        })();
        (function() {
            var hm = document.createElement("script");
            hm.src = "https://hm.baidu.com/hm.js?53e14e30a91f1a17e6c32395a2ad521e";
            var s = document.getElementsByTagName("script")[0]; 
            s.parentNode.insertBefore(hm, s);
        })();
        (function() {
            var hm = document.createElement("script");
            hm.src = "https://hm.baidu.com/hm.js?d4c6042572c54aa18d179edb55ff8f3f";
            var s = document.getElementsByTagName("script")[0];
            s.parentNode.insertBefore(hm, s);
        })();
    </script>
    <!-- 头部  -->
<div class="xui-content" style="margin: 0 auto;margin-top:100px; font-size: 18px; margin-bottom: 20px; width:80%;">
    <div class="xui-container" style=" float: left;">
        <ul class="sui-breadcrumb xui-margin-0">
            <li><a href="/" style="color: #fb9966;">首页</a></li>
            <li class="active">{{ $title }}</li>
        </ul>
 </div>

    <!-- 内容 -->
<div class="xui-container" style="margin:30px auto; margin-top: 60px;">
    <div class="xui-col-xs-2">
        <div class="profile-img">
            <img src="{{ $data->teachinfoend->timg }}" data-src="" onload="loadPic(this)" style="height: 140px; width: 140px;     border-radius: 50%;">
        </div>
       
        <script type="text/javascript" src="http://v3.jiathis.com/code/jia.js" charset="utf-8"></script>
    </div>
    <div class="xui-col-xs-3 material-info">
        <h1>{{ $data->tname }} </h1>
        <p>人气：<i class="sui-text-warning xui-font-size-16" id="hotNum">330</i>
            <span class="xui-margin-l-15 click-power">
                <i class="sui-icon icon-tb-appreciatefill"></i>
                <i>给Ta点赞</i>
            </span>
        </p>
        <p>教龄：{{ $data->seniority }}</p>
        <p>擅长：{{ $data->adept }}</p>
    </div>
    <div class="xui-col-xs-3 material-info" style="padding-top:45px;">
        <p>性别：
		{{ $data->sex == 'm' ?'男':'女'}}
        </p>
        <p>国籍：{{ $data->book }}</p>
        <p>所在地：{{ $data->add }}</p>
    </div>
    <div class="xui-col-xs-4 xui-padded-l-15 xui-padded-r-15" style="box-sizing:border-box;">
        <div class="simulate-mac">
            <div class="simulate-mac-title">
                <span></span><span></span><span></span>
            </div>
            <div class="xui-content xui-padded-15" style="line-height:22px;">
                {{ $data->intor }}
            </div>
        </div>
   </div>

</div></div>
<style>
p {
    margin-bottom: 18px;
}
.material-info p {
    color: #666;
    font-size: 17px;
}
.xui-col-xs-4 {
    width: 33.33333333%;
}

element.style {
    box-sizing: border-box;
}
.simulate-mac {
    width: 100%;
    border-radius: 4px;
    overflow: hidden;
    background: #EEEEEE;
}
.simulate-mac .simulate-mac-title span:nth-child(1) {
    background: #FF5F57;
}
.simulate-mac .simulate-mac-title span {
    border-radius: 100%;
    display: inline-block;
    width: 12px;
    height: 12px;
    margin-right: 8px;

}
.xui-content {
    display: table;
    width: 100%;
    height: auto;
    box-sizing: border-box;
}
.hall-left-list {
    height: 36px;
    line-height: 36px;
    margin-left: -10px;
    margin-bottom: 4px;
}
.hall-left-list a {
    display: block;
    height: 100%;
    color: #666;
    padding: 0 10px 0 0;
    text-indent: 10px;
}
.simulate-mac .simulate-mac-title span:nth-child(2) {
    background: #FFBD2E;
}
.simulate-mac .simulate-mac-title span:nth-child(3) {
    background: #28CA42;
}
.simulate-mac .simulate-mac-title span {
    border-radius: 100%;
    display: inline-block;
    width: 12px;
    height: 12px;
    margin-right: 8px;
}
.simulate-mac .simulate-mac-title {
    background: #E3E3E3;
    height: 30px;
    padding: 10px 20px;
}
.hall-left-list a:hover{
	color: #fff;
}
.hall-box{
	display: none;
}
.hall-box:first-of-type{
	
}
.on{
    background: #f0f5f1;
 
}

</style>
<script>
	$(function(){
		$('.hall-left-list').mouseover(function(){
			
		
            $(this).css('background','#fb9966');
			var n = $(this).index();//获取当前下标
					// 让div 都隐藏
					$('.hall-box').hide();
					// 让指定显示
					$('.hall-box:eq('+n+')').show();
			}).mouseout(function(){
			$(this).css('background','');
         
			
		});

	});
</script>
<div class="xui-content xui-bg-white">
    <div class="xui-container" style="margin:20px auto;">
        <div class="xui-col-xs-2">
            <div class="xui-content xui-margin-t-15 xui-padded-l-15 xui-padded-r-15">
                <div class="hall-left-list on" data-id="hall-info" >
                    <a href="javascript:;">
                        <span class="xui-pull-l" style="font-size: 16px;">Ta的简历</span>
                    </a>
                </div>
                <div class="hall-left-list" data-id="hall-class">
                    <a href="javascript:;"  class="fontsize">
                        <span class="xui-pull-l" style="font-size: 16px;">Ta的课程</span>
                        <!-- <span class="xui-pull-r">0</span> -->
                    </a>
                </div>
                <div class="hall-left-list" data-id="hall-commont">
                    <a href="javascript:;"  class="fontsize">
                        <span class="xui-pull-l" style="font-size: 16px;">Ta的照片</span>
                    </a>
                </div>
            </div>
        </div>
  <div class="xui-col-xs-10 hall-box" id="hall-info" style="display: block;">
            <div style="font-size:22px;height:34px;line-height:34px;border-bottom:1px solid #ebebeb;margin-bottom:16px;">Ta的简历</div>
<div class="xui-content">
{!! $data->teachinfoend->tphone !!}
 </div>
        </div>
        <div class="xui-col-xs-10 hall-box xui-hide" id="hall-class">
            <div style="font-size:22px;height:34px;line-height:34px;border-bottom:1px solid #ebebeb;margin-bottom:16px;">Ta的课程</div>
            <div class="xui-content">
              {!! $data->teachinfoend->course  !!}
            </div>
        </div>
        <div class="xui-col-xs-10 hall-box xui-hide" id="hall-commont">
            <div style="font-size:22px;height:34px;line-height:34px;border-bottom:1px solid #ebebeb;margin-bottom:16px;">Ta的照片

            </div>
            <div class="xui-content xui-padded-15">
                <div class="xui-content hallpage-pic-list">
        @foreach ($arr as $k=>$v)
                  <a href="/home_club/image/20180925/e9daf6cdfb789293768e370f6903637c.jpg" class="group4 cboxElement xui-col-xs-3 xui-padded-l-10">
                    <img src="{{ $v }}" data-src="" onload="loadPic(this)" style="height: 123px; width: 196px; margin:10px 0;">
                </a>
         @endforeach                  
         </div>


          
        
</div></div></div></div>

@endsection
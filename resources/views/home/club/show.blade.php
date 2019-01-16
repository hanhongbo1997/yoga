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
<div class="xui-container" style="margin:30px auto; margin-top:100px;">
    <div class="xui-col-xs-4">
        <a href="/Public/attached/image/20161219/20161219145830_65463.png" class="group4 cboxElement" style="display:block;position:relative;border:1px solid #ebebeb;box-sizing:border-box;">
            <img src="{{ $data->cimg }}" data-src="" onload="loadPic(this)" style="height: 257px; width: 411px;">
            <span class="hallpage-mainpic" style="color: #fb9966">共{{ $data->countimg }}张图片</span>
        </a>
    </div>
    <div class="xui-col-xs-8">
        <div class="xui-content xui-padded-l-15" style="height:135px;">
            <h1 class="xui-margin-t-0 xui-margin-b-15" >{{ $data->cname }}                <span class="xui-pull-r xui-text-gary" style="font-weight:normal;">
                    <!-- <i class="sui-icon icon-tb-attentionfill"></i> -->
                    <i style="width: 23px;height: 16px;background-image: url('/home_club/images/eye_icon.png');display: inline-block;"></i>
                    10051                </span>
            </h1>
            <p >{{ $data->caddr }}</p>
            <p>电话：{{ $data->clubdetails->cphone }}</p>
            <p>馆内名师：{{ $data->clubdetails->teach }}</p>
        </div>
        <div class="xui-content hallpage-pic-list">
        @foreach ($arr as $k=>$v)
                  <a href="/attached/image/20180925/e9daf6cdfb789293768e370f6903637c.jpg" class="group4 cboxElement xui-col-xs-3 xui-padded-l-10">
                    <img src="{{ $v }}" data-src="" onload="loadPic(this)" style="height: 123px; width: 196px; margin:10px 0;">
                </a>
         @endforeach                  
         </div>
    </div>
</div>
<style>
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
                        <span class="xui-pull-l">会馆简介</span>
                    </a>
                </div>
                <div class="hall-left-list" data-id="hall-class">
                    <a href="javascript:;"  class="fontsize">
                        <span class="xui-pull-l">会馆课程</span>
                        <!-- <span class="xui-pull-r">0</span> -->
                    </a>
                </div>
                <div class="hall-left-list" data-id="hall-commont">
                    <a href="javascript:;"  class="fontsize">
                        <span class="xui-pull-l">会员评论</span>
                    </a>
                </div>
            </div>
        </div>
  <div class="xui-col-xs-10 hall-box" id="hall-info" style="display: block;">
            <div style="font-size:22px;height:34px;line-height:34px;border-bottom:1px solid #ebebeb;margin-bottom:16px;">会馆简介</div>
<div class="xui-content">
{!! $data->clubdetails->cinfo !!}
 </div>
        </div>
        <div class="xui-col-xs-10 hall-box xui-hide" id="hall-class">
            <div style="font-size:22px;height:34px;line-height:34px;border-bottom:1px solid #ebebeb;margin-bottom:16px;">会馆课程</div>
            <div class="xui-content">
              {!! $data->clubdetails->lesson !!}
            </div>
        </div>
        <div class="xui-col-xs-10 hall-box xui-hide" id="hall-commont">
            <div style="font-size:22px;height:34px;line-height:34px;border-bottom:1px solid #ebebeb;margin-bottom:16px;">会员评论</div>
            <div class="xui-content xui-padded-15">
                <!--评论模块-->
<div class="videoWord" style="background: #f9f9f9;">
@if($info == null)
            <div class="discuss-cont">
            <span class="discuss-img">
                 <img src="/home/picture/user_moren.png">
            </span>
            <div class="discuss-cont-inner">
                <div class="discuss-cont-inner-box">
                    <div name="content" id="replyItem" style="background: #fff;height: 80px;">
                        <a href="/home/logon">
                       <button style="margin-left: 430px;margin-top: 20px;border: 1px solid #46c1f3;background: skyblue;color: white;"> 请登录后评论 </button></a>
                    </div>
                </div>
            </div>
        </div>
        <div style="clear: both"></div>
        @else
        <form action="/home/clubcomment" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="user_id" value="{{ session('admin_login')->uid }}">
            <input type="hidden" name="comment_id" value="0">
            <input type="hidden" name="club_id" value="{{ $data->cid }}">
            <div class="discuss-cont">
                <span class="discuss-img">
                     <img src="{{ $info->uimg }}">
                </span>
                <div class="discuss-cont-inner">
                    <div class="discuss-cont-inner-box">
                        <textarea placeholder="吐槽？膜拜？或者你还可以找老师聊聊！？" name="content" id="replyItem" style="background: #fff"></textarea>
                    </div>
                    <div class="xui-text-right xui-content xui-margin-t-15">
                        <button type="submit" id="subDiscus" style="color: #fff;background-color: #43cd6e;border: 1px solid #34c360;width: 100px;height: 40px;font-size: 18px;" onmouseover="this.style.background = '#49de79';" onmouseout="this.style.background='#43cd6e';">发表评论</button>
                    </div>
                </div>
            </div>
            <div style="clear: both"></div>
        </form>
        @if($comment->isEmpty())
        <p style="text-align: center;height: 200px;font-size: 20px;line-height: 200px;">还没有评论哦~快来留下你的评价吧</p>
        @else
            @foreach($comment as $k=>$v)
                <div style=" border-radius: 5px;padding: 5px;margin: 5px;">
                    <div class="xui-content xui-bg-white xui-margin-b-15 xui-padded-10 review-again-list" style="background: #f9f9f9!important;"> 
                        <div class="review-again-conL" style="height: auto;"> 
                            <div class="discuss-cont xui-margin-b-10"> 
                                <span class="discuss-img" style="width: 42px;height: 42px;display: block;float: left;border-radius: 50%;overflow: hidden;border: 1px solid #ebebeb" />
                                    <img src="/home/images/logo.jpg" style="width: 100%;height: 100%;" /> 
                                </span> 
                                <div class="discuss-cont-inner xui-border-b" style="padding-left:42px;margin-left: 15px;"> 
                                    <h4 class="xui-margin-0" style="display: block;margin-block-start: 1.33em;margin-block-end: 1.33em;margin-inline-start: 0px;margin-inline-end: 0px;font-weight: bold;font-size: 14.04px;line-height: 21.06px;">评论用户名ID是：</h4> 
                                    <div class="xui-content xui-padded-t-5 xui-padded-b-5" style="display: table;width: 100%;height: auto;box-sizing: border-box;font-size: 14px;">
                                        {{ $v->content}} 
                                    </div> 
                                </div> 
                                <p style="color: #999;font-size: 12px;margin-left: 55px; margin-top: 10px;">{{ \Carbon\Carbon::parse($v->created_at)->diffForHumans() }}评论</p>
                            </div>
                        </div>  
                    </div> 
                    @foreach($v->sub as $kk=>$vv)
                    <div class="xui-content xui-bg-white xui-margin-b-15 xui-padded-10 review-again-list" style="background: #fff!important;margin-left: 50px;width: 900px;border-radius: 5px;margin-bottom: 0px;padding-bottom: 0px;  "> 
                        <div class="review-again-conL" style="height: auto;margin-bottom: 0px;"> 
                            <div class="discuss-cont xui-margin-b-10"> 
                                <span class="discuss-img" style="width: 24px;height: 24px;display: block;float: left;border-radius: 50%;overflow: hidden;border: 1px solid #ebebeb" />
                                    <img src="/home/images/logo.jpg" style="width: 100%;height: 100%;" /> 
                                </span> 
                                <div class="discuss-cont-inner xui-border-b" style="padding-left:34px;margin-left: 15px;"> 
                                    <h4 class="xui-margin-0" style="display: block;margin-block-start: 1.33em;margin-block-end: 1.33em;margin-inline-start: 0px;margin-inline-end: 0px;font-weight: bold;font-size: 14.04px;line-height: 21.06px;">评论用户名ID是：{{ $vv->user_id}}</h4> 
                                    <div name="content" style="display: table;width: 100%;height: auto;box-sizing: border-box;font-size: 14px;margin-bottom: 10px;margin-top: 10px;">
                                        {{ $vv->content}} 
                                    </div> 
                                </div> 
                                <p style="color: #999;font-size: 12px;margin-left: 50px; margin-top: 10px;">{{ \Carbon\Carbon::parse($vv->created_at)->diffForHumans() }}回复</p>
                            </div>  
                        </div>
                    </div>
                    @endforeach 
            
            <form action="/home/clubcomment" method="post">
            {{ csrf_field() }}
                <input type="hidden" name="user_id" value="{{ $info->uid }}">
                <input type="hidden" name="club_id" value="{{ $data->cid }}">
                <input type="hidden" name="comment_id" value="{{ $v->id }}">
                <div class="" style="width: 900px;margin-left:50px;margin-top:0px;background: #fff;padding: 10px;"> 
                    <textarea style="float: left;width: 808px;height:35px;background: #fff;box-shadow: 0px 0px 1px 1px #ccc;padding: 5px;" name="content" placeholder="绿色上网，文明回复" ></textarea> 
                    <button style="color: #fff;background-color: #f9c34f;border: 1px solid #f9b728;width: auto;height: 37px;font-size: 16px;margin-left: 10px;">回复</button>
                    <div style="clear: both;"></div>
                </div>
            </form>
            </div> 
        @endforeach
    @endif
@endif
    </div>

            </div>
        </div>
    </div>


@endsection
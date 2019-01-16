@extends('home.layout.layout')

@section('content')
<div class="main" style="margin-bottom:2rem;">
    <div class="bread" style="margin-bottom: 1rem;">
        <a href="index" title="">首页</a><span>|</span>
        <a href="/video" title="">瑜伽视频</a><span>|</span>
        <a href="javascript:;" title="">{{ $data->vname }}</a>
    </div>
    <!--视频-->
    <div class="m" id="m1">
        <div id="myVedeo">
            

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>wake</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link href="/css/video-js.css" rel="stylesheet">
    <script src="/js/video.js"></script>
    <script src="/js/videojs-ie8.min.js"></script>
    <script src="/js/videojs-flash.js"></script>
    <script src="/js/videojs-contrib-hls.js"></script>
    <script>
        videojs.options.flash.swf = "/app/aetherupload/{{ $data->videodetails->video }}";
    </script>
    <style>
    	.video-js .vjs-big-play-button{
    		background:url(/home/images/power1.png) no-repeat;
    		background-size:100% 100%;
    		border:none;
    		width:4.25rem;
    		height:4.25rem;
    		border-radius:2.125rem;
    	}
    	.video-js .vjs-big-play-button *{
    		color:transparent;
    	}
    </style>

    	<video id="player1" width=1100 height=618 controls poster="{{ $data->img }}">
            <source src="/app/aetherupload/{{ $data->videodetails->video }}" type="video/mp4">
        </video>
        <script>plyr.setup();</script>
        </div>    
    </div>

</div>
<div class="content3">
    <!--文字介绍-->
    <div class="videoWord">
        <dl>
            <dt><i>视</i>频介绍</dt>
            <dd>{!! $data->videodetails->details !!}</dd>
        </dl>
        <dl>
            <dt><i>发</i>布时间</dt>
            <dd>{{ $data->created_at }}</dd>
        </dl>
    </div>
    <!--评论-->
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
                    <div class="xui-text-right xui-content xui-margin-t-15">
                        <button type="submit" id="subDiscus" style="color: #fff;background-color: #43cd6e;border: 1px solid #34c360;width: 100px;height: 40px;font-size: 18px;" onmouseover="this.style.background = '#49de79';" onmouseout="this.style.background='#43cd6e';">发表评论</button>
                    </div>
                </div>
            </div>
            <div style="clear: both"></div>
            @else
            <form action="/home/comment" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="user_id" value="{{ $info->uid }}">
            <input type="hidden" name="comment_id" value="0">
            <input type="hidden" name="video_id" value="{{ $data->id }}">
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
            @endif
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
            <form action="/home/comment" method="post">
            {{ csrf_field() }}
                <input type="hidden" name="user_id" value="">
                <input type="hidden" name="video_id" value="{{ $data->id }}">
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
    </div>
    <!--相关推荐-->
    <div class="basicArea">
        
            <div class="basicHead">
                <img src="/home/picture/likemost.png">
            </div>
            <div class="suggseDiv">
                <ul class="courseList">
                    @foreach($video as $k=>$v)
                        
                            <li class="fl">
                                
                                
                                    <dl>
                                        <a href="/home/video/{{ $v->id }}/edit" title="">
                                            <dt>
                                                <img src="/uploads/{{ $v->img }}" alt=""/>
                                            </dt>
                                            <dd class="courseName">
                                                <div class="fireCourse oh">
                                                    <var class="fl">{{ $v->vname }}</var>
                                                    
                                                </div>
                                
                                                <div class="yellow_blue">
                                                    
                                                    
                                                </div>
                                            </dd>
                                        </a>
                                    </dl>    
                            </li>         
                      @endforeach     
                    <div class="clear">&nbsp;</div>
                </ul>
            </div>

            <!--课程介绍-->
            <div class="introduceCourse">
                    许多人认为一定只有决心修行的人才有必要做冥想的练习，但其实生活才是我们修行的场所。通过此系列课程，我们将瑜伽冥想的相关知识和方法与日常生活联系起来，通过这七节课的学习，从认知的改变出发，让瑜伽冥想引领我们走向更好更快乐更喜悦的生活。
            </div>
        
    </div>
</div>
<!--底部-->
@endsection
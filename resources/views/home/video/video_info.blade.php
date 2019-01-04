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
        videojs.options.flash.swf = "/uploads/{{ $data->videodetails->video }}";
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


	<video id="player1" width=1100 height=618 class="video-js vjs-default-skin vjs-big-play-centered" controls poster="http://www.wakeyoga.com/image/pc/teachVideo.jpg">
        <!-- <source src="http://w20.wakeyoga.com/VIDEO_BG_01_1516860900203.mp4?e=1519899334&token=NRt96COJgaNUYOIx5fGbi6z7uztfjmTH09UKN58M:5JCFuxy0bvZubpjpewu7xr2Yi7w=" type="video/mp4"> -->
    </video>



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
    <div class="meassage_out">
        
            
                <h3>评论(148)</h3>
                <ul>
                        <li>
                            <dl class="oh">
                                <dt class="fl">
                                    <img src="/home/picture/006yttyajw8f7uoo0utbbj30c80ic75r.jpg">
                                </dt>
                                <dd class="message_name">
                                        艾小山扇1314
                                </dd>
                                <dd class="message_time">
                                    2018-10-27
                                </dd>
                            </dl>
                            <div class="message_word">
                                
                                    
                                    老师的课非常好，其实瑜伽不仅仅是修身更重要的是修心
                            </div>
                        </li>
                    
                        <li>
                            <dl class="oh">
                                <dt class="fl">
                                    <img src="/home/picture/1_1467189229349.jpg">
                                </dt>
                                <dd class="message_name">
                                        Wake
                                </dd>
                                <dd class="message_time">
                                    2018-10-26
                                </dd>
                            </dl>
                            <div class="message_word">
                                
                                     回复<span class="reply">宋溫暖</span>：感谢您的喜欢，我们会多上线老师的课程哦~
                                    
                            </div>
                        </li>
                    
                        <li>
                            <dl class="oh">
                                <dt class="fl">
                                    <img src="/home/picture/1_1467189229349.jpg">
                                </dt>
                                <dd class="message_name">
                                        Wake
                                </dd>
                                <dd class="message_time">
                                    2018-10-26
                                </dd>
                            </dl>
                            <div class="message_word">
                                
                                     回复<span class="reply">136****2902</span>：不要着急，第一次练习是正常的，跟着自己的感觉，多加练习，坚持习练是会有很大的改善和效果的哦~
                                    
                            </div>
                        </li>
                    
                        <li>
                            <dl class="oh">
                                <dt class="fl">
                                    <img src="/home/picture/411594_1505035059931.jpg">
                                </dt>
                                <dd class="message_name">
                                        136****2902
                                </dd>
                                <dd class="message_time">
                                    2018-10-24
                                </dd>
                            </dl>
                            <div class="message_word">
                                
                                    
                                    第一天打卡，刚开始时呼吸有点急促，后来肩膀放松了，呼吸就自然了，不过一关注，肩膀又紧张了，调整了好几次，才放松下来，然后就是杂念重生，跑掉了👿
                            </div>
                        </li>
                    
                        <li>
                            <dl class="oh">
                                <dt class="fl">
                                    <img src="/home/picture/1486042577_1534629579966.jpg">
                                </dt>
                                <dd class="message_name">
                                        张玉梅
                                </dd>
                                <dd class="message_time">
                                    2018-10-24
                                </dd>
                            </dl>
                            <div class="message_word">
                                
                                    
                                    老师非常好，讲解的很清晰
                            </div>
                        </li>
                    
                </ul>
                <div class="fixMore">
                    <a href="http://www.wakeyoga.com/toDownLoad.html">下载Wake APP查看更多评论</a>
                </div> 
    </div>
    <!--相关推荐-->
    <div class="basicArea">
        
            <div class="basicHead">
                <img src="/home/picture/likemost.png">
            </div>
            <div class="suggseDiv">
                <ul class="courseList">
                    
                        
                            <li class="fl">
                                
                                
                                    <dl>
                                        <a href="http://www.wakeyoga.com/2meditationlesd385.html" title="">
                                            <dt>
                                                <img src="/home/picture/13b3208c546946d68e14d0bd7de960c8.jpg" alt=""/>
                                            </dt>
                                            <dd class="courseName">
                                                <div class="fireCourse oh">
                                                    <var class="fl">冥想音乐</var>
                                                    
                                                </div>
                                                <div class="seeNum">
                                                    <i><img src="/home/picture/see.png"
                                                            alt=""/>6345395</i>
                                                    &nbsp;&nbsp;&nbsp;
                                                    <i class="fireTime"><img src="/home/picture/jie.png"
                                                                             alt=""/>26节</i>
                                                </div>
                                                <div class="yellow_blue">
                                                    
                                                    
                                                </div>
                                            </dd>
                                        </a>
                                    </dl>
                                
                                
                                
                            </li>
                        
                        
                    
                        
                            <li class="fl">
                                
                                
                                
                                    <dl>
                                        <a href="http://www.wakeyoga.com/auth/2comprehensivelesd378.html"
                                           title="">
                                            <dt>
                                                <img src="/home/picture/7a1c6cad1a2d425980b5b85322cc7eb6.jpg" alt=""/>
                                            </dt>
                                            <dd class="courseName">
                                                <div class="fireCourse oh">
                                                    <var class="fl">流动中的冥想流瑜伽</var>
                                                    
                                                </div>
                                                <div class="seeNum">
                                                    <i><img src="/home/picture/see.png"
                                                            alt=""/>388772</i>
                                                    &nbsp;&nbsp;&nbsp;
                                                    <i class="fireTime"><img src="static/picture/jie.png"
                                                                             alt=""/>3节</i>
                                                </div>
                                                <div class="yellow_blue">
                                                    
                                                    <img
                                                            src="/home/picture/vip.png" alt=""
                                                            class="yellowVip">
                                                </div>
                                            </dd>
                                        </a>
                                    </dl>
                                
                                
                            </li>
                        
                        
                    
                        
                            <li class="fl">
                                
                                
                                    <dl>
                                        <a href="http://www.wakeyoga.com/2meditationlesd114.html" title="">
                                            <dt>
                                                <img src="/home/picture/98777cae43dd49a08abcb26c5390b12b.jpg" alt=""/>
                                            </dt>
                                            <dd class="courseName">
                                                <div class="fireCourse oh">
                                                    <var class="fl">冥想本质</var>
                                                    
                                                </div>
                                                <div class="seeNum">
                                                    <i><img src="/home/picture/see.png"
                                                            alt=""/>1123311</i>
                                                    &nbsp;&nbsp;&nbsp;
                                                    <i class="fireTime"><img src="/home/picture/jie.png"
                                                                             alt=""/>15节</i>
                                                </div>
                                                <div class="yellow_blue">
                                                    
                                                    
                                                </div>
                                            </dd>
                                        </a>
                                    </dl>
                                
                                
                                
                            </li>
                        
                        
                    
                        
                            <li class="fl">
                                
                                
                                
                                
                                    <dl>
                                        <a href="http://www.wakeyoga.com/auth/2pland4452.html" title="">
                                            <dt>
                                                <img src="/home/picture/8735023eda5f4bc59843f31cd5eb0e61.jpg" alt=""/>
                                            </dt>
                                            <dd class="courseName">
                                                <div class="fireCourse oh">
                                                    <var class="fl">7天正念冥想计划</var>
                                                    
                                                </div>
                                                <div class="seeNum">
                                                    <i><img src="/home/picture/see.png"
                                                            alt=""/>333410</i>
                                                    &nbsp;&nbsp;&nbsp;
                                                    <i class="fireTime"><img src="/home/picture/jie.png"
                                                                             alt=""/>7节</i>
                                                </div>
                                                <div class="yellow_blue">
                                                    
                                                    <img
                                                            src="/home/picture/vip.png" alt=""
                                                            class="yellowVip">
                                                </div>
                                            </dd>
                                        </a>
                                    </dl>
                                
                            </li>
                        
                        
                    
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
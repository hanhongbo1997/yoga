@extends('home.layout.layout')

@section('content')

	
	<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
	<link href="/home/css/sui.css" rel="stylesheet" type="text/css">
	<link href="/home/css/sui-append.css" rel="stylesheet" type="text/css">
	<link href="/home/css/idangerous.swiper.css" rel="stylesheet" type="text/css">
	<link href="/home/css/style.css" rel="stylesheet" type="text/css">
	<script src="/home/js/jquery.min.js" type="text/javascript"></script>
	<script src="/home/js/sui.min.js" type="text/javascript"></script>
	<script src="/home/js/idangerous.swiper.min.js" type="text/javascript"></script>
	<script src="/home/js/require.js" type="text/javascript"></script>

<style>
	.nav_head div>span>p.nav_title{font-size: 18px;}
	.nav_head div>span>p.nav_title a {color: #4d4d4d;text-decoration: none;}
</style>

<body style="min-width:1280px;">

<style type="text/css">
    .news-item{overflow:hidden;border-bottom:1px dotted #ebebeb;}
    .news-item:hover{cursor:pointer;background:#FFF9EB;}
    .news-item a:hover{text-decoration:underline;}
    .news-item-info{padding:25px 90px 25px 170px;display:block;position:relative;}
    .news-item-info h2{line-height:20px;font-size:16px;font-weight:500;max-width:700px;}
    .news-item-info h2 a{color:#333;}
    .news-item-info span.xui-pull-l{font-size:13px;}
    .news-item-info .intro{color:#666;}
    .news-item-common{position:absolute;right:0;top:50%;transform:translateY(-50%);-webkit-transform:translateY(-50%);-moz-transform:translateY(-50%);width:80px;height:100%;overflow:hidden;}
    .news-item-common a{display:block;width:100%;height:100%;}
    .news-item-common a .news-item-common-inner{font-size:13px;position:absolute;top:50%;transform:translateY(-50%);-webkit-transform:translateY(-50%);-moz-transform:translateY(-50%);right:25px;}
    .news-item-common a .news-item-common-box{background:#4dc060;color:#fff;height:24px;min-width:24px;line-height:24px;display:inline-block;border-radius:3px;padding:0 2px;position:relative;text-align:center;}
    .news-item-common a .news-item-common-arrow{display:block;width:0;height:0;border:10px solid #4dc060;border-bottom-color:transparent;border-top-color:transparent;border-right-color:transparent;position:absolute;right:-10px;top:10px;z-index:-1;}
</style>
<br>
<br>
<br>
<br>
<div class="xui-content">
    <div class="xui-container">
        <ul class="sui-breadcrumb xui-margin-0">
            <li><a href="/index.html">首页</a></li>
            <li class="active">资讯</li>
        </ul>
    </div>
</div>
<div class="xui-content xui-bg-white">
    <div class="xui-container course-list">
        <div class="course-nav-row" style="border:0;">
            <span class="hd xui-pull-l">分类：</span>
            <div class="bd">
                <ul class="">
                                                <li class="course-nav-item on" >
                                <a href="/news/9.html">行业快报</a>
                            </li>
                                                    <li class="course-nav-item">
                                <a href="/news/10.html">业界要闻</a>
                            </li>
                                                    <li class="course-nav-item">
                                <a href="/news/11.html">明星瑜伽</a>
                            </li>
                                                    <li class="course-nav-item">
                                <a href="/news/12.html">热点人物</a>
                            </li>
                                        </ul>
            </div>
        </div>
    </div>
</div>
<div class="xui-container" style="margin:20px auto;">
    <div class="xui-content-left xui-pull-l">
    <!-- <ul>
        <h3>商城优惠券</h3>
        <div class="coupon">
            <div class="l-coupon">
                <i>￥</i>9??<br/>
                <span class="xui-font-size-14">元优惠券</span>
            </div>
            <a href="" class="getnow">立即领取</a>
        </div>
    </ul> -->
    <ul>
        <h3>在线客服</h3>
        <div class="xui-content xui-padded-l-15 xui-padded-r-15">
            <a href="javascript:;" class="sui-text-center xui-pull-l" style="display:inline-block;width:50%;text-align:center;color:#666;cursor:pointer;" data-placement="bottom" data-toggle="tooltip" title="<img src='picture/service2_code.jpg' style='width:180px;'><p class='sui-text-center'>微信号：oops1106</p>">
                <img src="picture/service2.jpg" class="xui-img-radius xui-border" style="width:48px;"/>
                <p class="xui-margin-0 xui-padded-t-5">客服瑶瑶</p>
            </a>
            <a href="javascript:;" class="sui-text-center" style="display:inline-block;width:50%;text-align:center;color:#666;cursor:pointer;" data-placement="bottom" data-toggle="tooltip" title="<img src='picture/service1_code.jpg' style='width:180px;'><p class='sui-text-center'>微信号：YOGA592">
                <img src="picture/service1.jpg" class="xui-img-radius xui-border" style="width:48px;" />
                <p class="xui-margin-0 xui-padded-t-5">店长乐乐</p>
            </a>
        </div>
    </ul>
    
    <style>
        /* 活动角标 */
        .cornerL {position: absolute;top: 2px;left: 3px;background-size: contain;}
        .cornerR {position: absolute;top: 2px;right: 3px;background-size: contain;}
        .shuang11 {width:76px;height: 24px;background-image: url('images/activity11.png');filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(src="/static/pc/image/activity11.png",sizingMethod='scale');}
        .shuang12 {width:76px;height: 24px;background-image: url('images/activity12.png');filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(src="/static/pc/image/activity11.png",sizingMethod='scale');}
        .shuang-egg {width:76px;height: 24px;background-image: url('images/db_egg_76_24.png');filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(src="/static/pc/image/act/double_egg/egg_zhekou_76_24.png",sizingMethod='scale');}
        .egg-zhekou{width:76px;height: 24px;background-image: url('images/egg_zhekou_76_24.png');filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(src="/static/pc/image/activity11.png",sizingMethod='scale');}
        .egg-cornerL{width:30px;height: 30px;background-image: url('images/egg_cornerl.png');background-repeat: no-repeat; filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(src="/static/pc/image/act/double_eggegg_cornerL.png",sizingMethod='scale');}
        .newyear2018 {width:76px;height: 24px;background-image: url('images/newyear_76_24.png');background-repeat: no-repeat; filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(src="/static/pc/image/act/newyear/small/newyear_76_24.png",sizingMethod='scale');}
        .lijian {width:76px;height: 24px;background-image: url('images/corner_01_76_24.png')}
        .miaosha {width:76px;height: 24px;background-image: url('images/corner_02_76_24.png')}
        .mansong {width:76px;height: 24px;background-image: url('images/corner_03.jpg')}
        .zhekou {width:76px;height: 24px;background-image: url('images/corner_04.jpg')}
        .remen {width:44px;height: 24px;background-image: url('images/corner_05.jpg')}
        .chaozhi {width:44px;height: 24px;background-image: url('images/corner_06.jpg')}
        .tuijian {width:44px;height: 24px;background-image: url('images/corner_07.jpg')}
        .zuixin {width:44px;height: 24px;background-image: url('images/corner_08.jpg')}
    </style>
    <ul>
        <h3>课堂推荐</h3>
                    <li>
                <a href="/skip/7658.html" target="_blank">
                    <img src="picture/nopic_640_400.png" data-src="/attached/image/20181230/cc52f688761ea721f3aa0b1e6e8f8754thumb.jpg" onload="loadPic(this)">
                    <!-- <span class="cornerL shuang-egg"></span> -->
                    <!-- <span class="cornerR zhekou"></span> -->
                    <!-- <span class="cornerL egg-cornerL"></span> -->
                    <!-- <span class="cornerL newyear2018"></span> -->
                    <h4>[提升课程] 中高级丨空中瑜伽串联</h4>
                </a>
                <p class="xui-font-size-12">
                    <span class="xui-pull-l sui-text-warning">
                        <em>￥</em>309                    </span>
                    <span class="xui-pull-r xui-text-right">
                        <i class="sui-text-warning">81</i>人已购买
                    </span>
                </p>
            </li>
                    <li>
                <a href="/skip/7744.html" target="_blank">
                    <img src="picture/nopic_640_400.png" data-src="/attached/image/20181230/60d0171942ef1cc7b2a18177115c6103thumb.jpg" onload="loadPic(this)">
                    <!-- <span class="cornerL shuang-egg"></span> -->
                    <!-- <span class="cornerR zhekou"></span> -->
                    <!-- <span class="cornerL egg-cornerL"></span> -->
                    <!-- <span class="cornerL newyear2018"></span> -->
                    <h4>[流动串联] 正位流瑜伽丨序列练习</h4>
                </a>
                <p class="xui-font-size-12">
                    <span class="xui-pull-l sui-text-warning">
                        <em>￥</em>229                    </span>
                    <span class="xui-pull-r xui-text-right">
                        <i class="sui-text-warning">37</i>人已购买
                    </span>
                </p>
            </li>
                    <li>
                <a href="/skip/7927.html" target="_blank">
                    <img src="picture/nopic_640_400.png" data-src="/attached/image/20181230/46f083e9bfc77d08c7ebdfba06401a12thumb.jpg" onload="loadPic(this)">
                    <!-- <span class="cornerL shuang-egg"></span> -->
                    <!-- <span class="cornerR zhekou"></span> -->
                    <!-- <span class="cornerL egg-cornerL"></span> -->
                    <!-- <span class="cornerL newyear2018"></span> -->
                    <h4>[热力燃脂] 小器械与私教应用</h4>
                </a>
                <p class="xui-font-size-12">
                    <span class="xui-pull-l sui-text-warning">
                        <em>￥</em>179                    </span>
                    <span class="xui-pull-r xui-text-right">
                        <i class="sui-text-warning">14</i>人已购买
                    </span>
                </p>
            </li>
                    <li>
                <a href="/skip/7933.html" target="_blank">
                    <img src="picture/nopic_640_400.png" data-src="/attached/image/20190102/8b5b9cbf2bd4a314d1dbbac2d8eae7eethumb.jpg" onload="loadPic(this)">
                    <!-- <span class="cornerL shuang-egg"></span> -->
                    <!-- <span class="cornerR zhekou"></span> -->
                    <!-- <span class="cornerL egg-cornerL"></span> -->
                    <!-- <span class="cornerL newyear2018"></span> -->
                    <h4>[减脂塑形] 急速瘦身丨健身动感瑜伽</h4>
                </a>
                <p class="xui-font-size-12">
                    <span class="xui-pull-l sui-text-warning">
                        <em>￥</em>229                    </span>
                    <span class="xui-pull-r xui-text-right">
                        <i class="sui-text-warning">13</i>人已购买
                    </span>
                </p>
            </li>
            </ul>

    <ul class="xui-padded-l-10 xui-padded-r-10">
        <div class="video-cont-list">
            <h3 class="video-cont-list-title">大家都在关注</h3>
            <div class=" xui-content video-right-tag">
                <a href="/course/26/10.html">哈他瑜伽</a>
                <a href="/course/26/8.html">阴瑜伽</a>
                <a href="/course/26/31.html">球瑜伽</a>
                <a href="/siftclass/7057.html" title="孕妇瑜伽">孕妇瑜伽</a>
                <a href="/siftclasslist.html" title="瑜伽教练培训">瑜伽教练培训</a>
                <a href="/course/23/-1,25.html" title="瑜伽入门">瑜伽入门</a>
                <a href="/course/25.html" title="瑜伽教学初级视频">瑜伽教学初级视频</a>
                <a href="/course/26/9.html">阿斯汤加</a>
            </div>
        </div>
    </ul>
</div>
<script type="text/javascript">
    var pathArray = location.pathname.split('/');
    $("a[href*='"+pathArray[pathArray.length-1]+"']").addClass('xui-active');
</script>
<div class="xui-member-content" style="padding-left:240px;">
    <div class="xui-content xui-bg-white xui-padded-15 xui-padded-t-0">
        <div class="xui-content course-list-header xui-margin-0 xui-padded-15 xui-border-b">
            <div class="xui-pull-l">
                <a href="/news/9.html" class="New on">最新</a> 
                <a href="/news/9/hot.html" class="Hot">热门</a>
            </div>
        </div>
        <div class="xui-content news-list">

        	@foreach($data as $k=>$v)
             <div class="news-item">
                <a href="/home/news/{{ $v->id }}/edit" class="xui-pull-l" target="_blank" style="margin:25px 15px;">
                	<img src="/uploads/{{$v->img}}" style="width:140px;height:auto;border-radius:.4rem;">
                </a>
                <div class="xui-content news-item-info">
                    <h2 class="xui-font-size-18 xui-margin-0 xui-margin-b-10 xui-ellipsis-1 xui-font-normal">
                        <a href="/home/news/{{ $v->id }}/edit" target="_blank">{{ $v->nname }}</a>
                    </h2>
                    <div class="xui-content xui-text-gary">
                        <div class="xui-margin-b-5 intro">{{ $v->abs }}</div>
                        <span class="xui-pull-l">
                            <em class="xui-text-green xui-margin-r-5">yujia.com</em>{{$v->created_at}}，发布于
                            <a href="" class="xui-margin-r-15" target="_blank">{{$v->nuser}}</a>
                            <span>3157次浏览</span>
                        </span>
                    </div>  
                </div>
            </div> 
            @endforeach


        </div>
    </div>
</div>
<script type="text/javascript">
    $(function(){
        if('' == 'hot'){
            $('.Hot').addClass('on').prev().removeClass('on');
        }else{
            $('.New').addClass('on').next().removeClass('on');
        }
        $('.news-item').click(function(event) {
            var oUrl = $(this).children('a').attr('href');
            window.open(oUrl);
        });
        $('.news-item a').click(function(event) {
            event.stopPropagation();
        });
    })
</script>





<style type="text/css">
	.draw-mask {position:fixed;top:0;bottom:0;left:0;right:0;background:rgba(0,0,0,.4);z-index: 9999;display: none;}
	.draw-mask > div {height: auto;margin: 0 auto;position: absolute;left: 50%;top: 50%;transform: translateX(-50%) translateY(-50%);-webkit-transform: translateX(-50%) translateY(-50%);}
	.draw-mask > div > span#drawClose {width: 40px;height: 40px;position: absolute;top: 30px;right: 30px;cursor: pointer;font-size:18px;z-index: 99999;color: #fff;}
	.draw-mask > div > a.pointer{width: 52px;height: 90px;position: absolute;left: 50%;top: 50%;z-index: 8;margin-left: -26px;margin-top: -26px;}
	.draw-mask > div > div.turntable{width: 277px;height: 280px;position: absolute;left: 50%;top: 50%;margin-left: -138px;margin-top: -140px;border-radius: 50%;}
	.draw-mask > div > div.rotateTxt{padding: 10px 15px;background-color:#fe244c;border-radius: 1rem; position: absolute;bottom: 0;left: 50%;transform: translateX(-50%);line-height: 1rem;text-align: center;}
	.draw-mask > div > div.rotateTxt > p {margin: 0;color: #fff;}
	.draw-mask > div > div.rotateTxt > p > span{color:#ffcc42;font-weight:bold;}
	.draw-mask > div > span#drawClose {width: 1.25rem;height: 1.25rem;position: absolute;top:1.5rem;right: 1.5rem;cursor: pointer;font-size:.8rem;z-index: 99999;color: #bbb;padding:.2rem;transition: all ease 0.5s;-webkit-transition: all ease 0.5s;-moz-transition: all ease 0.5s;-ms-transition: all ease 0.5s;border-radius:50%;}
	.draw-mask > div > span#drawClose:hover {transform:rotate(180deg);-webkit-transform:rotate(180deg);background-color: rgba(0,0,0,.3);color: #fff;}
	.draw-mask > div > span#drawClose > i {font-size: 1.25rem;}
	.draw-mask > div > div > img.god-heart {position: absolute;left: 46%;bottom: 34%;transform: translateX(-50%);-webkit-transform: translateX(-50%);-webkit-transition: all ease 0.5s;-moz-transition: all ease 0.5s;-ms-transition: all ease 0.5s;}
	.draw-mask > div > div > img.god-info {width:46%;position: absolute;left: 50%;bottom: 16%;transition: all ease 0.5s;-webkit-transition: all ease 0.5s;-moz-transition: all ease 0.5s;-ms-transition: all ease 0.5s;transform: translateX(-50%);-webkit-transform: translateX(-50%);cursor: pointer;}
</style>
<div class="draw-mask">
    <div>
    	<span class="" id="drawClose">
    		<i class="sui-icon icon-tb-close"></i>
    	</span>
        <div>
            <img id="turntable" src="picture/act_bg.png"/>
            <img id="godHeart" class="god-heart" src="picture/god_heart.png" alt="">
            <img id="godInfo" class="god-info" style="" src="picture/info_1.png"/>
            <!-- <span style="position: absolute;bottom: 19%;left: 50%;width: 46%;height: 15%;text-align: center;margin-left: -23%;background: green;">我要免单</span> -->
        </div>
    </div>
</div>
<script src="js/jquery.cookie.js"></script>
<script type="text/javascript">
	var rets = 2;
	$(function(){
		$.post("/pc/activity/act_gooddess.html",{},function(ret){
			rets = ret.val;
			// console.log(rets);
		});
		// 图片预加载
		var imgSrcArr = [
	        '/static/pc/image/act/goddess/info_2.png',
	        '/static/pc/image/act/goddess/info_3.png',
	        '/static/pc/image/act/goddess/info_4.png',
	        '/static/pc/image/act/goddess/info_5.png'
	    ];
	    var imgWrap = [];
	    function preloadImg(arr) {
	        for(var i =0; i< arr.length ;i++) {
	            imgWrap[i] = new Image();
	            imgWrap[i].src = arr[i];
	        }
	    }
	    preloadImg(imgSrcArr);
		$('#drawClose').click(function(){
			$('.draw-mask').fadeOut();
		})
		var t = setInterval("godTog()",500);
		$('#godInfo').on('click', function() {
			if(!$.cookie('id')){
				$(this).attr('src','/static/pc/image/act/goddess/info_5.png');
				$(this).removeAttr("id").width('46%');
			}else if(rets == 1 && !$.cookie('nsj')){
				$.cookie('nsj', '1', { expires: 1 });
				$(this).attr('src','/static/pc/image/act/goddess/info_2.png');
				$(this).removeAttr("id").width('46%');
			}else {
				$(this).attr('src','/static/pc/image/act/goddess/info_4.png');
				$(this).removeAttr("id").width('46%');
			}
		});
	})
	var n = 0;
	function godTog() {
	    if(n % 2 == 0){
	        $('#godInfo').width('46%');
	        $('#godHeart').css('-webkit-transform','rotate(-5deg)');
	    }else {
	        $('#godInfo').width('43%');
	        $('#godHeart').css('-webkit-transform','rotate(35deg)');
	    }
	    n++;
	}
</script>
<link href="css/qiandao.css" rel="stylesheet" type="text/css">
<script src="js/wb.js" type="text/javascript" charset="utf-8"></script>
<!-- <script src="js/jia.js" type="text/javascript" charset="utf-8"></script> -->
<script type="text/javascript">


    //全局模块JS
    $(function(){
        var dialog = new UDialog({}),//实例化对话框组件
            toast = new UToast(),//实例化消息提示组件
            nav = $('#xui-nav'),//获取导航栏目
            navH = nav.height();//获取导航栏的高度
        //判断是否有首页轮播图
        // if(!$('#xui-banner')){
        //  var bannerH = 0;
        // }else{
        //  var bannerH = $('#xui-banner').height();
        // }
        // navH += bannerH;
        var bScrot = $(document).scrollTop();
        $(window).scroll(function(){
            var nScrot = $(document).scrollTop();
            if(nScrot <= navH){
                nav.removeClass('xui-nav-fixed');
                $('body').css('padding-top', 0);
            }
            if(nScrot > navH){
                $('body').css('padding-top', navH+'px');
                nav.addClass('xui-nav-fixed');
                nav.addClass('xui-nav-top');
                if(nScrot > bScrot){
                    nav.removeClass('xui-nav-top0');
                }else{
                    nav.addClass('xui-nav-top0');
                }
                bScrot = nScrot;
            }
        });
        //栏目高亮
        var pathArray = location.pathname.split('/');
        if(!pathArray[1]){
            pathArray[1] = 'index.html';
        }
        pathArray.splice(0,1);
        if($("a[href*='"+pathArray[0]+"']").parent('.nav_title').length > 0){
            $("a[href*='"+pathArray[0]+"']").parent('.nav_title').addClass('xui-active');
        }else{
            var paths = pathArray[0].substring(0,pathArray[0].length-4);
            $("a[href*='"+paths+"']").parent('.nav_title').addClass('xui-active');
        }
        //退出登录操作
        $('#loginOut').click(function(){
            $app.AjaxPost('entry/login_out',{
                type: 1
            },function(state){
                if(state.status == 'ok'){
                    toast.success({
                        title:"登出成功",
                        duration:2000
                    });
                    window.location.href = '/pc/entry/login.html';
                }else{
                    dialog.alert({
                        title:"出错啦~！",
                        msg: state.msg,
                        buttons:['确定']
                    })
                }
            })
        });

        //回到顶部
        $('#gotop').click(function(event) {
            event.preventDefault();//阻止其他事件
            $('body,html').animate({
                scrollTop: 0
            },700);
        });
        //隐藏显示回到顶部按钮
        $(window).scroll(function(){
            ($(this).scrollTop() > 600 ) ? $('#gotop').removeClass('xui-visbHide') : $('#gotop').addClass('xui-visbHide');
        });
        // 头部导航显示 隐藏
        $(".nav_nav").mouseover(function(){
            $('.nav_body').css('height',260);
        })
        $(".nav_nav").mouseout(function(){
            $('.nav_body').css('height',72);
        })
        //每日签到开启关闭
</script>

</body>
</html>

@endsection
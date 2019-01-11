@extends('home.layout.layout')

@section('content')
	<title>瑜课堂-瑜伽培训-新手练瑜伽-教练进阶-首选瑜伽网瑜课堂学院</title>
	<meta name="keywords" content="阴瑜伽,流瑜伽,哈他瑜伽,理疗瑜伽,瑜课堂瑜伽学院">
    <meta name="description" content="中国最大的一站式瑜伽服务平台，是国内最早的瑜伽教练在线培训基地。覆盖了所有喜爱瑜伽的教练、会馆、学院，并提供初级入门、中级晋升以及高级专业的健康、减肥健身视频课程、图文资讯、大会活动报道等信息，让每个人都能享受到瑜伽的快乐。瑜伽网-YOGA-练瑜伽 就上瑜伽网-中国瑜伽行业领先门户媒体-在线视频教程。">
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<link rel="icon" href="/home/pc/image/yuketang/favicon.ico" type="x-icon" />
	<link href="/home/css/aui.css" rel="stylesheet">
	<link href="/home/css/revision.css" rel="stylesheet">
	<script src="/home/js/require.js" type="text/javascript"></script>


	<!-- 页头 -->

	<link rel="stylesheet" href="/home/css/swiper.min.css">
	<style>ul#classList li{width:12.625rem;}</style>
	
	
	<div class="mainContent" style="margin-bottom:3rem;">

		<div class="man-con">

			<!-- 精品课程 -->
			<div class="minClass">
				<hr>
				<br>
				<br>
				<br>
				<br>
				<h3 class="title aui-margin-b-15">精品课程</h3>
				<p class="aui-text-center channellist">
					<a href="/pc/activity/double_egg.html" title="全部" class="active">全部</a>&nbsp;&nbsp;
					&nbsp;&nbsp;/&nbsp;&nbsp;
												<a href="/pc/activity/double_egg/channelId/28.html" title="名师课堂" class=''>名师课堂</a>
						&nbsp;&nbsp;/&nbsp;&nbsp;
												<a href="/pc/activity/double_egg/channelId/27.html" title="训练计划" class=''>训练计划</a>
						&nbsp;&nbsp;/&nbsp;&nbsp;
												<!-- <a href="/vip/6935.html" title="vip服务" class=''>vip服务</a> -->
						
						<a href="/vip/6935.html" title="vip服务" class=''>
							<img src="/home/picture/vip_card.gif" alt="" style="width:60px;display:inline-block;position:relative;top:3px;">
						</a>
											<input type="hidden" name="channelId" value="">
				</p>
				<ul class="classList" id="classList">
					@foreach($data as $k=>$v)
					<li style="position:relative;">
						<div class="item">
							<span class="angle">限时立减<em>￥</em>69.2</span>
			        		<a href="lesson/{{ $v->id }}/edit" title="[教练进阶] 建立身体正确姿态丨私教应用" target="_blank">
								<img src="/uploads/{{ $v->img }}" height="175" onload="$app.loadImg(this)" />
							</a>
							<div class="text">
								<h2 class="aui-ellipsis-2">
									<a href="lesson/{{ $v->id }}/edit" title="[教练进阶] 建立身体正确姿态丨私教应用" target="_blank">{{ $v->lname }}</a>
								</h2>
								<div>
									<span class="aui-iconfont aui-icon-date">{{ $v->status }}</span>
									<span class="aui-pull-right aui-font-size-18 aui-text-warning">￥228.80</span>
								</div>
								<p>
									<span class="aui-font-size-12 aui-margin-r-5">中级</span>
									<a class="aui-pull-right aui-text-warning" href="/vip/6935">年卡会员免费</a>
								</p>
							</div>
						</div>
					</li>
					@endforeach						
				</ul>
				<div class="aui-btn aui-btn-success aui-btn-block aui-btn-sm" id="readMore" style="width:12rem;cursor:pointer;margin:0 auto;display:table;">查看更多</div>
			</div>

			<!-- 大家的评论 -->
			<div class="aui-padded-t-15 student">
				<h3 class="title">大家的评论</h3>
				<ul id='remenCla'>
					<li>
						<div>
							<div class="user-img">
								<img src="/home/picture/20150528133023_21866.jpg" alt="大家的评论"/>
							</div>
							<p class="aui-text-center aui-margin-b-10 all-ellipsis-1">加纳子</p>
							<h3 class="aui-margin-b-10" style="width:65%;text-align:center;margin:0 auto;">
								<a href='/descript/7658' title="[提升课程] 中高级丨空中瑜伽串联" target="_blank">[提升课程] 中高级丨空中瑜伽串联</a>
							</h3>
							<p>这个课程很好，空中瑜伽很美。最近，好多女星都开始晒起了自己的『空中瑜伽照』</p>
						</div>
					</li>
					<li>
						<div>
							<div class="user-img">
								<img src="/home/picture/20150725115955_50180.jpg" alt="大家的评论"/>
							</div>
							<p class="aui-text-center aui-margin-b-10 all-ellipsis-1">青山隐绿水悠</p>
							<h3 class="aui-margin-b-10" style="width:65%;text-align:center;margin:0 auto;">
								<a href='/descript/5315.html' title="[瑜伽入门] 三瑜伽丨体系入门" target="_blank">[瑜伽入门] 三瑜伽丨体系入门</a>
							</h3>
							<p>第一次打卡，这堂课，姿势编排很棒，练过之后很舒适，非常感谢老师！</p>
						</div>
					</li>
					<li>
						<div>
							<div class="user-img">
								<img src="/home/picture/20151209101221_89231.jpg" alt="大家的评论"/>
							</div>
							<p class="aui-text-center aui-margin-b-10 all-ellipsis-1">身居梦之海</p>
							<h3 class="aui-margin-b-10" style="width:65%;text-align:center;margin:0 auto;">
								<a href='/descript/8543.html' title="[提升教程] 寰宇瑜伽60分钟序列练习" target="_blank">[提升教程] 寰宇瑜伽60分钟序列练习</a>
							</h3>
							<p>打卡第四天，以前我都是憋气做瑜伽的，这个视频可以时刻提醒自己呼吸，非常好！</p>
						</div>
					</li>
					<li>
						<div>
							<div class="user-img">
								<img src="/home/picture/20150722164047_47746.jpg" alt="大家的评论"/>
							</div>
							<p class="aui-text-center aui-margin-b-10 all-ellipsis-1">小苹果1</p>
							<h3 class="aui-margin-b-10" style="width:70%;text-align:center;margin:0 auto;">
								<a href='/descript/5319.html' title="[新员入门] 瑜伽辅具应用丨实用宝典" target="_blank">[新员入门] 瑜伽辅具应用丨实用宝典</a>
							</h3>
							<p>慧萍老师棒棒哒，练完一整套很舒服，心里静静的，除去了所有的烦恼和不安。谢谢您[玫瑰][玫瑰]</p>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</div>

	
	

	
</body>
</html>

@endsection
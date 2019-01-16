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
				
				<ul class="classList" id="classList">
					@foreach($data as $k=>$v)
					<li style="position:relative;">
						<div class="item">
							<span class="angle">限时立减<em>￥</em>69.2</span>
			        		<a href="lesson/{{ $v->id }}/edit" title="[教练进阶] 建立身体正确姿态丨私教应用" target="_blank">
								<img src="/uploads/{{ $v->img }}" style="height: 175px; " onload="$app.loadImg(this)" />
							</a>
							<div class="text">
								<h2 class="aui-ellipsis-2" style="width: 220px;">
									<a href="lesson/{{ $v->id }}/edit" title="[教练进阶] 建立身体正确姿态丨私教应用" target="_blank" style="font-size: 16px;white-space:nowrap; text-overflow: ellipsis;">{{ $v->lname }}</a>
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
				

			<!-- 大家的评论 -->
			
		</div>
	</div>

	
	

	
</body>
</html>

@endsection
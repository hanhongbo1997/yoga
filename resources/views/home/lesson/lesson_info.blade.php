@extends('home.layout.layout')

@section('content')
<link rel="icon" href="/static/pc/image/yuketang/favicon.ico" type="x-icon" />
<link href="css/aui.css" rel="stylesheet">
<link href="css/revision.css" rel="stylesheet">
<script src="js/require.js" type="text/javascript"></script>
<body>

	<style>
		*{-moz-user-select:inherit;-webkit-user-select: inherit;-ms-user-select:inherit;-o-user-select:inherit;user-select:inherit;}
		html, body{-moz-user-select:inherit;-webkit-user-select: inherit;-ms-user-select:inherit;-o-user-select:inherit;user-select:inherit;background: #eee;}		
        .group_play{width: 998px;margin: 0 auto;margin-top:30px;min-height: 70px;}
        .group_play span{border: 2px solid #dddddd;padding:10px 15px;float: left;width: 130px;font-size: 20px;text-align: center;margin-right: 74px;}
		.triangle_border_right{width:0;height:0;border-width:10px 0 10px 10px;border-style:solid;border-color:transparent transparent transparent #999;position:relative;float: left;margin-top: 15px;margin-right: 74px;}

		.go_group{z-index: 999;height: 100%;width: 100%;position: fixed;top: 0;background: rgba(0, 0, 0, 0.5);}
		.go_group>div{padding: 15px;width: 600px;position: relative;top: calc(50% - 160px);left: calc(50% - 300px);}
		.go_group>div>div{background-color: white;padding: 15px;border-radius: 10px;}
		.go_group img{width: 66px;height:66px;border-radius: 100%;border: 1px solid #917878;margin: 0 auto;}
		.gogroup_img>div{position:relative;margin: 0 auto;width: 98px;float: left;padding-top: 10px;}
		.gogroup_img{min-height:50px;padding: 0px 25px 0px 25px;}
		#gogroup_close{position: absolute;right: 5px;top: 5px;background: #f2f2f2;width: 25px;height: 25px;border-radius: 100%;text-align: center;line-height: 25px;}
		.torder_h{max-height: 120px;overflow:hidden;}
	</style>


	<section class="lesson">
		<div class="aui-font-size-14 bread-nav">
			<br>
			<br>
			<br>
			<a href="/yuketang.html" class="xui-text-green" title="瑜伽网_瑜伽门户第一平台_练瑜伽 就上瑜伽网">瑜课堂</a> / <span>{{ $data->lname }}</span>
					</div>
		<div class="descript-content aui-content">
			<div class="aui-col-xs-5 figureInfo">
				<img src="/uploads/{{ $data->lessondetails->imgs }}" alt="瑜伽网_瑜伽门户第一平台_练瑜伽 就上瑜伽网" id="figure"/ style="width: 460px;height: 260px">
								<div style="position:  absolute;top: 0.2rem;left: 0.2rem;width: 5.5rem;height:auto;padding: 0.5rem 0 0 0.5rem;">
					<img src="/home/picture/jian_price.png" alt="">
				</div>
							        <div class="aui-content activityBar">
			        	<div class="aui-text-white aui-pull-left">
			        		<div class="aui-pull-left aui-font-size-16" style="padding-top: 0.25rem;">
			        			<span class="yongjiu" style="font-size:22px;">￥228.80</span>
			        		</div>
			        		<s class="aui-pull-left aui-font-size-12 aui-padded-t-15 aui-margin-l-5" style="color:#ebebeb;">￥798.00</s>
			        	</div>
			        	<div class="aui-pull-right aui-text-warning aui-font-size-14" style="line-height:0.8rem;padding:0.3rem 0;">
			        	<label>已享优惠
			        		<span class="aui-margin-l-5 aui-font-size-16"><em>￥</em>69.2</span>
			        	</label>
					        <p class="aui-text-white aui-font-size-12">距离结束 
					        	<span id="endtime">00:00:00</span>
					        </p>
			        		<input type="hidden" name="end_time" value="2019-01-04 00:00:00">
			        	</div>
			        </div>
			    			</div>
			<div class="aui-col-xs-7 aui-padded-l-15">
				<div class="aui-content aui-padded-l-15">
					<h2>{{ $data->lname }}</h2>
					<div class="lesline2">
						<p class="aui-ellipsis-2">{!! $data->lessondetails->details !!}</p>
					</div>
					<div class="aui-margin-b-15 aui-font-size-14 lesline3">
													<label>价&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;格：</label>
							<span class="oriPrice">￥798.00</span>
							<span class="aui-margin-l-15 aui-font-size-18 skuPrice" id="skuPrice">￥228.80</span>
												<!-- Baidu Button BEGIN -->
						<div class="bdsharebuttonbox">
							<a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a>
							<a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a>
							<a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a>
							<a href="#" class="bds_fbook" data-cmd="fbook" title="分享到Facebook"></a>
							<a href="#" class="bds_twi" data-cmd="twi" title="分享到Twitter"></a>
						</div>
					</div>
					<div class="aui-padded-l-15 aui-font-size-14 aui-margin-b-15 lestime" id="lesTime">
						<label>属&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;性：</label>
													<span class="aui-margin-r-15 aui-border active" data-price="" data-value="228.80">90天</span>
													<span class="aui-margin-r-15 aui-border" data-price="" data-value="518.80">永久</span>
											</div>
                    <form action="/pc/member/orderlist.html" id="now_buy" method="post">
                        <input type="hidden" name="scvp_item" value="90天">
                        <input type="hidden" name="goods_id" value="10728">
                        <input type="hidden" name="is_tuan" value="">
						<input type="hidden" name="tuan_id" value="">
					</form>
					<div class="lesline5 aui-padded-10">
												<a href="javascript:;" class="aui-btn aui-btn-success aui-btn-block" data-url="/pc/goods/addcarts.html" id="addCart" style="width:auto;">
							<b class="aui-iconfont aui-icon-cart aui-font-size-18"></b>
						</a>
													<button class="aui-btn aui-btn-success aui-btn-block" type="submit" id="buyNow">立即购买</button>

													<span class="aui-font-size-12">5681人想学习
							<label style="margin:0 0.5rem;">|</label>20集*25分钟						</span>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- 开始拼单 -->
	
	<!--详情描述-->

	<section class="detail">
		<div>
			<div class="aui-pull-left det-left">
				<div class="aui-content-padded" id="articleBox">
				<div class='tabs' id="tabs">
			        <ul class='horizontal'>
			            <li rel="tab-1" class="selectActive"><span>课程大纲</span></li>
			            <li rel="tab-2"><span>课程详情</span></li>
			            <li rel="tab-3"><span>用户评价</span></li>
			        </ul>
			        <div rel='tab-1' style="border: 1px solid #ccc">
			        	<ul class="aui-list aui-list-in">
			        		<li style="width: 100%;height: 100px;padding: 10px;border: 1px solid #ccc">
					            <a href="javascript:;" onclick="alert('购买后观看')">
									<img style="width: 100px;height: 70px;float: left;margin-right: 10px;" src="/uploads/{{ $data->img }}"alt="胡潇月01.课程概述与部分练习示范"/>
					            	<span style="line-height: 70px;float: left;">{{$data->lname}}</span>
						        	<span class="goVideo">我要学习</span>
						        </a>
					        </li>							            
						</ul>
			        </div>
			        <div rel='tab-2'><span>这是一个课程详情</span></div>
			        <div rel='tab-3'><span>这是一个用户评价</span></div>
			    </div>
			    <script type="text/javascript">
				    tabs_takes.init("tabs");
				</script>



					<div class="aui-content">
						<div class="polyPlayer" id="polyPlayer"></div>
						<div class="aui-content">
							
						</div>
					</div>



						<div>
							<h1>这TM应该是个评论啊！！！</h1>
						</div>
						<div class="aui-content aui-hide">
							<div class="article"><p><img alt="" src="/home/picture/47575118b5e9c904e66088d40c8526bb.jpg" /></p>
							</div>
							<img src="/home/picture/buy_explain.jpg" alt="">
						</div>
										<div class="aui-content aui-hide">
						<div class="usereview" id="review-list"></div>
						<div class="aui-content-padded">
							<div class="aui-btn aui-btn-success" id="loadMore" style="display:table;margin:0 auto;cursor:pointer;">查看更多 >></div>
						</div>
					</div>
				</div>
			</div>
			<div class="aui-pull-left det-right">
				<div>
					<div class="det-serve">
						<span>售后<br/>服务</span>
						<div class="aui-font-size-16"><i class="aui-iconfont aui-icon-phone aui-margin-r-10"></i>400-178-0379</div>
					</div>
					<div class="det-serve det-wx">
						<span>微信<br/>咨询</span>
						<div>
							<p>
								<i>添加客服微信</i><i>咨询课程</i><i>加入瑜伽人的圈子</i>
							</p>
							<img src="/home/picture/service1_code.jpg" alt="瑜伽网_客服咨询">
							<img src="/home/picture/service2_code.jpg" alt="瑜伽网_客服咨询">
						</div>
					</div>
					<div class="coupon">
						                    </div>
				</div>
			</div>
		</div>
	</section>
	

</body>
</html>
@endsection
@extends('home.layout.layout')

@section('content')
<link rel="icon" href="/static/pc/image/yuketang/favicon.ico" type="x-icon" />
<link href="css/aui.css" rel="stylesheet">
<link href="css/revision.css" rel="stylesheet">
<script src="js/require.js" type="text/javascript"></script>
<link rel="stylesheet" href="/home/css/zzsc.css" type="text/css">
<script type="text/javascript" src="/home/js/zzsc.js"></script>
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
                    <form action="/home/cart" method="post">
                    	{{ csrf_field() }}
                        <input type="hidden" name="cid" value="{{ $data->id }}">
                        <input type="hidden" name="price" value="999">
                        <input type="hidden" name="count" value="1">
						<div class="lesline5 aui-padded-10">
						<input type="submit" type="submit" onclick="alert('已添加到购物车')" style="width:50px;height:48px;cursor:pointer; background: url('/home/images/cart.png') no-repeat center;display:block;font-size:0;line-height:0;text-indent:-9999px;float: left;margin-right: 10px;">
						
						<button class="aui-btn aui-btn-success aui-btn-block" type="submit" id="buyNow" style="float: left;">立即购买</button>
					</form>
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
			    <div class="case">
				    <div class="title cf">
				      <ul class="title-list fr cf ">
				        <li class="on">课程大纲</li>
				        <li>课程详情</li>
				        <li>课程评论</li>
				        <p><b></b></p>
				      </ul>
				    </div>
				    <div class="product-wrap">
				     <!--案例1-->
				      <div class="product show">
				        <ul class="aui-list aui-list-in">
						    <a href="javascript:;" onclick="alert('购买后观看')" class="aui-list-item aui-padded-t-10 aui-padded-b-10" style="padding-right:5rem;">
				            	<div class="aui-media-list-item-inner" style="width:100%;">
				                    <div class="aui-list-item-media">
				                    	<img src="/uploads/{{ $data->lessondetails->imgs }}" data-src="" alt="张一阴瑜伽：01你不了解的阴瑜伽概念" onload="$app.loadImg(this)">
				                    </div>
				                    <div class="aui-list-item-text" style="width: calc(100% - 100px);">
			                            <div class="aui-list-item-title">
			                            	<h3 class="aui-font-size-14 aui-ellipsis-2">{{$data->lname}}</h3>
			                            	<p class="aui-ellipsis-1 aui-font-size-12"></p>
			                            </div>
			                        </div>
				                </div>
				                <span class="goVideo" style="height: 25px;line-height: 20px;">我要学习</span>
					        </a>
					    </ul>
				      </div>
				      <!--案例2-->
				      <div class="product">
				        {!!$data->lessondetails->details!!}
				      </div>
				      <!--案例3-->
				      <div class="product">
				        <div class="videoWord" style="background: #f9f9f9;width: 100%;">
				        	@if($info == null)
				                <div class="discuss-cont">
				                <span class="discuss-img">
				                     <img src="/home/picture/user_moren.png">
				                </span>
				                <div class="discuss-cont-inner">
				                    <div class="discuss-cont-inner-box">
				                        <div name="content" id="replyItem" style="background: #fff;height: 80px;">
				                            <a href="/home/logon">
				                           <button style="margin-left: 230px;margin-top: 20px;border: 1px solid #46c1f3;background: skyblue;color: white;"> 请登录后评论 </button></a>
				                        </div>
				                    </div>
				              
				                </div>
				            </div>
				            <div style="clear: both"></div>
				            @else
					        <form action="/home/lessoncomment" method="post">
					            {{ csrf_field() }}
					            <input type="hidden" name="user_id" value="{{ session('admin_login')->uid }}">
					            <input type="hidden" name="comment_id" value="0">
					            <input type="hidden" name="lesson_id" value="{{ $data->id }}">
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
					                                    <h4 class="xui-margin-0" style="display: block;margin-block-start: 1.33em;margin-block-end: 1.33em;margin-inline-start: 0px;margin-inline-end: 0px;font-weight: bold;font-size: 14.04px;line-height: 21.06px;">评论用户名ID是：{{ $info->uname}}</h4> 
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
					            
					            <form action="/home/lessoncomment" method="post">
					            {{ csrf_field() }}
					                <input type="hidden" name="user_id" value="{{ $info->uid }}">
					                <input type="hidden" name="lesson_id" value="{{ $data->id }}">
					                <input type="hidden" name="comment_id" value="{{ $v->id }}">
					                <div class="" style="width: auto;margin-left:50px;margin-top:0px;background: #fff;padding: 10px;"> 
					                    <textarea style="float: left;width: 540px;height:35px;background: #fff;box-shadow: 0px 0px 1px 1px #ccc;padding: 5px;" name="content" placeholder="绿色上网，文明回复" ></textarea> 
					                    <button style="color: #fff;background-color: #f9c34f;border: 1px solid #f9b728;width: 60px;height: 37px;font-size: 16px;margin-left: 10px;">回复</button>
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


					<div class="aui-content">
						<div class="polyPlayer" id="polyPlayer"></div>
						<div class="aui-content">
							
						</div>
					</div>
						<div class="aui-content aui-hide">
							<div class="article"><p><img alt="" src="/home/picture/47575118b5e9c904e66088d40c8526bb.jpg" /></p>
							</div>
							<img src="/home/picture/buy_explain.jpg" alt="">
						</div>
										<div class="aui-content aui-hide">
						<div class="usereview" id="review-list"></div>
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
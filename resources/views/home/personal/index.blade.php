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

	<script src="/home/js/suanfa.js" type="text/javascript"></script>
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
    <!-- 百度统计 -->
</head>
<body style="min-width:1280px;">
<div class="xui-nav xui-border-b" id="xui-nav" style="min-width: 1280px;" >
	<div class="xui-top-bar" style="line-height:14px;">
		<div class="xui-container" style="font-size:13px;padding:0 170px;">
			<span style="vertical-align: middle;">瑜伽行业最新资讯</span>
			<!--<span style="display:inline-block;cursor:pointer;margin-left:30px;" id="downloadBtn" data-placement="bottom" data-trigger="hover" data-toggle="tooltip" data-align="right" title="" data-original-title="<img src='/home/picture/download_code.jpg' style='width:130px;height:auto;'>">下载客户端<i class="sui-icon icon-touch-phone"></i>-->
				<!--<div class="downloadCode">-->
					<!--<img src="">-->
				<!--</div>-->
			<!--</span>-->
			<a href="/pc/index/lianl.html" target="_blank" class="xui-padded-5" style="overflow:hidden;height:100%;box-sizing:border-box;display:inline-block;cursor:pointer;margin-left:30px;vertical-align: middle;" id="headerdownloadBtn" data-placement="bottom" data-trigger="hover" data-toggle="tooltip" data-original-title="<img src='/home/picture/download_code.jpg' style='width:130px;height:auto;' alt='恋练瑜伽'>">
				<img src="/home/picture/lianlian_icon_32.png" class="xui-pull-l" alt="恋练瑜伽" style="height:100%;">
				<ul class="xui-pull-l" style="overflow:hidden;height:100%;">
					<li>「恋练瑜伽」</li>
				</ul>
			</a>
			<script type="text/javascript">
				if(navigator.appName == "Microsoft Internet Explorer" && navigator.appVersion .split(";")[1].replace(/[ ]/g,"")=="MSIE8.0"){
					$('#headerdownloadBtn').hide();
				}
			</script>
							<div class="xui-pull-r" style="width:200px;">
					<a href="/pc/member/collect.html" class="xui-padded-r-10 xui-margin-r-15 xui-font-size-20" title="我的收藏" style="color:inherit;line-height:26px;"><i class="sui-icon icon-tb-favor"></i></a>
					<a href="/pc/member/msgcenter.html" class="xui-padded-r-10 xui-margin-r-15 xui-font-size-20 " title="消息提醒" style="color:inherit;line-height:26px;"><i class="xui-iconfont xui-icon-tongzhi xui-font-size-20"></i></a>
					<span class="sui-dropdown xui-pull-r" style="cursor:pointer;">
						<span class="dropdown-inner">
							<a role="button" data-toggle="dropdown" href="javascript:void(0);" class="dropdown-toggle" title="yoga_5932ITW" style="line-height: 14px;display: block;">
								<em class="xui-ellipsis-1" style="display: inline-block;max-width: 86px;overflow: hidden;line-height: 28px;">yoga_5932ITW</em><i class="caret xui-margin-l-5" style="vertical-align: 7px;"></i>
							</a>
							<ul role="menu" aria-labelledby="drop1" class="sui-dropdown-menu">
								<li role="presentation">
									<a role="menuitem" tabindex="-1" href="/pc/member/usercenter.html" title="个人中心">个人中心</a>
								</li>
																<li role="presentation">
									<a role="menuitem" tabindex="-1" href="javascript:void(0);" id="loginOut" title="安全退出">安全退出</a>
								</li>
							</ul>
						</span>
					</span>
				</div>
						<div id="weibo" class="xui-pull-r" style="height:28px;overflow:hidden;">
				<wb:follow-button uid="1899715997" type="red_2" width="136" height="20" style="position:relative;bottom:-5px;"></wb:follow-button>
			</div>
		</div>
	</div>
	<div class="nav_body">
		<div class="nav_head">
			<div style="width:100%;max-width:1440px;margin:0 auto;">
				<h1 style="float:left;">
					<a href="/index.html" title="瑜伽教练培训课程,瑜伽视频教程初级,孕妇瑜伽,瑜伽入门">
						<img src="/home/picture/logo.png" alt="瑜伽教练培训课程,瑜伽视频教程初级,孕妇瑜伽,瑜伽入门">
					</a>
				</h1>
				<form class="sui-form pull-right search-form" id="search-box" style="margin:0 0 0 10px;margin-top:24px;position:relative;" method="post" action="/pc/entry/search.html">
					<input type="text" autocomplete="off" value="" id="key" data-toggle="autocomplete" class="input-large input-success" placeholder="输入搜索内容" style="height:24px;" name="searchKey">
					<button type="submit" class="sui-btn btn-large btn-success" style="padding:3px 14px;">
						<i class="sui-icon icon-search"></i>
					</button>
				</form>
				<div class="xui-pull-r nav_nav" style="width:62%;">
					<span>
						<p class="nav_title">
							<a href="/index.html" title="首页">首页</a>
						</p>
					</span>
					<span>
						<p class="nav_title">
							<a href="/news.html" title="资讯">资讯</a>
						</p>
						<p><a href="/news/9.html" title="行业快报">行业快报</a></p>
						<p><a href="/news/10.html" title="业界要闻">业界要闻</a></p>
						<p><a href="/news/11.html" title="明星瑜伽">明星瑜伽</a></p>
						<p><a href="/news/12.html" title="热点人物">热点人物</a></p>
					</span>
					<span>
						<p class="nav_title">
							<a href="/knowledge.html" title="知识">知识</a>
						</p>
						<p><a href="/knowledge/13.html" title="体式讲解">体式讲解</a></p>
						<p><a href="/knowledge/14.html" title="健康养生">健康养生</a></p>
						<p><a href="/knowledge/15.html" title="文化哲学">文化哲学</a></p>
						<p><a href="/knowledge/16.html" title="瑜伽心语">瑜伽心语</a></p>
					</span>
					<span>
						<p class="nav_title">
							<a href="/equip.html" title="品说">品说</a>
						</p>
						<p><a href="/equip/17.html" title="直击新品">直击新品</a></p>
						<p><a href="/equip/18.html" title="产品评测">产品评测</a></p>
						<p><a href="/equip/19.html" title="品牌介绍">品牌介绍</a></p>
					</span>
					<span>
						<p class="nav_title">
							<a href="/activity.html" title="活动">活动</a>
						</p>
						<p><a href="/activity/29.html" title="职业赛事">职业赛事</a></p>
						<p><a href="/activity/20.html" title="大会专题">大会专题</a></p>
						<p><a href="/activity/21.html" title="培训信息">培训信息</a></p>
						<p><a href="/activity/22.html" title="621瑜伽日">621瑜伽日</a></p>
					</span>
					<span>
						<p class="nav_title">
							<a href="/courserec.html" title="视频">视频</a>
						</p>
						<p><a href="/course/23.html" title="体式大全">体式大全</a></p>
						<p><a href="/course/24.html" title="直击课堂">直击课堂</a></p>
						<p><a href="/course/25.html" title="功效需求">功效需求</a></p>
						<p><a href="/course/26.html" title="流派分类">流派分类</a></p>
						<p><a href="/course/31.html" title="辅具练习">辅具练习</a></p>
					</span>
					<span>
						<p class="nav_title">
							<a href="/teacher.html" title="名师">名师</a>
						</p>
						<p><a href="/teacher/16.html" title="瑜伽导师">瑜伽导师</a></p>
						<p><a href="/teacher/17.html" title="行业顾问">行业顾问</a></p>
						<p><a href="/teacher/18.html" title="官方认证">官方认证</a></p>
					</span>
					<span>
						<p class="nav_title">
							<a href="/hall.html" title="会馆">会馆</a>
						</p>
						<p><a href="/hall.html" title="国内会馆">国内会馆</a></p>
						<p><a href="/hall/89.html" title="海外会馆">海外会馆</a></p>
					</span>
					<span>
						<p class="nav_title">
							<a href="/yuketang.html" title="瑜课堂">瑜课堂</a>
															<img src="/home/picture/4d9be37e1d73f4ad1ef69284b7bbac5f.gif" alt="双旦节" style="position:absolute;right:4px;top:4px;width:45px;">
														</p>
						<p><a href="/yuketang/27.html" title="训练计划">训练计划</a></p>
						<p><a href="/yuketang/28.html" title="名师课堂">名师课堂</a></p>
					</span>
				</div>
			</div>
		</div>
	</div>
	<div class="searBox" id="searBox" style="display:none;"></div>
</div>

<style type="text/css">
    body{background:#fff;}
    .xui-information li{line-height:48px;}
</style>
<div class="xui-container" style="margin:20px auto;">
    <div class="xui-content">
        <ul class="sui-breadcrumb">
            <li><a href="/pc/index/index.html">首页</a></li>
            <li><a href="/pc/member/usercenter.html">个人中心</a></li>
            <li class="active">我的信息</li>
        </ul>
    </div>
    <div class="xui-member-menu xui-pull-l">
    <div class="sui-text-center xui-margin-b-15">
        <div class="xui-content" style="width:100px;height:100px;margin:0 auto;position:relative;border:4px solid #dbdbdb;border-radius:100%;overflow:hidden;">
                            <img src="/home/picture/user_moren.png">
                        <div style="width:100%;height:24px;line-height:20px;background:rgba(0,0,0,0.6);position:absolute;bottom:0;left:0;color:#fff;font-size:12px;cursor:pointer;" id="updateHeadimg">更换头像</div>
        </div>
        <p class="xui-font-size-16">yoga_5932ITW</p>
        <p>
                            <span style="cursor: pointer;" class="sui-icon icon-touch-phone sui-text-success xui-margin-r-15"  data-type="attention" data-original-title="已绑定手机" data-placement="bottom" data-toggle="tooltip"></span>
                            <span id="authen" style="cursor: pointer;" class="sui-icon icon-touch-user3 sui-text-disabled" data-placement="bottom" data-toggle="tooltip" data-type="attention" data-original-title="未实名认证"></span>
                    </p>
    </div>
    <ul>
        <h3>个人中心</h3>
        <li>
            <a href="/pc/member/usercenter.html">我的信息
                <span class="sui-icon icon-angle-right"></span>
            </a>
        </li>
        <li>
            <a href="/pc/member/vip.html">会员专区
                <span class="sui-icon icon-angle-right"></span>
                <!-- <span style="font-size:12px;margin-right:5px;">未开通</span> -->
            </a>
        </li>
        <li>
            <a href="/pc/member/myvideo.html">已购视频
                <span class="sui-icon icon-angle-right"></span>
            </a>
        </li>
        <li>
            <a href="/pc/member/collect.html">收藏夹
                <span class="sui-icon icon-angle-right"></span>
            </a>
        </li>
        <li>
            <a href="/pc/member/comment.html">我的评论
                <span class="sui-icon icon-angle-right"></span>
            </a>
        </li>
        <li>
            <a href="/pc/member/discount.html">我的优惠券
                <span class="sui-icon icon-angle-right"></span>
            </a>
        </li>
    </ul>
        <ul>
        <h3>订单管理</h3>
        <li>
            <a href="/pc/member/orderform.html">我的订单
                <span class="sui-icon icon-angle-right"></span>
            </a>
        </li>
        <li>
            <a href="/pc/member/cart.html">我的购物车
                <span class="sui-icon icon-angle-right"></span>
            </a>
        </li>
    </ul>
    <ul>
        <h3>账号管理</h3>
        <li>
            <a href="/pc/member/account.html">账号设置
                <span class="sui-icon icon-angle-right"></span>
            </a>
        </li>
        <li>
            <a href="/pc/member/msgcenter.html">消息通知
                <span class="sui-icon icon-angle-right"></span>
            </a>
        </li>
        <li>
            <a href="/pc/member/idea.html">意见反馈
                <span class="sui-icon icon-angle-right"></span>
            </a>
        </li>
    </ul>
</div>
<!--电话绑定弹出框-->
<div id="phoneModal" class="sui-modal hide fade"
     aria-hidden="true" style="margin-top: -138px; display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" data-dismiss="modal" aria-hidden="true" class="sui-close">×</button>
                <h4 id="phoneModalLabel" class="modal-title">绑定手机</h4>
            </div>
            <div class="modal-body" id="phoneModalBody">
                <form class="sui-form form-horizontal sui-validate" style="" novalidate="novalidate">
                    <div class="control-group" style="margin: 30px 0;">
                        <label class="control-label">手机号：</label>

                        <div class="controls">
                            <input type="text" id="PhoneNum" placeholder="请输入您的手机号" class="input-xfat" style="width: 200px;">
                        </div>
                    </div>
                    <div class="control-group" style="margin: 30px 0;">
                        <label class="control-label">短信验证码：</label>

                        <div class="controls" style="position: relative;">
                            <input type="text" id="msgcode" placeholder="验证码为6位数字" maxlength="6" class="input-xfat" style="width: 200px;">
                            <input type="button" class="sui-btn btn-success code-btn" id="gainCode" data-url="/pc/entry/send_sms.html" data-sign="" value="获取" style="position: absolute;right: 0px;top: 0px;height: 32px;">
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <span class="sui-btn btn-primary btn-large" id="bind_save_btn">提交</span>
                <span data-dismiss="modal" class="sui-btn btn-default btn-large">关闭</span>
            </div>
        </div>
    </div>
</div>
<!--实名认证弹出框-->
<div id="authenModal" class="sui-modal hide fade"
     aria-hidden="true" style="margin-top: -138px; display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" data-dismiss="modal" aria-hidden="true" class="sui-close">×</button>
                <h4 id="authenModalLabel" class="modal-title">实名认证</h4>
            </div>
            <div class="modal-body" id="authenmodalBody">
                <form class="sui-form form-horizontal sui-validate" style="" novalidate="novalidate">
                    <div class="control-group" style="margin: 30px 0;">
                        <label class="control-label">真实姓名：</label>
                        <div class="controls">
                            <input type="text" id="userName" class="input-xfat" name="name" placeholder="请输入您的真实姓名" style="width: 200px;">
                        </div>
                    </div>
                    <div class="control-group" style="margin: 30px 0;">
                        <label class="control-label">身份证号码：</label>

                        <div class="controls" style="position: relative;">
                            <input type="text" id="cardcode" class="input-xfat" name="card" placeholder="请输入您的身份证号码" style="width: 200px;">
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <span class="sui-btn btn-primary btn-large" id="card_save_btn">提交</span>
                <span data-dismiss="modal" class="sui-btn btn-default btn-large">关闭</span>
            </div>
        </div>
    </div>
</div>
<!-- 编辑器插件加载 -->
<link rel="stylesheet" href="/home/css/default.css">
<script src="/home/js/kindeditor.js"></script>
<script charset="utf-8" src="/home/js/zh_cn.js"></script>
<script charset="utf-8" src="/home/js/dot.js"></script>
<script type="text/javascript">
    var pathArray = location.pathname.split('/');
    $("a[href*='"+pathArray[pathArray.length-1]+"']").addClass('xui-active');
    $(function(){
        //上传头像
        // 编辑器加载
        KindEditor.ready(function(K) {
            editor = K.editor({
                allowFileManager :true,
                uploadJson : config.URL + 'index/upload_json',
                fileManagerJson : config.URL + 'index/file_manager_json',
            });
        });

        //单图片上传方法
        $('#updateHeadimg').on('click',function(){
            var _this = $(this);
            var r_id = _this.data('id');
            editor.loadPlugin('insertfile',function(){
                editor.plugin.fileDialog({
                    fileUrl : _this.parent().prev().val(),
                    clickFn : function(url,title){
                        up_figure(url);
                        editor.hideDialog();
                    }
                });
            });
        });

        function up_figure(figurePath){
            var a = new Object();
            a.figurePath = figurePath;
            $.post('/pc/member/header_up.html',a,function(data){
                if(data.status == 'ok'){
                    window.location.reload();
                }else{
                    alert(data.msg);
                    return false;
                }
            });
        }

        //绑定手机号
        var phoneNum = $('#PhoneNum');
        $supDialog = $('#phoneModal');
        $('#gainCode').click(function(){
            var _this = $(this);
            $supDialog.modal('shadeIn');
            if($app.isPhone(phoneNum.val()) == false){
                return $.alert({
                    title:"出错啦~！",
                    body:'请输入正确的手机号码',
                    backdrop: false,
                    width: 216,
                    height:42,
                    hide: function() {
                        return $supDialog.modal('shadeOut');
                    }
                });
            }else{
                var url = _this.data('url'), sign = _this.data('sign');
                $app.AjaxPost(url,{
                    phone_num: phoneNum.val(),
                    action: 'bindphone',//标识找回密码验证码
                    sign: sign
                },function(state){
                    // console.log(JSON.stringify(state));
                    if(state.status == 'ok'){
                        return $.alert({
                            title:"提示：",
                            body: "发送成功",
                            backdrop: false,
                            duration:2000,
                            width: 216,
                            height:42,
                            hide: function() {
                                return $supDialog.modal('shadeOut');
                            }
                        });
                        //120秒倒计时
                        count = 120;
                        clock = setInterval(function() {
                            fnCount(_this);
                        },1000)
                    }else{
                        return $.alert({
                            title:"出错啦~！",
                            body: state.msg,
                            backdrop: false,
                            width: 216,
                            height:42,
                            hide: function() {
                                return $supDialog.modal('shadeOut');
                            }
                        })
                    }
                })
            }
        });

        //绑定手机号提交
        $('#bind_save_btn').click(function(){
            var a = new Object();
            a.phoneNum = $('#PhoneNum').val();
            a.msgcode = $('#msgcode').val();
            a.sign = $(this).data('sign');
            if(!$app.isPhone(a.phoneNum) || !a.msgcode){
                return $.alert({
                    title:"出错啦~！",
                    body: '请填写正确信息',
                    backdrop: false,
                    width: 216,
                    height:42,
                    hide: function() {
                        return $supDialog.modal('shadeOut');
                    }
                })
            }else{
                $app.AjaxPost("/pc/entry/bindTel.html",a,function(state){
                    // console.log(JSON.stringify(state));
                    if(state.status == 'ok'){
                        alert("实名认证成功~");
                        window.location.reload();
                    }else{
                        return $.alert({
                            title:"出错啦~！",
                            body: state.msg,
                            backdrop: false,
                            width: 216,
                            height:42,
                            hide: function() {
                                return $supDialog.modal('shadeOut');
                            }
                        })
                    }
                })
            }
        });

        //实名认证
        $('#card_save_btn').click(function(){
            var a = new Object();
            a.username = $('#userName').val();
            a.cardcode = $('#cardcode').val();
            if(!a.username || !$app.isCardcode(a.cardcode)){
                return $.alert({
                    title:"出错啦~！",
                    body: '请填写正确信息',
                    backdrop: false,
                    width: 216,
                    height:42,
                    hide: function() {
                        return $supDialog.modal('shadeOut');
                    }
                })
            }else{
                $app.AjaxPost("/pc/member/setCard.html",a,function(state){
                    // console.log(JSON.stringify(state));
                    if(state.status == 'ok'){
                        alert("实名认证成功~");
                        window.location.reload();
                    }else{
                        return $.alert({
                            title:"出错啦~！",
                            body: state.msg,
                            backdrop: false,
                            width: 216,
                            height:42,
                            hide: function() {
                                return $supDialog.modal('shadeOut');
                            }
                        })
                    }
                })
            }
        });
        /**
         * 验证码倒计时
         * @Author   xc@yujia.com
         * @DateTime 2017-05-08T17:30:48+0800
         */
        function fnCount(obj){
            if(count == 0){
                obj.attr('disabled', false).val('获取');
                clearInterval(clock);
                return;
            }else{
                obj.attr('disabled', true).val(count+' S');
                count--;
            }
        }
        //    电话绑定弹出框
        $("#bindPhone").click(function () {
            $('#phoneModal').modal('show');
        });
        //    实名认证弹出框
        $("#authen").click(function () {
            $('#authenModal').modal('show');
        });
    })
</script>
    <div class="xui-member-content" style="padding-left:260px;">
        <div class="xui-content xui-margin-b-15" style="line-height:30px;">
            <div class="span7">
                <h3 class="xui-margin-0">我的信息</h3>
            </div>
        </div>
        <form class="form-inline sui-form" action="/pc/member/userSave/.html" method="post">
            <ul class="xui-content-padded xui-information">
                <li class="xui-flex-content">
                    <div class="xui-flex-l">昵称：</div>
                    <div class="xui-flex-r">
                        <input type="text" class="input-xfat input-large xui-margin-10" value="yoga_5932ITW" placeholder="未设置" name="nickname">
                    </div>
                </li>
                <li class="xui-flex-content">
                    <div class="xui-flex-l">我的积分：</div>
                    <div class="xui-flex-r">
                        <span class="xui-margin-10" data-placement="bottom" data-toggle="tooltip" data-type="attention" data-original-title="<div style='line-height:10px;'><p>如何赚取积分？</p><p>1、每日首次登录瑜伽网<b class='sui-text-info xui-margin-l-5'>积分+1</b></p><p>2、每日签到<b class='sui-text-info xui-margin-l-5'>积分+2</b></p><p>3、文章/资讯等内容加入收藏<b class='sui-text-info xui-margin-l-5'>积分+1</b></p><p>4、首次评论留言<b class='sui-text-info xui-margin-l-5'>积分+2</b></p><p>5、注册后完善个人资料<b class='sui-text-info xui-margin-l-5'>积分+10</b></p><p>6、在线投稿，并被采纳<b class='sui-text-info xui-margin-l-5'>积分+100</b></p><p>瑜伽网拥有本次活动最终解释权</p></div>"><em style="cursor:help;font-style:normal;">1</em><i class="sui-icon icon-tb-question xui-margin-l-5"></i></span>
                    </div>
                </li>
                
                <li class="xui-flex-content">
                    <div class="xui-flex-l">性别：</div>
                    <div class="xui-flex-r">
                        <span class="xui-margin-10">
                                                            <label class="checkbox-pretty inline checked">
                                    <input type="radio" name="sex" checked="checked" value="2"><span></span>女
                                </label>
                                <label class="checkbox-pretty inline">
                                    <input type="radio" name="sex" value="1"><span></span>男
                                </label>
                                                    </span>
                    </div>
                </li>
                <li class="xui-flex-content">
                    <div class="xui-flex-l">生日：</div>
                    <div class="xui-flex-r">
                        <input type="text" data-toggle="datepicker" class="input-xfat input-large span2 xui-margin-10 input-date" value="1990-01-01" placeholder="生日格式：19XX-XX-XX" name="birthday">
                    </div>
                </li>
                <!-- <li class="xui-flex-content">
                    <div class="xui-flex-l">收货地址：</div>
                    <div class="xui-flex-r">
                        <input type="text" class="input-xfat input-xlarge xui-margin-10" placeholder="未设置">
                    </div>
                </li> -->
                <li class="xui-flex-content">
                    <div class="xui-flex-l">个性签名：</div>
                    <div class="xui-flex-r">
                        <textarea rows="6" placeholder="未设置" class="xui-margin-10" style="width:50%;" name="signature"></textarea>
                    </div>
                </li>
                <li class="xui-flex-content">
                    <div class="xui-flex-l"></div>
                    <div class="xui-flex-r">
                        <button type="submit" class="sui-btn btn-xlarge btn-success xui-margin-10">保存</button>
                    </div>
                </li>
            </ul>
        </form>
    </div>
</div>
<!--提示下载《恋练》-->
<div id="Info">
    <div class="userInfo xui-text-center">
        <span class="sui-icon icon-touch-error close" id="closeInfo"></span>
        <a href="https://www.yujia.com/pc/index/lianl" target="_blank">
            <img src="/home/picture/llindexappdownad.png" alt="扫描二维码下载" style="position:absolute;left:50%;bottom:0px;margin-left: -419px;">
        </a>
    </div>
</div>

<div class="right-fixed" style="z-index:999;">
    <script src="/home/js/ad.js" type="text/javascript"></script>
    <span href="javascript:;" class="btn code meiqiabtn" id="" title="联系客服" style="background-position: 0 0;">
        <div class="codeBox" style="bottom: 150px;">
            <img src="/home/picture/service1_code.jpg" alt="瑜伽网二维码">
            <h4>添加客服微信咨询课程</h4>
        </div>
    </span>
        <span class="btn code">
        <div class="codeBox">
            <img src="/home/picture/twocode.jpg" alt="瑜伽网二维码">
            <h4>微信扫一扫加入瑜伽圈</h4>
        </div>
    </span>
    <div style="min-height: 48px;margin-bottom: 20px;">
        <a href="javascript:;" class="btn gotop xui-visbHide" id="gotop" title="回到顶部"></a>
    </div>
</div>
<!--底部-->
<div class="xui-content xui-text-center footer-bg" style="padding:120px 0 60px 0;background:url(/home/images/culture.jpg) no-repeat center bottom;">
    <!-- <img src="/home/picture/slogan.png" class="xui-padded-15 xui-margin-15"> -->
    <div class="xui-container xui-text-center xui-padded-15">
        <div class="xui-col-xs-3"><img src="/home/picture/lows1.png" alt="瑜伽教练培训课程,瑜伽视频教程初级,孕妇瑜伽,瑜伽入门"></div>
        <div class="xui-col-xs-3"><img src="/home/picture/lows2.png" alt="瑜伽教练培训课程,瑜伽视频教程初级,孕妇瑜伽,瑜伽入门"></div>
        <div class="xui-col-xs-3"><img src="/home/picture/lows3.png" alt="瑜伽教练培训课程,瑜伽视频教程初级,孕妇瑜伽,瑜伽入门"></div>
        <div class="xui-col-xs-3"><img src="/home/picture/lows4.png" alt="瑜伽教练培训课程,瑜伽视频教程初级,孕妇瑜伽,瑜伽入门"></div>
    </div>
</div>
<div class="xui-content footer">
    <div class="xui-container" style="padding-top:40px;">
        <h3 style="font-size:28px;text-align:center;">合作伙伴</h3>
        <div class="xui-content" style="border-bottom:1px dotted #575757;">
            <div class="xui-col-xs-2">
                <img src="/home/picture/cooperate1.png" alt="携程旅游网">
            </div>
            <div class="xui-col-xs-2">
                <img src="/home/picture/cooperate6.png" alt="微信">
            </div>
            <div class="xui-col-xs-2">
                <img src="/home/picture/cooperate7.png" alt="淘宝头条">
            </div>
            <div class="xui-col-xs-2">
                <img src="/home/picture/cooperate2.png" alt="微博">
            </div>
            <div class="xui-col-xs-2">
                <img src="/home/picture/cooperate12.png" alt="阿里云">
            </div>
            <div class="xui-col-xs-2">
                <img src="/home/picture/cooperate5.png" alt="哈他瑜伽">
            </div>
            <div class="xui-col-xs-2">
                <img src="/home/picture/cooperate10.png" alt="奥义">
            </div>
            <div class="xui-col-xs-2">
                <img src="/home/picture/cooperate3.png" alt="青鸟">
            </div>
            <div class="xui-col-xs-2">
                <img src="/home/picture/cooperate9.png" alt="慕兰瑜伽">
            </div>
            <div class="xui-col-xs-2">
                <img src="/home/picture/cooperate11.png" alt="悠季瑜伽">
            </div>
            <div class="xui-col-xs-2">
                <img src="/home/picture/cooperate8.png" alt="多学多用">
            </div>
            <div class="xui-col-xs-2">
                <img src="/home/picture/cooperate4.png" alt="京东众筹">
            </div>
        </div>
        <p class="xui-text-center xui-font-size-14">
            <span>Copyright © 2015-2018 中伽科技 All rights reserved</span>
            <a href="https://www.miitbeian.gov.cn/" title="豫ICP备15022605号-2" target="_blank" class="xui-margin-l-10" style="color:#b3b3b3;">豫ICP备15022605号-2</a>
            <a href="https://www.miitbeian.gov.cn/" title="经营性ICP豫B2-20170313" target="_blank" class="xui-margin-l-10" style="color:#b3b3b3;">经营性ICP豫B2-20170313</a>
        </p>
        <p class="xui-text-center xui-font-size-14">
            <a href="/pc/content/about.html" target="_blank" class="xui-margin-r-10" title="关于我们" style="color:#b3b3b3;">关于我们</a>
            <a href="/pc/content/lxwm.html" target="_blank" class="xui-margin-r-10" title="招贤纳士" style="color:#b3b3b3;">招贤纳士</a>
            <a href="/pc/content/about.html#RightBox4" target="_blank" class="xui-margin-r-10" title="商务合作" style="color:#b3b3b3;">商务合作</a>
            <span class="telsioo">客服电话：400-178-0379（周一至周六  9:30-18:00）</span>
        </p>
        <ul class="botIco">
            <li><a href="https://wj.haaic.gov.cn/TopICRS/certificateAction.do?id=201307220000000516"  title="经营性网站备案信息" target="_blank"><img border="0" alt="经营性网站备案信息" src="/home/picture/gongshang.png"></a></li>
            <li><a title="360网站安全检测" target="_blank" href="https://webscan.360.cn/index/checkwebsite/url/www.yujia.com"><img border="0" src="/home/picture/safe360.png" alt="360网站安全检测"></a></li>
            <li><a href="https://www.alipay.com/" title="支付宝支付平台" target="_blank"><img border="0" alt="支付宝支付平台" src="/home/picture/zhifubao.png"></a></li>
            <li><a href="javascript:;" title="洛阳网警" target="_blank"><img border="0" alt="洛阳网警" src="/home/picture/web_police.png"></a></li>
            <li><a href="https://www.12377.cn/" title="中国互联网违法和不良信息举报中心" target="_blank"><img border="0" alt="中国互联网违法和不良信息举报中心" src="/home/picture/report_center.png"></a></li>
        </ul>
        <div style="width:300px;margin:0 auto; padding:20px 0;">
            <a target="_blank" href="https://www.beian.gov.cn/portal/registerSystemInfo?recordcode=41031102000154" style="display:inline-block;text-decoration:none;height:20px;line-height:20px;"><img src="/home/picture/police.png" alt="豫公网安" style="float:left;"/><p class="xui-font-size-14" style="float:left;height:20px;line-height:20px;margin: 0px 0px 0px 5px; color:#939393;">豫公网安备 41031102000154号</p></a>
        </div>
    </div>
</div>

<div class="qiandao-mask" id="qdMask">
    <div class="qiandao-con">
        <!-- <span class="" id="drawClose">
            <i class="sui-icon icon-tb-close"></i>
        </span> -->
        <div class="qiandao-left" style="position:relative;">
            <!-- <a href="" id="qdClose" style="background: url(/home/images/sign_sprits.png) no-repeat;position: absolute;top: 13px;right: 13px;width: 16px;height: 16px;background-position: -228px -51px;"></a> -->
            <span class="" id="qdClose">
                <i class="sui-icon icon-tb-close"></i>
            </span>
            <div class="qiandao-l-top">
                                    <h3>今日未签到</h3>
                                            <p>今日签到可获得<big class="xui-padded-5"></big>积分</p>
                                </div>
            <div class="qiandao-l-main">
                <ul class="xui-flex-content qd-main-week">
                    <li class="xui-flex-l">星期一</li>
                    <li class="xui-flex-l">星期二</li>
                    <li class="xui-flex-l">星期三</li>
                    <li class="xui-flex-l">星期四</li>
                    <li class="xui-flex-l">星期五</li>
                    <li class="xui-flex-l">星期六</li>
                    <li class="xui-flex-l">星期日</li>
                </ul>
                <ul class="qiandao-date-ul" id="qdUl" style="overflow: hidden;">
                                    </ul>
            </div>
        </div>
        <div class="qiandao-right">
            <div class="qiandao-r-top">
                <div class="qd-r-head">
                    <span style="left: 20px;"></span>
                    <span style="right: 20px;"></span>
                </div>
                <div class="qd-r-btn qiandao-notic" id="qdBtnBox">
                                            <input type="button" class="sui-btn qiandao-btn" id="qdBtn" value="立即签到"></input>
                                    </div>
            </div>
            <span class="qd-r-link" style="left: 50px;"></span>
            <span class="qd-r-link" style="left: 70px;"></span>
            <span class="qd-r-link" style="right: 50px;"></span>
            <span class="qd-r-link" style="right: 70px;"></span>
            <div class="qiandao-r-bottom">
                <div class="qiandao-rule">
                    <h4 class="xui-font-size-16">签到规则</h4>
                    <p>1、首次签到获得1积分</p>
                    <p>2、连续签到每天增加1积分奖励</p>
                    <p>3、连续签到7天以上每天获得10积分奖励</p>
                    <p>4、连续签到第7天、第14天、第21天、第28天可以额外获得10积分</p>
                </div>
                <div class="xui-margin-t-15 qiandao-rule">
                    <h4 class="xui-font-size-16">其他说明</h4>
                    <p>如果中间有一天间断未签到的，重新开始计算连续签到时间。</p>
                </div>
            </div>
        </div>
    </div>
</div>

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
            <img id="turntable" src="/home/picture/act_bg.png"/>
            <img id="godHeart" class="god-heart" src="/home/picture/god_heart.png" alt="">
            <img id="godInfo" class="god-info" style="" src="/home/picture/info_1.png"/>
            <!-- <span style="position: absolute;bottom: 19%;left: 50%;width: 46%;height: 15%;text-align: center;margin-left: -23%;background: green;">我要免单</span> -->
        </div>
    </div>
</div>
<script src="/home/js/jquery.cookie.js"></script>
<script type="text/javascript">
	var rets = 2;
	$(function(){
		$.post("/pc/activity/act_gooddess.html",{},function(ret){
			rets = ret.val;
			// console.log(rets);
		});
		// 图片预加载
		var imgSrcArr = [
	        '//home/pc/image/act/goddess/info_2.png',
	        '//home/pc/image/act/goddess/info_3.png',
	        '//home/pc/image/act/goddess/info_4.png',
	        '//home/pc/image/act/goddess/info_5.png'
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
				$(this).attr('src','//home/pc/image/act/goddess/info_5.png');
				$(this).removeAttr("id").width('46%');
			}else if(rets == 1 && !$.cookie('nsj')){
				$.cookie('nsj', '1', { expires: 1 });
				$(this).attr('src','//home/pc/image/act/goddess/info_2.png');
				$(this).removeAttr("id").width('46%');
			}else {
				$(this).attr('src','//home/pc/image/act/goddess/info_4.png');
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
<link href="/home/css/qiandao.css" rel="stylesheet" type="text/css">
<script src="/home/js/wb.js" type="text/javascript" charset="utf-8"></script>
<!-- <script src="/home/js/jia.js" type="text/javascript" charset="utf-8"></script> -->
<script type="text/javascript">
    //百度自动推送js
    (function(){
        var bp = document.createElement('script');
        var curProtocol = window.location.protocol.split(':')[0];
        if (curProtocol === 'https'){
            bp.src = 'https://zz.bd/home.com/linksubmit/push.js';
        }else{
            bp.src = 'https://push.zhanzhang.baidu.com/push.js';
        }
        var s = document.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(bp, s);
    })();
    //美洽客服
    (function(m, ei, q, i, a, j, s) {
        m[a] = m[a] || function() {
            (m[a].a = m[a].a || []).push(arguments)
        };
        j = ei.createElement(q),
        s = ei.getElementsByTagName(q)[0];
        j.async = true;
        j.charset = 'UTF-8';
        j.src = i + '?v=' + new Date().getUTCDate();
        s.parentNode.insertBefore(j, s);
    })(window, document, 'script', '//eco-api.meiqia.com/dist/meiqia.js', '_MEIQIA');
    _MEIQIA('entId', 9382);
    _MEIQIA('withoutBtn');
    _MEIQIA('metadata', {
        name:'',
        tel:''
    });
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
        //使用cookie判断是否为首次访问，并推荐下载《恋练瑜伽》
        if($app.GetCookie('isFirst')){
            $('#Info').fadeOut(200);
        }else{
            $('#Info').fadeIn(200);
            $app.SetCookie('isFirst','萌新', 1);
        }
        //手动关闭《恋练瑜伽》推广广告
        $('#closeInfo').click(function(){
            $('#Info').fadeOut(200);
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
        $('#signIn,#qdClose').on('click',function(){
            $('#qdMask').fadeToggle(400);
        })
        // 拼接日历
        var d = new Date();
        d.setDate(1);
        var monthDay = new Date(d.getFullYear(), (d.getMonth()+1), 0).getDate();
        day = (d.getDay() == 0) ? 7 : d.getDay();
        var liArr = $('#qdUl').find('li');  
        var n = 0;
        var oEq = new Array();
        $(liArr).each(function(index){
            if($(this).data('index')){
                oEq.push(parseInt($(this).data('index')));
                $(this).attr('data-index','');
            }
            if((day <= index+1)&&(n < monthDay)){
                $(this).addClass('date'+(n+1)).attr('data-time',(n+1));
                n++;
            }
        });
        $(liArr).each(function(index, el) {
            var _thisInd = parseInt($(this).data('time'));
            if($.inArray(_thisInd, oEq) != -1){
                $(this).addClass('circle');
            }
        });
        // 点击签到方法
        $('#qdBtn').on('click',function(){
            var _this = $(this);
            if("yoga_5932ITW"){
                $app.AjaxPost('member/setSign',{
                    user: "yoga_5932ITW"
                },function(ret){
                    console.log(JSON.stringify(ret));
                    if(ret.status == 'ok'){
                        $('#qdMask .qiandao-l-top h3').html('今日已签到');
                        $('#qdMask .qiandao-l-top p').html(ret.msg);
                        var txtTemp = "<h3>签到成功</h3><p>恭喜获得"+ret.integration+"积分</p><p>您现在拥有"+ret.score+"积分</p>"
                        $(_this).parent().html(txtTemp);
                        var date = new Date();
                        $('.date'+date.getDate()).addClass('circle');
                    }else{
                        toast.fail({
                            title: ret.msg,
                            duration:2000
                        });
                    }
                })
            }else{
                dialog.alert({
                    title:"未登录",
                    msg:'请登录后操作',
                    buttons:['确定']
                })
            }
        })
        //隐藏分享按钮
        $(window).scroll(function(){
            ($(this).scrollTop() > 600 ) ? $('.wechat').removeClass('dishide') : $('.wechat').addClass('dishide');
            ($(this).scrollTop() > 600 ) ? $('.qzone').removeClass('dishide') : $('.qzone').addClass('dishide');
            ($(this).scrollTop() > 600 ) ? $('.tsina').removeClass('dishide') : $('.tsina').addClass('dishide');
        });
        //活动开关
        $('#act-exp').click(function(){
            $('.draw-mask').fadeIn();
        })



        var char='https://www.yujia.com';
            char+='';
        var tex='',
            intro='';
        window._bd_share_config={
            "common":{
                "bdSnsKey":{},
                "bdText":tex,
                'bdDes':intro,
                "bdMini":"2",
                "bdMiniList":false,
                "bdPic":char,
                "bdStyle":"1",
                "bdSize":"16",
            },
            "share":{},
            "selectShare":{"bdContainerClass":null,"bdSelectMiniList":["qzone","tsina","tqq","renren","weixin"]},           
        };
        with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='https://www.yujia.com//home/baidu_share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];
    })
</script>
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
<!-- 百度统计 -->
</body>
</html>
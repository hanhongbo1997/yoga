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
            <div style="font-size:22px;height:34px;line-height:34px;border-bottom:1px solid #ebebeb;">会馆课程</div>
            <div class="xui-content">
              {!! $data->clubdetails->lesson !!}
            </div>
        </div>
        <div class="xui-col-xs-10 hall-box xui-hide" id="hall-commont">
            <div style="font-size:22px;height:34px;line-height:34px;border-bottom:1px solid #ebebeb;">会员评论</div>
            <div class="xui-content xui-padded-15">
                <!--评论模块-->
}
}
<style>
    /*点赞样式*/
    .pointer-power.active {color:#4dc060;}

    .review-again-list .review-again-conL {overflow: hidden;}
</style>
<div class="video-cont-list xui-margin-t-15">
    <h3 class="video-cont-list-title">评论</h3>
    <div id="discuss" class="xui-discuss xui-margin-t-10">
        <div class="discuss-cont">
            <span class="discuss-img">
                                    <img src="/home_club/picture/user_moren.png">
                            </span>
            <div class="discuss-cont-inner">
                <div class="discuss-cont-inner-box">
                    <textarea placeholder="吐槽？膜拜？或者你还可以找老师聊聊！？" id="replyItem"></textarea>
                </div>
                <div class="xui-text-right xui-content xui-margin-t-15">
                    <span id="subDiscus" class="sui-btn btn-xlarge btn-success">发表评论</span>
                </div>
            </div>
        </div>
        <div class="xui-border-b">
            <p class="discuss-sort xui-margin-b-10">
                <a href="javascript:;" id="orderSup">默认排序</a>
                <a href="javascript:;" class="on" id="orderTim">时间排序</a>
            </p>
            <div id="discuss-list">
                
            </div>
        </div>
        <div id="loading-more" class="sui-btn btn-xlarge" style="display:table;margin:20px auto;">加载更多 <i class="sui-icon icon-angle-right"></i></div>
    </div>
</div>
<script type="text/x-dot-template" id="saveTemp">
    <div class="discuss-cont xui-padded-t-15 xui-border-t discuss-temp">
        $$~it:value:index$$
            <div class="discuss-body">
                <span class="discuss-img">
                    $$? value.userinfo.figure$$
                        <img src="$$= value.userinfo.figure$$">
                    $$??$$
                        <img src="//home_club/pc/image/user_moren.png">
                    $$?$$
                </span>
                <div class="discuss-cont-inner">
                    <h4 class="xui-margin-0">$$= value.userinfo.nickname$$</h4>
                    <div class="xui-content xui-padded-t-10 xui-padded-b-10">$$= value.content$$</div>
                    <p class="xui-content xui-text-gary xui-margin-t-0 xui-font-size-12">
                        <span class="xui-pull-l">$$= value.r_times$$评论</span>
                        <span class="xui-pull-r discuss-mutua">
                            <i class="sui-icon icon-tb-commentfill review-again">$$= value.r_count$$</i>
                            $$? value.mysup === 1$$
                                <i class="sui-icon icon-tb-appreciatefill pointer-power active" data-id="$$= value.id$$">$$= value.support$$</i>
                            $$??$$
                                <i class="sui-icon icon-tb-appreciatefill pointer-power" data-id="$$= value.id$$">$$= value.support$$</i>
                            $$?$$
                        </span>
                    </p>
                    $$? value.reply_list$$
                        <div class="xui-content xui-bg-white xui-margin-b-15 xui-padded-10 review-again-list">
                            <div class="review-again-conL">
                                $$~value.reply_list:val:ind$$
                                    <div class="discuss-cont xui-margin-b-10">
                                        <span class="discuss-img" style="width:24px;height:24px;">
                                            $$? val.userinfo.figure$$
                                                <img src="$$= val.userinfo.figure$$">
                                            $$??$$
                                                <img src="/home_club/picture/user_moren.png">
                                            $$?$$
                                        </span>
                                        <div class="discuss-cont-inner xui-border-b" style="padding-left:34px;">
                                            <h4 class="xui-margin-0">$$= val.userinfo.nickname$$</h4>
                                            <div class="xui-content xui-padded-t-5 xui-padded-b-5">$$= val.content$$</div>
                                            <p class="xui-content xui-text-gary xui-margin-t-0 xui-font-size-12">
                                                <span class="xui-pull-l">$$= val.r_times$$回复</span>
                                                <span class="xui-pull-r discuss-mutua">
                                                    $$? val.mysup === 1$$
                                                        <i class="sui-icon icon-tb-appreciatefill pointer-power active" data-id="$$= val.id$$">$$= val.support$$</i>
                                                    $$??$$
                                                        <i class="sui-icon icon-tb-appreciatefill pointer-power" data-id="$$= val.id$$">$$= val.support$$</i>
                                                    $$?$$
                                                </span>
                                            </p>
                                        </div>
                                    </div>
                                $$~$$
                            </div>
                            <div class="packBtn xui-text-center" style="padding: 10px 0;" onclick="packBtnTog(this,192)"> 
                                <span class="sui-btn btn-large btn-success packBtnTxt">加载更多<em class="sui-icon icon-tb-unfold"></em></span>
                            </div>
                            <div class="review-again-list-inner">
                                <textarea placeholder="绿色上网，文明回复"></textarea>
                                <span class="sui-btn btn-large reply_sub" data-repid='$$= value.id$$' data-pid="$$= value.author_id$$">提交回复</span>
                            </div>
                        </div>
                    $$?$$
                </div>
            </div>
        $$~$$
    </div>
</script>
<script src="/home_club/js/dot.js"></script>
<script src="/home_club/js/require.js"></script>

<script type="text/javascript">
    var toast = new UToast(),
        page = 1,
        orderType='';
    $(function(){
        // console.log('7748');
        onload();
        function onload(){
            $app.AjaxPost('content/commtent_list',{
                id: '7748',
                page: page,
                ordertype: orderType
            },function(data_sku){
                if(data_sku.list.length > 0){
                    if(data_sku.list.length < 15){
                        $('#loading-more').hide();
                    }
                    var saveTemp = doT.template($('#saveTemp').html());
                    if(page == 1){
                        $('#discuss-list').html(saveTemp(data_sku.list));
                    }else{
                        $('#discuss-list').append(saveTemp(data_sku.list));
                    }
                    hive();
                }else{
                    $('#loading-more').hide();
                }
            });
        }
        $('#discuss-list').on('click','.review-again',function(){
            $(this).parents('.discuss-cont-inner').children('.review-again-list').toggleClass('xui-hide');
        })
       
        //点赞
        $('#discuss-list').on('click','.pointer-power',function(){
            var _this = $(this);
            if(!""){
                toast.fail({
                    title:"您尚未登录",
                    duration:1500
                });
                return false;
            }
            $.post('/pc/content/go_support.html',{r_id:_this.data('id')},function(data){
                if(data.status == 'ok'){
                    _this.text(parseInt(_this.text())+1);
                    _this.addClass('active');
                }else{
                    toast.fail({
                        title:data.msg,
                        duration:1500
                    });
                }
            });
        })

        //回复提交
        $('#discuss-list').on('click','.reply_sub',function(){
            var _this = $(this),
                r_content = _this.prev('textarea').val();
            if(!""){
                toast.fail({
                    title:"您尚未登录",
                    duration:1500
                });
                return false;
            }
            if($app.isNull(r_content)){
                $app.AjaxPost('content/go_reply',{
                    content_id: '7748',
                    reply_id: _this.data('repid'),
                    pid: _this.data('pid'),
                    r_content: r_content
                },function(data_sku){
                    if(data_sku.status == 'ok'){
                        toast.success({
                            title:"评论成功",
                            duration:1500
                        });
                        onload();
                    }else{
                        toast.fail({
                            title:data_sku.msg,
                            duration:1500
                        });
                        return false;
                    }
                });
            }else{
                toast.fail({
                    title:"请填写内容",
                    duration:1500
                });
            }
        })

        /**
         * 提交评论
         * @Author   slz@yujia.com
         * @DateTime 2017-07-25T10:34:02+0800
         * @param    {[type]}                 ){                     } [description]
         * @return   {[type]}                     [description]
         */
        $('#subDiscus').click(function(){
            var content = $('#replyItem').val();
            if(!""){
                toast.fail({
                    title:"您尚未登录",
                    duration:1500
                });
                return false;
            }
            if($app.isNull(content)){
                $app.AjaxPost('content/setReplyItem',{
                    content: content,
                    content_id: '7748'
                },function(data_sku){
                    if(data_sku.status == 'ok'){
                        $('#replyItem').val('');
                        toast.success({
                            title:"评论成功",
                            duration:1500
                        });
                        onload();
                    }else{
                        toast.fail({
                            title:data_sku.msg,
                            duration:1500
                        });
                        return false;
                    }
                });
            }else{
                toast.fail({
                    title:"请填写内容",
                    duration:1500
                });
            }
        });

        $('#loading-more').click(function(){
            page++;
            onload();
        });

        $('#orderSup').click(function(){
            page = 1;
            orderType = 'support';
            $('#orderSup').addClass('on').next().removeClass('on');
            onload();
        });

        $('#orderTim').click(function(){
            page = 1;
            orderType = '';
            $('#orderTim').addClass('on').prev().removeClass('on');
            onload();
        });

        // 评论内容展示、隐藏
        function hive(){
            var disListArr = $('.discuss-body');
            for (var i = disListArr.length - 1; i >= 0; i--) {
                var disCon = $(disListArr[i]).find('.review-again-conL')
                var disConH = $(disListArr[i]).find('.review-again-conL').height();
                var Btn = $(disListArr[i]).find('.packBtn');
                if(disConH <= 192) {
                    $(disCon).css({'height': 'auto'});
                    $(Btn).remove();
                }else {
                    $(disCon).css({'height': '192px'});
                }
            }
        }
    })
    function packBtnTog(ele,h){
        if($(ele).prev().height() == h){
            $(ele).prev().css({height: 'auto'});
            $(ele).children().html('收起内容 <em class="sui-icon icon-tb-fold"></em>');
        }else {
            $(ele).prev().css({height: h});
            $(ele).children().html('加载更多 <em class="sui-icon icon-tb-unfold"></em>');
        }
    }
</script>
            </div>
        </div>
    </div>


@endsection
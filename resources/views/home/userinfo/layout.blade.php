@extends('home.layout.layout')
@section('content')
<head>
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests" />
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
</head>
<body style="min-width:1280px;">

<style type="text/css">
    body{background:#fff;}
    .xui-information li{line-height:48px;}
</style>
<br>
<br>
<br>
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
            <a href="/home/userinfo/1">我的信息
                <span class="sui-icon icon-angle-right"></span>
            </a>
        </li>
        <li>
            <a href="/home/userinfo/vip">会员专区
                <span class="sui-icon icon-angle-right"></span>
            </a>
        </li>
        <li>
            <a href="/home/userinfo/allbuy">已购视频
                <span class="sui-icon icon-angle-right"></span>
            </a>
        </li>
        <li>
            <a href="/home/userinfo/fav">收藏夹
                <span class="sui-icon icon-angle-right"></span>
            </a>
        </li>
        <li>
            <a href="/home/userinfo/common">我的评论
                <span class="sui-icon icon-angle-right"></span>
            </a>
        </li>
        <li>
            <a href="javascrit:;" style="color: #ccc;background: #eee;" onclick="alert('暂未开放')" title="暂不开放">我的优惠券
                <span class="sui-icon icon-angle-right"></span>
            </a>
        </li>
    </ul>
        <ul>
        <h3>订单管理</h3>
        <li>
            <a href="/home/userinfo/order">我的订单
                <span class="sui-icon icon-angle-right"></span>
            </a>
        </li>
        <li>
            <a href="/home/userinfo/cart">我的购物车
                <span class="sui-icon icon-angle-right"></span>
            </a>
        </li>
    </ul>
    <ul>
        <h3>账号管理</h3>
        <li>
            <a href="/home/userinfo/safe">账号设置
                <span class="sui-icon icon-angle-right"></span>
            </a>
        </li>
        <li>
            <a href="javascrit:;" style="color: #ccc;background: #eee;" onclick="alert('暂未开放')" title="暂不开放">消息通知
                <span class="sui-icon icon-angle-right"></span>
            </a>
        </li>
        <li>
            <a href="javascrit:;" style="color: #ccc;background: #eee;" onclick="alert('暂未开放')" title="暂不开放">意见反馈
                <span class="sui-icon icon-angle-right"></span>
            </a>
        </li>
    </ul>
</div>
<!-- 编辑器插件加载 -->
<link rel="stylesheet" href="static/css/default.css">
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
 @section('contents')
            
 @show
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
            '/pc/image/act/goddess/info_2.png',
            '/pc/image/act/goddess/info_3.png',
            '/pc/image/act/goddess/info_4.png',
            '/pc/image/act/goddess/info_5.png'
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
                $(this).attr('src','/pc/image/act/goddess/info_5.png');
                $(this).removeAttr("id").width('46%');
            }else if(rets == 1 && !$.cookie('nsj')){
                $.cookie('nsj', '1', { expires: 1 });
                $(this).attr('src','/pc/image/act/goddess/info_2.png');
                $(this).removeAttr("id").width('46%');
            }else {
                $(this).attr('src','/pc/image/act/goddess/info_4.png');
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
<link href="static/css/qiandao.css" rel="stylesheet" type="text/css">
<script src="/home/js/wb.js" type="text/javascript" charset="utf-8"></script>
<!-- <script src="/home/js/jia.js" type="text/javascript" charset="utf-8"></script> -->
<script type="text/javascript">
    //全局模块JS
    $(function(){
        var dialog = new UDialog({}),//实例化对话框组件
            toast = new UToast(),//实例化消息提示组件
            nav = $('#xui-nav'),//获取导航栏目
            navH = nav.height();//获取导航栏的高度
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
</script>

@endsection
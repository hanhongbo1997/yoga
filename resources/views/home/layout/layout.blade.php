<script type="text/javascript">
    var basePath = "http://wakeyoga.com/";
</script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Wake-瑜伽减肥健身视频课程，瑜伽教练培训首选品牌</title>
    <meta name="description" content="Wake是中国具影响力的瑜伽品牌，拥有专业的瑜伽视频课程及瑜伽教练培训平台，包含多种精品瑜伽课程，如睡前瑜伽、哈他瑜伽、初级瑜伽、减肥瑜伽等，并拥多家线下瑜伽馆。">
    <meta name="keywords" content="瑜伽课程,瑜伽视频,瑜伽教练培训,瑜伽减肥,每日瑜伽">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css" href="/home/css/yoga.css">
    
    <link href="/home/css/poposlides.css" rel="stylesheet" >
    <link rel="stylesheet" href="/home/css/idangerous.swiper2.7.6.css">
    <link rel="stylesheet" href="/home/css/animate.min.css">
    <link rel="stylesheet" href="/home/css/style.css">
    <link rel="stylesheet" href="/home/css/sui.css">


    <script type="text/javascript" src="/home/js/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="/home/js/common.js"></script>
    <script src="/home/js/idangerous.swiper2.7.6.min.js"></script>
    <script src="/home/js/swiper.animate1.0.2.min.js"></script>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <link rel="icon" href="/home/pc/image/yuketang/favicon.ico" type="x-icon" />
    <link href="/home/css/aui.css" rel="stylesheet">
    <link href="/home/css/revision.css" rel="stylesheet">
    <link rel="stylesheet" href="/home/css/swiper.min.css">
    <script src="/home/js/require_1.js" type="text/javascript"></script>
    <link rel="stylesheet" href="/home/css/dist/plyr.css">
    <script src="/home/js/dist/plyr.js"></script>
    <script type="text/javascript" src="/home/js/jquery.comment.js" ></script>
    <script>        
      var mySwiper = new Swiper ('.swiper-container', {
        pagination: '.pagination',
        paginationClickable :true,
        autoplay : 10000,
        speed:1,

        //autoplayDisableOnInteraction : false,
        
        onInit: function(swiper){ //Swiper2.x的初始化是onFirstInit
          swiperAnimateCache(swiper); //隐藏动画元素 
          swiperAnimate(swiper); //初始化完成开始动画
        }, 
        onSlideChangeEnd: function(swiper){ 
        swiperAnimate(swiper); //每个slide切换结束时也运行当前slide动画
        } 
      })
        
      $('.arrow-left').on('click', function(e){
        e.preventDefault()
        mySwiper.swipePrev()
      })
      $('.arrow-right').on('click', function(e){
        e.preventDefault()
        mySwiper.swipeNext()
      })    
      </script> 
    <style>
		header{
			background: -webkit-linear-gradient(white, transparent)!important; /* Safari 5.1 - 6.0 */
	  		background: -o-linear-gradient(white, transparent)!important; /* Opera 11.1 - 12.0 */
	  		background: -moz-linear-gradient(white, transparent)!important; /* Firefox 3.6 - 15 */
	  		background: linear-gradient(white, transparent)!important; /* 标准的语法 */
	  		position:fixed;
	  		width:100%;
	  		left:0;
	  		top:0;
	  		border:none!important;
	  		height:120px!important;
	  		z-index:100;
		}
       
       
        </style>

</head>
<script type="text/javascript" src="/home/js/tabs.js"></script>
<link type="text/css" rel="stylesheet" href="/home/css/tabs.css"/>
<body>
<!--头部-->
<!--头部-->



<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "https://hm.baidu.com/hm.js?bb62d7379cd5d363a61fe19d7a644ae3";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>

<header>
    <h1 class="fl"><a href="http://wakeyoga.com/" title="Wake，瑜伽减肥塑形健身教练">
        <img src="/home/images/logo.jpg" style="width: 50px;float: left;" class="logo" alt="Wake，瑜伽减肥塑形健身教练" onclick="toLogin()"/>
        <div style="float: left;width: 180px;height: 50px;">
            <span style="line-height: 65px;color: gold;padding: 0px;margin-bottom: 0px;">&nbsp;&nbsp;&nbsp;假装有个logo</span>
            <span style="font-size: 10px;margin: 0px 0px 0px 45px;padding: 0px;color: white;">哎呀TM忘抠图了</span></a></h1>
        </div>
    <div class="fr loginArea oh">
        <a href="/home/logon" class="fl loginBtn"  onclick="headLoginBtn()">登录</a>
        <a href="/home/register" class="fl loginBtn" style="display: block;">注册</a>
        <a href="" class="fl loginBtn2" style="display: none;">开通VIP</a>
        <!--登录后头像+用户名-->
        <div class="fl user oh" style="display: none;">
        	<var class="fl vipMark" >
	          <img src="/home/picture/zuanshi.png"/></a>
	          <i>VIP</i>
	        </var>
            <a href="/home/userinfo/{{ session('admin_login')['uid'] }} " id="VIP" style="border: none;">
            
            <img src="{{ session('admin_login')['uimg'] == 'null' ? session('admin_login')['uimg'] : '\home\images\1-14.jpg' }}" class="fl" id="userImage" alt="\home\images\1-14.jpg">
            </a>
            <span class="fl" id="user"></span>
            <a href="/home/logon" class="fl loginOutBtn" style="margin-left: 16px;list-style:none;" onclick="loginOuts()"  id="loginOut">退出</a>
            
        </div>
        <!--登录后头像+用户名END-->
    </div>

    <script>
    //检测用户是否登录
        $(function(){
  
            //发送ajx判断是否有
           $.get('/home/logon/Register',{},function(msg){
                                    
             if(msg == 'success'){
                
                $('.loginBtn').css('display','none');
                $('.loginBtn2').css('display','block');
                $('.user').css('display','block');
             }else if(msg == 'error'){
                 $('#VIP').removeAttr ("href");
                 $('#userImage').removeAttr ("src");
                 $('.loginBtn').css('display','block');
                 $('.user').css('display','none');
                 $('.loginBtn2').css('display','none');
             }
                                    
             },'html'); 
             //退出  
            function loginOuts()
            {
                $('#loginOut').click(function(){
                   session.removeAttr("admin_login"); 
                });
               
            } 

        });
        //退出
        
        
    </script>

    <input type="hidden" id="showFlag" name="showFlag" value="1"/>
    <ul class="fr navList2">

        <li class="fl"><a href="/" class="cur">首页</a></li>
        <li class="fl"><a href="/home/video">瑜伽视频</a></li>
        <li class="fl"><a href="/home/lesson">瑜伽课程</a></li>
        <li class="fl"><a href="/home/news" id="community">社区</a></li>
        <li class="fl"><a href="/home/club" id="clubYoga">瑜伽馆</a></li>
        <li class="fl"><a href="/home/teacher/index" >名师</a></li>
        <li class="fl"><a href="http://wakeyoga.com/2enterprise.html" id="enterpriseYoga">企业瑜伽</a></li>
        <li class="fl trainList">
        	<a href="./toTraining.html" id="trainingCoach">瑜伽教培</a>
        	<div class="train_inner">
	          <a href="javascript:;">培训课程一</a>
	          <a href="javascript:;">培训课程一</a>
	        </div>
        </li>
        <div class="clear">&nbsp;</div>
        <script>
            $(function(){
                $('.fl').click(function(){
                    $(this).css('color','#f85f1c');
                });
            });
        </script>

    </ul>
    <div class="clear">&nbsp;</div>
</header>
<!--登录二维码-->
<div class="loginCode" style="display: none;" id="myloginCode">
    <dl>
        <dt id="loginCode">
        </dt>
        <dd>
            请打开Wake客户端，进入“我的”频道扫一扫
        </dd>

        <dd class="ifout" id="headIfount">（二维码已过期，请 <a href="javascript:;" onclick="myrefresh()">刷新</a> 后重新扫码登录）
        </dd>
    </dl>
</div>

<script>
    var hasLogined=false;
    var logintimer;
    var isVip=false
   var userName ='';
    var userImage ='';
</script>
<script type="text/javascript" src="/home/js/jquery.qrcode.min.js"></script>
<script type="text/javascript" src="/home/js/header.js"></script>



<div class="ourService oh">
	<div class="oh" id="backTop">
      <a href="javascript:;" class="backTop fr"></a>
    </div>
    <div>
        <a href="javascript:;" class="needService fr" id="service" onclick="_MEIQIA('showPanel')"><span id="unreadNum" style="display: none"></span></a>
        <div class="clear">&nbsp;</div>
    </div>
    <div class="oh" style="display: block">
        <a href="http://wakeyoga.com/toDownLoad.html" class="appDownload fr"></a>
    </div>
    <script>
        /**
         * [处理未读消息]
         * @param  {[string, object]} msg [string: 'hasBeenRead',
         object: 未读消息数据]
         */
        function yourFunction(msg) {
            var text = '',
                    num = 0;
            if (msg === 'hasBeenRead') { // 消息已被阅读
                num = 0;
            } else if (typeof(msg) === 'object') {
                var unreadNum = document.getElementById('unreadNum').innerHTML,
                        lastMsg = msg[msg.length - 1];
                num = isNaN(+unreadNum) ? msg.length : +unreadNum + msg.length;
            }
            // 未读消息数量
            if(num==0){
                $("#unreadNum").hide();
            }else {
                $("#unreadNum").show();
                document.getElementById('unreadNum').innerHTML = num;
            }
        }
    </script>
    <script type='text/javascript'>
        (function(m, ei, q, i, a, j, s) {
            m[i] = m[i] || function() {
                        (m[i].a = m[i].a || []).push(arguments)
                    };
            j = ei.createElement(q),
                    s = ei.getElementsByTagName(q)[0];
            j.async = true;
            j.charset = 'UTF-8';
            j.src = 'https:///home.meiqia.com/dist/meiqia.js?_=t';
            s.parentNode.insertBefore(j, s);
        })(window, document, 'script', '_MEIQIA');
        _MEIQIA('entId', 65153);
        _MEIQIA('withoutBtn');
        // 获取未读消息
        _MEIQIA('getUnreadMsg', yourFunction);
    </script>
</div>
<script>
	window.onscroll=function(){
             if($(this).scrollTop() > 100){
                 $('#backTop').fadeIn();
                 $("header").addClass("headerCur");
             }else{
                 $('#backTop').fadeOut();
                 $("header").removeClass("headerCur");
             }
         }
	$(function(){
		/*返回顶部------------------------------------------------------*/
	    $("#backTop").click(function(){
            $('html,body').animate({scrollTop: '0px'}, 1000);
        })
	})
</script>
<link rel="stylesheet" href="/home/css/asidenav.css">
<div>
    <svg width="0" height="0">
        <defs>
            <filter id="goo">
                <feGaussianBlur in="SourceGraphic" stdDeviation="10" result="blur"></feGaussianBlur>
                <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="goo"></feColorMatrix>
                <feComposite in="SourceGraphic" in2="goo" operator="atop"></feComposite>
            </filter>
        </defs>
    </svg>
    <div class="aside-nav bounceInUp animated" id="aside-nav">
        <label for="" class="aside-menu" title="按住拖动">临时用</label>

        <a href="/home/userinfo/1" title="临时用的" class="menu-item menu-first">个人中心</a>
        <a href="/admin/login" title="后台页面，我真机智" class="menu-item menu-second">后台页面</a>
        <a href="javascript:void(0)" title="点不了" style="cursor: no-drop;" class="menu-item menu-third">点不了</a>
        <a href="javascript:void(0)" title="还是点不了" style="cursor: no-drop;" class="menu-item menu-line menu-fourth">广告<br>招租</a> <!-- *跳到商家微信推广* -->
    </div>
</div>    

<!-- <script type="text/javascript" src="/home/js/jquery.min.js"></script> -->
<script type="text/javascript" src="/home/js/asidenav.js"></script>

 @section('content')
            
 @show

 <!-- 底部 -->
<footer>
    <div class="footCon" >
        <div class="fl linkOut" style="margin-top: 40px; margin-bottom:30px">
            <ul class="oh">
          
                <li class="title fl">内容</li>
                <li class="fl"><a href="home/lesson">课程</a></li>
                <li class="fl"><a href="http://wakeyoga.com/2lessons/a6z2/">体式库</a></li>
                <li class="fl"><a href="http://wakeyoga.com/2community/z3/">社区</a></li>
            </ul>
            <ul class="oh">
                <li class="title fl">服务</li>
                <li class="fl"><a href="/home/club">瑜伽馆</a></li>
                <li class="fl"><a href="/home/enroll/create">企业服务</a></li>
                <li class="fl"><a href="/home/aboutus">关于我们</a></li>
                <li class="fl"><a href="/home/video">瑜伽视频</a></li>
            </ul>
            <ul class="oh">
                <li class="title fl">其他</li>
                <li class="fl"><a href="/home/privacy">隐私说明</a></li>
                <li class="fl"><a href="/home/community">社群规范</a></li>
            </ul>
            <dl class="concerUs">
                <dt class="fl">
                    <a href="http://www.weibo.com/u/5723810323">
                        <img src="/home/picture/weibo2.png"/>
                    </a>
                    <img src="/home/picture/weixin2.png" class="footWechat" />
                    <img src="/home/picture/footcode.png" class="footCode" />
                </dt>
                <dd class="concerUs_dd1">
                    关注我们
                </dd>
                <dd>
                    商务合作：bd@wakeyoga.com
                </dd>                
                <div class="clear">&nbsp;</div>
            </dl>
            <div class="copyRight">
                Copyright2015 北京唤醒之光网络科技有限公司京ICP备15057355号
            </div>
        </div>

        
        <div class="fl copyOut" style="margin-top: 40px; margin-bottom:30px">          

            <dl class="workDay">
	          <dt>400-166-8393</dt>
	          <dd class="work_dd1">工作日9：30-18：00</dd>
	          <dd class="work_dd1">地址：北京市朝阳区百子湾东里甲406-2</dd>
	          <dd class="work_dd2"><a href="javascript:;" onclick="_MEIQIA('showPanel')">在线客服</a></dd>
	        </dl> 
	        <div class="dibu_code">
	          <img src="/home/picture/dibu_code.png"/>
	        </div>               
        </div>        
        <div class="clear">&nbsp;</div>
    </div>
</footer>
<script>
    $(".footWechat").hover(function(){
        $(".footCode").show();
    },function(){
        $(".footCode").hide();
    });
</script>

</body>
<script type="text/javascript" src="/home/js/index.js"></script>
<script src="/home/js/poposlides.js"></script> 
<script>
    $(".slides").poposlides();
</script>
</html>

<!doctype html>
<html>
<script type="text/javascript">
    var basePath = "http://wakeyoga.com/";
</script>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Wake-瑜伽减肥健身视频课程，瑜伽教练培训首选品牌</title>
    <meta name="description" content="Wake是中国具影响力的瑜伽品牌，拥有专业的瑜伽视频课程及瑜伽教练培训平台，包含多种精品瑜伽课程，如睡前瑜伽、哈他瑜伽、初级瑜伽、减肥瑜伽等，并拥多家线下瑜伽馆。">
    <meta name="keywords" content="瑜伽课程,瑜伽视频,瑜伽教练培训,瑜伽减肥,每日瑜伽">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css" href="/home/css/yoga_new.css">

    <script type="text/javascript" src="/home/js/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="/home/js/common.js"></script>
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
    <h1 class="fl"><a href="http://wakeyoga.com/" title="Wake，瑜伽减肥塑形健身教练"><img src="/home/picture/logo.png" class="logo" alt="Wake，瑜伽减肥塑形健身教练" onclick="toLogin()"/></a></h1>
    <div class="fr loginArea oh">
        <a href="javascript:;" class="fl loginBtn" style="display: block;" onclick="headLoginBtn()">登录</a>
        <a href="/home/register" class="fl loginBtn" style="display: block;">注册</a>
        <a href="javascript:;" class="fl loginBtn2" style="display: none;">开通VIP</a>
        <!--登录后头像+用户名-->
        <div class="fl user oh" style="display: none;">
        	<var class="fl vipMark">
	          <img src="/home/picture/zuanshi.png"/>
	          <i>VIP</i>
	        </var>
            <img src="" class="fl" id="userImage"/>
            <span class="fl" id="user"></span>
            <a href="javascript:;" class="fl loginOutBtn" style="margin-left: 16px;" onclick="loginOut()">退出</a>
        </div>
        <!--登录后头像+用户名END-->
    </div>
    <input type="hidden" id="showFlag" name="showFlag" value="1"/>
    <ul class="fr navList2">
        <li class="fl"><a href="http://wakeyoga.com/" id="index" class="cur">首页</a></li>
        <li class="fl"><a href="http://wakeyoga.com/2lessons/a1z2/" id="lesson">瑜伽课程</a></li>
        <li class="fl"><a href="http://wakeyoga.com/2community/z3/" id="community">社区</a></li>
        <li class="fl"><a href="http://wakeyoga.com/2club.html" id="clubYoga">瑜伽馆</a></li>
        <li class="fl"><a href="http://wakeyoga.com/2enterprise.html" id="enterpriseYoga">企业瑜伽</a></li>
        <li class="fl trainList">
        	<a href="./toTraining.html" id="trainingCoach">瑜伽教培</a>
        	<div class="train_inner">
	          <a href="javascript:;">培训课程一</a>
	          <a href="javascript:;">培训课程一</a>
	        </div>
        </li>
        <div class="clear">&nbsp;</div>
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

 @section('content')
            
 @show

 <!-- 底部 -->
<footer>
    <div class="footCon">
        <div class="fl linkOut">
            <ul class="oh">
                <li class="title fl">内容</li>
                <li class="fl"><a href="http://wakeyoga.com/2lessons/a1z2/">课程</a></li>
                <li class="fl"><a href="http://wakeyoga.com/2lessons/a6z2/">体式库</a></li>
                <li class="fl"><a href="http://wakeyoga.com/2community/z3/">社区</a></li>
            </ul>
            <ul class="oh">
                <li class="title fl">服务</li>
                <li class="fl"><a href="http://wakeyoga.com/2club.html">瑜伽馆</a></li>
                <li class="fl"><a href="http://wakeyoga.com/2enterprise.html">企业服务</a></li>
                <li class="fl"><a href="http://wakeyoga.com/2aboutus.html">关于我们</a></li>
                <li class="fl"><a href="https://mall.jd.com/index-646364.html">Wake商城</a></li>
            </ul>
            <ul class="oh">
                <li class="title fl">其他</li>
                <li class="fl"><a href="http://wakeyoga.com/2term.html">隐私说明</a></li>
                <li class="fl"><a href="http://wakeyoga.com/2rules.html">社群规范</a></li>
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
        <div class="fl copyOut">          
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
<script>
    var LogsNum = 0;
    LogsNum =
    [[{"log_practice_energy_value":2,"lesson_name":"还心灵一片宁静","lesson_level":0,"nickname":"Wake","log_practice_time":462.11,"id":4730489,"u_icon_url":"http://w3.wakeyoga.com/1_1467189229349.jpg?imageMogr2/auto-orient/thumbnail/150x/quality/70","log_practice_create_at":1545372558,"lesson_id":6425},{"log_practice_energy_value":2,"lesson_name":"摆脱忧郁症","lesson_level":0,"nickname":"蜕变","log_practice_time":225.0,"id":4730488,"u_icon_url":"http://q.qlogo.cn/qqapp/1104845949/011C5AED26709576674C046941133E37/100?imageMogr2/auto-orient/thumbnail/150x/quality/70","log_practice_create_at":1545372519,"lesson_id":6383},{"log_practice_energy_value":2,"lesson_name":"正确对待欲望","lesson_level":0,"nickname":"kitty","log_practice_time":252.0,"id":4730487,"u_icon_url":"http://thirdqq.qlogo.cn/qqapp/1104845949/F4FF395DEF0F47CAE90FBF4D2D919C9F/100?imageMogr2/auto-orient/thumbnail/150x/quality/70","log_practice_create_at":1545372506,"lesson_id":6424},{"log_practice_energy_value":2,"lesson_name":"14天瑜伽球美体计划","lesson_level":1,"nickname":"153****6261","log_practice_time":2209.0,"id":4730486,"u_icon_url":"http://w16.wakeyoga.com/default1.png?imageMogr2/auto-orient/thumbnail/150x/quality/70","log_practice_create_at":1545372470,"lesson_id":6255},{"log_practice_energy_value":2,"lesson_name":"14天关节修复计划","lesson_level":1,"nickname":"*l_hj","log_practice_time":2529.0,"id":4730485,"u_icon_url":"http://thirdwx.qlogo.cn/mmopen/vi_32/Q0j4TwGTfTKQMfL4STXu0BdCVwm7yl6TAOYavKicFqysGRuV1mlMUE50sibArNry6yBuwoPxWXWAj8Pglwe2vrlQ/132?imageMogr2/auto-orient/thumbnail/150x/quality/70","log_practice_create_at":1545372466,"lesson_id":6718},{"log_practice_energy_value":3,"lesson_name":"脊柱修复","lesson_level":0,"nickname":"九月","log_practice_time":1770.0,"id":4730484,"u_icon_url":"http://thirdwx.qlogo.cn/mmopen/vi_32/DYAIOgq83epyQOstib69POZLEeW3ibgkrZtxfBNvAQaXfD03YhMHbh5yqnm0xh9gDdqMDwlgf7ibJk5Qe1ZQgCBxA/132?imageMogr2/auto-orient/thumbnail/150x/quality/70","log_practice_create_at":1545372460,"lesson_id":247},{"log_practice_energy_value":3,"lesson_name":"柔软的脊柱","lesson_level":0,"nickname":"135****2785","log_practice_time":1950.0,"id":4730483,"u_icon_url":"http://w16.wakeyoga.com/default1.png?imageMogr2/auto-orient/thumbnail/150x/quality/70","log_practice_create_at":1545372380,"lesson_id":5174},{"log_practice_energy_value":3,"lesson_name":"辅助工具的灵活运用","lesson_level":0,"nickname":"1","log_practice_time":2780.0,"id":4730482,"u_icon_url":"https://wx.qlogo.cn/mmopen/vi_32/Q0j4TwGTfTLBJ7P5JJmf2xKrCqWlCwEPTsnl0gHzzDZMlKqyBlYgicJxutyCHlZKz4FcAT0fLyah226ibwqVEjqQ/132?imageMogr2/auto-orient/thumbnail/150x/quality/70","log_practice_create_at":1545372371,"lesson_id":2716}],[{"log_practice_energy_value":2,"lesson_name":"冥想音乐","lesson_level":0,"nickname":"156****2225","log_practice_time":1295.22,"id":4730481,"u_icon_url":"http://w16.wakeyoga.com/default1.png?imageMogr2/auto-orient/thumbnail/150x/quality/70","log_practice_create_at":1545372370,"lesson_id":385},{"log_practice_energy_value":3,"lesson_name":"清晨瑜伽初级","lesson_level":0,"nickname":"星潼","log_practice_time":1359.0,"id":4730480,"u_icon_url":"http://wx.qlogo.cn/mmopen/7OiazyOOI5ibCCdibj0apOXaOOeGw5jy9TVhgL42oq5y2VEb7ctqZpu0SOe2JfXn3BqZ8eBOSo1XPTWpwSGV2btIE2DGTmHzUgZ/0?imageMogr2/auto-orient/thumbnail/150x/quality/70","log_practice_create_at":1545372333,"lesson_id":61},{"log_practice_energy_value":2,"lesson_name":"14天零基础入门计划","lesson_level":0,"nickname":"🌼HLL🌼","log_practice_time":1118.0,"id":4730479,"u_icon_url":"http://thirdwx.qlogo.cn/mmopen/vi_32/fc1O7Wg2bplBjvMLRtwMxUoOIib7AWgHibpXVld3O5Sq4pa2Xxne69uhcQ5iaOyJibrAFSzNSbWkRIALNkTavhnf8g/132?imageMogr2/auto-orient/thumbnail/150x/quality/70","log_practice_create_at":1545372330,"lesson_id":6309},{"log_practice_energy_value":2,"lesson_name":"每日早中晚冥想","lesson_level":0,"nickname":"李希特·纸上建城邦","log_practice_time":912.0,"id":4730478,"u_icon_url":"http://wx.qlogo.cn/mmopen/aA34YiaorAzMvg6YIMZNOhVwo8gmDeCFRiarQAA0ibSTaXiaSuaGF0HXakk9sbjMtSrYP83SicrXI5MibET8Dr8a8oqneicHBib0SHH0/0?imageMogr2/auto-orient/thumbnail/150x/quality/70","log_practice_create_at":1545372326,"lesson_id":6473},{"log_practice_energy_value":2,"lesson_name":"关于睡眠","lesson_level":0,"nickname":"过客","log_practice_time":216.0,"id":4730477,"u_icon_url":"http://wx.qlogo.cn/mmopen/bNvr4hjCoNCibIWRovxNu5Zjr8QNUxzHkGKwXznxWiaI9tyMKr2V9pSheFtIBmaLIrztAPmzpaHFia0GHSO7wE7ibKg5NMDka3Kt/0?imageMogr2/auto-orient/thumbnail/150x/quality/70","log_practice_create_at":1545372315,"lesson_id":145},{"log_practice_energy_value":3,"lesson_name":"亲子瑜伽","lesson_level":0,"nickname":"🌶","log_practice_time":1278.0,"id":4730476,"u_icon_url":"http://wx.qlogo.cn/mmopen/ajNVdqHZLLBeesDkIoIupzSuk4ELiaoGPkzq7ichesQickOaNO1gACWFXazQicPjhiaGgykBJxVCeLCSvLibvXs9c8Rg/0?imageMogr2/auto-orient/thumbnail/150x/quality/70","log_practice_create_at":1545372308,"lesson_id":87},{"log_practice_energy_value":3,"lesson_name":"减脂瘦身瑜伽","lesson_level":1,"nickname":"自由的鱼","log_practice_time":1576.0,"id":4730475,"u_icon_url":"http://q.qlogo.cn/qqapp/1104845949/E446C5C7B65A8EA8F4A0EF2B91DF9D67/100?imageMogr2/auto-orient/thumbnail/150x/quality/70","log_practice_create_at":1545372303,"lesson_id":113},{"log_practice_energy_value":2,"lesson_name":"关于睡眠","lesson_level":0,"nickname":"我念你念得那么真","log_practice_time":383.0,"id":4730474,"u_icon_url":"http://q.qlogo.cn/qqapp/1104845949/CC2E504C6E8D2B48D4682275C70969CC/100?imageMogr2/auto-orient/thumbnail/150x/quality/70","log_practice_create_at":1545372297,"lesson_id":145}],[{"log_practice_energy_value":0,"lesson_name":"初学冥想课堂","lesson_level":0,"nickname":"生物时代温煦","log_practice_time":0.0,"id":4730473,"u_icon_url":"http://thirdwx.qlogo.cn/mmopen/vi_32/xAGSkZZsicKKOGz6ZN08llfNUDicIZhslMCN55gBY7eo4vwIyFibx4f3Fdl3Q9OdlQTZnoicVH1B1rrcpKCiaic6oTCA/132?imageMogr2/auto-orient/thumbnail/150x/quality/70","log_practice_create_at":1545372286,"lesson_id":6472},{"log_practice_energy_value":2,"lesson_name":"摆脱忧郁症","lesson_level":0,"nickname":"蜕变","log_practice_time":175.0,"id":4730472,"u_icon_url":"http://q.qlogo.cn/qqapp/1104845949/011C5AED26709576674C046941133E37/100?imageMogr2/auto-orient/thumbnail/150x/quality/70","log_practice_create_at":1545372283,"lesson_id":6383},{"log_practice_energy_value":2,"lesson_name":"关于睡眠","lesson_level":0,"nickname":"170****9933","log_practice_time":181.0,"id":4730471,"u_icon_url":"http://w16.wakeyoga.com/default1.png?imageMogr2/auto-orient/thumbnail/150x/quality/70","log_practice_create_at":1545372277,"lesson_id":145},{"log_practice_energy_value":2,"lesson_name":"关于睡眠","lesson_level":0,"nickname":"138****9318","log_practice_time":437.0,"id":4730470,"u_icon_url":"http://w16.wakeyoga.com/default1.png?imageMogr2/auto-orient/thumbnail/150x/quality/70","log_practice_create_at":1545372258,"lesson_id":145},{"log_practice_energy_value":2,"lesson_name":"正确对待欲望","lesson_level":0,"nickname":"kitty","log_practice_time":252.0,"id":4730469,"u_icon_url":"http://thirdqq.qlogo.cn/qqapp/1104845949/F4FF395DEF0F47CAE90FBF4D2D919C9F/100?imageMogr2/auto-orient/thumbnail/150x/quality/70","log_practice_create_at":1545372251,"lesson_id":6424},{"log_practice_energy_value":2,"lesson_name":"关于睡眠","lesson_level":0,"nickname":"挑战自己","log_practice_time":445.78,"id":4730468,"u_icon_url":"http://w3.wakeyoga.com/1486497705_1545145030145.jpg?imageMogr2/auto-orient/thumbnail/150x/quality/70","log_practice_create_at":1545372247,"lesson_id":145},{"log_practice_energy_value":2,"lesson_name":"14天极致腰腹塑形计划","lesson_level":3,"nickname":"","log_practice_time":2367.0,"id":4730467,"u_icon_url":"http://thirdwx.qlogo.cn/mmopen/vi_32/Q0j4TwGTfTK3IMnnWibSCtZswhkRwJwpUdJaCscvAiaXicK0fxOpMTmPUvn87FAib2ia0lDDreicxb2odoazDccLttKA/132?imageMogr2/auto-orient/thumbnail/150x/quality/70","log_practice_create_at":1545372235,"lesson_id":1251},{"log_practice_energy_value":2,"lesson_name":"14天极致腰腹塑形计划","lesson_level":3,"nickname":"kate","log_practice_time":1935.0,"id":4730466,"u_icon_url":"http://thirdwx.qlogo.cn/mmopen/vi_32/Q0j4TwGTfTKRxGydyG9xM50JC2z396dSrI0yCMibc74s1dgRcqCENB54e04fXPyryU2VxficnvNHU4c7hicbxwoicQ/132?imageMogr2/auto-orient/thumbnail/150x/quality/70","log_practice_create_at":1545372209,"lesson_id":1251}]].length;
    logsNum = LogsNum + 1;
    $(function(){
        /*返回顶部------------------------------------------------------*/
        $("#backTop").click(function(){
            $('body,html').animate({scrollTop:0},300);

        })
    })
</script>
</html>

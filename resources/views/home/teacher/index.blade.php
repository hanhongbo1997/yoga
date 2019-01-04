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
<!-- 头部	 -->
<div class="xui-content" style="margin: 0 auto;margin-top:30px; font-size: 18px; margin-bottom: 20px; width:80%; margin-top: 60px;">
    <div class="xui-container" style=" float: left;">
        <ul class="sui-breadcrumb xui-margin-0">
            <li><a href="/" style="color: #fb9966;">首页</a></li>
            <li class="active">{{ $title }}</li>
        </ul>
    </div>
<!-- 搜索 -->
<div class="xui-content xui-bg-white">
    <div class="xui-container course-list">
                    <div class="course-nav-row">
                <span class="hd xui-pull-l">按字母：</span>
                <div class="bd">
                    <ul class="">
                                                    <li class="course-nav-item labels on">
                                <a href="javascript:;">全部</a>
                            </li>
                                                        <li class="course-nav-item labels" data-id="12">
                                    <a href="javascript:;">A</a>
                                </li>
                                                            <li class="course-nav-item labels" data-id="13">
                                    <a href="javascript:;">B</a>
                                </li>
                                                            <li class="course-nav-item labels" data-id="14">
                                    <a href="javascript:;">C</a>
                                </li>
                                                            <li class="course-nav-item labels" data-id="15">
                                    <a href="javascript:;">D</a>
                                </li>
                                                            <li class="course-nav-item labels" data-id="32">
                                    <a href="javascript:;">E</a>
                                </li>
                                                            <li class="course-nav-item labels" data-id="33">
                                    <a href="javascript:;">F</a>
                                </li>
                                                            <li class="course-nav-item labels" data-id="34">
                                    <a href="javascript:;">G</a>
                                </li>
                                                            <li class="course-nav-item labels" data-id="35">
                                    <a href="javascript:;">H</a>
                                </li>
                                                            <li class="course-nav-item labels" data-id="36">
                                    <a href="javascript:;">I</a>
                                </li>
                                                            <li class="course-nav-item labels" data-id="37">
                                    <a href="javascript:;">J</a>
                                </li>
                                                            <li class="course-nav-item labels" data-id="38">
                                    <a href="javascript:;">K</a>
                                </li>
                                                            <li class="course-nav-item labels" data-id="39">
                                    <a href="javascript:;">L</a>
                                </li>
                                                            <li class="course-nav-item labels" data-id="40">
                                    <a href="javascript:;">M</a>
                                </li>
                                                            <li class="course-nav-item labels" data-id="41">
                                    <a href="javascript:;">N</a>
                                </li>
                                                            <li class="course-nav-item labels" data-id="42">
                                    <a href="javascript:;">O</a>
                                </li>
                                                            <li class="course-nav-item labels" data-id="43">
                                    <a href="javascript:;">P</a>
                                </li>
                                                            <li class="course-nav-item labels" data-id="44">
                                    <a href="javascript:;">Q</a>
                                </li>
                                                            <li class="course-nav-item labels" data-id="45">
                                    <a href="javascript:;">R</a>
                                </li>
                                                            <li class="course-nav-item labels" data-id="46">
                                    <a href="javascript:;">S</a>
                                </li>
                                                            <li class="course-nav-item labels" data-id="47">
                                    <a href="javascript:;">T</a>
                                </li>
                                                            <li class="course-nav-item labels" data-id="48">
                                    <a href="javascript:;">U</a>
                                </li>
                                                            <li class="course-nav-item labels" data-id="49">
                                    <a href="javascript:;">V</a>
                                </li>
                                                            <li class="course-nav-item labels" data-id="50">
                                    <a href="javascript:;">W</a>
                                </li>
                                                            <li class="course-nav-item labels" data-id="51">
                                    <a href="javascript:;">X</a>
                                </li>
                                                            <li class="course-nav-item labels" data-id="52">
                                    <a href="javascript:;">Y</a>
                                </li>
                                                            <li class="course-nav-item labels" data-id="53">
                                    <a href="javascript:;">Z</a>
                                </li>
                                                </ul>
                </div>
            </div>
                    <div class="course-nav-row">
                <span class="hd xui-pull-l">按类型：</span>
                <div class="bd">
                    <ul class="">
                                                    <li class="course-nav-item labels on">
                                <a href="javascript:;">全部</a>
                            </li>
                                                        <li class="course-nav-item labels" data-id="16">
                                    <a href="javascript:;">瑜伽导师</a>
                                </li>
                                                            <li class="course-nav-item labels" data-id="17">
                                    <a href="javascript:;">行业顾问</a>
                                </li>
                                                            <li class="course-nav-item labels" data-id="18">
                                    <a href="javascript:;">官方认证</a>
                                </li>
                                                </ul>
                </div>
            </div>
            </div>
</div>
<!-- 搜索 -->
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
            <a href="javascript:;" class="sui-text-center xui-pull-l" style="display:inline-block;width:50%;text-align:center;color:#666;cursor:pointer;" data-placement="bottom" data-toggle="tooltip" title="<img src='/home_club/picture/service2_code.jpg' style='width:180px;'><p class='sui-text-center'>微信号：oops1106</p>">
                <img src="/home_club/picture/service2.jpg" class="xui-img-radius xui-border" style="width:48px;"/>
                <p class="xui-margin-0 xui-padded-t-5">客服瑶瑶</p>
            </a>
            <a href="javascript:;" class="sui-text-center" style="display:inline-block;width:50%;text-align:center;color:#666;cursor:pointer;" data-placement="bottom" data-toggle="tooltip" title="<img src='/home_club/picture/service1_code.jpg' style='width:180px;'><p class='sui-text-center'>微信号：YOGA592">
                <img src="/home_club/picture/service1.jpg" class="xui-img-radius xui-border" style="width:48px;" />
                <p class="xui-margin-0 xui-padded-t-5">店长乐乐</p>
            </a>
        </div>
    </ul>
    
    
    <ul>
        <h3>课堂推荐</h3>
                    <li>
                <a href="/skip/7057.html" target="_blank">
                    <img src="/home_club/picture/nopic_640_400.png" data-src="/attached/image/20171225/a102a9ce83216b530ac650a10fd31d2e.jpg" onload="loadPic(this)">
                    <!-- <span class="cornerL shuang-egg"></span> -->
                    <!-- <span class="cornerR zhekou"></span> -->
                    <!-- <span class="cornerL egg-cornerL"></span> -->
                    <!-- <span class="cornerL newyear2018"></span> -->
                    <h4>[瑜伽入门] 孕产瑜伽丨女性必备</h4>
                </a>
                <p class="xui-font-size-12">
                    <span class="xui-pull-l sui-text-warning">
                        <em>￥</em>89                    </span>
                    <span class="xui-pull-r xui-text-right">
                        <i class="sui-text-warning">21</i>人已购买
                    </span>
                </p>
            </li>
                    <li>
                <a href="/skip/7058.html" target="_blank">
                    <img src="/home_club/picture/nopic_640_400.png" data-src="/attached/image/20171225/f7024c161dbd89ed7d0d139722e810fc.jpg" onload="loadPic(this)">
                    <!-- <span class="cornerL shuang-egg"></span> -->
                    <!-- <span class="cornerR zhekou"></span> -->
                    <!-- <span class="cornerL egg-cornerL"></span> -->
                    <!-- <span class="cornerL newyear2018"></span> -->
                    <h4>[瑜伽入门] 办公室瑜伽丨亲子瑜伽</h4>
                </a>
                <p class="xui-font-size-12">
                    <span class="xui-pull-l sui-text-warning">
                        <em>￥</em>89                    </span>
                    <span class="xui-pull-r xui-text-right">
                        <i class="sui-text-warning">2</i>人已购买
                    </span>
                </p>
            </li>
                    <li>
                <a href="/skip/7059.html" target="_blank">
                    <img src="/home_club/picture/nopic_640_400.png" data-src="/attached/image/20171225/fe92e8cf817031ff257bb26e4da1b400.jpg" onload="loadPic(this)">
                    <!-- <span class="cornerL shuang-egg"></span> -->
                    <!-- <span class="cornerR zhekou"></span> -->
                    <!-- <span class="cornerL egg-cornerL"></span> -->
                    <!-- <span class="cornerL newyear2018"></span> -->
                    <h4>[瑜伽入门] 流瑜伽丨基础入门</h4>
                </a>
                <p class="xui-font-size-12">
                    <span class="xui-pull-l sui-text-warning">
                        <em>￥</em>89                    </span>
                    <span class="xui-pull-r xui-text-right">
                        <i class="sui-text-warning">17</i>人已购买
                    </span>
                </p>
            </li>
                    <li>
                <a href="/skip/7060.html" target="_blank">
                    <img src="/home_club/picture/nopic_640_400.png" data-src="/attached/image/20171225/ea38ad9bbdc140231823c5c6be792165.jpg" onload="loadPic(this)">
                    <!-- <span class="cornerL shuang-egg"></span> -->
                    <!-- <span class="cornerR zhekou"></span> -->
                    <!-- <span class="cornerL egg-cornerL"></span> -->
                    <!-- <span class="cornerL newyear2018"></span> -->
                    <h4>[瑜伽入门] 高效塑形丨瘦身课堂</h4>
                </a>
                <p class="xui-font-size-12">
                    <span class="xui-pull-l sui-text-warning">
                        <em>￥</em>89                    </span>
                    <span class="xui-pull-r xui-text-right">
                        <i class="sui-text-warning">39</i>人已购买
                    </span>
                </p>
            </li>
            </ul>

  
</div>
<script type="text/javascript">
    var pathArray = location.pathname.split('/');
    $("a[href*='"+pathArray[pathArray.length-1]+"']").addClass('xui-active');
</script>
    <div class="xui-content xui-list" style="display:block;padding-left:250px;">
        <div class="xui-content">
            <ul>
                                    <li>
                        <a href="/teacherpage/2994.html">
                            <!-- <div class="tag">
                                <span></span>
                            </div> -->
                                                            <img src="/home_club/picture/593bf3dc45289a4051c4a3c1544961a4thumb.png" class="xui-img-radius" style="padding:30px;width:193px;height:193px;">
                                                        
                            <h2 class="xui-ellipsis-2 xui-text-center xui-font-size-18">李嘉Lisa</h2>
                            <p class="xui-ellipsis-2">毕业印度Kaivayaladaham瑜伽学院，师从O.P Tiwari系统学习呼吸控制法和瑜伽哲学。她同时还是运行训练学硕士和体育学院专业教师。她重视对瑜伽课堂教学的探索，提倡用尽可能简单的教学法表达尽可能严谨的瑜伽观念。</p>
                        </a>
                    </li>
                                    <li>
                        <a href="/teacherpage/7752.html">
                            <!-- <div class="tag">
                                <span></span>
                            </div> -->
                                                            <img src="/home_club/picture/e7463bdb230955259c789c41ae94de10.jpg" class="xui-img-radius" style="padding:30px;width:193px;height:193px;">
                                                        
                            <h2 class="xui-ellipsis-2 xui-text-center xui-font-size-18">李媛</h2>
                            <p class="xui-ellipsis-2">心境平和，良好的亲和力和沟通能力，使她的教学自然、清晰、细致、讲解到位，善于将自己的亲身经历和感受融入课程传达给学员，并引导学员在修习体式的同时，进行更深层次的灵魂修炼。
</p>
                        </a>
                    </li>
                                    <li>
                        <a href="/teacherpage/7697.html">
                            <!-- <div class="tag">
                                <span></span>
                            </div> -->
                                                            <img src="/home_club/picture/e15700206d474ec50f338eae12b39631.jpg" class="xui-img-radius" style="padding:30px;width:193px;height:193px;">
                                                        
                            <h2 class="xui-ellipsis-2 xui-text-center xui-font-size-18">Nana</h2>
                            <p class="xui-ellipsis-2">理学硕士研究生，十国以上进修学习经历，先后5次赴印度进修艾扬格瑜伽、阿育吠陀医学，大学院校瑜伽选修课导师。</p>
                        </a>
                    </li>
                                    <li>
                        <a href="/teacherpage/3282.html">
                            <!-- <div class="tag">
                                <span></span>
                            </div> -->
                                                            <img src="/home_club/picture/44e0cf1ce0b076130d915399c52cd8a7thumb.jpg" class="xui-img-radius" style="padding:30px;width:193px;height:193px;">
                                                        
                            <h2 class="xui-ellipsis-2 xui-text-center xui-font-size-18">若烟</h2>
                            <p class="xui-ellipsis-2">2002年邂逅瑜伽，自此便念念不忘，从最初的爱好者、习练者、到教授和传播瑜伽，不知不觉已是十三年，从深爱到痴迷，如今瑜伽已融入到她的生命里。因温婉淑贤的气质和孜孜不倦的教学态度，学生们都把她和当红女星“佟丽娅”联系在一起，也因此有了瑜伽届的“佟丽娅”之称。</p>
                        </a>
                    </li>
                                    <li>
                        <a href="/teacherpage/4909.html">
                            <!-- <div class="tag">
                                <span></span>
                            </div> -->
                                                            <img src="/home_club/picture/ad1a4ccd0f078c1114dbbe3cb738d32fthumb.jpg" class="xui-img-radius" style="padding:30px;width:193px;height:193px;">
                                                        
                            <h2 class="xui-ellipsis-2 xui-text-center xui-font-size-18">瑜果（Jaden Chan）</h2>
                            <p class="xui-ellipsis-2">瑜果（Jaden Chan）有多年媒体行业从业经验，曾就职于新浪网。2013年偶然的机缘接触瑜伽，便萌生将瑜伽...</p>
                        </a>
                    </li>
                                    <li>
                        <a href="/teacherpage/10734.html">
                            <!-- <div class="tag">
                                <span></span>
                            </div> -->
                                                            <img src="/home_club/picture/2de5868534a7e514a7e3c826955e78c3.jpg" class="xui-img-radius" style="padding:30px;width:193px;height:193px;">
                                                        
                            <h2 class="xui-ellipsis-2 xui-text-center xui-font-size-18">Jane</h2>
                            <p class="xui-ellipsis-2">教学经验2003年进修荣获高级瑜伽培训导师；美国国际瑜伽联盟E-RYT200，RPYT认证导师</p>
                        </a>
                    </li>
                                    <li>
                        <a href="/teacherpage/102.html">
                            <!-- <div class="tag">
                                <span></span>
                            </div> -->
                                                            <img src="/home_club/picture/20160317141030_16544.jpg" class="xui-img-radius" style="padding:30px;width:193px;height:193px;">
                                                        
                            <h2 class="xui-ellipsis-2 xui-text-center xui-font-size-18">科雯</h2>
                            <p class="xui-ellipsis-2">国际瑜伽研究院/中国首席培训师，中国现代瑜伽形体 创始人，CCTV“闻鸡起舞”栏目瑜伽专栏 主讲导师，科雯瑜伽 创办人及艺术总监，，CCTV-2健康之路“学做美女人”、“轻轻松松学瑜伽”专题 主讲嘉宾。</p>
                        </a>
                    </li>
                                    <li>
                        <a href="/teacherpage/149.html">
                            <!-- <div class="tag">
                                <span></span>
                            </div> -->
                                                            <img src="/home_club/picture/72958b6ce8af2a17525c95624b2079aa.jpg" class="xui-img-radius" style="padding:30px;width:193px;height:193px;">
                                                        
                            <h2 class="xui-ellipsis-2 xui-text-center xui-font-size-18">孙和平</h2>
                            <p class="xui-ellipsis-2">60岁，金蝉瑜伽创始人、公司总经理。
中国瑜伽联盟副理事长、中山市舞蹈家协会会员，从事瑜伽行业20多年</p>
                        </a>
                    </li>
                                    <li>
                        <a href="/teacherpage/9543.html">
                            <!-- <div class="tag">
                                <span>瑜伽导师</span>
                            </div> -->
                                                            <img src="/home_club/picture/780d55763f4c6c029614ab3b4187e50f.jpg" class="xui-img-radius" style="padding:30px;width:193px;height:193px;">
                                                        
                            <h2 class="xui-ellipsis-2 xui-text-center xui-font-size-18">Nicole</h2>
                            <p class="xui-ellipsis-2">香港首家全面关注女性孕产健康管理机构“Wellbeing Mama” 创办人及治疗师</p>
                        </a>
                    </li>
                                    <li>
                        <a href="/teacherpage/27.html">
                            <!-- <div class="tag">
                                <span></span>
                            </div> -->
                                                            <img src="/home_club/picture/20160317140839_39516.jpg" class="xui-img-radius" style="padding:30px;width:193px;height:193px;">
                                                        
                            <h2 class="xui-ellipsis-2 xui-text-center xui-font-size-18">王媛</h2>
                            <p class="xui-ellipsis-2">天地心韵瑜伽创始人，中国著名瑜伽导师之一 。“天地心韵瑜美人系列”图书、《博伽梵歌》在中国的出版发行。印度瑜伽文化传播者 荣获“瑜伽特殊贡献奖”。</p>
                        </a>
                    </li>
                                    <li>
                        <a href="/teacherpage/157.html">
                            <!-- <div class="tag">
                                <span></span>
                            </div> -->
                                                            <img src="/home_club/picture/20160316190751_84138.png" class="xui-img-radius" style="padding:30px;width:193px;height:193px;">
                                                        
                            <h2 class="xui-ellipsis-2 xui-text-center xui-font-size-18">胡悦</h2>
                            <p class="xui-ellipsis-2">品茶览书、抚琴瑜伽，做健康、修善行的瑜伽师 。一个温婉可人的女子，优美的身姿，淡雅的容颜，一颦一笑都宛若天人。</p>
                        </a>
                    </li>
                                    <li>
                        <a href="/teacherpage/5355.html">
                            <!-- <div class="tag">
                                <span></span>
                            </div> -->
                                                            <img src="/home_club/picture/20160409161201_37740.jpg" class="xui-img-radius" style="padding:30px;width:193px;height:193px;">
                                                        
                            <h2 class="xui-ellipsis-2 xui-text-center xui-font-size-18">Will Lau（刘江浚）</h2>
                            <p class="xui-ellipsis-2">Will Lau——Pure Yoga授课老师，是世界知名瑜伽流派Jivamukti Yoga的资格导师，也是亚洲首位荣获高阶段认证的老师</p>
                        </a>
                    </li>
                                
                <!-- <li>
                    <a href="/pc/content/teacherpage.html">
                        <div class="tag">
                            <span>行业顾问</span>
                        </div>
                        <img src="/home_club/picture/service1.jpg" class="xui-img-radius" style="padding:30px;width:193px;height:193px;">
                        <h2 class="xui-ellipsis-2 xui-text-center xui-font-size-18">若烟</h2>
                        <p class="xui-ellipsis-2">2002邂逅瑜伽，自此便念念不忘，从最初的爱好者、习练者、参加教练培训到教授和传播瑜伽，不知不觉已是十三年，从深爱到痴迷，如今她已融入了生命里。</p>
                    </a>
                </li> -->
            </ul>
        </div>
        <ul class="pagination"><li class="disabled"><span>&laquo;</span></li> <li class="active"><span>1</span></li><li><a href="/teacher.html?page=2">2</a></li><li><a href="/teacher.html?page=3">3</a></li><li><a href="/teacher.html?page=4">4</a></li><li><a href="/teacher.html?page=5">5</a></li><li><a href="/teacher.html?page=6">6</a></li><li><a href="/teacher.html?page=7">7</a></li><li><a href="/teacher.html?page=8">8</a></li><li class="disabled"><span>...</span></li><li><a href="/teacher.html?page=36">36</a></li><li><a href="/teacher.html?page=37">37</a></li> <li><a href="/teacher.html?page=2">&raquo;</a></li></ul>    </div>
</div>
<script>
$(function(){
    $('.labels').on('click',function(){
        var _this = $(this),
            ids = '';
        _this.addClass('on').siblings().removeClass('on');
        $('.labels').each(function(i){
            if($(this).hasClass('on')){
                if(ids){
                    ids += ','+$(this).data('id');
                }else{
                    ids = $(this).data('id');
                }
            }
        });
        
        if(ids){
            var atUrl = "/teacher/"+ids+".html";
        }else{
            var atUrl = "/teacher/.html";
        }
        console.log(atUrl);
        location.href = atUrl;
    });
})
</script>
@endsection
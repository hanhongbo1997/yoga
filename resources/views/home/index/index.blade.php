@extends('home.layout.layout')

@section('content')

<!-- 轮播图 -->
<link rel="stylesheet" href="\home\index.css" />
<div class="js-silder">
   <div class="silder-scroll">
        <div class="silder-main">
            <div class="silder-main-img">
                <a href=""><img src="\home\images\2.jpeg" alt="" ></a>
            </div>
            <div class="silder-main-img">
                <a href=""><img src="\home\images\3.jpeg" alt="" ></a>
            </div>
            <div class="silder-main-img">
                <a href=""><img src="\home\images\4.jpeg" alt="" ></a>
            </div>
        </div>
    </div>
</div>


<script src="\home\jquery-1.11.3.min.js" type="text/javascript"></script>
<script src="\home\wySilder.min.js" type="text/javascript"></script>
<script>
    $(function (){
        $(".js-silder").silder({
            auto: true,//自动播放，传入任何可以转化为true的值都会自动轮播
            speed: 20,//轮播图运动速度
            sideCtrl: true,//是否需要侧边控制按钮
            bottomCtrl: true,//是否需要底部控制按钮
            defaultView: 0,//默认显示的索引
            interval: 3000,//自动轮播的时间，以毫秒为单位，默认3000毫秒
            activeClass: "active",//小的控制按钮激活的样式，不包括作用两边，默认active
        });
    });
</script>

<!-- 轮播图 -->


<!-- content -->
<div class="swiper-container">
<a class="arrow-left" href="#"></a> 
<a class="arrow-right" href="#"></a>
<div class="swiper-wrapper">
    <div class="swiper-slide slide1">
        <a href="" class="inner">
            <img src="/home/images/s0.png" class="ani img s0" swiper-animate-effect="zoomInDown" swiper-animate-duration="1.5s" swiper-animate-delay="0s">
            <img src="/home/images/s1.png" class="ani img s1" swiper-animate-effect="bounceInLeft" swiper-animate-duration="1s" swiper-animate-delay="0s">
            <img src="/home/images/s2.png" class="ani img s2" swiper-animate-effect="flipInY" swiper-animate-duration="1s" swiper-animate-delay="0.8s">
            <img src="/home/images/s3.png" class="ani img s3" swiper-animate-effect="fadeInUp" swiper-animate-duration="2s" swiper-animate-delay=".2s">
            <img src="/home/images/s4.png" class="ani img s4" swiper-animate-effect="fadeInUp" swiper-animate-duration="2.5s" swiper-animate-delay="0s">
        </a>
    </div>
    <div class="swiper-slide slide2">
        <a href="" class="inner">
            <img src="/home/images/pigBanner_03.png" class="ani img zh-a-1" swiper-animate-effect="bounceInDown" swiper-animate-duration="2s" swiper-animate-delay="0.5s">
            <img src="/home/images/pigBnnaer_1_03.png" class="ani img zh-a-2" swiper-animate-effect="zoomIn" swiper-animate-duration="2s" swiper-animate-delay="0s">
        </a>
    </div>
    <div class="swiper-slide slide3">
        <div class="inner">
            <img src="/home/images/b-1.png" class="ani img b-1" swiper-animate-effect="bounceInLeft" swiper-animate-duration="1.5s" swiper-animate-delay="0s">
            <img src="/home/images/b-2.png" class="ani img b-2" swiper-animate-effect="bounceInRight" swiper-animate-duration="1.5s" swiper-animate-delay="0s">
            <img src="/home/images/b-3.png" class="ani img b-3" swiper-animate-effect="fadeInDown" swiper-animate-duration="1.5s" swiper-animate-delay="0s">
            <img src="/home/images/b-s.png" class="ani img b-s-1" swiper-animate-effect="zoomInDown" swiper-animate-duration="1.2s" swiper-animate-delay="0s">
            <img src="/home/images/b-s.png" class="ani img b-s-2" swiper-animate-effect="zoomInDown" swiper-animate-duration="1.2s" swiper-animate-delay="0s">
            <img src="/home/images/b-s.png" class="ani img b-s-3" swiper-animate-effect="zoomInDown" swiper-animate-duration="1.2s" swiper-animate-delay="0.6s">
            <img src="/home/images/b-s.png" class="ani img b-s-4" swiper-animate-effect="zoomInDown" swiper-animate-duration="1.2s" swiper-animate-delay="0.8s">
            <img src="/home/images/b-s.png" class="ani img b-s-5" swiper-animate-effect="zoomInDown" swiper-animate-duration="1.2s" swiper-animate-delay="1.5s">
            <img src="/home/images/b-s.png" class="ani img b-s-6" swiper-animate-effect="zoomInDown" swiper-animate-duration="1.2s" swiper-animate-delay=".5s">
            <img src="/home/images/b-y-1.png" class="ani img b-y-1 loop" swiper-animate-effect="moveRight" swiper-animate-duration="15s" swiper-animate-delay="4s">
            <img src="/home/images/b-y-2.png" class="ani img b-y-2 loop" swiper-animate-effect="moveLeft" swiper-animate-duration="15s" swiper-animate-delay="0s">
            <img src="/home/images/b-y-3.png" class="ani img b-y-3 loop" swiper-animate-effect="moveRight" swiper-animate-duration="15s" swiper-animate-delay="0s">
            <div class="targetBtn clearfix ani" swiper-animate-effect="zoomInUp" swiper-animate-duration="1s" swiper-animate-delay="0.5s">
                <a class="a1" href="" target="_blank">了解更多</a>
                <a class="a2" href="" style="" rel="media-gallery"><i></i>观看视频介绍</a>
            </div>
        </div>    
    </div>
</div>
<div class="pagination"></div>
</div>
<div class="content">

    <!--练基础-->
    <div class="basicArea">
        <div class="basicHead oh">
            <span class="fl areaTitle"><strong>练基础</strong><var></var><em></em><i></i></span>
            <a href="http://wakeyoga.com/2lessons/a1z2/" title="" title="" class="fr">更多</a>
            <div class="fr sortCourse">
                <span class="cur" onclick="commonCur(0,1,0)" id="commonNew">最新</span>
                <i>|</i>
                <span onclick="commonCur(1,0,0)" id="commoHot">热度</span>
                <i>|</i>
                <span onclick="commonCur(0,0,1)" id="favorable">好评</span>
            </div>
        </div>
        <div class="oh introBasic">
            <span class="fl">如何从零基础开始？</span>
        </div>
        
        <ul class="courseList" style="display: none" id="commonHotLessons">
            
                
                    <li class="fl">
                        <dl>
                            <a href="javascript:;" title="" onclick="plasy('113')">
                                <dt>
                                    <img src="/home/picture/b124956fcdc44d398ac49f66752bd18e.jpg" alt=""/>
                                </dt>
                                <dd class="courseName">
                                    <div class="fireCourse oh">
                                        <var class="fl">减脂瘦身瑜伽</var>
                                        
                                            <img src="/home/picture/fire.png" alt="" class="fl"/>
                                        
                                    </div>
                                    <div class="seeNum">
                                        <i><img src="/home/picture/see.png"
                                                alt=""/>7021077</i>
                                        &nbsp;&nbsp;&nbsp;
                                        <i class="fireTime"><img src="/home/picture/time.png" alt=""/>26'7”</i>
                                    </div>
                                    <div class="yellow_blue">
                                        
                                    </div>
                                </dd>
                            </a>
                        </dl>
                    </li>
                
                    <li class="fl">
                        <dl>
                            <a href="javascript:;" title="" onclick="plasy('76')">
                                <dt>
                                    <img src="/home/picture/442ccb42203d489b81c23b1c68d5713c.jpg" alt=""/>
                                </dt>
                                <dd class="courseName">
                                    <div class="fireCourse oh">
                                        <var class="fl">臀部塑形</var>
                                        
                                            <img src="/home/picture/fire.png" alt="" class="fl"/>
                                        
                                    </div>
                                    <div class="seeNum">
                                        <i><img src="/home/picture/see.png"
                                                alt=""/>1707231</i>
                                        &nbsp;&nbsp;&nbsp;
                                        <i class="fireTime"><img src="/home/picture/time.png" alt=""/>23'20”</i>
                                    </div>
                                    <div class="yellow_blue">
                                        
                                    </div>
                                </dd>
                            </a>
                        </dl>
                    </li>
                
                    <li class="fl">
                        <dl>
                            <a href="javascript:;" title="" onclick="plasy('53')">
                                <dt>
                                    <img src="/home/picture/c88edefb0e9547308e1e81c5f68da9b6.jpg" alt=""/>
                                </dt>
                                <dd class="courseName">
                                    <div class="fireCourse oh">
                                        <var class="fl">流瑜伽一级</var>
                                        
                                            <img src="/home/picture/fire.png" alt="" class="fl"/>
                                        
                                    </div>
                                    <div class="seeNum">
                                        <i><img src="/home/picture/see.png"
                                                alt=""/>1302733</i>
                                        &nbsp;&nbsp;&nbsp;
                                        <i class="fireTime"><img src="/home/picture/time.png" alt=""/>26'49”</i>
                                    </div>
                                    <div class="yellow_blue">
                                        
                                    </div>
                                </dd>
                            </a>
                        </dl>
                    </li>
                
                    <li class="fl">
                        <dl>
                            <a href="javascript:;" title="" onclick="plasy('3287')">
                                <dt>
                                    <img src="/home/picture/eb1817adff95454ea44719bdf7f2c879.jpg" alt=""/>
                                </dt>
                                <dd class="courseName">
                                    <div class="fireCourse oh">
                                        <var class="fl">清晨唤醒瑜伽</var>
                                        
                                            <img src="/home/picture/fire.png" alt="" class="fl"/>
                                        
                                    </div>
                                    <div class="seeNum">
                                        <i><img src="/home/picture/see.png"
                                                alt=""/>268846</i>
                                        &nbsp;&nbsp;&nbsp;
                                        <i class="fireTime"><img src="/home/picture/time.png" alt=""/>57'16”</i>
                                    </div>
                                    <div class="yellow_blue">
                                        
                                    </div>
                                </dd>
                            </a>
                        </dl>
                    </li>
                
            
            <div class="clear">&nbsp;</div>
        </ul>
        
        <ul class="courseList" id="commonNewLessons" style="display: block">
            
                
                    <li class="fl">
                        <dl>
                            <a href="javascript:;" title="" onclick="plasy('102')">
                                <dt>
                                    <img src="/home/picture/ad8703324c4d4408b0fd3bcc47417461.jpg" alt=""/>
                                </dt>
                                <dd class="courseName">
                                    <div class="fireCourse oh">
                                        <var class="fl">腰腹塑形</var>
                                        
                                    </div>
                                    <div class="seeNum">
                                        <i><img src="/home/picture/see.png"
                                                alt=""/>2171730</i>
                                        &nbsp;&nbsp;&nbsp;
                                        <i class="fireTime"><img src="/home/picture/time.png" alt=""/>16'10”</i>
                                    </div>
                                    <div class="yellow_blue">
                                        
                                    </div>
                                </dd>
                            </a>
                        </dl>
                    </li>
                
                    <li class="fl">
                        <dl>
                            <a href="javascript:;" title="" onclick="plasy('113')">
                                <dt>
                                    <img src="/home/picture/b124956fcdc44d398ac49f66752bd18e.jpg" alt=""/>
                                </dt>
                                <dd class="courseName">
                                    <div class="fireCourse oh">
                                        <var class="fl">减脂瘦身瑜伽</var>
                                        
                                            <img src="/home/picture/fire.png" alt="" class="fl"/>
                                        
                                    </div>
                                    <div class="seeNum">
                                        <i><img src="/home/picture/see.png"
                                                alt=""/>7021077</i>
                                        &nbsp;&nbsp;&nbsp;
                                        <i class="fireTime"><img src="/home/picture/time.png" alt=""/>26'7”</i>
                                    </div>
                                    <div class="yellow_blue">
                                        
                                    </div>
                                </dd>
                            </a>
                        </dl>
                    </li>
                
                    <li class="fl">
                        <dl>
                            <a href="javascript:;" title="" onclick="plasy('5300')">
                                <dt>
                                    <img src="/home/picture/bfa856531fe54df592b6b1fafe8892b7.jpg" alt=""/>
                                </dt>
                                <dd class="courseName">
                                    <div class="fireCourse oh">
                                        <var class="fl">增强脊柱柔韧</var>
                                        
                                    </div>
                                    <div class="seeNum">
                                        <i><img src="/home/picture/see.png"
                                                alt=""/>998789</i>
                                        &nbsp;&nbsp;&nbsp;
                                        <i class="fireTime"><img src="/home/picture/time.png" alt=""/>12'15”</i>
                                    </div>
                                    <div class="yellow_blue">
                                        
                                    </div>
                                </dd>
                            </a>
                        </dl>
                    </li>
                
                    <li class="fl">
                        <dl>
                            <a href="javascript:;" title="" onclick="plasy('95')">
                                <dt>
                                    <img src="/home/picture/10e3793a90dc49cd8852462ca7477cfa.jpg" alt=""/>
                                </dt>
                                <dd class="courseName">
                                    <div class="fireCourse oh">
                                        <var class="fl">冬季经络瑜伽</var>
                                        
                                    </div>
                                    <div class="seeNum">
                                        <i><img src="/home/picture/see.png"
                                                alt=""/>6779895</i>
                                        &nbsp;&nbsp;&nbsp;
                                        <i class="fireTime"><img src="/home/picture/time.png" alt=""/>21'11”</i>
                                    </div>
                                    <div class="yellow_blue">
                                        
                                    </div>
                                </dd>
                            </a>
                        </dl>
                    </li>
                
            
            <div class="clear">&nbsp;</div>
        </ul>
        
        <ul class="courseList" id="commonFavorableLessons" style="display: none">
            
                
                    <li class="fl">
                        <dl>
                            <a href="javascript:;" title="" onclick="plasy('95')">
                                <dt>
                                    <img src="/home/picture/10e3793a90dc49cd8852462ca7477cfa.jpg" alt=""/>
                                </dt>
                                <dd class="courseName">
                                    <div class="fireCourse oh">
                                        <var class="fl">冬季经络瑜伽</var>
                                        
                                    </div>
                                    <div class="seeNum">
                                        <i><img src="/home/picture/see.png"
                                                alt=""/>6779895</i>
                                        &nbsp;&nbsp;&nbsp;
                                        <i class="fireTime"><img src="/home/picture/time.png" alt=""/>21'11”</i>
                                    </div>
                                    <div class="yellow_blue">
                                        
                                    </div>
                                </dd>
                            </a>
                        </dl>
                    </li>
                
                    <li class="fl">
                        <dl>
                            <a href="javascript:;" title="" onclick="plasy('59')">
                                <dt>
                                    <img src="/home/picture/c9e423dd57c748ef840319534a24bac9.jpg" alt=""/>
                                </dt>
                                <dd class="courseName">
                                    <div class="fireCourse oh">
                                        <var class="fl">肩颈理疗</var>
                                        
                                    </div>
                                    <div class="seeNum">
                                        <i><img src="/home/picture/see.png"
                                                alt=""/>1810523</i>
                                        &nbsp;&nbsp;&nbsp;
                                        <i class="fireTime"><img src="/home/picture/time.png" alt=""/>20'21”</i>
                                    </div>
                                    <div class="yellow_blue">
                                        
                                    </div>
                                </dd>
                            </a>
                        </dl>
                    </li>
                
                    <li class="fl">
                        <dl>
                            <a href="javascript:;" title="" onclick="plasy('195')">
                                <dt>
                                    <img src="/home/picture/85124e653ef44926b6023656b8a789dd.jpg" alt=""/>
                                </dt>
                                <dd class="courseName">
                                    <div class="fireCourse oh">
                                        <var class="fl">阿斯汤伽</var>
                                        
                                    </div>
                                    <div class="seeNum">
                                        <i><img src="/home/picture/see.png"
                                                alt=""/>724573</i>
                                        &nbsp;&nbsp;&nbsp;
                                        <i class="fireTime"><img src="/home/picture/time.png" alt=""/>2'11”</i>
                                    </div>
                                    <div class="yellow_blue">
                                        
                                    </div>
                                </dd>
                            </a>
                        </dl>
                    </li>
                
                    <li class="fl">
                        <dl>
                            <a href="javascript:;" title="" onclick="plasy('101')">
                                <dt>
                                    <img src="/home/picture/5086b18fb5a9412c88e989078899ca8f.jpg" alt=""/>
                                </dt>
                                <dd class="courseName">
                                    <div class="fireCourse oh">
                                        <var class="fl">防止乳腺增生</var>
                                        
                                    </div>
                                    <div class="seeNum">
                                        <i><img src="/home/picture/see.png"
                                                alt=""/>1149180</i>
                                        &nbsp;&nbsp;&nbsp;
                                        <i class="fireTime"><img src="/home/picture/time.png" alt=""/>17'27”</i>
                                    </div>
                                    <div class="yellow_blue">
                                        
                                    </div>
                                </dd>
                            </a>
                        </dl>
                    </li>
                
            
            <div class="clear">&nbsp;</div>
        </ul>
    </div>
    <!--去冥想-->
    <div class="basicArea">
        <div class="basicHead oh">
            <span class="fl areaTitle"><strong>去冥想</strong><var></var><em></em><i></i></span>
            <a href="http://wakeyoga.com/2lessons/a2z2/" title="" class="fr">更多</a>
            <div class="fr sortCourse">
                <span class="cur" id="meditationNew" onclick="commonCur(0,2,0)">最新</span>
                <i>|</i>
                <span id="meditationHot" onclick="commonCur(2,0,0)">热度</span>
                <i>|</i>
                <span id="meditationFavorable" onclick="commonCur(0,0,2)">好评</span>
            </div>
        </div>
        <div class="oh introBasic">
            <span class="fl">如何让身与心回归？</span>
        </div>
        
        <ul class="courseList" id="meditationHotLessons" style="display: none">
            
                
                    <li class="fl">
                        <dl>
                            <a href="javascript:;" title="" onclick="getTingkDetail('6472')">
                                <dt>
                                    <img src="/home/picture/a0f392b799b440eba42db1e01e7ccf3d.jpg" alt=""/>
                                </dt>
                                <dd class="courseName">
                                    <div class="fireCourse oh">
                                        <var class="fl">初学冥想课堂</var>
                                        <img src="/home/picture/fire.png"
                                                                                  alt="" class="fl"/>
                                    </div>
                                    <div class="seeNum">
                                        <i><img src="/home/picture/see.png"
                                                alt=""/>65284</i>
                                        &nbsp;&nbsp;&nbsp;
                                        <i class="fireTime"><img src="/home/picture/jie.png"
                                                                 alt=""/>10节</i>
                                    </div>
                                    <div class="yellow_blue">
                                        
                                    </div>
                                </dd>
                            </a>
                        </dl>
                    </li>
                
                    <li class="fl">
                        <dl>
                            <a href="javascript:;" title="" onclick="getTingkDetail('6353')">
                                <dt>
                                    <img src="/home/picture/4a9a74fe738e42e389a33eac9281172c.jpg" alt=""/>
                                </dt>
                                <dd class="courseName">
                                    <div class="fireCourse oh">
                                        <var class="fl">7天基础冥想</var>
                                        <img src="/home/picture/fire.png"
                                                                                  alt="" class="fl"/>
                                    </div>
                                    <div class="seeNum">
                                        <i><img src="/home/picture/see.png"
                                                alt=""/>28229</i>
                                        &nbsp;&nbsp;&nbsp;
                                        <i class="fireTime"><img src="/home/picture/jie.png"
                                                                 alt=""/>7节</i>
                                    </div>
                                    <div class="yellow_blue">
                                        
                                    </div>
                                </dd>
                            </a>
                        </dl>
                    </li>
                
                    <li class="fl">
                        <dl>
                            <a href="javascript:;" title="" onclick="getTingkDetail('6418')">
                                <dt>
                                    <img src="/home/picture/9a3249d28e5d4c6689cfbc14fb7bf088.jpg" alt=""/>
                                </dt>
                                <dd class="courseName">
                                    <div class="fireCourse oh">
                                        <var class="fl">摆脱愤怒的情绪</var>
                                        <img src="/home/picture/fire.png"
                                                                                  alt="" class="fl"/>
                                    </div>
                                    <div class="seeNum">
                                        <i><img src="/home/picture/see.png"
                                                alt=""/>21813</i>
                                        &nbsp;&nbsp;&nbsp;
                                        <i class="fireTime"><img src="/home/picture/jie.png"
                                                                 alt=""/>7节</i>
                                    </div>
                                    <div class="yellow_blue">
                                        
                                    </div>
                                </dd>
                            </a>
                        </dl>
                    </li>
                
                    <li class="fl">
                        <dl>
                            <a href="javascript:;" title="" onclick="getTingkDetail('6352')">
                                <dt>
                                    <img src="/home/picture/e7ee63e4b9b14c6dac6e88bfcf0cce71.jpg" alt=""/>
                                </dt>
                                <dd class="courseName">
                                    <div class="fireCourse oh">
                                        <var class="fl">七天正念冥想</var>
                                        <img src="/home/picture/fire.png"
                                                                                  alt="" class="fl"/>
                                    </div>
                                    <div class="seeNum">
                                        <i><img src="/home/picture/see.png"
                                                alt=""/>23961</i>
                                        &nbsp;&nbsp;&nbsp;
                                        <i class="fireTime"><img src="/home/picture/jie.png"
                                                                 alt=""/>7节</i>
                                    </div>
                                    <div class="yellow_blue">
                                        
                                    </div>
                                </dd>
                            </a>
                        </dl>
                    </li>
                
            
            <div class="clear">&nbsp;</div>
        </ul>
        
        <ul class="courseList" id="meditationNewLessons" style="display: block">
            
                
                    <li class="fl">
                        <dl>
                            <a href="javascript:;" title="" onclick="getTingkDetail('6492')">
                                <dt>
                                    <img src="/home/picture/1c032dde322245eb8aa3b50ecffbfb0d.jpg" alt=""/>
                                </dt>
                                <dd class="courseName">
                                    <div class="fireCourse oh">
                                        <var class="fl">让生活慢下来</var>
                                        <img src="/home/picture/fire.png"
                                                                                  alt="" class="fl"/>
                                    </div>
                                    <div class="seeNum">
                                        <i><img src="/home/picture/see.png"
                                                alt=""/>18957</i>
                                        &nbsp;&nbsp;&nbsp;
                                        <i class="fireTime"><img src="/home/picture/jie.png"
                                                                 alt=""/>5节</i>
                                    </div>
                                    <div class="yellow_blue">
                                        
                                    </div>
                                </dd>
                            </a>
                        </dl>
                    </li>
                
                    <li class="fl">
                        <dl>
                            <a href="javascript:;" title="" onclick="getTingkDetail('6475')">
                                <dt>
                                    <img src="/home/picture/7be5881a37694c508f9c98a2349a52b0.jpg" alt=""/>
                                </dt>
                                <dd class="courseName">
                                    <div class="fireCourse oh">
                                        <var class="fl">拔掉身上嫉妒的刺</var>
                                        <img src="/home/picture/fire.png"
                                                                                  alt="" class="fl"/>
                                    </div>
                                    <div class="seeNum">
                                        <i><img src="/home/picture/see.png"
                                                alt=""/>18223</i>
                                        &nbsp;&nbsp;&nbsp;
                                        <i class="fireTime"><img src="/home/picture/jie.png"
                                                                 alt=""/>7节</i>
                                    </div>
                                    <div class="yellow_blue">
                                        
                                    </div>
                                </dd>
                            </a>
                        </dl>
                    </li>
                
                    <li class="fl">
                        <dl>
                            <a href="javascript:;" title="" onclick="getTingkDetail('6474')">
                                <dt>
                                    <img src="/home/picture/0da5f4d82a014084ac5396b7343934ad.jpg" alt=""/>
                                </dt>
                                <dd class="courseName">
                                    <div class="fireCourse oh">
                                        <var class="fl">让自己变得强大</var>
                                        <img src="/home/picture/fire.png"
                                                                                  alt="" class="fl"/>
                                    </div>
                                    <div class="seeNum">
                                        <i><img src="/home/picture/see.png"
                                                alt=""/>25846</i>
                                        &nbsp;&nbsp;&nbsp;
                                        <i class="fireTime"><img src="/home/picture/jie.png"
                                                                 alt=""/>6节</i>
                                    </div>
                                    <div class="yellow_blue">
                                        
                                    </div>
                                </dd>
                            </a>
                        </dl>
                    </li>
                
                    <li class="fl">
                        <dl>
                            <a href="javascript:;" title="" onclick="getTingkDetail('6473')">
                                <dt>
                                    <img src="/home/picture/0ecdd7333b6a43f3a2abcadc9f4d03c2.jpg" alt=""/>
                                </dt>
                                <dd class="courseName">
                                    <div class="fireCourse oh">
                                        <var class="fl">每日早中晚冥想</var>
                                        <img src="/home/picture/fire.png"
                                                                                  alt="" class="fl"/>
                                    </div>
                                    <div class="seeNum">
                                        <i><img src="/home/picture/see.png"
                                                alt=""/>28327</i>
                                        &nbsp;&nbsp;&nbsp;
                                        <i class="fireTime"><img src="/home/picture/jie.png"
                                                                 alt=""/>3节</i>
                                    </div>
                                    <div class="yellow_blue">
                                        
                                    </div>
                                </dd>
                            </a>
                        </dl>
                    </li>
                
            
            <div class="clear">&nbsp;</div>
        </ul>
        
        <ul class="courseList" id="meditationFavorableLessons" style="display: none">
            
                
                    <li class="fl">
                        <dl>
                            <a href="javascript:;" title="" onclick="getTingkDetail('6472')">
                                <dt>
                                    <img src="/home/picture/a0f392b799b440eba42db1e01e7ccf3d.jpg" alt=""/>
                                </dt>
                                <dd class="courseName">
                                    <div class="fireCourse oh">
                                        <var class="fl">初学冥想课堂</var>
                                        <img src="/home/picture/fire.png"
                                                                                  alt="" class="fl"/>
                                    </div>
                                    <div class="seeNum">
                                        <i><img src="/home/picture/see.png"
                                                alt=""/>65284</i>
                                        &nbsp;&nbsp;&nbsp;
                                        <i class="fireTime"><img src="/home/picture/jie.png"
                                                                 alt=""/>10节</i>
                                    </div>
                                    <div class="yellow_blue">
                                        
                                    </div>
                                </dd>
                            </a>
                        </dl>
                    </li>
                
                    <li class="fl">
                        <dl>
                            <a href="javascript:;" title="" onclick="getTingkDetail('6353')">
                                <dt>
                                    <img src="/home/picture/4a9a74fe738e42e389a33eac9281172c.jpg" alt=""/>
                                </dt>
                                <dd class="courseName">
                                    <div class="fireCourse oh">
                                        <var class="fl">7天基础冥想</var>
                                        <img src="/home/picture/fire.png"
                                                                                  alt="" class="fl"/>
                                    </div>
                                    <div class="seeNum">
                                        <i><img src="/home/picture/see.png"
                                                alt=""/>28229</i>
                                        &nbsp;&nbsp;&nbsp;
                                        <i class="fireTime"><img src="/home/picture/jie.png"
                                                                 alt=""/>7节</i>
                                    </div>
                                    <div class="yellow_blue">
                                        
                                    </div>
                                </dd>
                            </a>
                        </dl>
                    </li>
                
                    <li class="fl">
                        <dl>
                            <a href="javascript:;" title="" onclick="getTingkDetail('6418')">
                                <dt>
                                    <img src="/home/picture/9a3249d28e5d4c6689cfbc14fb7bf088.jpg" alt=""/>
                                </dt>
                                <dd class="courseName">
                                    <div class="fireCourse oh">
                                        <var class="fl">摆脱愤怒的情绪</var>
                                        <img src="/home/picture/fire.png"
                                                                                  alt="" class="fl"/>
                                    </div>
                                    <div class="seeNum">
                                        <i><img src="/home/picture/see.png"
                                                alt=""/>21813</i>
                                        &nbsp;&nbsp;&nbsp;
                                        <i class="fireTime"><img src="/home/picture/jie.png"
                                                                 alt=""/>7节</i>
                                    </div>
                                    <div class="yellow_blue">
                                        
                                    </div>
                                </dd>
                            </a>
                        </dl>
                    </li>
                
                    <li class="fl">
                        <dl>
                            <a href="javascript:;" title="" onclick="getTingkDetail('6352')">
                                <dt>
                                    <img src="/home/picture/e7ee63e4b9b14c6dac6e88bfcf0cce71.jpg" alt=""/>
                                </dt>
                                <dd class="courseName">
                                    <div class="fireCourse oh">
                                        <var class="fl">七天正念冥想</var>
                                        <img src="/home/picture/fire.png"
                                                                                  alt="" class="fl"/>
                                    </div>
                                    <div class="seeNum">
                                        <i><img src="/home/picture/see.png"
                                                alt=""/>23961</i>
                                        &nbsp;&nbsp;&nbsp;
                                        <i class="fireTime"><img src="/home/picture/jie.png"
                                                                 alt=""/>7节</i>
                                    </div>
                                    <div class="yellow_blue">
                                        
                                    </div>
                                </dd>
                            </a>
                        </dl>
                    </li>
                
            
            <div class="clear">&nbsp;</div>
        </ul>
    </div>
    <!--定计划-->
    <div class="basicArea">
        <div class="basicHead oh">
            <span class="fl areaTitle"><strong>定计划</strong><var></var><em></em><i></i></span>
            <a href="http://wakeyoga.com/2lessons/a4z2/" title="" class="fr">更多</a>
            <div class="fr sortCourse">
                <span class="cur" id="plainsNew" onclick="commonCur(0,3,0)">最新</span>
                <i>|</i>
                <span id="plainsHot" onclick="commonCur(3,0,0)">热度</span>
                <i>|</i>
                <span id="plainsFavorable" onclick="commonCur(0,0,3)">好评</span>
            </div>
        </div>
        <div class="oh introBasic">
            <span class="fl">如何将好习惯培养？</span>
        </div>
        
        <ul class="oh courseList" id="trainingPlainsHot" style="display: none">
            
                
                    <li class="fl">
                        <dl>
                            <a href="javascript:;" title="" onclick="getPlanDetal('6718')">
                                <dt>
                                    <img src="/home/picture/691ef382cc48494280c5d1ad1f90b1e6.jpg" alt=""/>
                                </dt>
                                <dd class="courseName">
                                    <div class="fireCourse oh">
                                        <var class="fl">14天关节修复计划</var>
                                        <img src="/home/picture/fire.png"
                                                                                  alt="" class="fl"/>
                                    </div>
                                    <div class="seeNum">
                                        <i><img src="/home/picture/see.png"
                                                alt=""/>16026</i>
                                        &nbsp;&nbsp;&nbsp;
                                        <i class="fireTime"><img src="/home/picture/jie.png"
                                                                 alt=""/>14节</i>
                                    </div>
                                    <div class="yellow_blue">
                                        <img src="/home/picture/new.png" alt=""
                                                                          class="blueNew">
                                        <img src="/home/picture/vip.png"
                                                                                   alt="" class="yellowVip">
                                    </div>
                                </dd>
                            </a>
                        </dl>
                    </li>
                
                    <li class="fl">
                        <dl>
                            <a href="javascript:;" title="" onclick="getPlanDetal('6711')">
                                <dt>
                                    <img src="/home/picture/6ccde0181dc048219cdbdc4e359ab042.jpg" alt=""/>
                                </dt>
                                <dd class="courseName">
                                    <div class="fireCourse oh">
                                        <var class="fl">“上班族”10分钟肩颈理疗</var>
                                        <img src="/home/picture/fire.png"
                                                                                  alt="" class="fl"/>
                                    </div>
                                    <div class="seeNum">
                                        <i><img src="/home/picture/see.png"
                                                alt=""/>29967</i>
                                        &nbsp;&nbsp;&nbsp;
                                        <i class="fireTime"><img src="/home/picture/jie.png"
                                                                 alt=""/>5节</i>
                                    </div>
                                    <div class="yellow_blue">
                                        
                                        <img src="/home/picture/vip.png"
                                                                                   alt="" class="yellowVip">
                                    </div>
                                </dd>
                            </a>
                        </dl>
                    </li>
                
                    <li class="fl">
                        <dl>
                            <a href="javascript:;" title="" onclick="getPlanDetal('6691')">
                                <dt>
                                    <img src="/home/picture/71ebaef973424d7d8c91d805040851b0.jpg" alt=""/>
                                </dt>
                                <dd class="courseName">
                                    <div class="fireCourse oh">
                                        <var class="fl">14天古典舞韵瑜伽计划</var>
                                        <img src="/home/picture/fire.png"
                                                                                  alt="" class="fl"/>
                                    </div>
                                    <div class="seeNum">
                                        <i><img src="/home/picture/see.png"
                                                alt=""/>28731</i>
                                        &nbsp;&nbsp;&nbsp;
                                        <i class="fireTime"><img src="/home/picture/jie.png"
                                                                 alt=""/>14节</i>
                                    </div>
                                    <div class="yellow_blue">
                                        
                                        <img src="/home/picture/vip.png"
                                                                                   alt="" class="yellowVip">
                                    </div>
                                </dd>
                            </a>
                        </dl>
                    </li>
                
                    <li class="fl">
                        <dl>
                            <a href="javascript:;" title="" onclick="getPlanDetal('6633')">
                                <dt>
                                    <img src="/home/picture/52d952449db14aae8ddd00c14eb0d045.jpg" alt=""/>
                                </dt>
                                <dd class="courseName">
                                    <div class="fireCourse oh">
                                        <var class="fl">14天冬季三温暖计划</var>
                                        <img src="/home/picture/fire.png"
                                                                                  alt="" class="fl"/>
                                    </div>
                                    <div class="seeNum">
                                        <i><img src="/home/picture/see.png"
                                                alt=""/>28480</i>
                                        &nbsp;&nbsp;&nbsp;
                                        <i class="fireTime"><img src="/home/picture/jie.png"
                                                                 alt=""/>14节</i>
                                    </div>
                                    <div class="yellow_blue">
                                        
                                        <img src="/home/picture/vip.png"
                                                                                   alt="" class="yellowVip">
                                    </div>
                                </dd>
                            </a>
                        </dl>
                    </li>
                
            
            <div class="clear">&nbsp;</div>
        </ul>
        
        <ul class="oh courseList" id="trainingPlainsNew" style="display: block">
            
                
                    <li class="fl">
                        <dl>
                            <a href="javascript:;" title="" onclick="getPlanDetal('6718')">
                                <dt>
                                    <img src="/home/picture/691ef382cc48494280c5d1ad1f90b1e6.jpg" alt=""/>
                                </dt>
                                <dd class="courseName">
                                    <div class="fireCourse oh">
                                        <var class="fl">14天关节修复计划</var>
                                        <img src="/home/picture/fire.png"
                                                                                  alt="" class="fl"/>
                                    </div>
                                    <div class="seeNum">
                                        <i><img src="/home/picture/see.png"
                                                alt=""/>16026</i>
                                        &nbsp;&nbsp;&nbsp;
                                        <i class="fireTime"><img src="/home/picture/jie.png"
                                                                 alt=""/>14节</i>
                                    </div>
                                    <div class="yellow_blue">
                                        <img src="/home/picture/new.png" alt=""
                                                                          class="blueNew">
                                        <img src="/home/picture/vip.png"
                                                                                   alt="" class="yellowVip">
                                    </div>
                                </dd>
                            </a>
                        </dl>
                    </li>
                
                    <li class="fl">
                        <dl>
                            <a href="javascript:;" title="" onclick="getPlanDetal('6711')">
                                <dt>
                                    <img src="/home/picture/6ccde0181dc048219cdbdc4e359ab042.jpg" alt=""/>
                                </dt>
                                <dd class="courseName">
                                    <div class="fireCourse oh">
                                        <var class="fl">“上班族”10分钟肩颈理疗</var>
                                        <img src="/home/picture/fire.png"
                                                                                  alt="" class="fl"/>
                                    </div>
                                    <div class="seeNum">
                                        <i><img src="/home/picture/see.png"
                                                alt=""/>29967</i>
                                        &nbsp;&nbsp;&nbsp;
                                        <i class="fireTime"><img src="/home/picture/jie.png"
                                                                 alt=""/>5节</i>
                                    </div>
                                    <div class="yellow_blue">
                                        
                                        <img src="/home/picture/vip.png"
                                                                                   alt="" class="yellowVip">
                                    </div>
                                </dd>
                            </a>
                        </dl>
                    </li>
                
                    <li class="fl">
                        <dl>
                            <a href="javascript:;" title="" onclick="getPlanDetal('6691')">
                                <dt>
                                    <img src="/home/picture/71ebaef973424d7d8c91d805040851b0.jpg" alt=""/>
                                </dt>
                                <dd class="courseName">
                                    <div class="fireCourse oh">
                                        <var class="fl">14天古典舞韵瑜伽计划</var>
                                        <img src="/home/picture/fire.png"
                                                                                  alt="" class="fl"/>
                                    </div>
                                    <div class="seeNum">
                                        <i><img src="/home/picture/see.png"
                                                alt=""/>28731</i>
                                        &nbsp;&nbsp;&nbsp;
                                        <i class="fireTime"><img src="/home/picture/jie.png"
                                                                 alt=""/>14节</i>
                                    </div>
                                    <div class="yellow_blue">
                                        
                                        <img src="/home/picture/vip.png"
                                                                                   alt="" class="yellowVip">
                                    </div>
                                </dd>
                            </a>
                        </dl>
                    </li>
                
                    <li class="fl">
                        <dl>
                            <a href="javascript:;" title="" onclick="getPlanDetal('6656')">
                                <dt>
                                    <img src="/home/picture/45aa5ed1cfc848568b284d0dedab9acb.jpg" alt=""/>
                                </dt>
                                <dd class="courseName">
                                    <div class="fireCourse oh">
                                        <var class="fl">14天增强体能计划</var>
                                        
                                    </div>
                                    <div class="seeNum">
                                        <i><img src="/home/picture/see.png"
                                                alt=""/>27907</i>
                                        &nbsp;&nbsp;&nbsp;
                                        <i class="fireTime"><img src="/home/picture/jie.png"
                                                                 alt=""/>14节</i>
                                    </div>
                                    <div class="yellow_blue">
                                        
                                        <img src="/home/picture/vip.png"
                                                                                   alt="" class="yellowVip">
                                    </div>
                                </dd>
                            </a>
                        </dl>
                    </li>
                
            
            <div class="clear">&nbsp;</div>
        </ul>
        
        <ul class="oh courseList" id="trainingPlainsFavorable" style="display: none">
            
                
                    <li class="fl">
                        <dl>
                            <a href="javascript:;" title="" onclick="getPlanDetal('6718')">
                                <dt>
                                    <img src="/home/picture/691ef382cc48494280c5d1ad1f90b1e6.jpg" alt=""/>
                                </dt>
                                <dd class="courseName">
                                    <div class="fireCourse oh">
                                        <var class="fl">14天关节修复计划</var>
                                        <img src="/home/picture/fire.png"
                                                                                  alt="" class="fl"/>
                                    </div>
                                    <div class="seeNum">
                                        <i><img src="/home/picture/see.png"
                                                alt=""/>16026</i>
                                        &nbsp;&nbsp;&nbsp;
                                        <i class="fireTime"><img src="/home/picture/jie.png"
                                                                 alt=""/>14节</i>
                                    </div>
                                    <div class="yellow_blue">
                                        <img src="/home/picture/new.png" alt=""
                                                                          class="blueNew">
                                        <img src="/home/picture/vip.png"
                                                                                   alt="" class="yellowVip">
                                    </div>
                                </dd>
                            </a>
                        </dl>
                    </li>
                
                    <li class="fl">
                        <dl>
                            <a href="javascript:;" title="" onclick="getPlanDetal('6711')">
                                <dt>
                                    <img src="/home/picture/6ccde0181dc048219cdbdc4e359ab042.jpg" alt=""/>
                                </dt>
                                <dd class="courseName">
                                    <div class="fireCourse oh">
                                        <var class="fl">“上班族”10分钟肩颈理疗</var>
                                        <img src="/home/picture/fire.png"
                                                                                  alt="" class="fl"/>
                                    </div>
                                    <div class="seeNum">
                                        <i><img src="/home/picture/see.png"
                                                alt=""/>29967</i>
                                        &nbsp;&nbsp;&nbsp;
                                        <i class="fireTime"><img src="/home/picture/jie.png"
                                                                 alt=""/>5节</i>
                                    </div>
                                    <div class="yellow_blue">
                                        
                                        <img src="/home/picture/vip.png"
                                                                                   alt="" class="yellowVip">
                                    </div>
                                </dd>
                            </a>
                        </dl>
                    </li>
                
                    <li class="fl">
                        <dl>
                            <a href="javascript:;" title="" onclick="getPlanDetal('6691')">
                                <dt>
                                    <img src="/home/picture/71ebaef973424d7d8c91d805040851b0.jpg" alt=""/>
                                </dt>
                                <dd class="courseName">
                                    <div class="fireCourse oh">
                                        <var class="fl">14天古典舞韵瑜伽计划</var>
                                        <img src="/home/picture/fire.png"
                                                                                  alt="" class="fl"/>
                                    </div>
                                    <div class="seeNum">
                                        <i><img src="/home/picture/see.png"
                                                alt=""/>28731</i>
                                        &nbsp;&nbsp;&nbsp;
                                        <i class="fireTime"><img src="/home/picture/jie.png"
                                                                 alt=""/>14节</i>
                                    </div>
                                    <div class="yellow_blue">
                                        
                                        <img src="/home/picture/vip.png"
                                                                                   alt="" class="yellowVip">
                                    </div>
                                </dd>
                            </a>
                        </dl>
                    </li>
                
                    <li class="fl">
                        <dl>
                            <a href="javascript:;" title="" onclick="getPlanDetal('6633')">
                                <dt>
                                    <img src="/home/picture/52d952449db14aae8ddd00c14eb0d045.jpg" alt=""/>
                                </dt>
                                <dd class="courseName">
                                    <div class="fireCourse oh">
                                        <var class="fl">14天冬季三温暖计划</var>
                                        <img src="/home/picture/fire.png"
                                                                                  alt="" class="fl"/>
                                    </div>
                                    <div class="seeNum">
                                        <i><img src="/home/picture/see.png"
                                                alt=""/>28480</i>
                                        &nbsp;&nbsp;&nbsp;
                                        <i class="fireTime"><img src="/home/picture/jie.png"
                                                                 alt=""/>14节</i>
                                    </div>
                                    <div class="yellow_blue">
                                        
                                        <img src="/home/picture/vip.png"
                                                                                   alt="" class="yellowVip">
                                    </div>
                                </dd>
                            </a>
                        </dl>
                    </li>
                
            <div class="clear">&nbsp;</div>
        </ul>
    </div>
    <!--跟名师-->
    <div class="basicArea">
        <div class="basicHead oh">
            <span class="fl areaTitle"><strong>跟名师</strong><var></var><em></em><i></i></span>
            <a href="http://wakeyoga.com/2lessons/a3z2/" title="" title="" class="fr">更多</a>
            <div class="fr sortCourse">
                <span class="cur" id="comprehensive2New" onclick="commonCur(0,4,0)">最新</span>
                <i>|</i>
                <span id="comprehensive2Hot" onclick="commonCur(4,0,0)">热度</span>
                <i>|</i>
                <span id="comprehensive2Favorable" onclick="commonCur(0,0,4)">好评</span>
            </div>
        </div>
        <div class="oh introBasic">
            <span class="fl">如何向高阶级提升？</span>
        </div>
        
        <ul class="courseList" id="comprehensive2HotLessons" style="display:none">
            
                
                    <li class="fl">
                        <dl>
                            <a href="javascript:;" title="" onclick="getTecherDetail('6648')">
                                <dt>
                                    <img src="/home/picture/d2884dc3dd26418782fabfba3087434b.jpg" alt=""/>
                                </dt>
                                <dd class="courseName">
                                    <div class="fireCourse oh">
                                        <var class="fl">明星私教·塑形秘籍</var>
                                        <img src="/home/picture/fire.png"
                                                                                  alt=""
                                                                                  class="fl"/>
                                    </div>
                                    <div class="seeNum">
                                        <i><img src="/home/picture/see.png"
                                                alt=""/>18906</i>
                                        &nbsp;&nbsp;&nbsp;
                                        <i class="fireTime"><img src="/home/picture/jie.png"
                                                                 alt=""/>7节</i>
                                    </div>
                                    <div class="yellow_blue">
                                        
                                        <img src="/home/picture/vip.png"
                                                                                   alt=""
                                                                                   class="yellowVip">
                                    </div>
                                </dd>
                            </a>
                        </dl>
                    </li>
                
                    <li class="fl">
                        <dl>
                            <a href="javascript:;" title="" onclick="getTecherDetail('6596')">
                                <dt>
                                    <img src="/home/picture/b3201777985a4f5288cdbf9a21d43065.jpg" alt=""/>
                                </dt>
                                <dd class="courseName">
                                    <div class="fireCourse oh">
                                        <var class="fl">女性调养系列</var>
                                        <img src="/home/picture/fire.png"
                                                                                  alt=""
                                                                                  class="fl"/>
                                    </div>
                                    <div class="seeNum">
                                        <i><img src="/home/picture/see.png"
                                                alt=""/>15566</i>
                                        &nbsp;&nbsp;&nbsp;
                                        <i class="fireTime"><img src="/home/picture/jie.png"
                                                                 alt=""/>6节</i>
                                    </div>
                                    <div class="yellow_blue">
                                        
                                        <img src="/home/picture/vip.png"
                                                                                   alt=""
                                                                                   class="yellowVip">
                                    </div>
                                </dd>
                            </a>
                        </dl>
                    </li>
                
                    <li class="fl">
                        <dl>
                            <a href="javascript:;" title="" onclick="getTecherDetail('6583')">
                                <dt>
                                    <img src="/home/picture/0d7e4aad5c204173a67be099eb34894a.jpg" alt=""/>
                                </dt>
                                <dd class="courseName">
                                    <div class="fireCourse oh">
                                        <var class="fl">昕孕孕产瑜伽系列</var>
                                        <img src="/home/picture/fire.png"
                                                                                  alt=""
                                                                                  class="fl"/>
                                    </div>
                                    <div class="seeNum">
                                        <i><img src="/home/picture/see.png"
                                                alt=""/>41587</i>
                                        &nbsp;&nbsp;&nbsp;
                                        <i class="fireTime"><img src="/home/picture/jie.png"
                                                                 alt=""/>12节</i>
                                    </div>
                                    <div class="yellow_blue">
                                        
                                        <img src="/home/picture/vip.png"
                                                                                   alt=""
                                                                                   class="yellowVip">
                                    </div>
                                </dd>
                            </a>
                        </dl>
                    </li>
                
                    <li class="fl">
                        <dl>
                            <a href="javascript:;" title="" onclick="getTecherDetail('6498')">
                                <dt>
                                    <img src="/home/picture/c92e5d01aebe45818c56b559e5537075.jpg" alt=""/>
                                </dt>
                                <dd class="courseName">
                                    <div class="fireCourse oh">
                                        <var class="fl">印度医学·阿育吠陀</var>
                                        <img src="/home/picture/fire.png"
                                                                                  alt=""
                                                                                  class="fl"/>
                                    </div>
                                    <div class="seeNum">
                                        <i><img src="/home/picture/see.png"
                                                alt=""/>30600</i>
                                        &nbsp;&nbsp;&nbsp;
                                        <i class="fireTime"><img src="/home/picture/jie.png"
                                                                 alt=""/>12节</i>
                                    </div>
                                    <div class="yellow_blue">
                                        
                                        <img src="/home/picture/vip.png"
                                                                                   alt=""
                                                                                   class="yellowVip">
                                    </div>
                                </dd>
                            </a>
                        </dl>
                    </li>
                
            
            <div class="clear">&nbsp;</div>
        </ul>
        
        <ul class="courseList" id="comprehensive2NewLessons" style="display: block">
            
                
                    <li class="fl">
                        <dl>
                            <a href="javascript:;" title="" onclick="getTecherDetail('6675')">
                                <dt>
                                    <img src="/home/picture/c42ea34dd7a84be4832b38e56f078cfa.jpg" alt=""/>
                                </dt>
                                <dd class="courseName">
                                    <div class="fireCourse oh">
                                        <var class="fl">瑜伽棒·理疗新攻略</var>
                                        
                                    </div>
                                    <div class="seeNum">
                                        <i><img src="/home/picture/see.png"
                                                alt=""/>16170</i>
                                        &nbsp;&nbsp;&nbsp;
                                        <i class="fireTime"><img src="/home/picture/jie.png"
                                                                 alt=""/>12节</i>
                                    </div>
                                    <div class="yellow_blue">
                                        
                                        <img src="/home/picture/vip.png"
                                                                                   alt=""
                                                                                   class="yellowVip">
                                    </div>
                                </dd>
                            </a>
                        </dl>
                    </li>
                
                    <li class="fl">
                        <dl>
                            <a href="javascript:;" title="" onclick="getTecherDetail('6648')">
                                <dt>
                                    <img src="/home/picture/d2884dc3dd26418782fabfba3087434b.jpg" alt=""/>
                                </dt>
                                <dd class="courseName">
                                    <div class="fireCourse oh">
                                        <var class="fl">明星私教·塑形秘籍</var>
                                        <img src="/home/picture/fire.png"
                                                                                  alt=""
                                                                                  class="fl"/>
                                    </div>
                                    <div class="seeNum">
                                        <i><img src="/home/picture/see.png"
                                                alt=""/>18906</i>
                                        &nbsp;&nbsp;&nbsp;
                                        <i class="fireTime"><img src="/home/picture/jie.png"
                                                                 alt=""/>7节</i>
                                    </div>
                                    <div class="yellow_blue">
                                        
                                        <img src="/home/picture/vip.png"
                                                                                   alt=""
                                                                                   class="yellowVip">
                                    </div>
                                </dd>
                            </a>
                        </dl>
                    </li>
                
                    <li class="fl">
                        <dl>
                            <a href="javascript:;" title="" onclick="getTecherDetail('6596')">
                                <dt>
                                    <img src="/home/picture/b3201777985a4f5288cdbf9a21d43065.jpg" alt=""/>
                                </dt>
                                <dd class="courseName">
                                    <div class="fireCourse oh">
                                        <var class="fl">女性调养系列</var>
                                        <img src="/home/picture/fire.png"
                                                                                  alt=""
                                                                                  class="fl"/>
                                    </div>
                                    <div class="seeNum">
                                        <i><img src="/home/picture/see.png"
                                                alt=""/>15566</i>
                                        &nbsp;&nbsp;&nbsp;
                                        <i class="fireTime"><img src="/home/picture/jie.png"
                                                                 alt=""/>6节</i>
                                    </div>
                                    <div class="yellow_blue">
                                        
                                        <img src="/home/picture/vip.png"
                                                                                   alt=""
                                                                                   class="yellowVip">
                                    </div>
                                </dd>
                            </a>
                        </dl>
                    </li>
                
                    <li class="fl">
                        <dl>
                            <a href="javascript:;" title="" onclick="getTecherDetail('6583')">
                                <dt>
                                    <img src="/home/picture/0d7e4aad5c204173a67be099eb34894a.jpg" alt=""/>
                                </dt>
                                <dd class="courseName">
                                    <div class="fireCourse oh">
                                        <var class="fl">昕孕孕产瑜伽系列</var>
                                        <img src="/home/picture/fire.png"
                                                                                  alt=""
                                                                                  class="fl"/>
                                    </div>
                                    <div class="seeNum">
                                        <i><img src="/home/picture/see.png"
                                                alt=""/>41587</i>
                                        &nbsp;&nbsp;&nbsp;
                                        <i class="fireTime"><img src="/home/picture/jie.png"
                                                                 alt=""/>12节</i>
                                    </div>
                                    <div class="yellow_blue">
                                        
                                        <img src="/home/picture/vip.png"
                                                                                   alt=""
                                                                                   class="yellowVip">
                                    </div>
                                </dd>
                            </a>
                        </dl>
                    </li>
                
            <div class="clear">&nbsp;</div>
        </ul>
        
        <ul class="courseList" id="comprehensive2FavorableLessons" style="display: none">
            
                
                    <li class="fl">
                        <dl>
                            <a href="javascript:;" title="" onclick="getTecherDetail('6648')">
                                <dt>
                                    <img src="/home/picture/d2884dc3dd26418782fabfba3087434b.jpg" alt=""/>
                                </dt>
                                <dd class="courseName">
                                    <div class="fireCourse oh">
                                        <var class="fl">明星私教·塑形秘籍</var>
                                        <img src="/home/picture/fire.png"
                                                                                  alt=""
                                                                                  class="fl"/>
                                    </div>
                                    <div class="seeNum">
                                        <i><img src="/home/picture/see.png"
                                                alt=""/>18906</i>
                                        &nbsp;&nbsp;&nbsp;
                                        <i class="fireTime"><img src="/home/picture/jie.png"
                                                                 alt=""/>7节</i>
                                    </div>
                                    <div class="yellow_blue">
                                        
                                        <img src="/home/picture/vip.png"
                                                                                   alt=""
                                                                                   class="yellowVip">
                                    </div>
                                </dd>
                            </a>
                        </dl>
                    </li>
                
                    <li class="fl">
                        <dl>
                            <a href="javascript:;" title="" onclick="getTecherDetail('6596')">
                                <dt>
                                    <img src="/home/picture/b3201777985a4f5288cdbf9a21d43065.jpg" alt=""/>
                                </dt>
                                <dd class="courseName">
                                    <div class="fireCourse oh">
                                        <var class="fl">女性调养系列</var>
                                        <img src="/home/picture/fire.png"
                                                                                  alt=""
                                                                                  class="fl"/>
                                    </div>
                                    <div class="seeNum">
                                        <i><img src="/home/picture/see.png"
                                                alt=""/>15566</i>
                                        &nbsp;&nbsp;&nbsp;
                                        <i class="fireTime"><img src="/home/picture/jie.png"
                                                                 alt=""/>6节</i>
                                    </div>
                                    <div class="yellow_blue">
                                        
                                        <img src="/home/picture/vip.png"
                                                                                   alt=""
                                                                                   class="yellowVip">
                                    </div>
                                </dd>
                            </a>
                        </dl>
                    </li>
                
                    <li class="fl">
                        <dl>
                            <a href="javascript:;" title="" onclick="getTecherDetail('6583')">
                                <dt>
                                    <img src="/home/picture/0d7e4aad5c204173a67be099eb34894a.jpg" alt=""/>
                                </dt>
                                <dd class="courseName">
                                    <div class="fireCourse oh">
                                        <var class="fl">昕孕孕产瑜伽系列</var>
                                        <img src="/home/picture/fire.png"
                                                                                  alt=""
                                                                                  class="fl"/>
                                    </div>
                                    <div class="seeNum">
                                        <i><img src="/home/picture/see.png"
                                                alt=""/>41587</i>
                                        &nbsp;&nbsp;&nbsp;
                                        <i class="fireTime"><img src="/home/picture/jie.png"
                                                                 alt=""/>12节</i>
                                    </div>
                                    <div class="yellow_blue">
                                        
                                        <img src="/home/picture/vip.png"
                                                                                   alt=""
                                                                                   class="yellowVip">
                                    </div>
                                </dd>
                            </a>
                        </dl>
                    </li>
                
                    <li class="fl">
                        <dl>
                            <a href="javascript:;" title="" onclick="getTecherDetail('6498')">
                                <dt>
                                    <img src="/home/picture/c92e5d01aebe45818c56b559e5537075.jpg" alt=""/>
                                </dt>
                                <dd class="courseName">
                                    <div class="fireCourse oh">
                                        <var class="fl">印度医学·阿育吠陀</var>
                                        <img src="/home/picture/fire.png"
                                                                                  alt=""
                                                                                  class="fl"/>
                                    </div>
                                    <div class="seeNum">
                                        <i><img src="/home/picture/see.png"
                                                alt=""/>30600</i>
                                        &nbsp;&nbsp;&nbsp;
                                        <i class="fireTime"><img src="/home/picture/jie.png"
                                                                 alt=""/>12节</i>
                                    </div>
                                    <div class="yellow_blue">
                                        
                                        <img src="/home/picture/vip.png"
                                                                                   alt=""
                                                                                   class="yellowVip">
                                    </div>
                                </dd>
                            </a>
                        </dl>
                    </li>
                
            <div class="clear">&nbsp;</div>
        </ul>
    </div>
    <!--直播课堂-->
    <div class="basicArea" style="margin-bottom: 2rem">
        <div class="basicHead oh">
            <span class="fl areaTitle"><strong>直播课堂</strong><var></var><em></em><i></i></span>
            <a href="http://wakeyoga.com/2lessons/a5z2/" title="" class="fr">更多</a>
        </div>
        <div class="oh introBasic">
            <span class="fl">如何在习练中解惑？</span>
        </div>
        <a href="javascript:;" title="" onclick="getLiveDetail('3374')">
            <div class="livehouse">
                <div class="innerHouse">
                    <img src="/home/picture/69e0af37157145d4891898e00d76d37c.jpg">
                    <span></span>
                </div>
            </div>
            <div class="tc onlineShow">
                
                <span
                        class="firstVideo">预告</span>解答你的困惑，让你更懂瑜伽！
                
                
            </div>
        </a>
        <!--课程轮播图-->
        <ul class="courseList zhiboList">
            
                    <li class="fl">
                        <dl>
                            <a href="javascript:;" title="" onclick="getLiveDetail('3390')">
                                <dt>
                                    <img src="/home/picture/796f76c18c2348b5a52306cf0dd54107.jpg" alt=""/>
                                    <span></span>
                                </dt>
                                <dd class="courseName2">
                                    <div class="fireCourse oh">
                                        
                                        
                                        
                                        <span class="beforeVideo fl">回放</span><var
                                                class="fl">产后瘦身之练出小蛮腰</var>
                                    </div>
                                </dd>
                            </a>
                        </dl>
                    </li>
            
                    <li class="fl">
                        <dl>
                            <a href="javascript:;" title="" onclick="getLiveDetail('3387')">
                                <dt>
                                    <img src="/home/picture/4fa9976517b6456a89c9f7c187517d42.jpg" alt=""/>
                                    <span></span>
                                </dt>
                                <dd class="courseName2">
                                    <div class="fireCourse oh">
                                        
                                        
                                        
                                        <span class="beforeVideo fl">回放</span><var
                                                class="fl">产后瘦身之极致美胸</var>
                                    </div>
                                </dd>
                            </a>
                        </dl>
                    </li>
            
                    <li class="fl">
                        <dl>
                            <a href="javascript:;" title="" onclick="getLiveDetail('3341')">
                                <dt>
                                    <img src="/home/picture/e04c69bceb30472592e12de5c351e989.jpg" alt=""/>
                                    <span></span>
                                </dt>
                                <dd class="courseName2">
                                    <div class="fireCourse oh">
                                        
                                        
                                        
                                        <span class="beforeVideo fl">回放</span><var
                                                class="fl">灵活放松髋关节，凹出稳定好造型</var>
                                    </div>
                                </dd>
                            </a>
                        </dl>
                    </li>
            
                    <li class="fl">
                        <dl>
                            <a href="javascript:;" title="" onclick="getLiveDetail('3344')">
                                <dt>
                                    <img src="/home/picture/4d3724aee1dd4114bc60aee3a7cc2049.jpg" alt=""/>
                                    <span></span>
                                </dt>
                                <dd class="courseName2">
                                    <div class="fireCourse oh">
                                        
                                        
                                        
                                        <span class="beforeVideo fl">回放</span><var
                                                class="fl">美腿养成之萝卜腿的逆袭之路</var>
                                    </div>
                                </dd>
                            </a>
                        </dl>
                    </li>
            
            <div class="clear">&nbsp;</div>
        </ul>
        <!--课程轮播图END-->
    </div>
    <!--体式库-->
    <div class="basicArea">
        <div class="basicHead oh">
            <span class="fl areaTitle"><strong>体式库</strong><var></var><em></em><i></i></span>
            <a href="http://wakeyoga.com/2lessons/a6z2/" title="" class="fr">更多</a>
        </div>
        <div class="oh introBasic">
            <span class="fl">瑜伽习练宝典</span>
        </div>
        <ul class="allStyle">
            
                <li class="fl">
                    <dl>
                        <a href="javascript:;" title="" onclick="getAsanasDetail('1')">
                            <dt>
                                <img src="/home/picture/09d665a4886b4b329b589036e0fd7fa8.jpg" alt=""/>
                            </dt>
                            <dd class="courseName2">屈肘下犬式</dd>
                        </a>
                    </dl>
                </li>
            
                <li class="fl">
                    <dl>
                        <a href="javascript:;" title="" onclick="getAsanasDetail('2')">
                            <dt>
                                <img src="/home/picture/0d1de3dac633472f906b963c2babe103.jpg" alt=""/>
                            </dt>
                            <dd class="courseName2">下犬式</dd>
                        </a>
                    </dl>
                </li>
            
                <li class="fl">
                    <dl>
                        <a href="javascript:;" title="" onclick="getAsanasDetail('3')">
                            <dt>
                                <img src="/home/picture/e1e31e31e6764e918c6ae9bda69d2bff.jpg" alt=""/>
                            </dt>
                            <dd class="courseName2">下犬式扭转</dd>
                        </a>
                    </dl>
                </li>
            
                <li class="fl">
                    <dl>
                        <a href="javascript:;" title="" onclick="getAsanasDetail('4')">
                            <dt>
                                <img src="/home/picture/744adb0d7cf04076b2034ba2a23acdfd.jpg" alt=""/>
                            </dt>
                            <dd class="courseName2">蜥蜴式</dd>
                        </a>
                    </dl>
                </li>
            
            <div class="clear">&nbsp;</div>
        </ul>
    </div>
    <!--馆内布局-->
    <div class="club_zs"><img src="/home/picture/advertise.png"/></div>
</div>
<!--猜你喜欢-->
<div class="guessu_heart oh">
    <div class="heartInner">
        <div class="fl heartTitle"><img src="/home/picture/lovefor.png"/></div>
        <ul>
            
                
                        <li class="starList">
                            <a href="http://wakeyoga.com/2articlelifed1083.html">
                                <dl>
                                    <dt>
                                        <img src="/home/picture/adab87791caf4c028476e3f751bbd1ad.jpg"/>
                                    </dt>
                                    <dd><span>这些最重要的体式，往往被我们忽略了...</span></dd>
                                </dl>
                            </a>
                        </li>
                
                        <li class="starList">
                            <a href="http://wakeyoga.com/2articlelifed1080.html">
                                <dl>
                                    <dt>
                                        <img src="/home/picture/728f539d78a2496284d464211f82d265.jpg"/>
                                    </dt>
                                    <dd><span>对不起，我背着你高潮了。</span></dd>
                                </dl>
                            </a>
                        </li>
                
                        <li class="starList">
                            <a href="http://wakeyoga.com/2vediolifed1079.html">
                                <dl>
                                    <dt>
                                        <img src="/home/picture/9384b91e910741f1877d5552a8e8ab2d.jpg"/>
                                    </dt>
                                    <dd><span>浪漫的四月，陪你踏上一段幸福的旅程</span></dd>
                                </dl>
                            </a>
                        </li>
                
            
            <li class="articleList">
                <div class="oh falseOl">
                    
                        <var><a href="http://wakeyoga.com/2vediolifed1084.html"><span>跳绳没新意？看完你会对跳绳充满了兴趣</span></a></var>
                    
                        <var><a href="http://wakeyoga.com/2articlelifed1076.html"><span>19张瑜伽漫画，让你重新认识瑜伽...</span></a></var>
                    
                        <var><a href="http://wakeyoga.com/2articlelifed1061.html"><span>高低肩？脊柱侧弯？10个小动作帮你找回好气质！</span></a></var>
                    
                        <var><a href="http://wakeyoga.com/2vediolifed1074.html"><span>清晨，唤醒你内在的力量</span></a></var>
                    
                        <var><a href="http://wakeyoga.com/2vediolifed938.html"><span>跟着《YOGA》的节拍，舞动岁月，不惧未来</span></a></var>
                    
                </div>
            </li>
            <div class="clear">&nbsp;</div>
        </ul>
    </div>
</div>
<!--此刻在wake习练-->
<div class="wakeEnjoy">
    <div class="main">
        <dl class="enjoyDl">
            <dt>
                "<br alt=""/>此刻在Wake习练
            </dt>
            <dd>
                每分每秒，都有来自全世界的Wakers在这里探索瑜伽世界，享受身心结合。
            </dd>
        </dl>
        <div class="slideUp">
            <div class="slideInner">
                <div class="enjoyOut">
                    
                        <ul class="oh enjoyList">
                            
                                <li class="fl">
                                    <dl class="oh">
                                        <dt class="fl">
                                            <img src="/home/picture/1_1467189229349.jpg" alt=""/>
                                        </dt>
                                        <dd class="enjoyName">
                                                Wake
                                        </dd>
                                        <dd class="enjoyClass">
                                            刚刚习练了还心灵一片宁静
                                        </dd>
                                    </dl>
                                </li>
                            
                                <li class="fl">
                                    <dl class="oh">
                                        <dt class="fl">
                                            <img src="/home/picture/875bd736fa3f4be5aaf6187e7eb073d5.gif" alt=""/>
                                        </dt>
                                        <dd class="enjoyName">
                                                蜕变
                                        </dd>
                                        <dd class="enjoyClass">
                                            刚刚习练了摆脱忧郁症
                                        </dd>
                                    </dl>
                                </li>
                            
                                <li class="fl">
                                    <dl class="oh">
                                        <dt class="fl">
                                            <img src="/home/picture/1e8ef080acd7430a8cadfaeee2c14107.gif" alt=""/>
                                        </dt>
                                        <dd class="enjoyName">
                                                kitty
                                        </dd>
                                        <dd class="enjoyClass">
                                            刚刚习练了正确对待欲望
                                        </dd>
                                    </dl>
                                </li>
                            
                                <li class="fl">
                                    <dl class="oh">
                                        <dt class="fl">
                                            <img src="/home/picture/default1.png" alt=""/>
                                        </dt>
                                        <dd class="enjoyName">
                                                153****6261
                                        </dd>
                                        <dd class="enjoyClass">
                                            刚刚习练了14天瑜伽球美体计划
                                        </dd>
                                    </dl>
                                </li>
                            
                                <li class="fl">
                                    <dl class="oh">
                                        <dt class="fl">
                                            <img src="/home/picture/d9bd595555814b2293951590e6b5693d.gif" alt=""/>
                                        </dt>
                                        <dd class="enjoyName">
                                                *l_hj
                                        </dd>
                                        <dd class="enjoyClass">
                                            刚刚习练了14天关节修复计划
                                        </dd>
                                    </dl>
                                </li>
                            
                                <li class="fl">
                                    <dl class="oh">
                                        <dt class="fl">
                                            <img src="/home/picture/5660b05d7981424c9e931749cb4103fb.gif" alt=""/>
                                        </dt>
                                        <dd class="enjoyName">
                                                九月
                                        </dd>
                                        <dd class="enjoyClass">
                                            刚刚习练了脊柱修复
                                        </dd>
                                    </dl>
                                </li>
                            
                                <li class="fl">
                                    <dl class="oh">
                                        <dt class="fl">
                                            <img src="/home/picture/default1.png" alt=""/>
                                        </dt>
                                        <dd class="enjoyName">
                                                135****2785
                                        </dd>
                                        <dd class="enjoyClass">
                                            刚刚习练了柔软的脊柱
                                        </dd>
                                    </dl>
                                </li>
                            
                                <li class="fl">
                                    <dl class="oh">
                                        <dt class="fl">
                                            <img src="/home/picture/5e643c456615461e962c82f44487d744.gif" alt=""/>
                                        </dt>
                                        <dd class="enjoyName">
                                                1
                                        </dd>
                                        <dd class="enjoyClass">
                                            刚刚习练了辅助工具的灵活运用
                                        </dd>
                                    </dl>
                                </li>
                            
                        </ul>
                    
                        <ul class="oh enjoyList">
                            
                                <li class="fl">
                                    <dl class="oh">
                                        <dt class="fl">
                                            <img src="/home/picture/default1.png" alt=""/>
                                        </dt>
                                        <dd class="enjoyName">
                                                156****2225
                                        </dd>
                                        <dd class="enjoyClass">
                                            刚刚习练了冥想音乐
                                        </dd>
                                    </dl>
                                </li>
                            
                                <li class="fl">
                                    <dl class="oh">
                                        <dt class="fl">
                                            <img src="/home/picture/37d5281e22944e0288f9bb54359be55f.gif" alt=""/>
                                        </dt>
                                        <dd class="enjoyName">
                                                星潼
                                        </dd>
                                        <dd class="enjoyClass">
                                            刚刚习练了清晨瑜伽初级
                                        </dd>
                                    </dl>
                                </li>
                            
                                <li class="fl">
                                    <dl class="oh">
                                        <dt class="fl">
                                            <img src="/home/picture/909a0d74936b42b8adabda8899d04bca.gif" alt=""/>
                                        </dt>
                                        <dd class="enjoyName">
                                                🌼HLL🌼
                                        </dd>
                                        <dd class="enjoyClass">
                                            刚刚习练了14天零基础入门计划
                                        </dd>
                                    </dl>
                                </li>
                            
                                <li class="fl">
                                    <dl class="oh">
                                        <dt class="fl">
                                            <img src="/home/picture/1ccbad488f2943a599b175373df6934c.gif" alt=""/>
                                        </dt>
                                        <dd class="enjoyName">
                                                李希特·纸上建城邦
                                        </dd>
                                        <dd class="enjoyClass">
                                            刚刚习练了每日早中晚冥想
                                        </dd>
                                    </dl>
                                </li>
                            
                                <li class="fl">
                                    <dl class="oh">
                                        <dt class="fl">
                                            <img src="/home/picture/bf4e2244b3fc4172a29975ba104c5389.gif" alt=""/>
                                        </dt>
                                        <dd class="enjoyName">
                                                过客
                                        </dd>
                                        <dd class="enjoyClass">
                                            刚刚习练了关于睡眠
                                        </dd>
                                    </dl>
                                </li>
                            
                                <li class="fl">
                                    <dl class="oh">
                                        <dt class="fl">
                                            <img src="/home/picture/3a1702c132d8408883e2d08e79fcb935.gif" alt=""/>
                                        </dt>
                                        <dd class="enjoyName">
                                                🌶
                                        </dd>
                                        <dd class="enjoyClass">
                                            刚刚习练了亲子瑜伽
                                        </dd>
                                    </dl>
                                </li>
                            
                                <li class="fl">
                                    <dl class="oh">
                                        <dt class="fl">
                                            <img src="/home/picture/f32e0ca8734c4bb48a6c993aa67f641d.gif" alt=""/>
                                        </dt>
                                        <dd class="enjoyName">
                                                自由的鱼
                                        </dd>
                                        <dd class="enjoyClass">
                                            刚刚习练了减脂瘦身瑜伽
                                        </dd>
                                    </dl>
                                </li>
                            
                                <li class="fl">
                                    <dl class="oh">
                                        <dt class="fl">
                                            <img src="/home/picture/f4593880ae9c4e91a6f334983afd1685.gif" alt=""/>
                                        </dt>
                                        <dd class="enjoyName">
                                                我念你念得那么真
                                        </dd>
                                        <dd class="enjoyClass">
                                            刚刚习练了关于睡眠
                                        </dd>
                                    </dl>
                                </li>
                            
                        </ul>
                    
                        <ul class="oh enjoyList">
                            
                                <li class="fl">
                                    <dl class="oh">
                                        <dt class="fl">
                                            <img src="/home/picture/be914be4160c486fb384e81eea9de01b.gif" alt=""/>
                                        </dt>
                                        <dd class="enjoyName">
                                                生物时代温煦
                                        </dd>
                                        <dd class="enjoyClass">
                                            刚刚习练了初学冥想课堂
                                        </dd>
                                    </dl>
                                </li>
                            
                                <li class="fl">
                                    <dl class="oh">
                                        <dt class="fl">
                                            <img src="/home/picture/875bd736fa3f4be5aaf6187e7eb073d5.gif" alt=""/>
                                        </dt>
                                        <dd class="enjoyName">
                                                蜕变
                                        </dd>
                                        <dd class="enjoyClass">
                                            刚刚习练了摆脱忧郁症
                                        </dd>
                                    </dl>
                                </li>
                            
                                <li class="fl">
                                    <dl class="oh">
                                        <dt class="fl">
                                            <img src="/home/picture/default1.png" alt=""/>
                                        </dt>
                                        <dd class="enjoyName">
                                                170****9933
                                        </dd>
                                        <dd class="enjoyClass">
                                            刚刚习练了关于睡眠
                                        </dd>
                                    </dl>
                                </li>
                            
                                <li class="fl">
                                    <dl class="oh">
                                        <dt class="fl">
                                            <img src="/home/picture/default1.png" alt=""/>
                                        </dt>
                                        <dd class="enjoyName">
                                                138****9318
                                        </dd>
                                        <dd class="enjoyClass">
                                            刚刚习练了关于睡眠
                                        </dd>
                                    </dl>
                                </li>
                            
                                <li class="fl">
                                    <dl class="oh">
                                        <dt class="fl">
                                            <img src="/home/picture/1e8ef080acd7430a8cadfaeee2c14107.gif" alt=""/>
                                        </dt>
                                        <dd class="enjoyName">
                                                kitty
                                        </dd>
                                        <dd class="enjoyClass">
                                            刚刚习练了正确对待欲望
                                        </dd>
                                    </dl>
                                </li>
                            
                                <li class="fl">
                                    <dl class="oh">
                                        <dt class="fl">
                                            <img src="/home/picture/1486497705_1545145030145.jpg" alt=""/>
                                        </dt>
                                        <dd class="enjoyName">
                                                挑战自己
                                        </dd>
                                        <dd class="enjoyClass">
                                            刚刚习练了关于睡眠
                                        </dd>
                                    </dl>
                                </li>
                            
                                <li class="fl">
                                    <dl class="oh">
                                        <dt class="fl">
                                            <img src="/home/picture/25b06da366a549cf87a3c753e6438a30.gif" alt=""/>
                                        </dt>
                                        <dd class="enjoyName">
                                                
                                        </dd>
                                        <dd class="enjoyClass">
                                            刚刚习练了14天极致腰腹塑形计划
                                        </dd>
                                    </dl>
                                </li>
                            
                                <li class="fl">
                                    <dl class="oh">
                                        <dt class="fl">
                                            <img src="/home/picture/84fa7c84ee394748aef6d4618a131ee4.gif" alt=""/>
                                        </dt>
                                        <dd class="enjoyName">
                                                kate
                                        </dd>
                                        <dd class="enjoyClass">
                                            刚刚习练了14天极致腰腹塑形计划
                                        </dd>
                                    </dl>
                                </li>
                            
                        </ul>
                    
                </div>
            </div>
        </div>
    </div>
</div>
<!--此刻在wake习练end-->
<!--企业瑜伽-->
<div class="guessu_heart">
    <div class="club_zs2"><img src="/home/picture/advertise2.png"/></div>
    <div class="main">
        <dl class="pracCourse" style="padding-top: 0;">
            <dd>
                Wake企业瑜伽培训是国内为企业提供瑜伽服务的专业机构。我们可提供办公室瑜伽、传统瑜伽、双人瑜伽、户外瑜伽、力量瑜伽、塑形瑜伽、亲子瑜伽、理疗瑜伽、太极瑜伽、禅坐瑜伽等。企业只需花1小时即可是他们享受瑜伽带来的身、心、灵的平静与放松。
            </dd>
        </dl>
        <ul class="logoList"></ul>
        <div class="checkMore">
            <a href="http://wakeyoga.com/2enterprise.html" title="">报名体验 →</a>
        </div>
    </div>
</div>


@endsection
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
<div class="pagination"></div>
</div>
<div class="content">

    <!--练基础-->
    <div class="basicArea">
        <div class="basicHead oh">
            <span class="fl areaTitle"><strong>看视频</strong><var></var><em></em><i></i></span>
            <a href="/home/video" title="" title="" class="fr">更多</a>
        </div>
        <div class="oh introBasic">
            <span class="fl">如何从零基础开始？</span>
        </div>
        <ul class="courseList" id="commonNewLessons" style="display: block">
            
            @foreach($look as $k=>$v)
                    <li class="fl">
                        <dl>
                            <a href="javascript:;" title="" onclick="plasy('102')">
                                <dt>
                                    <img src="/uploads/{{$v->img}}" alt=""/>
                                </dt>
                                <dd class="courseName">
                                    <div class="fireCourse oh">
                                        <var class="fl">{{$v->vname}}</var>
                                        
                                    </div>
                            
                                    <div class="yellow_blue">
                                        
                                    </div>
                                </dd>
                            </a>
                        </dl>
                    </li>
            @endforeach
            <div class="clear">&nbsp;</div>
        </ul>
    </div>
    <!--去冥想-->
    <div class="basicArea">
        <div class="basicHead oh">
            <span class="fl areaTitle"><strong>学课程</strong><var></var><em></em><i></i></span>
            <a href="/home/lesson" title="" class="fr">更多</a>
        </div>
        <div class="oh introBasic">
            <span class="fl">如何让身与心回归？</span>
        </div>
        
        <ul class="courseList" id="meditationNewLessons" style="display: block">
            
                @foreach($lesson as $k=>$v)
                    <li class="fl">
                        <dl>
                            <a href="javascript:;" title="" onclick="getTingkDetail('6492')">
                                <dt>
                                    <img src="/uploads/{{ $v->img }}" alt=""/>
                                </dt>
                                <dd class="courseName">
                                    <div class="fireCourse oh">
                                        <var class="fl">{{ $v->lname }}</var>
                                    </div>
                                    <div class="yellow_blue">
                                        
                                    </div>
                                </dd>
                            </a>
                        </dl>
                    </li>
                @endforeach
            
                
            
            <div class="clear">&nbsp;</div>
        </ul>
    </div>
    <!--定计划-->
    <div class="basicArea">
        <div class="basicHead oh">
            <span class="fl areaTitle"><strong>看资讯</strong><var></var><em></em><i></i></span>
            <a href="/home/news" title="" class="fr">更多</a>
        </div>
        <div class="oh introBasic">
            <span class="fl">如何将好习惯培养？</span>
        </div>
        
        
        
        <ul class="oh courseList" id="trainingPlainsNew" style="display: block">
            
                
                    @foreach($news as $k=>$v)
                    <li class="fl">
                        <dl>
                            <a href="javascript:;" title="" onclick="getPlanDetal('6718')">
                                <dt>
                                    <img src="/uploads/{{$v->img}}" alt=""/>
                                </dt>
                                <dd class="courseName">
                                    <div class="fireCourse oh">
                                        <var class="fl">{{$v->nname}}</var>
                                    </div>
                                    
                                    <div class="yellow_blue">
                                
                                    </div>
                                </dd>
                            </a>
                        </dl>
                    </li>
                @endforeach
                
                    
            
            <div class="clear">&nbsp;</div>
        </ul>
        
       
    </div>
    <!--跟名师-->
    <div class="basicArea">
        <div class="basicHead oh">
            <span class="fl areaTitle"><strong>瑜伽馆</strong><var></var><em></em><i></i></span>
            <a href="/home/club" title="" title="" class="fr">更多</a>
            
        </div>
        <div class="oh introBasic">
            <span class="fl">如何向高阶级提升？</span>
        </div>
        
        <ul class="courseList" id="comprehensive2NewLessons" style="display: block">
            @foreach($club as $k=>$v)
                
                    <li class="fl">
                        <dl>
                            <a href="javascript:;" title="" onclick="getTecherDetail('6675')">
                                <dt>
                                    <img src="{{ $v->cimg }}" alt=""/>
                                </dt>
                                <dd class="courseName">
                                    <div class="fireCourse oh">
                                        <var class="fl">{{ $v->cname }}</var>
                                        
                                    </div>
                        
                                    <div class="yellow_blue">
        
                                    </div>
                                </dd>
                            </a>
                        </dl>
                    </li>
             @endforeach   

            <div class="clear">&nbsp;</div>
        </ul>
       
    </div>
     <!--体式库-->
    <div class="basicArea">
        <div class="basicHead oh">
            <span class="fl areaTitle"><strong>名师展示</strong><var></var><em></em><i></i></span>
            <a href="/home/teacher/index" title="" class="fr">更多</a>
        </div>
        <div class="oh introBasic">
            <span class="fl">瑜伽习练灯塔</span>
        </div>
        <ul class="allStyle">
            @foreach($teacher as $k=>$v)
                <li class="fl">
                    <dl>
                        <a href="javascript:;" title="" onclick="getAsanasDetail('1')">
                            <dt>
                                <img src="{{ $v->teachinfoend->timg}}" alt=""/>
                            </dt>
                            <dd class="courseName2">{{ $v->tname }}</dd>
                        </a>
                    </dl>
                </li>
            @endforeach
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
            
            @foreach($new as $k=>$v)    
            <li class="starList">
                <a href="/home/news/{{ $v->id }}/edit">
                    <dl>
                        <dt>
                            <img src="/uploads/{{ $v->img }}"/>
                        </dt>
                        <dd><span>{{ $v->nname }}</span></dd>
                    </dl>
                </a>
            </li>
            @endforeach    
            <li class="articleList">
                <div class="oh falseOl">
                    @foreach($video as $k=>$v)
                    <var><a href="/home/video/{{ $v->id }}/edit"><span>{{$v->vname}}</span></a></var>
                    @endforeach
                </div>
            </li>
            <div class="clear">&nbsp;</div>
        </ul>
    </div>
</div>
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
            <a href="/home/enroll/create" title="">报名体验 →</a>
        </div>
    </div>
</div>


@endsection
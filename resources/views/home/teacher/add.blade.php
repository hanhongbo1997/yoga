@extends('home.layout.layout')

@section('content')
                @if (session('success'))
                    <script>alert('{{ session("success") }}');</script>";
                     
                    @endif
                    @if (session('error'))

                    <script>alert('{{ session("error") }}');</script>";

                    @endif
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

<!-- 头部  -->
<div class="xui-content" style="margin: 0 auto;margin-top:100px; font-size: 18px; margin-bottom: 20px; width:80%;">
    <div class="xui-container" style=" float: left;">
        <ul class="sui-breadcrumb xui-margin-0">
            <li><a href="/" style="color: #fb9966;">首页</a></li>
            <li class="active">{{ $title }}</li>
        </ul>
    </div>

 
 </div>

<!-- 头部  -->
<!-- 搜索 -->
<div class="xui-content xui-bg-white">
    <div class="xui-container course-list">
    <form action="/home/teacher/add" method="post">
     {{ csrf_field() }}
                    <div class="course-nav-row">
                <span class="hd xui-pull-l">按字母：<input type="text" value="" name="letter" id="letter" style="display:none;"></span>
                <div class="bd">
            
                
                    <button style="border: none;background-color:rgba(0,0,0,0);">
                    <ul class="">
                          <li class="course-nav-item  on">
                            <a href="/home/teacher/index">全部</a></li>
                        <li class="course-nav-item labels" data-id="12">
                            <a >A</a></li>
                        <li class="course-nav-item labels" data-id="13">
                             <a >B</a></li>
                        <li class="course-nav-item labels" data-id="14">
                              <a >C</a></li>
                        <li class="course-nav-item labels" data-id="15">
                              <a >D</a></li>
                        <li class="course-nav-item labels" data-id="32">
                              <a >E</a></li>
                        <li class="course-nav-item labels" data-id="33">
                              <a >F</a></li>
                        <li class="course-nav-item labels" data-id="34">
                             <a >G</a></li>
                        <li class="course-nav-item labels" data-id="35">
                              <a >H</a></li>
                        <li class="course-nav-item labels" data-id="36">
                              <a >I</a></li>
                        <li class="course-nav-item labels" data-id="37">
                             <a >J</a></li>
                        <li class="course-nav-item labels" data-id="38">
                              <a >K</a></li>
                        <li class="course-nav-item labels" data-id="39">
                             <a >L</a></li>
                        <li class="course-nav-item labels" data-id="40">
                              <a >M</a></li>
                        <li class="course-nav-item labels" data-id="41">
                              <a >N</a></li>
                        <li class="course-nav-item labels" data-id="42">
                             <a >O</a></li>
                        <li class="course-nav-item labels" data-id="43">
                             <a >P</a></li>
                        <li class="course-nav-item labels" data-id="44">
                             <a >Q</a></li>
                        <li class="course-nav-item labels" data-id="45">
                             <a >R</a></li>
                        <li class="course-nav-item labels" data-id="46">
                             <a >S</a></li>
                        <li class="course-nav-item labels" data-id="47">
                             <a >T</a></li>
                        <li class="course-nav-item labels" data-id="48">
                            <a >U</a></li>
                        <li class="course-nav-item labels" data-id="49">
                             <a >V</a></li>
                        <li class="course-nav-item labels" data-id="50">
                            <a >W</a></li>
                        <li class="course-nav-item labels" data-id="51">
                            <a >X</a></li>
                        <li class="course-nav-item labels" data-id="52">
                            <a >Y</a></li>
                        <li class="course-nav-item labels" data-id="53">
                             <a >Z</a></li>
                    </ul>
                    </button>
                  
                </div>
      </form>
            </div>
<script>
    $(function(){
        $('.labels').mouseover(function(){
            var letter = $(this).children(":first").html();
            console.log(letter);
            $('#letter').attr('value',letter);
        });
    });
</script>

<form action="/home/teacher/agg" method="get">
 <div class="course-nav-row">
                <span class="hd xui-pull-l">按类型：<input type="text" value="" name="status" id="genre" style="display:none;"></span>
                <div class="bd">
                <button style="border: none;background-color:rgba(0,0,0,0);">
                   <ul class="">
                          <li class="course-nav-item labels on">
                            <a href="/home/teacher/index">全部</a></li>
                          <li class="course-nav-item labels_v" data-id="16">
                            <span style="display:none;">1</span>
                            <a>瑜伽导师</a>
                          </li>
                          <li class="course-nav-item labels_v" data-id="17">
                           <span style="display:none;">2</span>
                            <a>行业顾问</a>
                          </li>
                          <li class="course-nav-item labels_v" data-id="18">
                           <span style="display:none;">3</span>
                            <a>官方认证</a>
                          </li>
                    </ul>
                    </button>
               
                    
                </div>
  </div>
</form>


<script>
     $(function(){
        $('.labels_v').mouseover(function(){
            var letter = $(this).children(":first").html();
            console.log(letter);
            $('#genre').attr('value',letter);
        });
    });
</script>

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
        @foreach ($data as $k=>$v)
                 <li>
                      <a href="/home/teacher/show/{{ $v->tid }}">
                        <!-- <div class="tag">
                        <span></span></div> -->
                        <img src="{{ $v->teachinfoend->timg }}" class="xui-img-radius" style="padding:30px;width:193px;height:193px;">
                        <h2 class="xui-ellipsis-2 xui-text-center xui-font-size-18">{{ $v->tname }}</h2>
                        <p class="xui-ellipsis-2">{{ $v->intor }}</p>
                        </a>
                    </li>
        @endforeach          
            </ul>
        </div>



           </div>
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
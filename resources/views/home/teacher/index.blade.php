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

<!-- 头部  -->
<div class="xui-content" style="margin: 0 auto;margin-top:100px; font-size: 18px; margin-bottom: 20px; width:80%;">
    <div class="xui-container" style=" float: left;">
        <ul class="sui-breadcrumb xui-margin-0">
            <li><a href="/" style="color: #fb9966;">首页</a></li>
            <li class="active">{{ $title }}</li>
        </ul>
    </div>

 <!-- 搜索   -->
          <div class="dataTables_filter" id="datatable_filter " style="float:right;">
            <form action="/teacher">
                <input type="text" aria-controls="datatable" name="search_nname" class="form-control input-large" placeholder="搜索" style="font-size: 16px;outline:none; width: 200px;padding-left: 20px;height: 35px;border-radius: 18px;outline: none; border: 1px solid #ccc;">
            </form>
            
          </div>
 <!-- 搜索   -->
 </div>

<!-- 头部  -->
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
        @foreach ($lesson as $k=>$v)
                    <li>
                <a href="/skip/5850.html" target="_blank">
                    <img src="/uploads/{{ $v->img }}" style="width: 190px;height: 118px;">
                    <h4>{{ $v->lname }}  </h4>
                </a>
                <p class="xui-font-size-12">
                    <span class="xui-pull-l sui-text-warning">
                        <em>￥</em>222                 </span>
                    <span class="xui-pull-r xui-text-right">
                        <i class="sui-text-warning">52</i>人已购买
                    </span>
                </p>
            </li>
        @endforeach   
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


<!-- 分页  -->

        <div class="row-">
      <div class="col-lg-6 col-md-6 col-sm-12">
       {!! $data->appends(['search_nname'=>$data->cname])->render() !!}
        </div>
      </div>
    </div>
<!-- 分页  -->
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
@extends('home.layout.layout')

@section('content')
                    @if (session('success'))
                    <script>alert('{{ session("success") }}');</script>";
                     
                    @endif
                    @if (session('error'))

                    <script>alert('{{ session("error") }}');</script>";

                    @endif
<!-- 轮播图 -->
<div class="">
    <img src="/home/picture/listbj.jpg">
</div>
<!-- 轮播图 -->

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
<!-- 头部	 -->
<div class="xui-content" style="margin: 0 auto;margin-top:30px; font-size: 18px; margin-bottom: 20px; width:80%; ">
    <div class="xui-container" style=" float: left;">
        <ul class="sui-breadcrumb xui-margin-0">
            <li><a href="/" style="color: #fb9966;">首页</a></li>
            <li class="active">{{ $title }}</li>
        </ul>
    </div>

 <!-- 搜索   -->
          <div class="dataTables_filter" id="datatable_filter " style="float:right;">
            <form action="/club">
                <input type="text" aria-controls="datatable" name="search_nname" class="form-control input-large" placeholder="搜索" style="font-size: 16px;outline:none; width: 200px;padding-left: 20px;height: 35px;border-radius: 18px;outline: none; border: 1px solid #ccc;">
            </form>
            
          </div>
 <!-- 搜索   -->
 </div>

<!-- 头部	 -->

<!-- 分类	 -->
<div class="course-nav-row" style=" width: 85%; margin: 0 auto;">
  <span class="hd xui-pull-l">按地区：</span>
  <div class="bd">

    <ul class="box-1" >
            <li class="course-nav-item labels on" data-id="-1">
              <a href="/home/teacher/index" style="background-color: #fb9966;">全部</a>
            </li>
              @foreach ($common_clubsort as $k=>$v)

                  <li class="course-nav-item labels" data-id="19" id="box1_a">
                    <a href="javascript:;" id="box1_a_1">{{ $v->crname }}</a>

                          <ul  class="box-2" >
                           <li class="course-nav-item labels on" data-id="-1" >
                            <a href="javascript:;" style="background-color: #fb9966;">全部</a>
                          </li>
                                @foreach ($v->sub as $kk=>$vv )
                                  <li class="course-nav-item labels" data-id="19" id="box1_b">
                                   <a href="javascript:;" id="box1_b_1">{{ $vv->crname }}</a>
                                     
                                             <ul  class="box-3" style="width: 1200px;">
                                      <form action="/home/club/add" method="get">
                                      {{ csrf_field() }}
                                      <input type="text" value="" name="pid" style="display:none;">
                                              <li class="course-nav-item labels on" data-id="-1">
                                                <a href="javascript:;" style="background-color: #fb9966; margin: 0;">全部</a>
                                              </li>
                                                @foreach ($vv->sub as $kkk=>$vvv)
                                                <button style="border: none;margin-right: -12px;margin-left:-12px;background-color:rgba(0,0,0,0);">
                                                <span style="display:none;">{{ $vvv->id }}</span>
                                                <li class="course-nav-item labels" data-id="19" id="labels_c">
                                                <a id="box1_b_1" href="javascript:;">{{ $vvv->crname }}</a>
                                                </li>
                                                </button>
                                                 @endforeach

                                             </ul>
                                        </form>
                                   </li>
                                  @endforeach  
                            </ul>
                            
                 </li>
           @endforeach
      </ul>

  </div>

</div>
<style>
    
    .course-nav-item a:hover{color:#f85f1c;} 
      .bd{
       
        margin: 0 auto;

      }
      .box-1{
        position: relative;
         margin-bottom: 150px;
      }
      .box-2{
        position: absolute;
        left: 0;
        top:100px;
        display: none;
      }
       .box-3{
        position: absolute;
        left: 0;
        top:70px;
        display: none;
      }
</style>

<script>
  $(function(){

    $('#box1_a').click(function(){
        $('.box-2').css('display','block');
        
        $('#box1_a_1').css('color','#f85f1c');
    }).dblclick(function(){
      $('.box-2').css('display','');
        $('#box1_a_1').css('color','');
    });
    
    $('#box1_b').click(function(){
         $('.box-3').css('display','block');
        $('#box1_b_1').css('color','#f85f1c');
        
    }).dblclick(function(){
      $('.box-3').css('display','');
        $('#box1_b_1').css('color','');

    });
    
   

  });

   $(function(){
        $('.labels_c').mouseover(function(){
            var pid = $(this).children(":first").html();
            console.log(pid);
            $('#letter').attr('value',pid);
        });
    });
 

</script>
<!-- 分类	 -->

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
            <a href="javascript:;" class="sui-text-center xui-pull-l" style="display:inline-block;width:50%;text-align:center;color:#666;cursor:pointer;" data-placement="bottom" data-toggle="tooltip" title="" data-original-title="<img src='/home_club/picture/service2_code.jpg' style='width:180px;'><p class='sui-text-center'>微信号：oops1106</p>">
                <img src="/home_club/picture/service2.jpg" class="xui-img-radius xui-border" style="width:48px;">
                <p class="xui-margin-0 xui-padded-t-5">客服瑶瑶</p>
            </a>
            <a href="javascript:;" class="sui-text-center" style="display:inline-block;width:50%;text-align:center;color:#666;cursor:pointer;" data-placement="bottom" data-toggle="tooltip" title="" data-original-title="<img src='/home_club/picture/service1_code.jpg' style='width:180px;'><p class='sui-text-center'>微信号：YOGA592">
                <img src="/home_club/picture/service1.jpg" class="xui-img-radius xui-border" style="width:48px;">
                <p class="xui-margin-0 xui-padded-t-5">店长乐乐</p>
            </a>
        </div>
    </ul>
    
    <style>
        /* 活动角标 */
        .cornerL {position: absolute;top: 2px;left: 3px;background-size: contain;}
        .cornerR {position: absolute;top: 2px;right: 3px;background-size: contain;}
        .shuang11 {width:76px;height: 24px;background-image: url('/home_club/images/activity11.png');filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(src="//home_club/pc/image/activity11.png",sizingMethod='scale');}
        .shuang12 {width:76px;height: 24px;background-image: url('/home_club/images/activity12.png');filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(src="//home_club/pc/image/activity11.png",sizingMethod='scale');}
        .shuang-egg {width:76px;height: 24px;background-image: url('/home_club/images/db_egg_76_24.png');filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(src="//home_club/pc/image/act/double_egg/egg_zhekou_76_24.png",sizingMethod='scale');}
        .egg-zhekou{width:76px;height: 24px;background-image: url('/home_club/images/egg_zhekou_76_24.png');filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(src="//home_club/pc/image/activity11.png",sizingMethod='scale');}
        .egg-cornerL{width:30px;height: 30px;background-image: url('/home_club/images/egg_cornerl.png');background-repeat: no-repeat; filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(src="//home_club/pc/image/act/double_eggegg_cornerL.png",sizingMethod='scale');}
        .newyear2018 {width:76px;height: 24px;background-image: url('/home_club/images/newyear_76_24.png');background-repeat: no-repeat; filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(src="//home_club/pc/image/act/newyear/small/newyear_76_24.png",sizingMethod='scale');}
        .lijian {width:76px;height: 24px;background-image: url('/home_club/images/corner_01_76_24.png')}
        .miaosha {width:76px;height: 24px;background-image: url('/home_club/images/corner_02_76_24.png')}
        .mansong {width:76px;height: 24px;background-image: url('/home_club/images/corner_03.jpg')}
        .zhekou {width:76px;height: 24px;background-image: url('/home_club/images/corner_04.jpg')}
        .remen {width:44px;height: 24px;background-image: url('/home_club/images/corner_05.jpg')}
        .chaozhi {width:44px;height: 24px;background-image: url('/home_club/images/corner_06.jpg')}
        .tuijian {width:44px;height: 24px;background-image: url('/home_club/images/corner_07.jpg')}
        .zuixin {width:44px;height: 24px;background-image: url('/home_club/images/corner_08.jpg')}
    </style>
    <ul>
        <h3>课堂推荐</h3>
        @foreach ($lesson as $k=>$v)
                    <li>
                <a href="/home/lesson/{{ $v->id }}/edit" target="_blank">
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
    <div class="xui-member-content" style="padding-left:250px;">
        <div class="xui-content xui-list xui-margin-0">
            <div class="xui-content">
                <ul>
                @foreach ($data as $k=>$v)
                         <li id="aaa">
                            <a target="_blank" href="/home/club/{{ $v->cid }}">
                              <div class="tag">
                                <span>{{  $v->pid }}</span></div>
                              <img src="{{ $v->cimg }}" data-src="" onload="loadPic(this)" style="height: 120px; width: 192px;">
                              <h2 class="xui-ellipsis-2 xui-text-center xui-font-size-18">{{ $v->cname }}</h2>
                              <!-- <p class="xui-ellipsis-1 xui-margin-0">馆内名师：焕焕、惠惠、姜璇、李桃、李媛</p> -->
                              <p class="xui-ellipsis-2">{{ $v->caddr }}</p></a>
                          </li>
              @endforeach                             
                </ul>
            </div>
</div>



        </div>
        <style>
            a:focus, a:hover {
                                color: #fb9966;
                            }
            a {
                      color:  #fb9966;
                      text-decoration: none;
                  }
                  #aaa:hover{
                      /*box-shadow: #fb9966 0px 0px 6px 1px inset ;*/
                      /*border: 0px solid #fb9966;*/
                      /*box-shadow: 0 0 10px #f00; border:1px solid green*/
                  }
        </style>

<!--  <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-12">
       {!! $data->appends(['search_nname'=>$data->cname])->render() !!}
        </div>
      </div>
    </div> -->
           
</div>


@endsection
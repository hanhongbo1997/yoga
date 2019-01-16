@extends('home.layout.layout')

@section('content')
<html>
 <head>
  <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests" /> 
  <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" /> 
  <link href="/home/css/sui.css" rel="stylesheet" type="text/css" /> 
  <link href="/home/css/sui-append.css" rel="stylesheet" type="text/css" /> 
  <link href="/home/css/idangerous.swiper.css" rel="stylesheet" type="text/css" /> 
  <link href="/home/css/style.css" rel="stylesheet" type="text/css" /> 
  <script src="/home/js/jquery.min.js" type="text/javascript"></script> 
  <script src="/home/js/sui.min.js" type="text/javascript"></script> 
  <script src="/home/js/idangerous.swiper.min.js" type="text/javascript"></script> 
  <script src="/home/js/require.js" type="text/javascript"></script> 
  <style>
	.nav_head div>span>p.nav_title{font-size: 18px;}
	.nav_head div>span>p.nav_title a {color: #4d4d4d;text-decoration: none;}
</style> 
 </head>
 <body style="min-width:1280px;"> 
  <style type="text/css">
    body{background:#fff;}
    .bg-white-natant{background: #fff;box-shadow: 0 0 6px #dbdbdb;}
    .editdatum {font-size: 18px;font-weight: normal;margin-left: 10px;color: #f90;}
    .editdatum:hover {color: #f60;}
    .editdatum:focus {color: #f90;}

    .article {width:910px;background-color: #fff;border-top: 3px solid rgba(77,192,96,1);}
    .article .article-header {border-bottom:1px solid #f4f4f4;padding:90px 40px 16px;position: relative;}
    .article .article-header>span {background-color:rgba(0,0,0,.5);color:#fff;position:absolute;top:36px;left:40px;padding:4px 10px;}
    .article .article-header>h1{font-size:24px;line-height:34px;margin:0;}
    .article .article-body {padding:0 40px 110px;}
    .article .article-body .article-daodu{background:#f4f4f4;margin-top:30px;padding:10px 14px;border:1px solid #ebebeb;color:#777;line-height:24px;font-size:13px;}
    .article .article-body .article-daodu>span{color:#00b852;display:inline-block;margin-right:5px;font-weight:bold;font-size:14px;}
    .article .article-body .article-content {margin:30px 0 0 0;line-height:30px;}
    .article .article-body .article-content .article-content-txt {position: relative;min-height: 420px;}
    .article .article-body .article-content .article-content-txt p {margin:6px 0;font-size:15px;line-height:150%;}
    .article .article-body .article-content .article-content-about p {margin:0;line-height:30px;}
    .article .article-body .article-content .article-content-img{text-align: center;margin:42px 0;}
    .article .article-body .article-content .article-content-statement{border:1px solid #ebebeb;background:#f4f4f4;color:#666;margin-top:42px;line-height:24px;padding:5px 10px;font-size:12px;}

    .article .article-paging {margin: 60px 0 36px;}
    .article .article-paging>ul>li {display: inline-block;background-color: #f4f4f4;font-size:12px;color:#414141;border:none;margin:0 5px;}
    .article .article-paging>ul>li a {height: 30px;line-height: 30px;padding:0 9px;border:none;}
    .article .article-paging>ul>li>span {height: 30px;background-color: #f4f4f4;font-size:12px;line-height: 30px;padding:0 22px;color:#414141;border:none;}
    .article-paging.sui-pagination ul>li>a:hover,.article-paging.sui-pagination ul>li>a:focus {background-color: #22cd6e;}

    .article .tuijian {margin-top: 50px;}
    .article .tuijian>h3 {font-size:18px; margin:0 0 5px 0;line-height: 30px;}
    .article .tuijian>ul>li {padding:0 5px;box-sizing:border-box;}
    .article .tuijian>ul>li>a {color:#414141;}
    .article .tuijian>ul>li>a p {height: 40px;line-height: 20px;}
    .article .tuijian>ul>li>a:hover {color:rgba(77,192,96,1);}
   
    .master{width: 100%;border-top:3px solid rgba(77,192,96,1);background-color: #fff;}
    .master .master-header{overflow: hidden; height: 57px;line-height: 57px;padding:0 20px;margin-bottom: 20px;}
    .master .master-header h3{line-height: 57px;margin:0;font-size:18px;}
    .master .master-header a{color:#bfbfbf;line-height:57px;}
    .master .master-content {padding: 0 15px 30px;}
    .master .master-content>ul>li {padding: 20px 0;display: block;color:#414141;}
    .master .master-content>ul>li:hover {background-color: #f4f4f4;}
    .master .master-content>ul>li .master-content-img{width: 60px;height: 60px;padding: 0 15px;}
    .master .master-content>ul>li .master-content-img img{border-radius:50%;}
    .master .master-content>ul>li .master-content-txt>h3 {margin: 0;display: inline-block;font-size:14px;line-height: 14px;}
    .master .master-content>ul>li .master-content-txt>h3 a{color:#414141;}
    .master .master-content>ul>li .master-content-txt>h3 a:hover{color:rgba(77,192,96,1);}
    .master .master-content>ul>li .master-content-txt>span {color:#999;margin-left:15px;font-size:12px;}
    .master .master-content>ul>li .master-content-txt>p {margin:5px 0 0 0;color:#999;}
</style> 
  <br /> 
  <br /> 
  <br /> 
  <br /> 
  <br /> 
  <br /> 
  <br /> 
  <br /> 
  <div class="xui-content"> 
   <div class="xui-container xui-padded-10"> 
    <ul class="sui-breadcrumb xui-margin-0"> 
     <li><a href="/index.html">首页</a></li> 
     <li><a href="/news">资讯</a></li> 
     <li class="active">行业快报</li> 
    </ul> 
   </div> 
  </div> 
  <div class="xui-content"> 
   <div class="xui-container"> 
    <div class="xui-pull-l article bg-white-natant"> 
     <div class="article-header"> 
      <span>行业快报</span> 
      <h1>{{$data->nname}}</h1> 
      <div class="xui-content xui-margin-t-15 xui-text-center xui-text-gary xui-font-size-12"> 
       <div class="xui-pull-l"> 
        <span class="xui-font-size-16" style="padding: 2px 10px;border: 1px solid #999;border-radius: 0.2rem;"> 原创 </span> 
       </div> 
       <span>{{$data->created_at}}</span> 
       <div class="xui-pull-r">
         阅读
        <span class="xui-text-green">3162</span>次 
       </div> 
      </div> 
     </div> 
     <div class="article-body"> 
      <div class="article-daodu"> 
       <span>导读:</span>{{$data->abs}} 
      </div> 
      <div class="article-content"> 
       <div class="article-content-txt"> 
        <p style="text-align: center;">{!! $data->newinfo->ncontent !!}</p> 
        <p style="text-align: center;">【瑜伽时光】欢迎伽人投稿，让我们一起找出最美瑜伽人。有机会入选发布的伽人还将刊登在相关杂志的封面、其他广告等。</p> 
        <p style="text-align: center;"><span style="font-size:10px;">发布人：{{$data->nuser}}</span></p> 
        <p style="text-align: center;"> </p>
       </div> 
       <div style="margin: 10px;"> 
        <div class="article-content-statement">
         • 原创声明：本文为原创文章，转载需获得XX官方授权并注明来源于XX网（www.XXXX.com），一切未经授权或未标明出处的行为一律视为侵权，我们将追究法律责任！ 
        </div> 
       </div> 
      </div> 
      <!--评论--> 
      <div class="xui-content xui-padded-15"> 
       <!--评论模块--> 
       <div class="video-cont-list xui-margin-t-15"> 
        <h3 class="video-cont-list-title">评论</h3> 
        <div id="discuss" class="xui-discuss xui-margin-t-10"> 
         <div class="discuss-cont"> 
          <span class="discuss-img"> <img src="picture/user_moren.png" /> </span> 
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
          <p class="discuss-sort xui-margin-b-10"> <a href="javascript:;" id="orderSup" class="on">默认排序</a> <a href="javascript:;" id="orderTim">时间排序</a> </p> 
          <div id="discuss-list"> 
          </div> 
         </div> 
         <div id="loading-more" class="sui-btn btn-xlarge" style="display:table;margin:20px auto;">
          加载更多 
          <i class="sui-icon icon-angle-right"></i>
         </div> 
        </div> 
       </div> 
      </div> 
     </div> 
    </div> 
    <div class="xui-pull-r" style="width:300px;"> 
     <!--相关名师--> 
     <div class="master bg-white-natant"> 
      <div class="master-header xui-border-b"> 
       <h3 class="xui-pull-l">相关名师</h3> 
       <a class="xui-pull-r" href="/home/teacher/index">查看更多</a> 
      </div> 
      <div class="master-content"> 
       <ul>
       @foreach($teacher as $k=>$v) 
        <li> <a href="/home/teacher/show/{{ $v->tid }}" class="xui-pull-l master-content-img" target="_blank"> <img src="{{$v->teachinfoend->timg}}" onload="loadPic(this)" style="width: 30px;height: 30px;" /> </a> 
         <div class="master-content-txt"> 
          <h3><a href="/home/teacher/show/{{ $v->tid }}">{{$v->tname}}</a></h3> 
          <span>{{$v->adept}}</span> 
          <p class="xui-ellipsis-2">{{$v->intor}}</p> 
         </div> 
       </li> 
       @endforeach
       </ul> 
      </div> 
     </div> 
     <!--热门视频--> 
     <br>
     <br>
     <br>
     <div class="master bg-white-natant">
            <div class="master-header xui-border-b">
                <h3 class="xui-pull-l">热门视频</h3>
                <a class="xui-pull-r" href="/home/video">查看更多 &gt;</a>
            </div>
            <div style="clear: both;"></div>
            <div class="hotVideo-content">
                <ul class="xui-row">
                  @foreach($video as $k=>$v)
                    <li class="xui-col-xs-6" style="margin: 10px;float: left;width: 120px;height:174px;">
                        <div>
                            <a href="/home/video/{{ $v->id }}/edit" target="_blank">
                                <img src="/uploads/{{ $v->img }}" style="width: 120px; height: 76px;" alt="" onload="loadPic(this)" data-src="">
                            </a>
                        </div>
                        <h3>
                            <a class="xui-ellipsis-2" href="/home/video/{{ $v->id }}/edit" target="_blank" style="font-size: 16px;">{{$v->vname }}</a>
                        </h3>
                        <div class="xui-font-size-12" style="color:#bfbfbf;">播放: <span>100787</span>次</div>
                    </li>
                    @endforeach    
                </ul>
                </div>
            </div>
     </div>  
    </div>
   </div>
  </div>
 </body>


@endsection
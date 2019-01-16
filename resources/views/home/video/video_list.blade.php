@extends('home.layout.layout')

@section('content')
<input id="checkLesson" value="1" type="hidden"/>
<div class="banner">
    <img src="/home/picture/listbj.jpg" alt="" style="height: 420px" />
</div>
<div class="bread" style="width:52.8rem;background: #f9f9f9">
    <a href="http://wakeyoga.com/" title="">首页</a><span>|</span>
    <a href="http://wakeyoga.com/2lessons/a1z2/" title="">瑜伽视频</a>
</div>
<form id="myForm">
    <div class="chooseLike">
        <div class="content2" style="margin:1rem auto;">
            <div class="chooseTj">
                <ul>
                    @foreach($common_video as $k=>$v)
                    <li class="oh all choose3 choose4 choose6">
                        <em class="fl">{{$v->vsname}}</em>
                            @foreach($v->sub as $kk=>$vv)
                            <a href="javascript:;" title="" class="fl zifei1" onclick="chooseType2('zifei1',this)">
                                <input type="radio" name="ifree" value="1"/>{{$vv->vsname}}</a>
                            @endforeach
                    </li>
                    @endforeach
                </ul>
                <!--已选条件-->
            </div>
        </div>
    </div>
</form>
<div class="content2" style="margin:1rem auto;">
        <ul class="courseList" id="initData" style="display: block">
            @foreach($data as $k=>$v)
                    <li class="fl">
                        <dl>
                            <a href="video/{{ $v->id }}/edit">
                                
                                <dt>
                                    <img src="/uploads/{{ $v->img }}" alt="{{ $v->vname }}"/>
                                </dt>
                                <dd class="courseName">
                                    <div class="fireCourse oh">
                                        <var class="fl">{{ $v->vname }}</var>
                                        
                                    </div>
                                </dd>
                            </a>
                            </a>
                        </dl>
                    </li>
            @endforeach

            <div class="clear">&nbsp;</div>
        </ul>
        <div id="result"></div>
        <textarea id="template" class="template" style="display: none">
            <ul class="courseList">{#foreach $T as record}
                <li class="fl">
                    <dl>
                        <a href="javascript:;" title="" onclick="getDetails('1','{$T.record.id}')">
                            <dt>
                                <img src="/home/picture/{$t.record.lesson_big_url}" alt="{$T.record.lesson_name}"/>
                            </dt>
                            <dd class="courseName">
                                <div class="fireCourse oh">
                                    <var class="fl">{$T.record.lesson_name}</var>
                                    {#if $T.record.lesson_is_hot ==2}<img src="/home/picture/fire.png" alt=""
                                                                          class="fl"/>{#/if}
                                </div>
                                <div class="seeNum">
                                    <i><img src="/home/picture/see.png" alt=""/>{$T.record.lesson_participate_amount}</i>
                                    &nbsp;&nbsp;&nbsp;
                                    <i class="fireTime"><img src="/home/picture/time.png" alt=""/>{formatSeconds($T.record.lesson_time_amount)}</i>
                                </div>
                                <div class="yellow_blue">
                                    {#if $T.record.isNew ==1}<img src="/home/picture/new.png" alt=""
                                                                  class="blueNew">{#/if}
                                    {#if $T.record.lesson_sale_price >0}<img src="/home/picture/vip.png" alt=""
                                                                             class="yellowVip">{#/if}
                                </div>
                            </dd>
                        </a>
                    </dl>
                </li>
                {#/for}
                <div class="clear">&nbsp;</div>
            </ul>
            </textarea>
          <textarea id="tinkLesson" class="template" style="display: none">
            <ul class="courseList">{#foreach $T as record}
                <li class="fl">
                    <dl>
                        <a href="javascript:;" title="" onclick="getDetails('2','{$T.record.id}')">
                            <dt>
                                <img src="/home/picture/{$t.record.lesson_big_url}" alt="{$T.record.lesson_name}"/>
                            </dt>
                            <dd class="courseName">
                                <div class="fireCourse oh">
                                    <var class="fl">{$T.record.lesson_name}</var>
                                    {#if $T.record.lesson_is_hot ==2}<img src="/home/picture/fire.png" alt=""
                                                                          class="fl"/>{#/if}
                                </div>
                                <div class="seeNum">
                                    <i><img src="/home/picture/see.png" alt=""/>{$T.record.lesson_participate_amount}</i>
                                    &nbsp;&nbsp;&nbsp;
                                    <i class="fireTime"><img src="/home/picture/jie.png"
                                                             alt=""/>{$T.record.lesson_cls_amount}节</i>
                                    
                                </div>
                                <div class="yellow_blue">
                                    {#if $T.record.isNew ==1}<img src="/home/picture/new.png" alt=""
                                                                  class="blueNew">{#/if}
                                    {#if $T.record.lesson_sale_price >0}<img src="/home/picture/vip.png" alt=""
                                                                             class="yellowVip">{#/if}
                                </div>
                            </dd>
                        </a>
                    </dl>
                </li>
                {#/for}
                <div class="clear">&nbsp;</div>
            </ul>
            </textarea>
        <textarea id="teacherLesson" class="template" style="display: none">
            <ul class="courseList">{#foreach $T as record}
                <li class="fl">
                    <dl>
                        <a href="javascript:;" title="" onclick="getDetails('3','{$T.record.id}')">
                            <dt>
                                <img src="/home/picture/{$t.record.lesson_big_url}" alt="{$T.record.lesson_name}"/>
                            </dt>
                            <dd class="courseName">
                                <div class="fireCourse oh">
                                    <var class="fl">{$T.record.lesson_name}</var>
                                    {#if $T.record.lesson_is_hot ==2}<img src="/home/picture/fire.png" alt=""
                                                                          class="fl"/>{#/if}
                                </div>
                                <div class="seeNum">
                                    <i><img src="/home/picture/see.png" alt=""/>{$T.record.lesson_participate_amount}</i>
                                    &nbsp;&nbsp;&nbsp;
                                    <i class="fireTime"><img src="/home/picture/jie.png"
                                                             alt=""/>{$T.record.lesson_cls_amount}节</i>
                                </div>
                                <div class="yellow_blue">
                                    {#if $T.record.isNew ==1}<img src="/home/picture/new.png" alt=""
                                                                  class="blueNew">{#/if}
                                    {#if $T.record.lesson_sale_price >0}<img src="/home/picture/vip.png" alt=""
                                                                             class="yellowVip">{#/if}
                                </div>
                            </dd>
                        </a>
                    </dl>
                </li>
                {#/for}
                <div class="clear">&nbsp;</div>
            </ul>
            </textarea>
        <textarea id="plan" class="template" style="display: none">
            <ul class="courseList">{#foreach $T as record}
                <li class="fl">
                    <dl>
                        <a href="javascript:;" title="" onclick="getDetails('4','{$T.record.id}')">
                            <dt>
                                <img src="/home/picture/{$t.record.lesson_big_url}" alt="{$T.record.lesson_name}"/>
                            </dt>
                            <dd class="courseName">
                                <div class="fireCourse oh">
                                    <var class="fl">{$T.record.lesson_name}</var>
                                    {#if $T.record.lesson_is_hot ==2}<img src="/home/picture/fire.png" alt=""
                                                                          class="fl"/>{#/if}
                                </div>
                                <div class="seeNum">
                                    <i><img src="/home/picture/see.png" alt=""/>{$T.record.lesson_participate_amount}</i>
                                    &nbsp;&nbsp;&nbsp;
                                    <i class="fireTime"><img src="/home/picture/jie.png"
                                                             alt=""/>{$T.record.lesson_cls_amount}节</i>
                                </div>
                                <div class="yellow_blue">
                                    {#if $T.record.isNew ==1}<img src="/home/picture/new.png" alt=""
                                                                  class="blueNew">{#/if}
                                    {#if $T.record.lesson_sale_price >0}<img src="/home/picture/vip.png" alt=""
                                                                             class="yellowVip">{#/if}
                                </div>
                            </dd>
                        </a>
                    </dl>
                </li>
                {#/for}
                <div class="clear">&nbsp;</div>
            </ul>
            </textarea>
        <textarea id="liveData" class="template" style="display: none">
            <ul class="courseList">{#foreach $T as record}
                <li class="fl">
                    <dl>
                        <a href="javascript:;" title="" onclick="getDetails('5','{$T.record.id}')">
                            <dt>
                                <img src="/home/picture/{$t.record.live2_detail_top_pic_url}" alt="{$T.record.live2_title}"/>
                            </dt>
                            <dd class="courseName">
                                <div class="fireCourse oh">
                                    <var class="fl">{$T.record.live2_title}</var>
                                    {#if $T.record.live2_is_hot ==2}<img src="/home/picture/fire.png" alt=""
                                                                         class="fl"/>{#/if}
                                </div>
                                <div class="seeNum">
                                    <i><img src="/home/picture/see.png" alt=""/>{$T.record.live2_watching_amount}</i>
                                    &nbsp;&nbsp;&nbsp;
                                </div>
                                <div class="yellow_blue">
                                    {#if $T.record.isNew ==1}<img src="/home/picture/new.png" alt=""
                                                                  class="blueNew">{#/if}
                                    {#if $T.record.live2_sale_price >0}<img src="/home/picture/vip.png" alt=""
                                                                            class="yellowVip">{#/if}
                                </div>
                            </dd>
                        </a>
                    </dl>
                </li>
                {#/for}
                <div class="clear">&nbsp;</div>
            </ul>
            </textarea>
         <textarea id="asanasList" class="template" style="display: none">
             <ul class="courseList">{#foreach $T as record}
                 <li class="fl">
                     <dl>
                         <a href="javascript:;" title="" onclick="getDetails('6','{$T.record.id}')">
                             <dt>
                                 <img src="/home/picture/{$t.record.asanas_detail_pic_url}" alt="{$T.record.asanas_name}"/>
                             </dt>
                             <dd class="courseName">
                                 <div class="fireCourse oh">
                                     <var class="fl">{$T.record.asanas_name}</var>
                                 </div>
                             </dd>
                         </a>
                     </dl>
                 </li>
                 {#/for}
                 <div class="clear">&nbsp;</div>
             </ul>
             </textarea>
        <!--分页-->
        <!--currentpage="1" numbercount="100"-->
        <div class="pageOut" style="display: block">
            <ul class="page" maxshowpageitem="5" pagelistcount="24" id="page1"></ul>
        </div>
        <input id="count" type="hidden" value="58"/>
    </div>
    <!--课程介绍-->
    <div class="introduceCourse">
        Wake视频教学课程均由国内外资深瑜伽名师编排录制，保证教学的实用性和专业性，再通过视频 团队重重把关，为你制作高质量、高水准的视频课件。另外，课程不断更新，满足你的更多需求。<br/>
        你想要的瑜伽课程，这里都有！
    </div>
</div>
<!--底部-->
@endsection
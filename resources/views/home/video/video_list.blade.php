@extends('home.layout.layout')

@section('content')
<input id="checkLesson" value="1" type="hidden"/>
<div class="banner">
    <img src="/home/picture/listbj.jpg" alt="" style="height: 420px" />
</div>
<div class="bread" style="width:52.8rem">
    <a href="http://wakeyoga.com/" title="">首页</a><span>|</span>
    <a href="http://wakeyoga.com/2lessons/a1z2/" title="">瑜伽课程</a>
</div>
<form id="myForm">
    <div class="chooseLike">
        <div class="content2" style="margin:1rem auto;">
            <div class="hotChoose">
                <ul>
                    <input type="hidden" id="page" name="page" value="1"/>
                    <li class="fasten">
                        <a href="http://wakeyoga.com/2lessons/a1z2/" title="" class="fl leixing hotLike1" id="baseLesson"
                           onclick="chooseType1('leixing',this)"><input name="lesson" type="radio" value="1" checked/>练基础</a>
                        <a href="http://wakeyoga.com/2lessons/a2z2/" title="" class="fl leixing hotLike2" id="meditation"
                           onclick="chooseType1('leixing',this)"><input name="lesson" type="radio" value="2"/>去冥想</a>
                        <a href="http://wakeyoga.com/2lessons/a3z2/" title="" class="fl leixing hotLike3" id="master"
                           onclick="chooseType1('leixing',this)"><input name="lesson" type="radio" value="3"/>跟名师</a>
                        <a href="http://wakeyoga.com/2lessons/a4z2/" title="" class="fl leixing hotLike4" id="plans"
                           onclick="chooseType1('leixing',this)"><input name="lesson" type="radio" value="4"/>定计划</a>
                        <a href="http://wakeyoga.com/2lessons/a5z2/" title="" class="fl leixing hotLike5" id="live"
                           onclick="chooseType1('leixing',this)"><input name="lesson" type="radio" value="5"/>直播课堂</a>
                        <a href="http://wakeyoga.com/2lessons/a6z2/" title="" class="fl leixing hotLike6" id="style"
                           onclick="chooseType1('leixing',this)"><input name="lesson" type="radio" value="6"/>体式库</a>
                        <div class="clear">&nbsp;</div>
                    </li>
                </ul>
            </div>
            <div class="chooseTj">
                <span id="point" class="point1"></span>
                <ul>
                    <li class="oh all choose3 choose4 choose6">
                        <em class="fl">资费:</em>
                        
                            <a href="javascript:;" title="" class="fl zifei1" onclick="chooseType2('zifei1',this)">
                                <input type="radio" name="ifree" value="1"/>免费</a>
                            <a href="javascript:;" title="" class="fl zifei1" onclick="chooseType2('zifei1',this)">
                                <input type="radio" name="ifree" value="2"/> 付费</a>
                    </li>
                    <li class="oh all choose1 choose6">
                        <em class="fl">流派:</em>
                        
                            <a href="javascript:;" title="" class="fl liupai1"
                                            onclick="chooseType2('liupai1',this)">
                                <input type="radio" name="lsstgovvi" value="1"/>阿斯汤加
                            </a>
                            <a href="javascript:;" title="" class="fl liupai1"
                                            onclick="chooseType2('liupai1',this)">
                                <input type="radio" name="lsstgovvi" value="2"/>哈他瑜伽
                            </a>
                            <a href="javascript:;" title="" class="fl liupai1"
                                            onclick="chooseType2('liupai1',this)">
                                <input type="radio" name="lsstgovvi" value="3"/>流瑜伽
                            </a>
                            <a href="javascript:;" title="" class="fl liupai1"
                                            onclick="chooseType2('liupai1',this)">
                                <input type="radio" name="lsstgovvi" value="4"/>阴瑜伽
                            </a>
                            <a href="javascript:;" title="" class="fl liupai1"
                                            onclick="chooseType2('liupai1',this)">
                                <input type="radio" name="lsstgovvi" value="5"/>艾扬格
                            </a>
                            <a href="javascript:;" title="" class="fl liupai1"
                                            onclick="chooseType2('liupai1',this)">
                                <input type="radio" name="lsstgovvi" value="6"/>普拉提
                            </a>
                            <a href="javascript:;" title="" class="fl liupai1"
                                            onclick="chooseType2('liupai1',this)">
                                <input type="radio" name="lsstgovvi" value="7"/>现代流行派系
                            </a>
                            <a href="javascript:;" title="" class="fl liupai1"
                                            onclick="chooseType2('liupai1',this)">
                                <input type="radio" name="lsstgovvi" value="8"/>独创派系
                            </a>
                    </li>
                    <li class="oh all choose1 choose2 choose3 choose6">
                        <em class="fl">功效:</em>
                        
                            <a href="javascript:;" title="" class="fl gongxiao1"
                               onclick="chooseType2('gongxiao1',this)">
                                <input type="radio" name="lsstgeffecti" value="1"/>理疗
                            </a>
                            <a href="javascript:;" title="" class="fl gongxiao1"
                               onclick="chooseType2('gongxiao1',this)">
                                <input type="radio" name="lsstgeffecti" value="2"/>塑形
                            </a>
                            <a href="javascript:;" title="" class="fl gongxiao1"
                               onclick="chooseType2('gongxiao1',this)">
                                <input type="radio" name="lsstgeffecti" value="3"/>减压
                            </a>
                            <a href="javascript:;" title="" class="fl gongxiao1"
                               onclick="chooseType2('gongxiao1',this)">
                                <input type="radio" name="lsstgeffecti" value="4"/>食疗
                            </a>
                    </li>
                    <li class="oh all choose1 choose2 choose3 choose6">
                        <em class="fl">部位:</em>
                        
                            <a href="javascript:;" title="" class="fl buwei1" onclick="chooseType2('buwei1',this)">
                                <input name="lsstgaimati" type="radio" value="1"/>全身
                            </a>
                            <a href="javascript:;" title="" class="fl buwei1" onclick="chooseType2('buwei1',this)">
                                <input name="lsstgaimati" type="radio" value="2"/>肩颈
                            </a>
                            <a href="javascript:;" title="" class="fl buwei1" onclick="chooseType2('buwei1',this)">
                                <input name="lsstgaimati" type="radio" value="3"/>胸部
                            </a>
                            <a href="javascript:;" title="" class="fl buwei1" onclick="chooseType2('buwei1',this)">
                                <input name="lsstgaimati" type="radio" value="4"/>背部
                            </a>
                            <a href="javascript:;" title="" class="fl buwei1" onclick="chooseType2('buwei1',this)">
                                <input name="lsstgaimati" type="radio" value="5"/>腰腹
                            </a>
                            <a href="javascript:;" title="" class="fl buwei1" onclick="chooseType2('buwei1',this)">
                                <input name="lsstgaimati" type="radio" value="6"/>手臂
                            </a>
                            <a href="javascript:;" title="" class="fl buwei1" onclick="chooseType2('buwei1',this)">
                                <input name="lsstgaimati" type="radio" value="7"/>腿部
                            </a>
                            <a href="javascript:;" title="" class="fl buwei1" onclick="chooseType2('buwei1',this)">
                                <input name="lsstgaimati" type="radio" value="8"/>臀部
                            </a>
                            <a href="javascript:;" title="" class="fl buwei1" onclick="chooseType2('buwei1',this)">
                                <input name="lsstgaimati" type="radio" value="9"/>经络
                            </a>
                            <a href="javascript:;" title="" class="fl buwei1" onclick="chooseType2('buwei1',this)">
                                <input name="lsstgaimati" type="radio" value="10"/>呼吸
                            </a>
                            <a href="javascript:;" title="" class="fl buwei1" onclick="chooseType2('buwei1',this)">
                                <input name="lsstgaimati" type="radio" value="12"/>膝关节
                            </a>
                            <a href="javascript:;" title="" class="fl buwei1" onclick="chooseType2('buwei1',this)">
                                <input name="lsstgaimati" type="radio" value="13"/>髋关节
                            </a>
                            <a href="javascript:;" title="" class="fl buwei1" onclick="chooseType2('buwei1',this)">
                                <input name="lsstgaimati" type="radio" value="14"/>腕关节
                            </a>
                            <a href="javascript:;" title="" class="fl buwei1" onclick="chooseType2('buwei1',this)">
                                <input name="lsstgaimati" type="radio" value="15"/>脊椎/腰椎
                            </a>
                            <a href="javascript:;" title="" class="fl buwei1" onclick="chooseType2('buwei1',this)">
                                <input name="lsstgaimati" type="radio" value="16"/>肠胃
                            </a>
                            <a href="javascript:;" title="" class="fl buwei1" onclick="chooseType2('buwei1',this)">
                                <input name="lsstgaimati" type="radio" value="17"/>心肺
                            </a>
                            <a href="javascript:;" title="" class="fl buwei1" onclick="chooseType2('buwei1',this)">
                                <input name="lsstgaimati" type="radio" value="18"/>腺体
                            </a>
                            <a href="javascript:;" title="" class="fl buwei1" onclick="chooseType2('buwei1',this)">
                                <input name="lsstgaimati" type="radio" value="19"/>子宫/痛经
                            </a>
                            <a href="javascript:;" title="" class="fl buwei1" onclick="chooseType2('buwei1',this)">
                                <input name="lsstgaimati" type="radio" value="20"/>失眠
                            </a>
                            <a href="javascript:;" title="" class="fl buwei1" onclick="chooseType2('buwei1',this)">
                                <input name="lsstgaimati" type="radio" value="21"/>压力
                            </a>
                            <a href="javascript:;" title="" class="fl buwei1" onclick="chooseType2('buwei1',this)">
                                <input name="lsstgaimati" type="radio" value="22"/>疼痛
                            </a>
                            <a href="javascript:;" title="" class="fl buwei1" onclick="chooseType2('buwei1',this)">
                                <input name="lsstgaimati" type="radio" value="23"/>焦虑烦躁
                            </a>
                            <a href="javascript:;" title="" class="fl buwei1" onclick="chooseType2('buwei1',this)">
                                <input name="lsstgaimati" type="radio" value="24"/>专注力
                            </a>
                            <a href="javascript:;" title="" class="fl buwei1" onclick="chooseType2('buwei1',this)">
                                <input name="lsstgaimati" type="radio" value="25"/>禅坐
                            </a>
                            <a href="javascript:;" title="" class="fl buwei1" onclick="chooseType2('buwei1',this)">
                                <input name="lsstgaimati" type="radio" value="26"/>亲子
                            </a>
                            <a href="javascript:;" title="" class="fl buwei1" onclick="chooseType2('buwei1',this)">
                                <input name="lsstgaimati" type="radio" value="27"/>双人
                            </a>
                            <a href="javascript:;" title="" class="fl buwei1" onclick="chooseType2('buwei1',this)">
                                <input name="lsstgaimati" type="radio" value="28"/>拉伸
                            </a>
                            <a href="javascript:;" title="" class="fl buwei1" onclick="chooseType2('buwei1',this)">
                                <input name="lsstgaimati" type="radio" value="29"/>内在循环
                            </a>
                            <a href="javascript:;" title="" class="fl buwei1" onclick="chooseType2('buwei1',this)">
                                <input name="lsstgaimati" type="radio" value="30"/>面部
                            </a>
                    </li>
                   
               

                </ul>
                <!--已选条件-->
                <div class="oh userChoose">
                    <em class="fl">已选条件:</em>
                    
                </div>
            </div>
        </div>
    </div>
    <div class="sortArea" style="
    
    
    display: block;">
        <em>排序：</em>
        <span onclick="getData()" name="sort" id="reduSort"><i class="cur"> <input type="radio" value="3"
                                                                                   name="baseSort"
                                                                                   checked/></i>最新</span>
        <span onclick="getData()" name="sort"><i><input type="radio" value="1" name="baseSort"/></i>热门</span>
        <span onclick="getData()" name="sort"><i><input type="radio" value="2" name="baseSort"/></i>好评</span>
    </div>
</form>
<div class="content2" style="margin:1rem auto;">
    <!--排序-->

    <div class="alltypeCourse">
        <!--正在加载-->
        <div class="loadSign tc">
            <dl>
                <dt><img src="/home/picture/loadsign.gif"/></dt>
                <dd class="refresh_word">
                    正在努力加载...
                </dd>
            </dl>
        </div>
        <!--查找失败-->
        <div class="refresh tc" style="display: none" id="isNull">
            <dl>
                <dt><img src="/home/picture/sad.png"/></dt>
                <dd class="refresh_word"> 暂无对应的筛选结果，请尝试其他类型</dd>
            </dl>
        </div>
        <!--查找失败-->
        <div class="refresh tc" id="isError" style="display: none">
            <dl>
                <dt><img src="/home/picture/sad.png"/></dt>
                <dd class="refresh_word">查找请求失败，请刷新一下吧</dd>
                <dd class="refresh_btn"><a href="javascript:;" onclick="getData()">点我刷新</a></dd>
            </dl>
        </div>
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
                                    <div class="seeNum">
                                        <i><img src="/home/picture/see.png"
                                                alt=""/>{{ $v->status }}</i>
                                        &nbsp;&nbsp;&nbsp;
                                        <i class="fireTime"><img src="/home/picture/time.png" alt=""/>{{ $v->cost }}</i>
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
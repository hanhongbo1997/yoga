@extends('home.layout.layout')

@section('content')
                   @if (session('success'))
                    <script>alert('{{ session("success") }}');</script>";
                     
                    @endif
                    @if (session('error'))

                    <script>alert('{{ session("error") }}');</script>";

                    @endif
<link rel="stylesheet" type="text/css" href="/home/css/yoga_new.css">
<div class="bussManner">
	<div class="company_topic">Wake企业瑜伽培训是国内为企业提供瑜伽服务的专业机构。服务城市包括：北京、上海、广州、深圳、杭州、南京、武汉等。<br/>
我们可提供办公室瑜伽、传统瑜伽、双人瑜伽、户外瑜伽、力量瑜伽、塑形瑜伽、亲子瑜伽、理疗瑜伽、太极瑜伽、禅坐瑜伽等。<br/>
企业只需花1个小时即可使他们享受瑜伽带来的身、心、灵的平静与放松。</div>
</div>
<div class="bussInner">
    <div class="busiTitle">我们的课程</div>
    <div class="oh busiContent">
        <div class="fl"><img src="/home/picture/busileft.png"/></div>
        <div class="fr">
        	<dl class="oh">
	          <dt class="fl"><img src="/home/picture/busiright1.png"/></dt>
	          <dd class="office_dd1">办公室瑜伽垫瑜伽</dd>
	          <dd class="office_dd2">任何一块空地，有瑜伽垫就可以习练。帮助企业在瑜伽中传递企业关
	怀，提升员工忠诚度。每节课时间45~60分钟。</dd>
	        </dl>
	        <dl class="oh">
	          <dt class="fl"><img src="/home/picture/busiright1.png"/></dt>
	          <dd class="office_dd1">办公室办公椅瑜伽</dd>
	          <dd class="office_dd2">在职场工位练习，方便全员参与。帮助企业增强团队凝聚力，在办公
	室环境中快速达到放松状态。每节课时间20~30 分钟。</dd>
	        </dl>
	        <dl class="oh">
	          <dt class="fl"><img src="/home/picture/busiright1.png"/></dt>
	          <dd class="office_dd1">私人订制瑜伽</dd>
	          <dd class="office_dd2">系统、全面和精准地个性化服务，为你量身定制有效的高质量课程，帮你快速安全的实现你的目标。</dd>
	        </dl>
        </div>
    </div>
    <div class="busiTitle" style="margin-top: 70px;">我们的优势</div>
    <div class="wake_advantage">
      <table cellpadding="0" cellspacing="0">
        <tr class="advantage_type">
          <td class="advantage_td1"></td><td>Wake</td><td>其他</td>
        </tr>
        <tr><td rowspan="3" class="advantage_td1">课程</td><td>系统性</td><td>随机性</td></tr>
        <tr><td>个性化定制</td><td>大众性</td></tr>
        <tr><td>办公室瑜伽、瑜伽活动、瑜伽讲座</td><td>单一性</td></tr>
        <tr class="advantage_type"><td rowspan="3" class="advantage_td1">师资</td><td>Wake平台签约瑜伽老师</td><td>个体户瑜伽老师</td></tr>
        <tr><td>Wake统一考核评定</td><td>水平参差不齐</td></tr>
        <tr><td>全国2000多位瑜伽老师</td><td>老师人数有限</td></tr>
        <tr class="advantage_type"><td rowspan="4" class="advantage_td1">服务</td><td>多样性增值服务</td><td>无增值服务</td></tr>
        <tr><td>Wake 客户端随时随地练瑜伽</td><td>无线上服务</td></tr>
        <tr><td>专业售后服务人员跟踪回访</td><td>无售后保障</td></tr>
        <tr><td>签署服务合同，开具正规发票</td><td>无合同无发票</td></tr>
      </table>
    </div>
    <!-- <div class="busiTitle">我们的客户</div> -->
</div>
<!-- <div class="ourParner">
    <div class="parnerCon oh">
        <div class="fl leftParner" style="visibility: hidden"><img
                src="/home/picture/leftparner.png"/></div>
        <div class="parnerLogo fl">
            <ul class="oh">
                <li class="fl"><img src="/home/picture/parnerlogo1.png"/></li>
                <li class="fl"><img src="/home/picture/parnerlogo2.png"/></li>
                <li class="fl"><img src="/home/picture/parnerlogo3.png"/></li>
            </ul>
        </div>
        <div class="fl rightParner"><img src="/home/picture/rightparner.png"/></div>
    </div>
</div> -->
<div class="bussInner">

    <div class="busiTitle">来报名吧</div>
    <form id="myForm" action="/home/enroll" method="post">
    {{ csrf_field() }}
        <ul class="attendUl">
            <li>
                <input type="text" id="conpanyName" name="cname" value="" placeholder="公司/单位名称" autocomplete="off">
            </li>
            <li>
                <input type="text" id="contactName" name="name" value="" autocomplete="off" placeholder="姓名">
            </li>

            <li>
                <input type="text" id="contactWay" name="phone" value="" placeholder="联系方式" autocomplete="off">
            </li>
            <li>
                <input type="text" id="companyAddress" name="caddress" value="" placeholder="公司/单位地址" autocomplete="off">
            </li>
        </ul>

        <div class="submitName">
            <input type="submit" id="submitForm" value="提交">
        </div>
    </form>

</div>
<div class="busiTitle">高颜值高水准瑜伽教练</div>
<div class="niceTeach">
    <img src="/home/picture/nice.png"/>
</div>

@endsection
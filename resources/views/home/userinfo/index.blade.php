@extends('home.userinfo.layout')

@section('contents')
<div class="xui-member-content" style="padding-left:260px;">
    <div class="xui-content xui-margin-b-15" style="line-height:30px;">
        <div class="span7">
            <h3 class="xui-margin-0">我的信息</h3>
        </div>
    </div>
    <form class="form-inline sui-form" action="/pc/member/userSave/.html" method="post">
        <ul class="xui-content-padded xui-information">
            <li class="xui-flex-content">
                <div class="xui-flex-l">昵称：</div>
                <div class="xui-flex-r">
                    <input type="text" class="input-xfat input-large xui-margin-10" value="yoga_5932ITW" placeholder="未设置" name="nickname">
                </div>
            </li>
            <li class="xui-flex-content">
                <div class="xui-flex-l">我的积分：</div>
                <div class="xui-flex-r">
                    <span class="xui-margin-10" data-placement="bottom" data-toggle="tooltip" data-type="attention" data-original-title="<div style='line-height:10px;'><p>如何赚取积分？</p><p>1、每日首次登录瑜伽网<b class='sui-text-info xui-margin-l-5'>积分+1</b></p><p>2、每日签到<b class='sui-text-info xui-margin-l-5'>积分+2</b></p><p>3、文章/资讯等内容加入收藏<b class='sui-text-info xui-margin-l-5'>积分+1</b></p><p>4、首次评论留言<b class='sui-text-info xui-margin-l-5'>积分+2</b></p><p>5、注册后完善个人资料<b class='sui-text-info xui-margin-l-5'>积分+10</b></p><p>6、在线投稿，并被采纳<b class='sui-text-info xui-margin-l-5'>积分+100</b></p><p>瑜伽网拥有本次活动最终解释权</p></div>"><em style="cursor:help;font-style:normal;">1</em><i class="sui-icon icon-tb-question xui-margin-l-5"></i></span>
                </div>
            </li>
            <li class="xui-flex-content">
                <div class="xui-flex-l">性别：</div>
                <div class="xui-flex-r">
                    <span class="xui-margin-10">
                        <label class="checkbox-pretty inline checked">
                            <input type="radio" name="sex" checked="checked" value="2"><span></span>女
                        </label>
                        <label class="checkbox-pretty inline">
                            <input type="radio" name="sex" value="1"><span></span>男
                        </label>
                    </span>
                </div>
            </li>
            <li class="xui-flex-content">
                <div class="xui-flex-l">生日：</div>
                <div class="xui-flex-r">
                    <input type="text" data-toggle="datepicker" class="input-xfat input-large span2 xui-margin-10 input-date" value="1990-01-01" placeholder="生日格式：19XX-XX-XX" name="birthday">
                </div>
            </li>
            <li class="xui-flex-content">
                <div class="xui-flex-l">个性签名：</div>
                <div class="xui-flex-r">
                    <textarea rows="6" placeholder="未设置" class="xui-margin-10" style="width:50%;" name="signature"></textarea>
                </div>
            </li>
            <li class="xui-flex-content">
                <div class="xui-flex-l"></div>
                <div class="xui-flex-r">
                    <button type="submit" class="sui-btn btn-xlarge btn-success xui-margin-10">保存</button>
                </div>
            </li>
        </ul>
    </form>
</div>
@endsection
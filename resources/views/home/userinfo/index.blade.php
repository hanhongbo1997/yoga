@extends('home.userinfo.layout')

@section('contents')
                     @if (session('success'))
                    <script>alert('{{ session("success") }}');</script>";
                     
                    @endif
                    @if (session('error'))

                    <script>alert('{{ session("error") }}');</script>";

                    @endif

<div class="xui-member-content" style="padding-left:260px;">
    <div class="xui-content xui-margin-b-15" style="line-height:30px;">
        <div class="span7">
            <h3 class="xui-margin-0">我的信息</h3>
        </div>
    </div>
    <form class="form-inline sui-form" action="/home/userinfo/{{ $data->uid }}" method="post">
     {{ csrf_field() }}
    {{ method_field('PUT') }}
        <ul class="xui-content-padded xui-information">
            <li class="xui-flex-content">
                <div class="xui-flex-l">昵称：</div>
                <div class="xui-flex-r">
                    <input type="text" class="input-xfat input-large xui-margin-10" value="{{ $data->uname }}"  name="uname">
                </div>
            </li>
            <li class="xui-flex-content">
                <div class="xui-flex-l">我的邮箱：</div>
                <div class="xui-flex-r">
                     <input type="text" class="input-xfat input-large xui-margin-10" value="{{ $data->email }}"  name="email">
                </div>
            </li>
            <li class="xui-flex-content">
                <div class="xui-flex-l">性别：</div>
                <div class="xui-flex-r">
                    <span class="xui-margin-10">
                    @if ($data->Userdetail->sex == 'w')
                        <label class="checkbox-pretty inline checked">
                         <input type="radio" name="sex"  value="w"><span></span>女
                        </label>
                        <label class="checkbox-pretty inline">
                            <input type="radio" name="sex" value="m"><span></span>男
                        </label>
                        <label class="checkbox-pretty inline">
                            <input type="radio" name="sex" value="x"><span></span>保密
                        </label>
                     @elseif ($data->Userdetail->sex == 'm')
                     <label class="checkbox-pretty inline ">
                         <input type="radio" name="sex" value="w" ><span></span>女
                        </label>
                        <label class="checkbox-pretty inline checked">
                            <input type="radio" name="sex" value="m" checked="checked"><span></span>男
                        </label>
                        <label class="checkbox-pretty inline">
                            <input type="radio" name="sex" value="x"><span></span>保密
                        </label>
                     @elseif ($data->Userdetail->sex == 'x')
                     <label class="checkbox-pretty inline">
                         <input type="radio" name="sex" value="w" ><span></span>女
                        </label>
                        <label class="checkbox-pretty inline">
                            <input type="radio" name="sex" value="m" ><span></span>男
                        </label>
                        <label class="checkbox-pretty inline checked">
                            <input type="radio" name="sex" value="x" checked="checked"><span></span>保密
                        </label>
                        @endif
                    </span>
                </div>
            </li>

            <li class="xui-flex-content">
                <div class="xui-flex-l">生日：</div>
                <div class="xui-flex-r">
                    <input type="text" data-toggle="datepicker" class="input-xfat input-large span2 xui-margin-10 input-date" value="{{ $data->birthday }}" placeholder="生日格式：19XX-XX-XX" name="birthday">
                </div>
            </li>
            <li class="xui-flex-content">
                <div class="xui-flex-l">所在城市：</div>
                <div class="xui-flex-r">
                     <input type="text" class="input-xfat input-large xui-margin-10" value="{{ $data->Userdetail->add }}"  name="add">
                </div>
            </li>
            <li class="xui-flex-content">
                <div class="xui-flex-l">个性签名：</div>
                <div class="xui-flex-r">
                    <textarea rows="6" placeholder="未设置" class="xui-margin-10" style="width:50%;" name="sdf">{{ $data->Userdetail->sdf }}</textarea>
                </div>
            </li>
            <li class="xui-flex-content">
                <div class="xui-flex-l"></div>
                <div class="xui-flex-r">
                    <button type="submit" class="sui-btn btn-xlarge btn-success xui-margin-10" style="text-align: center;line-height: 10px;">保存</button>
                </div>
            </li>
        </ul>
    </form>
</div>
@endsection
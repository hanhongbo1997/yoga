@extends('home.userinfo.layout')

@section('contents')
<div class="xui-member-content" style="padding-left:260px;">
        <div class="xui-content xui-margin-b-15" style="line-height:30px;">
            <div class="span4">
                <h3 class="xui-margin-0">购物车</h3>
            </div>
        </div>
        <div class="xui-content xui-bg-white">
            
                    购物车里什么也没有~ 


        <div class="xui-content xui-bg-white">
            <table class="sui-table table-bordered table-sideheader" id="cartform">
                <thead>
                    <tr>
                        <th>课程</th>
                        <th>金额</th>
                        <th>数量</th>
                        <th>操作</th>
                    </tr>
                </thead>
                @foreach($data as $k=>$v)
                <tbody>
                    <tr>
                        <td style="padding-left: 30px;">
                            <a href="/skip/10728.html" style="color:inherit;">
                                <img src="/uploads/{{ $v->lessoncart->img }}" style="width:100px;height:62px;" class="pull-left">
                                <h3 class="xui-margin-0" style="font-size:18px;">{{$v->lessoncart->lname}}</h3>
                                <p class="xui-margin-0 xui-margin-t-5 xui-text-gary">
                                    <span class="sui-text-danger">￥{{ $v->price }} </span>/ 90天                                    </p>
                            </a>
                        </td>
                        <td class="sui-text-danger">￥{{ $v->price }}</td>
                        <td>1</td>
                        <td>
                            <form style="display: inline-block;" method="post" action="/home/cart/{{ $v->id }}">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <input type="submit" value="删除"  class="btn btn-danger">
                            </form>
                        </td>
                    </tr>
                </tbody>
                @endforeach
            </table>
        </div>
            <div class="xui-content xui-padded-l-10">
                <div class="xui-pull-r xui-margin-t-15">
                    <ul class="inline">
                        <li>
                            <div class="xui-margin-t-10 xui-margin-b-5">总计金额：</div>
                            <div class="sui-text-danger">
                                <span style="position:relative;top:-8px;font-size:16px;">￥</span>
                                <span style="font-size:26px;" id="price">{{ $sum }}</span>
                            </div>
                        </li>
                        <li>
                            <form action="/home/cart/order" method="post">
                                {{ csrf_field() }}
                                <input type="hidden" name="price" value="{{ $sum }}" >
                                <input type="submit" name="" class="sui-btn btn-xlarge btn-danger inline" style="position:relative;top:-12px;" id="settleSubmit" value="去结算">
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
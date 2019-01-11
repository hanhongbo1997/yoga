@extends('home.userinfo.layout')

@section('contents')
<div class="xui-member-content" style="padding-left:260px;">
        <div class="xui-content xui-margin-b-15" style="line-height:30px;">
            <div class="span4">
                <h3 class="xui-margin-0">购物车</h3>
            </div>
        </div>
        <div class="xui-content xui-bg-white">
            
                    购物车里什么也没有~                <table class="sui-table table-bordered table-sideheader" id="cartform">
                <thead>
                    <tr>
                        <th></th>
                        <th>课程</th>
                        <th>金额</th>
                        <th>数量</th>
                        <th>操作</th>
                    </tr>
                </thead>
                <tbody></tbody>
            </table>
            <div class="xui-content xui-padded-l-10">
                <label for="checkall">
                    <input type="checkbox" id="checkall">
                    <span>全选</span>
                </label>
                <div class="xui-pull-r xui-margin-t-15">
                    <ul class="inline">
                        <li>
                            <div class="xui-margin-t-10 xui-margin-b-5">总计金额：</div>
                            <div class="sui-text-danger">
                                <span style="position:relative;top:-8px;font-size:16px;">￥</span>
                                <span style="font-size:26px;" id="price">0</span>
                            </div>
                        </li>
                        <li>
                            <input type="hidden" id="seleIds">
                            <div class="sui-btn btn-xlarge btn-danger inline" style="position:relative;top:-12px;" id="settleSubmit">去结算</div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
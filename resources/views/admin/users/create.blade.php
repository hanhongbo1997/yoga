@extends('admin.layout.layout')

@section('content')
@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    <div class="outlet">
                    <!-- Start .outlet -->
                    <div class="row">
                        <!-- Start .row -->
                        <div class="col-lg-12">
                            <!-- Start col-lg-12 -->
                            <div class="panel panel-default toggle">
                                <!-- Start .panel -->
                                <div class="panel-heading">
                                    <h3 class="panel-title">用户添加</h3>
                                     <h3 class="panel-title btn btn-success ml15"><a href="/admin/users">用户列表</a></h3>
                                </div>
                                <div class="panel-body">
                                    <form action="/admin/users"  method="post"  class="form-horizontal group-border hover-stripped" role="form" id="validate">
                                        {{ csrf_field() }}
                                         <div class="form-group">
                                            <label class="col-lg-2 control-label">用户权限</label>
                                            <div class="col-lg-10">
                                            <select name="status" id="status">
                                                <option value="1">管理员</option>
                                                <option value="2">会员</option>
                                                <option selected="" value="3">普通用户</option>
                                            </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-2 control-label">用户名称</label>
                                            <div class="col-lg-10">
                                                <input type="text" class="form-control required" id="uname" name="uname" placeholder="输入你的用户名">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-lg-2 control-label">用户密码</label>
                                            <div class="col-lg-10">
                                                <input type="password" class="form-control" id="pass" name="pass" placeholder="请输入您的密码">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-lg-2 control-label">确认密码</label>
                                            <div class="col-lg-10">
                                                <input type="password" class="form-control" id="repwd" name="repwd" placeholder="请再次输入您的密码">
                                            </div>
                                        </div>
                                                                                <div class="form-group">
                                            <label class="col-lg-2 control-label">电子邮箱</label>
                                            <div class="col-lg-10">
                                                <input id="email" name="email" type="email" class="form-control" placeholder="输入你的电子邮箱">
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label class="col-lg-2 control-label">手机号码</label>
                                            <div class="col-lg-10">
                                                <input id="phone" name="phone" type="number" class="form-control" placeholder="输入你的手机号码">
                                            </div>
                                        </div>

                                       

                                        <div class="form-group">
                                            <div class="col-lg-offset-2">
                                                <button class="btn btn-success ml15" type="submit">添加</button>
                                                <button class="btn btn-info ml15" type="reset">重置</button>
                                            </div>
                                        </div>
                                        <!-- End .form-group  -->
                                    </form>
                                </div>
                            </div>
                            <!-- End .panel -->
                        </div>
                        <!-- End col-lg-12 -->
                    </div>
                    <!-- End .row -->
                    <!-- Page End here -->
                </div>
                <!-- End .outlet -->
@endsection
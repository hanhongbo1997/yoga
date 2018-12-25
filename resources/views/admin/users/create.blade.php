@extends('admin.layout.layout')

@section('content')
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
                                </div>
                                <div class="panel-body">
                                    <form class="form-horizontal group-border hover-stripped" role="form" id="validate">
                                        <div class="form-group">
                                            <label class="col-lg-2 control-label">用户名称</label>
                                            <div class="col-lg-10">
                                                <input type="text" class="form-control required">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-2 control-label">电子邮箱</label>
                                            <div class="col-lg-10">
                                                <input id="email" name="email" type="email" class="form-control" placeholder="输入你的电子邮箱">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-2 control-label">用户密码</label>
                                            <div class="col-lg-10">
                                                <input type="password" class="form-control" id="password" name="password" placeholder="请输入您的密码">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-lg-2 control-label">确认密码</label>
                                            <div class="col-lg-10">
                                                <input type="password" class="form-control" id="password" name="password" placeholder="请再次输入您的密码">
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label class="col-lg-2 control-label">手机号码</label>
                                            <div class="col-lg-10">
                                                <input id="email" name="email" type="email" class="form-control" placeholder="输入你的手机号码">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-lg-2 control-label">个人签名</label>
                                            <div class="col-lg-10">
                                                <input id="email" name="email" type="email" class="form-control" placeholder="输入你的电子邮箱">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="col-lg-offset-2">
                                                <button class="btn btn-default ml15" type="submit">添加</button>
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
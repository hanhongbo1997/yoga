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

@if (session('success'))
                           <div class="alert alert-success">
                          {{ session('success') }}
                          </div>
                        @endif

                        @if (session('error'))
                         <div class="alert alert-success">
                        {{ session('error') }}
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
                                    <h3 class="panel-title">轮播图添加</h3>
                                     <h3 class="panel-title btn btn-success ml15"><a href="/admin/slideshow">轮播图列表</a></h3>
                                </div>
                                <div class="panel-body">
                                    <form action="/admin/slideshow"  method="post"  class="form-horizontal group-border hover-stripped" role="form" id="validate" enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                         <div class="form-group">
                                            <label class="col-lg-2 control-label">轮播图权限</label>
                                            <div class="col-lg-10">
                                            <select name="status" id="status">
                                                <option value="0" selected>请选择</option>
                                                <option value="1">详情</option>
                                                <option value="2">链接</option>
                                            </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-2 control-label">轮播图名称</label>
                                            <div class="col-lg-10">
                                                <input type="text" class="form-control required" id="name" name="name" placeholder="输入你的轮播图名称">
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label class="col-lg-2 control-label">链接</label>
                                            <div class="col-lg-10">
                                                <input id="link" name="link" type="text" class="form-control" placeholder="输入你的链接地址">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-2 col-md-2 col-sm-12 control-label">轮播图缩略图</label>
                                            <div class="col-lg-10 col-md-10">
                                                 <span class="btn btn-info fileinput-button">
                                                    <i class="en-plus3"></i>
                                                <span>添加图片</span>
                                                <input type="file" name="img">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-2 col-md-2 col-sm-12 control-label">轮播图详情</label>
                                            <div class="col-lg-10 col-md-10">
                                                <!-- 加载编辑器的容器 -->
                                                <script id="container" name="content" type="text/plain"></script>
                                                <!-- 配置文件 -->
                                                <script type="text/javascript" src="/admin/UE/ueditor.config.js"></script>
                                                <!-- 编辑器源码文件 -->
                                                <script type="text/javascript" src="/admin/UE/ueditor.all.js"></script>
                                                <!-- 实例化编辑器 -->
                                                <script type="text/javascript">
                                                    var ue = UE.getEditor('container');
                                                </script>
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
@extends('admin.layout.layout')

@section('content')
	<!-- Start .outlet -->
<ul class="breadcrumb"><li><i class="im-home"></i><a href="index.html">主页</a><i class="en-arrow-right7"></i></li><li><i class="im-plus"></i>课程添加</ul>
    <!-- Page start here ( usual with .row ) -->
    <div class="row">
        <!-- Start .row -->
        <div class="col-lg-12">
            <!-- Start col-lg-12 -->
            <div class="panel panel-default toggle">
                <!-- Start .panel -->
                <div class="panel-heading">
                    <h3 class="panel-title">课程添加</h3>
                </div>
                <div class="panel-body">
                    <form class="form-horizontal group-border hover-stripped" role="form" action="/admin/class" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label class="col-lg-2 col-md-2 col-sm-12 control-label">课程名称</label>
                            <div class="col-lg-10 col-md-10">
                                <input type="text" class="form-control" name="lname" placeholder="请填写视频名称" autofocus="autofocus">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-2 col-md-2 col-sm-12 control-label">上传用户</label>
                            <div class="col-lg-10 col-md-10">
                                <input type="text" class="form-control" name="writer" placeholder="请填写上传者" autofocus="autofocus">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-2 col-md-2 col-sm-12 control-label">习练周期</label>
                            <div class="col-lg-10 col-md-10">
                                <input type="text" class="form-control" name="time" placeholder="请填写习练周期" autofocus="autofocus">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-2 col-md-2 col-sm-12 control-label">适用人群</label>
                            <div class="col-lg-10 col-md-10">
                                <input type="text" class="form-control" name="peoples" placeholder="请填写适用人群" autofocus="autofocus">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-2 col-md-2 col-sm-12 control-label">注意事项</label>
                            <div class="col-lg-10 col-md-10">
                                <input type="text" class="form-control" name="tips" placeholder="请填写注意事项" autofocus="autofocus">
                            </div>
                        </div>

                        <div class="form-group " id="aetherupload-wrapper" ><!--组件最外部需要有一个名为aetherupload-wrapper的id，用以包装组件-->
                            <label class="col-lg-2 col-md-2 col-sm-12 control-label">课程视频上传</label>
                            <div class="col-lg-10 col-md-10">
                                <input type="file" id="file"  onchange="aetherupload(this,'file').success(someCallback).upload()"/><!--需要有一个名为file的id，用以标识上传的文件，aetherupload(file,group)中第二个参数为分组名，success方法可用于声名上传成功后的回调方法名-->
                                <div class="progress " style="height: 6px;margin-bottom: 2px;margin-top: 10px;width: 200px;">
                                    <div id="progressbar" style="background:blue;height:6px;width:0;"></div><!--需要有一个名为progressbar的id，用以标识进度条-->
                                </div>
                                <span style="font-size:12px;color:#aaa;" id="output"></span><!--需要有一个名为output的id，用以标识提示信息-->
                                <input type="hidden" name="video" id="savedpath" ><!--需要有一个名为savedpath的id，用以标识文件保存路径的表单字段，还需要一个任意名称的name-->
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-2 col-md-2 col-sm-12 control-label">视频缩略图</label>
                            <div class="col-lg-10 col-md-10">
                                 <span class="btn btn-info fileinput-button">
                                    <i class="en-plus3"></i>
                                <span>添加缩略图...</span>
                                <input type="file" name="img">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-2 col-md-2 col-sm-12 control-label">课程简介</label>
                            <div class="col-lg-12 col-md-10">
                                <!-- 加载编辑器的容器 -->
                                <script id="container" name="details" type="text/plain" style="width: 1000px;margin: 0 auto;"></script>
                                <!-- 配置文件 -->
                                <script type="text/javascript" src="/admin/UE/ueditor.config_new.js"></script>
                                <!-- 编辑器源码文件 -->
                                <script type="text/javascript" src="/admin/UE/ueditor.all.js"></script>
                                <!-- 实例化编辑器 -->
                                <script type="text/javascript">
                                    var ue = UE.getEditor('container');
                                </script>
                            </div>
                        </div
                        <div class="form-group ">
                           
                        	<input type="submit" class="btn btn-success" style="width:100%" value="添加课程">
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
@endsection
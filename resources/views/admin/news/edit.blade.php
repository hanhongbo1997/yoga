@extends('admin.layout.layout')

@section('content')

	<ul class="breadcrumb"><li><i class="im-home"></i><a href="index.html">主页</a><i class="en-arrow-right7"></i></li><li><i class="im-plus"></i>资讯修改</ul>
    <!-- Page start here ( usual with .row ) -->
    <div class="row">
        <!-- Start .row -->
        <div class="col-lg-12">
            <!-- Start col-lg-12 -->
            <div class="panel panel-default toggle">
                <!-- Start .panel -->
                <div class="panel-heading">
                    <h3 class="panel-title">资讯修改</h3>
                </div>
                <div class="panel-body">
                    <form class="form-horizontal group-border hover-stripped" role="form" action="/admin/news/{{$data->id}}" method="post" enctype="multipart/form-data"  style="width: 1300px;margin: 0 auto;">
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}
                        <div class="form-group">
                            <label class="col-lg-2 col-md-2 col-sm-12 control-label"></label>
                            <div class="col-lg-12 col-md-10">
                                <input type="text" class="form-control" name="nname" value="{{ $data->nname }}" autofocus="autofocus">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-2 col-md-2 col-sm-12 control-label"></label>
                            <div class="col-lg-12 col-md-10">
                                <input type="text" class="form-control" name="nuser" value="{{ $data->nuser }}" autofocus="autofocus">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-2 col-md-2 col-sm-12 control-label"></label>
                            <div class="col-lg-12 col-md-10">
                                <input type="text" class="form-control" name="abs" value="{{ $data->newinfo->abs }}" autofocus="autofocus">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-2 col-md-2 col-sm-12 control-label"></label>
                            <div class="col-lg-12 col-md-10">
                                <!-- 加载编辑器的容器 -->
                                <script id="container" name="ncontent" type="text/plain" style="height: 800px;">{!! $data->newinfo->ncontent !!}</script>
                                <!-- 配置文件 -->
                                <script type="text/javascript" src="/admin/UE/ueditor.config_new.js"></script>
                                <!-- 编辑器源码文件 -->
                                <script type="text/javascript" src="/admin/UE/ueditor.all.js"></script>
                                <!-- 实例化编辑器 -->
                                <script type="text/javascript">
                                    var ue = UE.getEditor('container');
                                </script>
                            </div>
                        </div>

       
                        <div class="form-group">
                            <!--test line-->
                            <div class="col-lg-12 col-md-10">
                                 
                                
                            
 
                             <input type="file" class="btn btn-info fileinput-button" name="img" value="">

                            </div>
                        </div>
                        <!-- end test -->
                        <div class="form-group ">
                           
                        	<input type="submit" class="btn btn-success" style="width:100%" value="保存资讯">
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
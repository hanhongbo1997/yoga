@extends('admin.layout.layout')

@section('content')
<!-- Start .outlet -->
    <!-- Page start here ( usual with .row ) -->
   
<ul class="breadcrumb"><li><i class="im-home"></i><a href="index.html">主页</a><i class="en-arrow-right7"></i></li><li><i class="im-plus"></i>视频添加</ul>       
    <div class="row">
        <!-- Start .row -->
        <div class="col-lg-12">
            <!-- Start col-lg-12 -->
            <div class="panel panel-default toggle">
                <!-- Start .panel -->
                <div class="panel-heading">
                    <h3 class="panel-title">视频添加</h3>
                </div>
                <div class="panel-body">
                    <form class="form-horizontal group-border hover-stripped" role="form" action="/admin/videos" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label class="col-lg-2 col-md-2 col-sm-12 control-label">视频名称</label>
                            <div class="col-lg-10 col-md-10">
                                <input type="text" class="form-control" name="vname" placeholder="请填写视频名称" autofocus="autofocus">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-2 col-md-2 col-sm-12 control-label">视频简介</label>
                            <div class="col-lg-10 col-md-10">
                                <input type="text" class="form-control" name="details" placeholder="请填写视频简介" autofocus="autofocus">
                            </div>
                        </div>

                        
                       
                        <div class="form-group">
                            <label class="col-lg-2 col-md-2 col-sm-12 control-label">上传用户</label>
                            <div class="col-lg-10 col-md-10">
                                <input type="text" class="form-control" name="writer" placeholder="请填写上传者" autofocus="autofocus">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-2 col-md-2 col-sm-12 control-label">Inline Radios</label>
                            <label class="radio-inline">
                                <input type="radio" name="radio1" value="option1">unchecked
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="radio1" value="option2" checked="checked">checked
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="radio1" value="option3" disabled="disabled">disabled
                            </label>
                        </div>

                        <div class="form-group">
                        	<label class="col-lg-2 col-md-2 col-sm-12 control-label">视频上传</label>
                        	<div class="col-lg-10 col-md-10">
                                <span class="btn btn-info fileinput-button">
	                            <i class="en-plus3"></i>
	                            <span>添加视频...</span>
                            	<input type="file" name="video">
                            </span>
                        	</div>
                        </span>
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
                        
                        <div class="form-group ">
                           
                        	<input type="submit" class="btn btn-success" style="width:100%" value="添加视频">
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
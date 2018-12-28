@extends('admin.layout.layout')

@section('content')
	<!-- Start .outlet -->
                    <!-- Page start here ( usual with .row ) -->
                    <div class="row">
                        <!-- Start .row -->
                        <div class="col-lg-12">
                            <!-- Start col-lg-12 -->
                            <div class="panel panel-default toggle">
                                <!-- Start .panel -->
                                <div class="panel-heading">
                                    <h3 class="panel-title">Form fields</h3>
                                </div>
                                <div class="panel-body">
                                    <form class="form-horizontal group-border hover-stripped" role="form" action="/admin/videos/{{ $data->id }}" method="post">
                                        {{ csrf_field() }}
                                        {{ method_field('PUT') }}
                                        <div class="form-group">
                                            <label class="col-lg-2 col-md-2 col-sm-12 control-label">视频名称</label>
                                            <div class="col-lg-10 col-md-10">
                                                <input type="text" class="form-control" name="vname" placeholder="请填写视频名称" autofocus="autofocus" value="{{ $data->vname }}">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-lg-2 col-md-2 col-sm-12 control-label">视频简介</label>
                                            <div class="col-lg-10 col-md-10">
                                                <input type="text" class="form-control" name="details" placeholder="请填写视频简介" autofocus="autofocus" value="{{ $data->videodetails->details }}">
                                            </div>
                                        </div>
                                       
                                        <div class="form-group">
                                            <label class="col-lg-2 col-md-2 col-sm-12 control-label">视频作者</label>
                                            <div class="col-lg-10 col-md-10">
                                                <input type="text" class="form-control" name="writer" placeholder="请填写视频时长" autofocus="autofocus" value="{{ $data->videodetails->writer }} ">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                        	<label class="col-lg-2 col-md-2 col-sm-12 control-label">视频上传</label>
                                        	<div class="col-lg-10 col-md-10">
	                                            <span class="btn btn-info fileinput-button" >
					                            <i class="en-plus3"></i>
					                            <span>添加视频...</span>
	                                        	<input type="file" name="" multiple="">
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
                                        		<input type="file" name="" multiple="">
                                            </div>
                                        </div>

                                        <div class="form-group ">
                                           
                                            <input type="submit" class="btn btn-warning" style="width:100%" value="保存">
                                             
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
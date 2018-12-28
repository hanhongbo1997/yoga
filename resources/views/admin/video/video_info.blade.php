@extends('admin.layout.layout')

@section('content')
<div class="outlet">
    <div class="col-lg-12 col-md-6">
                        
        <div class="page-header">
            <h5>视频详情</h5>
        </div>
            <div class="jumbotron">
                <h1>{{ $data->vname }}</h1>
                <p>{{ $data->videodetails->details }}</p>
            </div>
            <div class="jumbotron">
            <p>由&nbsp;&nbsp;<b>{{ $data->videodetails->writer }}</b> 于 <b>{{ $data->created_at }}</b>上传</p>
        </div>
        </div>         
    </div>                
</div>

<div class="col-lg-6 col-md-6">
                            
    <div class="panel panel-default" style="margin-top: 30px;" id="accordion">
        <div class="panel panel-default" id="spr_0">
            <div class="panel-heading">
                <h5 class="panel-title">
                    <a class="accordion-toggle collapsed" data-toggle="collapse" href="#collapseOne">视频01</a>
                </h5>
            </div>
            <div id="collapseOne" class="panel-collapse collapse" style="height: 0px;">
                <div class="panel-body">
                    <!-- video start -->
                        <video src="/uploads/video/1545823236.mp4" controls="controls" style="width: 750px;"></video>
                    <!-- video stop -->
                </div>
            </div>
        </div>
        <div class="panel panel-default" id="spr_1">
            <div class="panel-heading">
                <h5 class="panel-title">
                    <a class="accordion-toggle collapsed" data-toggle="collapse" href="#collapseTwo">视频02</a>
                </h5>
            </div>
            <div id="collapseTwo" class="panel-collapse collapse" style="height: 0px;">
                <div class="panel-body">
                    <video src="/uploads/video/sintel.mp4" controls="controls" style="width: 750px;"></video>
                </div>
            </div>
        </div>
        <div class="panel panel-default" id="spr_2">
            <div class="panel-heading">
                <h5 class="panel-title">
                    <a class="accordion-toggle collapsed" data-toggle="collapse" href="#collapseThree">视频03</a>
                </h5>
            </div>
            <div id="collapseThree" class="panel-collapse collapse" style="height: 0px;">
                <div class="panel-body">
                    <video src="/uploads/video/sintel.mp4" controls="controls" style="width: 750px;"></video>
                </div>
            </div>
        </div>
    </div>
                        </div>
        <div class="page-header">
            <h5>视频名师</h5>
        </div>
        <span class="badge badge-default mr10 mb10">tony老师</span>
        <span class="badge badge-primary mr10 mb10">danny老师</span>
        <span class="badge badge-success mr10 mb10">二柱子老师</span> 
    </div>
    <!-- col-lg-6 col-md-6 end here -->
    </div>
</div>

@endsection
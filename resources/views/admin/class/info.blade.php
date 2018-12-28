@extends('admin.layout.layout')

@section('content')
    <div class="outlet">
        <ul class="breadcrumb"><li><i class="im-home"></i><a href="index.html">主页</a><i class="en-arrow-right7"></i></li><li><i class="im-list"></i><a href="/admin/class">课程列表</a><i class="en-arrow-right7"></i></li><li><i class="st-cube"></i>课程详情</li></ul>
                    <!-- Start .outlet -->
                    <!-- Page start here ( usual with .row ) -->
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <!-- col-lg-4 start here -->
                            <div class="panel panel-default plain profile-widget">
                                <!-- Start .panel -->
                                <div class="instagram-widget-image">
                                    <div id="instagram-widget" class="carousel slide">
                                        <!-- Indicators -->
                                        <ol class="carousel-indicators dotstyle">
                                            <li data-target="#instagram-widget" data-slide-to="0" class=""><a href="#">Image 1</a>
                                            </li>
                                            <li data-target="#instagram-widget" data-slide-to="1" class=""><a href="#">Image 2</a>
                                            </li>
                                            <li data-target="#instagram-widget" data-slide-to="2" class="active"><a href="#">Image 3</a>
                                            </li>
                                        </ol>
                                        <div class="carousel-inner">
                                                <figure class="item">
                                                        <img style="width: 100%;height: 538px;" class="img-responsive" src="/uploads/{{ $data->img }}" alt="image">
                                                </figure>
                                            <figure class="item">
                                                <img style="width: 100%;height: 538px;" class="img-responsive" src="/admin/img/instagram/instagram2.jpg" alt="image">
                                            </figure>
                                            <figure class="item active">
                                                <img style="width: 100%;height: 538px;" class="img-responsive" src="/admin/img/instagram/instagram3.jpg" alt="image">
                                            </figure>
                                        </div>
                                    </div>
                                            <!-- End Carousel -->
                                        </div>
                                <div class="panel-body">
                                    <div class="col-lg-8 col-md-8 col-sm-12">
                                        <div class="profile-name">
                                            {{$data->lname}} 
                                        </div>
                                        
                                        <div class="profile-stats-info">
                                            <a href="#" class="tipB" title="Views"><i class="im-eye2"></i> <strong>5600</strong></a>
                                            <a href="#" class="tipB" title="Comments"><i class="im-bubble"></i> <strong>75</strong></a>
                                            <a href="#" class="tipB" title="Likes"><i class="im-heart"></i> <strong>45</strong></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel-footer white-bg">
                                    <ul class="profile-info">
                                        <li><i class="im-clock" style="font-size: 15px;">&nbsp;&nbsp;习练周期</i>{{ $data->lessondetails->time }}</li>
                                        <li><i class="fa-group" style="font-size: 15px;">&nbsp;&nbsp;适应人群</i>{{ $data->lessondetails->peoples }}</li>
                                        <li><i class="im-warning" style="font-size: 15px;">&nbsp;&nbsp;注意事项</i>{{ $data->lessondetails->tips }}</li>
                                    </ul>
                                </div>
                            </div>
                            <!-- End .panel -->
                        </div>
                        <!-- col-lg-4 end here -->
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <!-- col-lg-4 start here -->
                            <div class="panel panel-default plain">
                                <!-- Start .panel -->
                                <div class="col-lg-12 col-md-6">
                            <!-- col-lg-6 start here -->
                            <div class="page-header">
                                <h4>课程视频</h4>
                            </div>
                            <div class="tabs">
                                <ul id="myTab2" class="nav nav-tabs nav-justified">
                                    <li>
                                        <a href="#home2" data-toggle="tab">第一节课</a>
                                    </li>
                                    <li class="">
                                        <a href="#profile2" data-toggle="tab">第二节课</a>
                                    </li>
                                    <li class="">
                                        <a href="#settings2" data-toggle="tab">第三节课</a>
                                    </li>
                                    <li class="">
                                        <a href="#users2" data-toggle="tab">第四节课</a>
                                    </li>
                                </ul>
                                <div id="myTabContent2" class="tab-content">
                                    <div class="tab-pane fade active in" id="home2">
                                        <video src="/uploads/video/sintel.mp4" controls="controls" style="width: 680px;height: 380px;"></video>
                                    </div>
                                    <div class="tab-pane fade" id="profile2">
                                        <video src="/uploads/video/sintel.mp4" controls="controls" style="width: 680px;height: 380px"></video>
                                    </div>
                                    <div class="tab-pane fade" id="settings2">
                                        <video src="/uploads/video/sintel.mp4" controls="controls" style="width: 680px;height: 380px"></video>
                                    </div>
                                    <div class="tab-pane fade" id="users2">
                                        <video src="/uploads/video/test.mp4" controls="controls" style="width: 680px;height: 380px;"></video>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-612col-md-6">
                            <!-- col-lg-6 start here -->
                            <div class="jumbotron">
                                <h3>课程介绍</h3>
                                <div class="profile-quote" style="height: 130px;">
                                    <p>{!!$data->lessondetails->details!!}</p>
                                </div>
                            </div>
                        </div>

                            </div>
                        </div>
                            </div>
                            <!-- End .panel -->
                        </div>
                        <!-- col-lg-4 end here -->
                    </div>
                    <!-- Page End here -->
                </div>
                <!-- End .outlet -->
               

@endsection
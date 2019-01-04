@extends('admin.layout.layout')

@section('content')
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
                    <!-- Page start here ( usual with .row ) -->
                    <div class="row">
                        <div class="col-lg-12">
                            <!-- col-lg-12 start here -->
                            <div class="panel panel-default plain toggle panelClose panelRefresh">
                                <!-- Start .panel -->
                                <div class="panel-heading">
                                    <h3 class="panel-title btn btn-warning"><a href="/admin/slideshow">轮播图列表</a></h3>
                                    <h3 class="panel-title btn btn-success ml15"><a href="/admin/slideshow/create">轮播图添加</a></h3>
                                </div>
                                <div class="panel-body">
                                        <label class="col-lg-2 col-md-2 col-sm-12 control-label">轮播图详情</label>
                                        <img src="{{$data->img}}" alt="" width="300px">
                                        轮播图介绍：{{$arr2['0']}} 。
                                </div>
                                 
                            </div>
                            <!-- End .panel -->
                        </div>
                        <!-- col-lg-12 end here -->
                    </div>
                   
                <!-- End .outlet -->
               
@endsection
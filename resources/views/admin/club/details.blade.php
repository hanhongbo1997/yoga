@extends('admin.layout.layout')

@section('content')

  <div class="panel panel-primary toggle panelRefresh" id="spr_11">
  <!-- Start .panel -->
  <div class="panel-heading">
    <h4 class="panel-title">{{ $title }}</h4>
    <div class="panel-controls panel-controls-hide" style="display: none;">
      <a href="#" class="panel-refresh">
        <i class="im-spinner6"></i>
      </a>
      <a href="#" class="toggle panel-minimize">
        <i class="im-minus"></i>
      </a>
    </div>
  </div>
  <div class="panel-body">
    <div class="page-header">
      <h5>会馆名称</h5></div>
    <div class="well">{{ $data->cname }}</div>
  
    <div class="page-header">
      <h5>会馆地址</h5></div>
    <div class="well well-sm">{{ $data->caddr }}</div>

    <div class="page-header">
      <h5>会馆电话</h5></div>
    <div class="well well-sm">{{ $data ->clubdetails->cphone }}</div>

    <div class="page-header">
      <h5>会馆老师</h5></div>
    <div class="well well-sm">{{ $data ->clubdetails->teach }}</div>

     <div class="page-header">
      <h5>会馆主图</h5></div>
    <div class="well well-sm">
    <img src="{{ $data->cimg }}" style="width: 200px;">
    </div>
    
    <div class="page-header">
      <h5>会馆详情图</h5></div>
    <div class="well well-sm">
    @foreach($arr as $k=>$v)
         <img src="{{ $v }}" style="width: 200px; margin-left: 10px; margin-bottom: 10px;">
    @endforeach
  
  
</div>

<div class="col-lg-6 col-md-6" style="width: 100%;">
  <!-- col-lg-6 start here -->
  <div class="page-header">
    <h4>场馆介绍</h4></div>
  <div class="tabs">
    <ul id="myTab2" class="nav nav-tabs nav-justified">
      <li class="">
        <a href="#home2" data-toggle="tab">会馆介绍</a></li>
      <li class="">
        <a href="#profile2" data-toggle="tab">会馆课程</a></li>
      
      
    </ul>
    <div id="myTabContent2" class="tab-content" >
      <div class="tab-pane fade" id="home2">
        <p>{!! $data ->clubdetails->cinfo !!}</p>
      </div>
      <div class="tab-pane fade" id="profile2">
        <p>{!! $data ->clubdetails->lesson !!}</p>
      </div>
     
    
      
    </div>
  </div>
</div>

@endsection
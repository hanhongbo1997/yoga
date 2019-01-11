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
      <h5>名师名称</h5></div>
    <div class="well">{{ $data->tname }}</div>
  
    <div class="page-header">
      <h5>介绍</h5></div>
    <div class="well well-sm">{{ $data->intor }}</div>

    <div class="page-header">
      <h5>擅长</h5></div>
    <div class="well well-sm">{{ $data ->adept }}</div>

    <div class="page-header">
      <h5>类型</h5></div>
    <div class="well well-sm">
    @foreach ($data->status as $k=>$v)
      @if($v==1)
        瑜伽导师
      @elseif($v==2)
        行业顾问
      @elseif($v==3)
        官方认证
      @endif
      
    @endforeach
    </div>

     <div class="page-header">
      <h5>名师主图</h5></div>
    <div class="well well-sm">
    <img src="{{ $data->teachinfoend->timg }}" style="width: 200px;">
    </div>
    
    <div class="page-header">
      <h5>名师情图</h5></div>
    <div class="well well-sm">
    @foreach($arr as $k=>$v)
         <img src="{{ $v }}" style="width: 200px; margin-left: 10px; margin-bottom: 10px;">
    @endforeach
  
  
</div>

<div class="col-lg-6 col-md-6" style="width: 100%;">
  <!-- col-lg-6 start here -->
  <div class="page-header">
    <h4>名师介绍</h4></div>
  <div class="tabs">
    <ul id="myTab2" class="nav nav-tabs nav-justified">
      <li class="">
        <a href="#home2" data-toggle="tab">名师介绍</a></li>
      <li class="">
        <a href="#profile2" data-toggle="tab">名师课程</a></li>
      
      
    </ul>
    <div id="myTabContent2" class="tab-content" >
      <div class="tab-pane fade" id="home2">
        <p>{!! $data ->teachinfoend->tphone !!}</p>
      </div>
      <div class="tab-pane fade" id="profile2">
        <p>{!! $data ->teachinfoend->course !!}</p>
      </div>
     
    
      
    </div>
  </div>
</div>

@endsection
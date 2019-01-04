@extends('admin.layout.layout')

@section('content')
<a href="/admin/videosort">
        <button type="button" class="btn btn-pink" style="margin-bottom: 20px;"><i class="im-arrow-left"></i>返回分类列表</button>
 </a>
<div class="col-lg-12">
   <!-- Start col-lg-12 -->
<div class="panel panel-default toggle" id="spr_0">
  <!-- Start .panel -->
  <div class="panel-heading">
    <h3 class="panel-title">{{ $title }}</h3>
    <div class="panel-controls panel-controls-hide" style="display: none;">
      <a href="#" class="toggle panel-minimize">
        <i class="im-minus"></i>
      </a>
    </div> 
  </div>
<div class="panel-body">
 
    <form  action="/admin/videosort/{{ $data->id }}" method="post" enctype="multipart/form-data" class="form-horizontal group-border hover-stripped">
    {{ csrf_field() }}
    {{ method_field('PUT') }}
      <div class="form-group">
        <label class="col-lg-2 col-md-2 col-sm-12 control-label">分类名称</label>
        <div class="col-lg-10 col-md-10">
          <input type="text" class="form-control" value="{{ $data->vsname }}" autofocus="autofocus" name="vsname"></div>
      </div>
      <div class="form-group">
        <label class="col-lg-2 col-md-2 col-sm-12 control-label">所属分类</label>
        <div class="col-lg-10 col-md-10">
         <select name="pid" id="pid" class="form-control">
			<option value="0">--請選擇要更改的分類--</option>

		@foreach($user as $k=>$v)
			<option value="{{ $v->id }}" {{ $data->pid == $v->id}}>{{ $v->vsname }}</option>
		@endforeach

         </select>
          </div>
      </div>





			<div class="form-group">
		  <label class="col-lg-2 col-md-2 col-sm-12 control-label"></label>
		  <div class="col-lg-10 col-md-10">
		    
		    <span class="help-block mt10">
		     
		      <input type="submit" id="output-message" class="btn btn-lg btn-primary" value="提交">
		      <input type="reset" id="output-message" class="btn btn-lg btn-brown" value="重置">
		      </span>
		  </div>
		</div>

</form>
</div>
</div>       

@endsection
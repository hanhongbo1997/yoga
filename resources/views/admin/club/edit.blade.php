@extends('admin.layout.layout')

@section('content')

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
 
    <form  action="/admin/club/{{ $data->cid }}" method="post" enctype="multipart/form-data" class="form-horizontal group-border hover-stripped">
    {{ csrf_field() }}
    {{ method_field('PUT') }}
    <div class="form-group">
        <label class="col-lg-2 col-md-2 col-sm-12 control-label">会馆类型</label>
        <div class="col-lg-10 col-md-10">
          
      

          <select  class="form-control" style="width: 200px;margin-right: 20px; float: left;"  name="pid">
                      <option value="0" selected="">请选择</option>    
                   @foreach ($club as $k=>$v)                               
                      <option value="{{ $v->id }}" id="sel1">{{ $v->crname }}</option>
                    @endforeach
                                                         
         </select>
      

      </div>

      </div>
      <div class="form-group">
        <label class="col-lg-2 col-md-2 col-sm-12 control-label">会馆名称</label>
        <div class="col-lg-10 col-md-10">
          <input type="text" class="form-control" value="{{ $data->cname }}" autofocus="autofocus" name="cname"></div>
      </div>
      <div class="form-group">
        <label class="col-lg-2 col-md-2 col-sm-12 control-label">会馆地址</label>
        <div class="col-lg-10 col-md-10">
          <input type="text" class="form-control" value="{{ $data->caddr }}" name="caddr"></div>
      </div>

    <div class="form-group">
  <label class="col-lg-2 col-md-2 col-sm-12 control-label">上传主图</label>
  <div class="col-lg-10 col-md-10">
    <div class="row">

      <div class="col-lg-6 col-md-6">
        <div class="input-group">
      <span class="btn btn-success fileinput-button">
	  <i class="en-plus3"></i>
	  <span>请选择上传的图片</span>
	  <input type="file" id="profile" name="profile"></span>
          <!-- /btn-group --></div>
        <!-- /input-group --></div>
    </div>
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
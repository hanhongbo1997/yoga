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
 
    <form  action="/admin/club/add/{{ $data->cid }}" method="post" enctype="multipart/form-data" class="form-horizontal group-border hover-stripped">
    {{ csrf_field() }}

      <div class="form-group">
        <label class="col-lg-2 col-md-2 col-sm-12 control-label">会馆名称</label>
        <div class="col-lg-10 col-md-10">
          <input type="text" class="form-control" value="{{ $data->cname }}" autofocus="autofocus" name="cname" disabled></div>
      </div>
      <div class="form-group">
        <label class="col-lg-2 col-md-2 col-sm-12 control-label">会馆地址</label>
        <div class="col-lg-10 col-md-10">
          <input type="text" class="form-control" value="{{ $data->caddr }}" name="caddr" disabled></div>
      </div>

       <div class="form-group">
        <label class="col-lg-2 col-md-2 col-sm-12 control-label">会馆电话</label>
        <div class="col-lg-10 col-md-10">
          <input type="text" class="form-control" value="" name="cphone" ></div>
      </div>

      <div class="form-group">
        <label class="col-lg-2 col-md-2 col-sm-12 control-label">会馆老师</label>
        <div class="col-lg-10 col-md-10">
          <input type="text" class="form-control" value="" name="teach" ></div>
      </div>

<div class="form-group">
  <label class="col-lg-2 col-md-2 col-sm-12 control-label">场馆主图</label>
  <div class="col-lg-10 col-md-10">
    <div class="row">

      <div class="col-lg-6 col-md-6">
        <div class="input-group">
	  <img src=" {{ $data->cimg }}"" style="width: 200px;">
	  </span>
          </div>
       </div>
    </div>
   </div>

</div>

			<div class="form-group">
		  <label class="col-lg-2 col-md-2 col-sm-12 control-label">场馆展示图</label>
		  <div class="col-lg-10 col-md-10">
		    <div class="row">

		      <div class="col-lg-6 col-md-6">
		        <div class="input-group">
		      <!-- <span class="btn btn-success fileinput-button"> -->
			  
			  <!-- <span>请选择上传的图片</span> -->
			  

			<input type="file" multiple accept='image/*' id="profile" name="profiles[]">
			  <!-- </span> -->
		          <!-- /btn-group --></div>
		        <!-- /input-group --></div>
		    </div>
		   </div>

		</div>


			<div class="form-group">
		  <label class="col-lg-2 col-md-2 col-sm-12 control-label">场馆介绍</label>
		  <div class="col-lg-10 col-md-10">
		    <div class="row">
				
					<script id="container" name="cinfo" type="text/plain" style="margin: auto;"> </script>

		    </div>
		   </div>
		</div>


			<div class="form-group">
		  <label class="col-lg-2 col-md-2 col-sm-12 control-label">场馆课程</label>
		  <div class="col-lg-10 col-md-10">
		    <div class="row">
				
					<script id="container1" name="lesson" type="text/plain" style="margin: auto;"> </script>

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

	 <!-- 配置文件 -->
    <script type="text/javascript" src="/utf8-php/ueditor.config.js"></script>
    <!-- 编辑器源码文件 -->
    <script type="text/javascript" src="/utf8-php/ueditor.all.js"></script>
    <!-- 实例化编辑器 -->
   <script type="text/javascript">
    var ue = UE.getEditor('container');
    var ue1 = UE.getEditor('container1');
</script>
 

</div>
</div>  



@endsection
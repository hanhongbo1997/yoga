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
 
    <form  action="/admin/teacher" method="post" enctype="multipart/form-data" class="form-horizontal group-border hover-stripped"  role="form">
    {{ csrf_field() }}
    
      <div class="form-group">
        <label class="col-lg-2 col-md-2 col-sm-12 control-label">名师名字</label>
        <div class="col-lg-10 col-md-10">
          <input type="text" class="form-control" value="{{ $data->tname }}" autofocus="autofocus" name="tname"></div>
      </div>
      <div class="form-group">
        <label class="col-lg-2 col-md-2 col-sm-12 control-label">介绍</label>
        <div class="col-lg-10 col-md-10">
          <input type="text" class="form-control" value="{{ $data->intor }}" name="intor"></div>   
      </div>
  
  <div class="form-group">
        <label class="col-lg-2 col-md-2 col-sm-12 control-label">教龄</label>
        <div class="col-lg-10 col-md-10">
          <input type="text" class="form-control" value="{{ $data->seniority }}" name="seniority"></div>   
      </div>

  <div class="form-group">
        <label class="col-lg-2 col-md-2 col-sm-12 control-label">擅长</label>
        <div class="col-lg-10 col-md-10">
          <input type="text" class="form-control" value="{{ $data->adept }}" name="adept"></div>   
      </div>
    <div class="form-group">
        <label class="col-lg-2 col-md-2 col-sm-12 control-label">性别</label>
        <div class="col-lg-10 col-md-10"  >
          <div id="sex">
   		@if ($data->sex == 'w')
          <label><input name="sex" type="radio" value="w" checked="">女 </label> 
         
         @else 
          
          <label><input name="sex" type="radio" value="m" checked="">男</label> 
        
       @endif


          </div>
          </div>   

      </div>

    
    <div class="form-group">
        <label class="col-lg-2 col-md-2 col-sm-12 control-label">类型</label>
        <div class="col-lg-10 col-md-10">
         <label> <input type="checkbox" class="form-control" value="1" name="status">瑜伽导师 </label>&nbsp; &nbsp; 
          <label> <input type="checkbox" class="form-control" value="2" name="status">行业顾问</label>&nbsp; &nbsp;
          <label> <input type="checkbox" class="form-control" value="3" name="status">官方认证</label>

          </div>   
      </div>

    <div class="form-group">
        <label class="col-lg-2 col-md-2 col-sm-12 control-label">国籍</label>
        <div class="col-lg-10 col-md-10">
          <input type="text" class="form-control" value="{{ $data->book }}" name="book"></div>   
      </div>

      <div class="form-group">
        <label class="col-lg-2 col-md-2 col-sm-12 control-label">所在地</label>
        <div class="col-lg-10 col-md-10">
          <input type="text" class="form-control" value="{{ $data->add }}" name="add"></div>   
      </div>

      <div class="form-group">
      <label class="col-lg-2 col-md-2 col-sm-12 control-label">名师主图</label>
      <div class="col-lg-10 col-md-10">
        <div class="row">

          <div class="col-lg-6 col-md-6">
            <div class="input-group">
          <span class="btn btn-success fileinput-button">
        <i class="en-plus3"></i>
        <span>请选择上传的图片</span>
        <input type="file" id="profile" name="timg"></span>
              <!-- /btn-group --></div>
            <!-- /input-group --></div>
        </div>
       </div>

    </div>


      <div class="form-group">
      <label class="col-lg-2 col-md-2 col-sm-12 control-label">老师图片列表</label>
      <div class="col-lg-10 col-md-10">
        <div class="row">

          <div class="col-lg-6 col-md-6">
            <div class="input-group">
          <!-- <span class="btn btn-success fileinput-button"> -->
        
        <!-- <span>请选择上传的图片</span> -->
        

      <input type="file" multiple accept='image/*' id="profile" name="imges[]">
        <!-- </span> -->
              <!-- /btn-group --></div>
            <!-- /input-group --></div>
        </div>
       </div>

    </div>

    <div class="form-group">
      <label class="col-lg-2 col-md-2 col-sm-12 control-label">名师简历</label>
      <div class="col-lg-10 col-md-10">
        <div class="row">
        
          <script id="container" name="tphone" type="text/plain" style="margin: auto;"> </script>

        </div>
       </div>
    </div>


      <div class="form-group">
      <label class="col-lg-2 col-md-2 col-sm-12 control-label">名师课程</label>
      <div class="col-lg-10 col-md-10">
        <div class="row">
        
          <script id="container1" name="course" type="text/plain" style="margin: auto;"> </script>

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

 <!-- 配置文件 -->
    <script type="text/javascript" src="/utf8-php/ueditor.config.js"></script>
    <!-- 编辑器源码文件 -->
    <script type="text/javascript" src="/utf8-php/ueditor.all.js"></script>
    <!-- 实例化编辑器 -->
   <script type="text/javascript">
    var ue = UE.getEditor('container');
    var ue1 = UE.getEditor('container1');
</script>


@endsection
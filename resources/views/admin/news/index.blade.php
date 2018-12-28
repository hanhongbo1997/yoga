@extends('admin.layout.layout')

@section('content')
<ul class="breadcrumb"><li><i class="im-home"></i><a href="index.html">主页</a><i class="en-arrow-right7"></i></li><li><i class="im-list"></i>资讯列表</ul>
<div class="outlet">
    <div class="col-lg-12">
      <!-- col-lg-12 start here -->
        <div class="panel panel-default plain toggle panelClose panelRefresh" id="spr_0">
            <!-- Start .panel -->
            <div class="panel-heading white-bg">
                <h4 class="panel-title">资讯列表</h4>
              <div class="panel-controls panel-controls-hide" style="display: none;">
                <a href="#" class="panel-refresh">
                  <i class="im-spinner6"></i>
                </a>
                <a href="#" class="toggle panel-minimize">
                  <i class="im-minus"></i>
                </a>
                <a href="#" class="panel-close">
                  <i class="im-close"></i>
                </a>
              </div>
            </div>
            <div class="panel-body">
                <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: 100%; height: auto;">
                  <div class="table-responsive" style="overflow: hidden; width: 100%; height: auto;">
                    <div id="datatable_wrapper" class="dataTables_wrapper form-inline" role="grid">
                      <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12 text-center"></div>
                        <div class="col-lg-6 col-md-6 col-sm-12 text-center">
                          <div class="dataTables_filter" id="datatable_filter">
                            <label>
                              <form action="/admin/news">
                                <input type="text" aria-controls="datatable" name="search_nname" class="form-control input-large" placeholder="搜索">
                              </form>
                            </label>
                          </div>
                        </div>
                      </div>
                      <table class="table display dataTable" id="datatable" aria-describedby="datatable_info">
                    <thead>
                        <tr>
                        	<th style="text-align: center;">ID</th>
                        	<th style="text-align: center;">标题</th>
                        	<th style="text-align: center;">作者</th>
                        	
                        	<th style="text-align: center;">上传时间</th>
                        	<th style="text-align: center;">预览图</th>
                        	<th style="text-align: center;">操作</th>
                        </tr>
                    </thead>
                    
                		<tbody role="alert" aria-live="polite" aria-relevant="all">
                			@foreach($data as $k=>$v)
                			<tr class="gradeA odd">
	                            <td class="center">{{$v->id}}</td>
	                            <td class="center">{{$v->nname}}</td>
	                            <td class="center">{{$v->nuser}}</td>
	                            <td class="center ">{{$v->created_at}}</td>
	                            <td class="center ">
	                            	
            									<div class="wrapper">
            										<section id="examples" class="section examples-section">
            											<div class="image-row">
            												<a class="example-image-link" href="/uploads/{{$v->img}}" data-lightbox="example-2" title="Optional caption.">
            													<img class="example-image" src="/uploads/{{$v->img}}" alt="thumb-1" width="80" height="auto"/>
            												</a>
            											</div>
            										</section>
            									</div>
									
	                            </td>
	                            <td class="center ">
                                  <a href="/admin/newinfo/{{ $v->id }}/edit" class="btn btn-primary">查看文章内容</a>
	                            </td>
                        	</tr>
                          
                        	@endforeach
                    	</tbody>
                    </table>
                  		<div class="col-lg-12 col-md-6 col-sm-12" style="text-align: center;">
                  			{!! $data->appends(['search_nname'=>$data->nname])->render() !!}
                  		</div>
                  	</div>
              </div>
              <div class="slimScrollBar ui-draggable" style="background: rgb(153, 153, 153); height: 5px; position: absolute; bottom: 3px; opacity: 0.4; display: none; border-radius: 5px; z-index: 99; width: 1611px; left: 0px;"></div><div class="slimScrollRail" style="width: 100%; height: 5px; position: absolute; bottom: 3px; display: none; border-radius: 5px; background: rgb(51, 51, 51); opacity: 0.5; z-index: 90;">
              	
              </div>

				




</div>
</div>
</div>
</div>
</div>



@endsection
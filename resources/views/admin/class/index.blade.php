@extends('admin.layout.layout')

@section('content')
<div class="outlet">
	<ul class="breadcrumb"><li><i class="im-home"></i><a href="index.html">主页</a><i class="en-arrow-right7"></i></li><li><i class="im-list"></i>课程列表</ul>
    <!-- Start .outlet -->
    <!-- Page start here ( usual with .row ) -->
    <div class="row">
        <div class="col-lg-12">
            <!-- col-lg-12 start here -->
            <div class="panel panel-default plain toggle panelClose panelRefresh">
                <!-- Start .panel -->
                <div class="panel-heading white-bg">
                    <h1 class="">课程列表</h1>
                </div>
                <div class="search-page">
            <!-- Start .search-page -->
            
                <form class="form-inline search-page-form" action="/admin/class" method="get" style="width: 250px;float: right;">
                    <div class="well bn" style="background: white;margin-right: 10px;">
                        <div class="input-group">
                            <input type="text" class="form-control" name="lname" value="" placeholder="搜索">
                            <span class="input-group-btn">
                                <button type="submit" class="btn btn-primary"><i class="ec-search s16"></i></button>
                            </span>
                        </div>
                    </div>
                </form>
            
           
            
                <!-- col-lg- start here -->
                
            <!-- col-lg-12 end here -->
            
            <!-- col-lg-12 end here -->
        </div>
                <div class="panel-body">
                    <table class="table display" id="datatable">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>课程名称</th>
                                <th>缩略图</th>
                                <th>添加时间</th>
                                <th>操作</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $k=>$v)
                            <tr class="odd gradeX">
                                <td>{{ $v->id }}</td>
                                <td>{{ $v->lname }}</td>
                                <td>
                                    <div class="wrapper">
                                        <section id="examples" class="section examples-section">
                                            <div class="image-row">
                                                <a class="example-image-link" href="/uploads/{{$v->img}}" data-lightbox="example-2" title="Optional caption.">
                                                    <img class="example-image" src="/uploads/{{$v->img}}" alt="thumb-1" width="60" height="auto"/>
                                                </a>
                                            </div>
                                        </section>
                                    </div>
                                </td>
                                <td>{{ $v->created_at }}</td>
                                <td>
                                	<a href="/admin/class/{{ $v->id }}/edit" class="btn btn-primary">修改</a>
                                	<form style="display: inline-block;" method="post" action="/admin/class/{{ $v->id }}">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}
                                        <input type="submit" value="删除"  class="btn btn-danger">
                                    </form>
                                    <a href="/admin/classinfo/{{ $v->id }}/edit" class="btn btn-success">详情</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    
                    <div class="col-lg-10 text-center">
                        {!! $data->appends($request)->render() !!}


                    </div>
            </div>
            <!-- End .panel -->
        </div>
        <!-- col-lg-12 end here -->
    </div>
   
<!-- End .outlet -->
@endsection
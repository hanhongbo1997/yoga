@extends('admin.layout.layout')

@section('content')
<div class="outlet">
    <ul class="breadcrumb"><li><i class="im-home"></i><a href="index.html">主页</a><i class="en-arrow-right7"></i></li><li><i class="im-list"></i>视频列表</ul>
        <!-- Start .outlet -->
        <!-- Page start here ( usual with .row ) -->
        <div class="row">
            <div class="col-lg-12">
                <!-- col-lg-12 start here -->
                <div class="panel panel-default plain toggle panelClose panelRefresh">
                    <!-- Start .panel -->
                    <div class="panel-heading white-bg">
                        <h1 class="">视频列表</h1>
                    </div>
                    <div class="search-page">
                <!-- Start .search-page -->
                
                        <!-- <form class="form-inline search-page-form" action="/admin/videos" method="get" style="width: 250px;float: right;">
                            <div class="well bn" style="background: white;margin-right: 10px;">
                                <div class="input-group">
                                    <input type="text" class="form-control" name="search_vname" value="" placeholder="搜索">
                                    <span class="input-group-btn">
                                        <button type="submit" class="btn btn-primary"><i class="ec-search s16"></i></button>
                                    </span>
                                </div>
                            </div>
                        </form> -->
                    </div>
                </div>
                <div class="panel-body">
                    <table class="table display" id="datatable">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>评论课程标题</th>
                                <th>评论人</th>
                                <th>评论内容</th>
                                <th>评论时间</th>
                                <th>操作</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $k=>$v)
                            <tr class="odd gradeX">
                                <td>{{ $v->id }}</td>
                                <td>{{ $v->commentlesson['lname'] }}</td>
                                <td>{{ $v->commentuser['uname'] }}</td>
                                <td>{{ $v->content }}</td>
                                <td>{{ $v->created_at }}</td>
                                <td>
                                	<form style="display: inline-block;" method="post" action="/admin/Lessoncomment/{{ $v->id }}">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}
                                        <input type="submit" value="删除"  class="btn btn-danger">
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    
                    <div class="col-lg-10 text-center">
                       
                        {{ $data->links() }}


                    </div>

                </div>
                <!-- End .panel -->
            </div>
            <!-- col-lg-12 end here -->
        </div>
               
            <!-- End .outlet -->
@endsection
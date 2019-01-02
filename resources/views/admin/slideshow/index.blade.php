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
                                    <h3 class="panel-title">轮播图列表</h3>
                                    <h3 class="panel-title btn btn-success ml15"><a href="/admin/slideshow/create">轮播图添加</a></h3>
                                </div>
                                <div class="panel-body">

                                 <form action="/admin/slideshow" method="get">
                                {{csrf_field()}}
                                    选择页数：<select name="limit" id="">

                                                    <option value="5" @if($params['limit']=='5') selected
                                                    @endif>5</option>
                                                    <option 
                                                            @if($params['limit']=='10') selected
                                                    @endif
                
    
                                                    value="10">10</option>
                                                    <option 
                                                        @if($params['limit']=='20') selected
                                                    @endif
    
                                                    value="20">20</option>

                                    </select>
                                    <input type="text" name="sousuo">
                                    <button class="btn btn-info">搜索</button>
                                </form>
                               
                                    <table class="table display" id="datatable">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                               	<th>用户名</th>
                                               	<th>状态</th>
                                               	<th>缩略图</th>
                                                <th>链接</th>
                                                <th>操作</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                              
                                               
                                                @foreach ($data as $k => $v) 
                                              
                                            <tr class="odd gradeX">
                                                <td>{{$v->id}}</td>
                                                <td>{{$v->name}}</td>
                                               
                                                    
                                                
                                                    @if($v->status==1)
                                                        <td>详情</td>
                                                    @elseif($v->status==2)
                                                        <td>链接</td>
                                                    @elseif($v->status==0)
                                                        <td>只显示图片</td>
                                                    @endif
                                           
                                                <td>  <img src="{{$v->img}}" width="60px" > </td>
                                                <td>{{$v->link}}</td>
                                                <td>
                                                    <form action="/admin/slideshow/{{$v->id}}" method="post" style="display: inline-block;">
                                                    {{ csrf_field() }}
                                                    {{ method_field('DELETE') }}
                                                    <input type="submit" value="删除" class="btn btn-danger">
                                                    </form>
                                                	<a href="/admin/slideshow/{{$v->id}}/edit" class="btn btn-info">修改</a>
                                        

                                                    <a href="/admin/slideshow/{{$v->id}}" class="btn btn-warning">轮播图详情和修改</a>
                                                </td>
                                            </tr>
                                               @endforeach
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- End .panel -->
                        </div>
                        <!-- col-lg-12 end here -->
                    </div>
                   
                <!-- End .outlet -->
               
@endsection
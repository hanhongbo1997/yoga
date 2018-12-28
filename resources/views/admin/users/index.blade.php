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
                                    <h3 class="panel-title">用户列表</h3>
                                    <h3 class="panel-title btn btn-success ml15"><a href="/admin/users/create">用户添加</a></h3>
                                </div>
                                <div class="panel-body">
                                <form action="/admin/users" method="post">
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
                                    <button class="btn btn-info">搜索</button>
                                    <input type="text" name="sousuo">
                                </form>
                                    <table class="table display" id="datatable">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                               	<th>用户名</th>
                                               	<th>权限</th>
                                               	<th>用户邮箱</th>
                                               	<th>用户电话</th>
                                                <th>操作</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                              
                                               
                                                @foreach ($data as $k => $v) 
                                              
                                            <tr class="odd gradeX">
                                                <td>{{$v->uid}}</td>
                                                <td>{{$v->uname}}</td>
                                               
                                                    
                                                
                                                    @if($v->userinfo['status']==1)
                                                        <td>超级管理员</td>
                                                    @elseif($v->userinfo['status']==2)
                                                            <td>会员</td>
                                                    @elseif($v->userinfo['status']==3)
                                                        <td>普通用户</td>
                                                    @endif
                                           
                                                <td>{{$v->email}}</td>
                                               	<td>{{$v->phone}}</td>
                                                <td>
                                                    <form action="/admin/users/{{$v->uid}}" method="post" style="display: inline-block;">
                                                    {{ csrf_field() }}
                                                    {{ method_field('DELETE') }}
                                                    <input type="submit" value="删除" class="btn btn-danger">
                                                    </form>
                                                	<a href="/admin/users/{{$v->uid}}/edit" class="btn btn-info">修改</a>
                                        
                                                    <a href="/admin/users/{{$v->uid}}" class="btn btn-warning">用户详情</a>
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
                <div class="container">
                    @foreach ($data as $user)
                        {{ $user->name }}
                    @endforeach
                </div>

                {{ $data->appends($params['sousuo'])->links() }}
@endsection
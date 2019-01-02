@extends('admin.layout.layout')

@section('content')
	<div class="outlet">
                    <!-- Start .outlet -->
                    <!-- Page start here ( usual with .row ) -->
                    <div class="row">
                        <div class="col-lg-12">
                            <!-- col-lg-12 start here -->
                            <div class="panel panel-default plain toggle panelClose panelRefresh">
                                <!-- Start .panel -->
                                <div class="panel-heading white-bg">
                                    <h4 class="panel-title">视频列表</h4>
                                </div>
                                <div class="panel-body">
                                    <table class="table display" id="datatable">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>视频名称</th>
                                                <th>缩略图</th>
                                                <th>视频状态</th>
                                                <th>视频时长</th>
                                                <th>添加时间</th>
                                                <th>操作</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="odd gradeX">
                                                <td>1</td>
                                                <td>钢铁侠大战葫芦娃</td>
                                                <td>img</td>
                                                <td>上线</td>
                                                <td>120min</td>
                                                <td>2018-11-22</td>
                                                <td>
                                                	<a href="#" class="btn btn-info">修改</a>
                                                	<a href="#" class="btn btn-danger">删除</a>
                                                </td>
                                            </tr>
                                            
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
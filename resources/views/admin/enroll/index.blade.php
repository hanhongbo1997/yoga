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
                                <div class="panel-heading">
                                    <h3 class="panel-title">报名者列表</h3>
                                </div>
                                <div class="panel-body">
                                <form action="/admin/enroll" method="get">
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
                                               	<th>公司/单位名称</th>
                                               	<th>姓名</th>
                                               	<th>用户电话</th>
                                                <th>公司地址</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                              
                                               
                                                @foreach ($data as $k => $v) 
                                              
                                            <tr class="odd gradeX">
                                                <td>{{$v->id}}</td>
                                                <td>{{$v->cname}}</td>
                                                <td>{{$v->name}}</td>
                                                <td>{{$v->phone}}</td>
                                                <td>{{$v->caddress}}</td>
                                                
                                          
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


                {{ $data->appends($params['sousuo'])->links() }}
@endsection,
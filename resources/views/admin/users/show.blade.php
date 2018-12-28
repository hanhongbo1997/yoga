@extends('admin.layout.layout')

@section('content')

    <div class="outlet">
                    <!-- Start .outlet -->
                    <div class="row">
                        <!-- Start .row -->
                        <div class="col-lg-12">
                            <!-- Start col-lg-12 -->
                            <div class="panel panel-default toggle">
                                <!-- Start .panel -->
                                <div class="panel-heading">
                                    <h3 class="panel-title">{{$title}}</h3>
                                    <h3 class="panel-title btn btn-success ml15"><a href="/admin/users/create">用户添加</a></h3>
                                     <h3 class="panel-title btn btn-success ml15"><a href="/admin/users">用户列表</a></h3>
                                </div>
                                <div>
									   @if($data->userinfo['status']==1)
								           <div class="panel-heading">
			                                    <h3 class="panel-title" style="color:red">尊敬的管理员  以下是你的信息</h3>
			                                </div>
								       @elseif($data->userinfo['status']==2)
								              <div class="panel-heading">
				                                    <h3 class="panel-title" style="color:purple">高贵的会员  以下是你的信息</h3>
				                                </div>
								       @elseif($data->userinfo['status']==3)
								          <div class="panel-heading">
			                                    <h3 class="panel-title" style="color:black">亲爱的用户  以下是你的信息</h3>
			                                </div>
								       @endif
								           <div class="form-group">
                                            <div class="col-lg-offset-2">
                                                <button class="btn btn-success ml15" type="submit">用户信息</button>
                                            </div>
                                        </div>
								</div>	
                                <div class="panel-body">
                                    <form action="/admin/users/{{$data->uid}}"  method="post"  class="form-horizontal group-border hover-stripped" role="form" id="validate">
                                        {{ csrf_field() }}
                                        {{ method_field('PUT') }}
                                       
                                        <div class="form-group">
                                            <label class="col-lg-2 control-label">用户名称</label>
                                            <div class="col-lg-10">
                                                <input type="text" class="form-control required" id="uname" value="{{$data->uname}}" name="uname" placeholder="输入你的用户名">
                                            </div>
                                        </div>


                                                                                <div class="form-group">
                                            <label class="col-lg-2 control-label">电子邮箱</label>
                                            <div class="col-lg-10">
                                                <input id="email" name="email" type="email" class="form-control" value="{{$data->email}}" placeholder="输入你的电子邮箱">
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label class="col-lg-2 control-label">手机号码</label>
                                            <div class="col-lg-10">
                                                <input id="phone" name="phone" type="number" class="form-control" value="{{$data->phone}}" placeholder="输入你的手机号码">
                                            </div>
                                        </div>

                                       

                                    
                                        <!-- End .form-group  -->
                                    </form>
                                </div>
                            </div>
                            <!-- End .panel -->
                        </div>
                        <!-- End col-lg-12 -->
                    </div>
                    <!-- End .row -->
                    <!-- Page End here -->
                </div>
                <!-- End .outlet -->
@endsection

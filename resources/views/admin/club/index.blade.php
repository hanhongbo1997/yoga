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
                        
<div class="table-responsive" style="overflow: hidden; width: 100%; height: auto;">
  <div id="datatable_wrapper" class="dataTables_wrapper form-inline" role="grid">
    <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-12 text-center">
<div id="datatable_length" class="dataTables_length">
          <label>
            <span>
            <!-- 搜索   -->
            <div class="dataTables_filter" id="datatable_filter">
                            <label>
                              <form action="/admin/club">
                                <input type="text" aria-controls="datatable" name="search_nname" class="form-control input-large" placeholder="搜索">
                              </form>
                            </label>
             </div>
             <!-- 搜索   -->
            </span>
          </label>
        </div>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12 text-right" >
        <!-- 添加瑜伽馆 -->
      <a href="/admin/club/create">
        <button type="button" class="btn btn-success"><i class="im-plus"></i> 添加瑜伽馆</button>
      </a>
    </div>
    <table class="table display dataTable" id="datatable" aria-describedby="datatable_info">
      <thead>
        <tr role="row">
          <th class="sorting_asc" role="columnheader" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">瑜伽馆ID</th>
          <th class="sorting" role="columnheader" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">瑜伽馆名称</th>
          <th class="sorting" role="columnheader" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">地址</th>
          <th class="sorting" role="columnheader" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">创建时间</th>
          <th class="sorting" role="columnheader" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">主图</th>
          <th class="sorting" role="columnheader" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">操作</th></tr>
      </thead>
      <tfoot>
        <tr>
          <th rowspan="1" colspan="1">Rendering engine</th>
          <th rowspan="1" colspan="1">Browser</th>
          <th rowspan="1" colspan="1">Platform(s)</th>
          <th rowspan="1" colspan="1">Engine version</th>
          <th rowspan="1" colspan="1">CSS grade</th></tr>
      </tfoot>
      <tbody role="alert" aria-live="polite" aria-relevant="all">
      @foreach($data as $k=>$v)
        <tr class="gradeA odd">
          <td class="  sorting_1">{{ $v->cid }}</td>
          <td class=" ">{{ $v->cname }}</td>
          <td class=" ">{{ $v->caddr }}</td>

          <td class=" ">{{ $v->created_at }}</td>
          <td class="center ">
             <img src={{ $v->cimg }} width="60px" >
          </td>
          <td class="center ">
				     
       <a href="/admin/club/{{ $v->cid }}/edit" class="btn btn-yellow">修改</a>
          <form action="/admin/club/{{ $v->id }}" method="post" style="display: inline-block;">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}
            <input type="submit" value="删除" class="btn btn-pink">
            
          </form>
          
          <a href="/admin/club/{{ $v->cid }}" class="btn btn-primary">添加详情</a>
          <a href="/admin/club/details/{{ $v->cid }}" class="btn btn-purple">查看详情</a>
          </td>
         </tr>
      @endforeach
       
      </tbody>
    </table>
    <div class="row-">
      <div class="col-lg-6 col-md-6 col-sm-12">
       {!! $data->appends(['search_nname'=>$data->cname])->render() !!}
  </div>
</div>

@endsection
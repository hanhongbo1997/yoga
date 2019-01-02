@extends('admin.layout.layout')

@section('content')
                        
<div class="table-responsive" style="overflow: hidden; width: 100%; height: auto;">
  <div id="datatable_wrapper" class="dataTables_wrapper form-inline" role="grid">
    <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-12 text-center">
        <div id="datatable_length" class="dataTables_length">
          <label>
            <span>
              <select size="1" name="datatable_length" aria-controls="datatable" class="form-control input-small">
                <option value="10" selected="selected">10</option>
                <option value="25">25</option>
                <option value="50">50</option>
                <option value="100">100</option></select>entries</span>
          </label>
        </div>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12 text-right" >
        <!-- 添加視頻分類 -->
      <a href="/admin/lessonsort/create">
        <button type="button" class="btn btn-success"><i class="im-plus"></i> 添加分类</button>
      </a>
    </div>
    <table class="table display dataTable" id="datatable" aria-describedby="datatable_info">
      <thead>
        <tr role="row">
          <th class="sorting_asc" role="columnheader" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">ID</th>
          <th class="sorting" role="columnheader" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">分类名称</th>
          <th class="sorting" role="columnheader" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">所属分类ID</th>
          <th class="sorting" role="columnheader" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">所属路径</th>
          <th class="sorting" role="columnheader" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">分类状态</th>
          
          <th class="sorting" role="columnheader" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">操作</th></tr>
      </thead>
      <tfoot>
      
      </tfoot>
      <tbody role="alert" aria-live="polite" aria-relevant="all">
      @foreach($data as $k=>$v)
        <tr class="gradeA odd">
          <td class="  sorting_1">{{ $v->id }}</td>
          <td class=" ">{{ $v->lsname }}</td>
          <td class=" ">{{ $v->sid }}</td>

          <td class=" ">{{ $v->path }}</td>

          <td class=" ">

          {{ $v->status == 1 ? '激活' : '未激活' }}

          </td>
          
          <td class="center ">
                     
       <a href="/admin/lessonsort/{{ $v->id }}/edit" class="btn btn-yellow">修改</a>
       <a href="/admin/lessonsort/create/{{ $v->id }}" class="btn btn-sm btn-primary">添加子类</a>
          <form action="/admin/lessonsort/{{ $v->id }}" method="post" style="display: inline-block;">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}
            <input type="submit" value="删除" class="btn btn-pink">
            
          </form>
          
          
          </td>
         </tr>
      @endforeach
       
      <!-- </tbody> -->
    </table>
    
  </div>
</div>

@endsection
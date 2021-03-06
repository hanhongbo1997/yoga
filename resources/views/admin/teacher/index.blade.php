@extends('admin.layout.layout')

@section('content')

                        
<div class="table-responsive" style="overflow: hidden; width: 100%; height: auto;">
  <div id="datatable_wrapper" class="dataTables_wrapper form-inline" role="grid">
    <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-12 text-center">
        <div id="datatable_length" class="dataTables_length">
            <!-- 搜索   -->
          <div class="dataTables_filter" id="datatable_filter">
            <form action="/admin/teacher">
                <input type="text" aria-controls="datatable" name="search_nname" class="form-control input-large" placeholder="搜索">
            </form>
            
          </div>
             <!-- 搜索   -->
        </div>
      </div>
          <div class="col-lg-6 col-md-6 col-sm-12 text-right" >
        <!-- 添加瑜伽馆 -->
          <a href="/admin/teacher/create">
            <button type="button" class="btn btn-success"><i class="im-plus"></i> 添加瑜伽馆</button>
         </a>
        </div>
        <table class="table display dataTable" id="datatable" aria-describedby="datatable_info">
      <thead>
        <tr role="row">
          <th class="sorting_asc" role="columnheader" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">名师ID</th>
          <th class="sorting" role="columnheader" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">老师名字</th>
          
          <th class="sorting" role="columnheader" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">教龄</th>
         
          <th class="sorting" role="columnheader" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">性别</th>
          
          <th class="sorting" role="columnheader" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">所在地</th>
          <th class="sorting" role="columnheader" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">操作</th></tr>
      </thead>
      <tfoot>
      
      </tfoot>
      <tbody role="alert" aria-live="polite" aria-relevant="all">
      @foreach($data as $k=>$v)
        <tr class="gradeA odd">
          <td class="  sorting_1">{{ $v->tid }}</td>
          <td class=" ">{{ $v->tname }}</td>
          
          <td class=" ">{{ $v->seniority }}</td>
          <!-- <td class=" ">{{ $v->adept }}</td> -->
          <td class=" ">
          {{ $v->sex == 'm' ?'男':'女'}}
          <!-- <td>{{ $v->status == 1 ?'激活':'未激活'}}</td> -->
          <!-- {{ $v->sex }} -->
          </td>
        
          <td class=" ">{{ $v->add }}</td>
         <td>
          
        <!--   <td class="center ">
             <img src={{ $v->img }} width="60px" >
          </td>
          <td class="center "> -->
				     
       <a href="/admin/teacher/{{ $v->tid }}/edit" class="btn btn-yellow">修改</a>
          <form action="/admin/teacher/{{ $v->tid }}" method="post" style="display: inline-block;">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}
            <input type="submit" value="删除" class="btn btn-pink">
            
          </form>
         
          <a href="/admin/teacher/details/{{ $v->tid }}" class="btn btn-purple">查看详情</a>
          </td>
         </tr>
      @endforeach
       
      </tbody>
        </table>
        <div class="row-">
      <div class="col-lg-6 col-md-6 col-sm-12">
       {!! $data->appends(['search_nname'=>$data->tname])->render() !!}
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
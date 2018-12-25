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
      <div class="col-lg-6 col-md-6 col-sm-12 text-center">
        <div class="dataTables_filter" id="datatable_filter">
          <label>
            <input type="text" aria-controls="datatable" class="form-control input-large" placeholder="Search"></label>
        </div>
      </div>
    </div>
    <table class="table display dataTable" id="datatable" aria-describedby="datatable_info">
      <thead>
        <tr role="row">
          <th class="sorting_asc" role="columnheader" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">瑜伽馆ID</th>
          <th class="sorting" role="columnheader" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">瑜伽馆名称</th>
          <th class="sorting" role="columnheader" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">地址</th>
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
          <td class="center "><img src="{{ $v->cimg }}"></td>
          <td class="center ">
				<a href=""><button class="btn btn-success">修改</button></a>
				<a href=""><button class="btn btn-warning">查看详情</button></a>
				<a href=""><button class="btn btn-danger">删除</button></a>
				
          </td>
         </tr>
      @endforeach
       
      </tbody>
    </table>
    <div class="row-">
      <div class="col-lg-6 col-md-6 col-sm-12">
        <div class="dataTables_info" id="datatable_info">Showing 1 to 10 of 57 entries</div></div>
      <div class="col-lg-6 col-md-6 col-sm-12">
        <div class="dataTables_paginate paging_bs_full" id="datatable_paginate">
          <ul class="pagination">
            <li class="disabled">
              <a tabindex="0" class="paginate_button first" id="datatable_first">First</a></li>
            <li class="disabled">
              <a tabindex="0" class="paginate_button previous" id="datatable_previous">Previous</a></li>
            <li>
              <a tabindex="0">1</a></li>
            <li>
              <a tabindex="0">2</a></li>
            <li>
              <a tabindex="0">3</a></li>
            <li>
              <a tabindex="0">4</a></li>
            <li>
              <a tabindex="0">5</a></li>
            <li>
              <a tabindex="0" class="paginate_button next" id="datatable_next">Next</a></li>
            <li>
              <a tabindex="0" class="paginate_button last" id="datatable_last">Last</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
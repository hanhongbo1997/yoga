@extends('admin.layout.layout')

@section('content')
<div class="jumbotron">
    <h1>{{$data->nname}}</h1>
    <p>{!! $data->newinfo->ncontent !!}</p>
</div>
@endsection

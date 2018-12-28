@extends('admin.layout.layout')

@section('content')
<div class="jumbotron">
    <h1>{{$data->nname}}</h1>
    <p>{!! $data->newinfo->ncontent !!}</p>
    <p><a class="btn btn-primary btn-lg btn-alt" role="button">Learn more</a>
    </p>
</div>
@endsection

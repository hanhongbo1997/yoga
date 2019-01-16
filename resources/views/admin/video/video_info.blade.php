@extends('admin.layout.layout')

@section('content')
<div class="outlet">
    <div class="col-lg-12 col-md-6">
                        
        <div class="page-header">
            <h5>视频详情</h5>
        </div>
            <div class="jumbotron">
                <h1>{{ $data->vname }}</h1>
                <p>{{ $data->videodetails->details }}</p>
            </div>
            <div class="jumbotron">
            <p>由&nbsp;&nbsp;<b>{{ $data->videodetails->writer }}</b> 于 <b>{{ $data->created_at }}</b>上传</p>
        </div>
        </div>         
    </div>                
</div>

<div class="col-lg-12 col-md-12">
    <div class="jumbotron">
         <video src="/app/aetherupload/{{ $data->videodetails->video }}" controls="controls" style="width: 100%;"></video>
    </div>
                            
    
    </div>
    </div>
    </div>
</div>

@endsection
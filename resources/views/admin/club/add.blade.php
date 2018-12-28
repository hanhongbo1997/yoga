@extends ('admin.user.index')
@section('content')

		<h1 class="text-center text-info">{{ $title or '列表'}}</h1>
		<table class="table">
			<tr>
				<td><h5>ID:</h5></td>
				<td> {{ $data->id }}  </td>	
			</tr>
			<tr>
				<td><h5>文章标题:</h5></td>
				<td> {{ $data->title }}  </td>	
			</tr>
			<tr>
				<td><h4>文章内容:</h4></td>
				<td></td>
			</tr>
			<tr>
				<td> {!! $data->userinfo->content !!}  </td>	

			</tr>
			<tr>
				<td></td>
			</tr>
		
		
		</table>


@endsection

	

@extends('layouts.app')

@section('content')
<table class="table table-hover">
	<thead>
		<th>
			Image
		</th>
		<th>
			Title
		</th>
		<th>
			Edit
		</th>
		<th>
			trashed
		</th>

		<tbody>


			@if($posts->count()>0)
			@foreach($posts as $post)
			<tr>
				<td><img src="{{$post->featured}}" alt="{{$post->title}}" width="100px" height="50px"></td>
				<td>{{$post->title}}</td>
				<td>
					<a href="{{route('post.edit', ['id' => $post->id])}}" class="btn btn-info">Edit</a>
				</td>

				<td>
					<a href="{{route('post.delete', ['id' => $post->id])}}" class="btn btn-danger">Trash</a>
				</td>

			</tr>
			@endforeach

			@else
			<tr>
				<th colspan="5" class="text-center">NO Post</th>
			</tr>
			@endif


		</tbody>
	</thead>


</table>


@stop


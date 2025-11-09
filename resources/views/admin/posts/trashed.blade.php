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
			Restore
		</th>

		<th>
			delete
		</th>

		<tbody>
			@if($posts->count()>0)
			@foreach($posts as $post)
			<tr>
				<td><img src="{{$post->featured}}" alt="{{$post->title}}" width="100px" height="50px"></td>
				<td>{{$post->title}}</td>
				<td>Edit</td>
				<td>
					<a href="{{route('post.restore', ['id' => $post->id])}}" class="btn btn-success">Restore</a>
				</td>
				<td>
					<a href="{{route('post.kill', ['id' => $post->id])}}" class="btn btn-danger">delete</a>
				</td>
			</tr>
			@endforeach

			@else
			<tr>
				<th colspan="5" class="text-center">NO trashed Post</th>
			</tr>
			@endif
		</tbody>
	</thead>


</table>


@stop


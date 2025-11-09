@extends('layouts.app')

@section('content')
<table class="table table-hover">
	<thead>
		<th>
			Tags name
		</th>
		<th>
			Editing
		</th>
		<th>
			Deleting
		</th>

		<tbody>


			@if($tags->count()>0)


			@foreach($tags as $tag)
			<tr>
				<td>{{$tag->tag}}</td>



				<td>
					<a href="{{route('tag.edit', ['id' => $tag->id ])}}" class="btn btn-xxs btn-info">
						<span class="glyphicon glyphicon-pencil">Edit</span>
					</a>
				</td>


				<td>
					<a href="{{route('tag.delete', ['id' => $tag->id ])}}" class="btn btn-xxs btn-danger">
						<span class="glyphicon glyphicon-trash">X</span>
					</a>
				</td>

			</tr>
			@endforeach

			@else
			<tr>
				<th colspan="5" class="text-center">NO tag</th>
			</tr>
			@endif



		</tbody>
	</thead>


</table>


@stop


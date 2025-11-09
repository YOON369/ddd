@extends('layouts.app')

@section('content')
<table class="table table-hover">
	<thead>
		<th>
			Cateogory name
		</th>
		<th>
			Editing
		</th>
		<th>
			Deleting
		</th>

		<tbody>


			@if($categories->count()>0)


			@foreach($categories as $category)
			<tr>
				<td>{{$category->name}}</td>



				<td>
					<a href="{{route('category.edit', ['id' => $category->id ])}}" class="btn btn-xxs btn-info">
						<span class="glyphicon glyphicon-pencil">Edit</span>
					</a>
				</td>


				<td>
					<a href="{{route('category.delete', ['id' => $category->id ])}}" class="btn btn-xxs btn-danger">
						<span class="glyphicon glyphicon-trash">X</span>
					</a>
				</td>

			</tr>
			@endforeach

			@else
			<tr>
				<th colspan="5" class="text-center">NO Cateogory</th>
			</tr>
			@endif



		</tbody>
	</thead>


</table>


@stop


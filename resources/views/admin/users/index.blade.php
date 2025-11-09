@extends('layouts.app')

@section('content')
<table class="table table-hover">
	<thead>
		<th>
			Image
		</th>
		<th>
			Name
		</th>
		<th>
			Permissions
		</th>
		<th>
			Delete
		</th>

		<tbody>


			@if($users->count() > 0)
			@foreach($users as $user)
			<tr>
				<td>
					<img src="{{asset($user->profile->avatar)}}" width="60px" height="60px">
				</td>

				<td>
					{{$user->name}}
				</td>
				<td>
					@if($user->admin)
					<a href="{{route('user.not.admin', ['id' => $user->id])}}" class="btn btn-xs btn-danger">Remove admin</a>
					@else
					<a href="{{route('user.admin', ['id' => $user->id])}}" class="btn btn-xs btn-success">Make admin</a>
					@endif
				</td>
				<td>
					@if(Auth::id() !== $user->id )
					<a href="{{route('user.delete', ['id' => $user->id])}}" class="btn btn-xs btn-danger">Delete user</a>

					@endif
				</td>
			</tr>
			@endforeach

			@else
			<tr>
				<th colspan="5" class="text-center">NO users</th>
			</tr>
			@endif


		</tbody>
	</thead>


</table>


@stop


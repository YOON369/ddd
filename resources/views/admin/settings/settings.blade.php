@extends('layouts.app')


@section('content')


@include('admin.includes.errors')


<div class="panel panel-default">
	<div class="panel-heading">
		Edit blog settings

	</div>

	<div class="panel-body">
		<form action="{{route('settings.update')}}" method="post">
			{{csrf_field()}}

			<div class="form-group">
				<label for="name">Site name</label>
				<input type="text" name="site_name"  value="{{$settings->site_name}}" class="form-control">
			</div>


			<div class="form-group">
				<label for="name">Address</label>
				<input type="text" name="address"  value="{{$settings->address}}" class="form-control">
			</div>

			<div class="form-group">
				<label for="name">youtube</label>
				<input type="text" name="youtube"  value="{{$settings->youtube}}" class="form-control">
			</div>


			<div class="form-group">
				<label for="name">facebook</label>
				<input type="text" name="facebook"  value="{{$settings->facebook}}" class="form-control">
			</div>


			<div class="form-group">
				<label for="name">instargram</label>
				<input type="text" name="instargram"  value="{{$settings->instargram}}" class="form-control">
			</div>

			<div class="form-group">
				<label for="name">Contact number</label>
				<input type="text" name="contact_number"  value="{{$settings->contact_number}}" class="form-control">
			</div>



			<div class="form-group">
				<label for="name">Contact email</label>
				<input type="text" name="contact_email"  value="{{$settings->contact_email}}" class="form-control">
			</div>






			<div class="form-group">
				<div class="text-center">
					<button type="submit" class="btn btn-success">Update site</button>
				</div>
			</div>



		</form>

	</div>


</div>


@stop

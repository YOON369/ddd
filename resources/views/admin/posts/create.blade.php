@extends('layouts.app')


@section('content')



@include('admin.includes.errors')


<div class="panel panel-default">
	<div class="panel-heading">
		create new post

	</div>

	<div class="panel-body">
		<form action="{{route('post.store')}}" method="post" enctype="multipart/form-data">
			{{csrf_field()}}

			<div class="form-group">
				<label for="title">Title</label>
				<input type="text" name="title" class="form-control">
			</div>

			<div class="form-group">
				<label for="time">Time</label>
				<input type="text" name="time" class="form-control">
			</div>


			<div class="form-group">
				<label for="youtube_movie">예고편</label>
				<input type="text" name="youtube_movie" class="form-control">
			</div>



			<div class="form-group">
				<label for="featured">Featured image</label>
				<input type="file" name="featured" class="form-control">
			</div>

			<div class="form-group">
				<label for="category">Selete a Category</label>
				<select name="category_id" id="category" class="form-control">
					@foreach($categories as $category)
					<option value="{{$category->id}}">{{$category->name}}</option>
					@endforeach

				</select>

			</div>

			<div class="form-group">
				<label for="tags">Selete Tags
				</label>
				@foreach($tags as $tag)
				<div class="checkbox">
					<label>	<input type="checkbox" name="tags[]" value="{{$tag->id}}"> {{$tag->tag}}</label>
				</div>
				@endforeach

			</div>

			<div class="form-group">
				<label for="content">Content</label>
				<textarea name="content" id="content" cols="5" rows="5" class="form-control"></textarea>
			</div>



			<div class="form-group">
				<div class="text-center">
					<button type="submit" class="btn btn-success">Create Post</button>
				</div>
			</div>



		</form>

	</div>


</div>


@stop



@extends('layouts.master')
@section('content')

<h1>Create:</h1>

<form action="{{ action('PostsController@store') }}" method="POST">
{!! csrf_field() !!}
	<div class="form-group">
		<label for="title">Title:</label>
		<input type="text" name="title" id="title" value="{{ old('title') }}" class="form-control"><br>
			@if ($errors->has('title'))
				{{ $errors->first('title')}}
			@endif
	</div>

	<div class="form-group">
		<label for="content">Content:</label>
		<textarea type="text" name="content" id="content" rows="5" cols="20" value="{{ old('title') }}" class="form-control"></textarea><br>
			@if ($errors->has('content'))
				{{ $errors->first('content')}}
			@endif 
	</div>

	<div class="form-group">
		<label for="url">URL:</label>
		<input type="text" id="url" name="url" value="{{ old('title') }}" class="form-control"><br>
			@if ($errors->has('url'))
				{{ $errors->first('url')}}
			@endif 
	</div>
<input type="submit">
</form>



<!-- - Make sure the post create form can display old input. ?*?*?*?*?*?

- Create an edit.blade.php that's capable of displaying and editing old input.
- Create a mechanism for deleting posts.
- - To test our controller and see if the old input is being properly displayed, we can use the following:

	- return back()->withInput(); -->
@stop
@extends('layouts.master')

@section('content')
	<!-- There should be a form here... -->
	<form action="/students/store">
		<div class="form-group">
			<label for="first_name">First Name</label>
			<input type="text" id="first_name" name="first_name" class="form-control">
		</div>
		<div class="form-group">
			<label for="description">Description</label>
			<input type="text" id="description" name="description" class="form-control">
		</div>
		<div class="form-group">
			<label for="subscribed">
			Subscribe to newsletter
			<input
				type="type="checkbox"
				id="subscribed"
				name="subscribed"
				value="{{ old('subscribed') }}">
			</label>
			<input type="checkbox" id="subscribed" name="subscribed" class="form-control">
		</div>
		<div class="form-group">
			<label for="school_name">School name</label>
			<input type="text" id="school_name" name="school_name" class="form-control">
		</div>
		<input type="submit" class="btn btn-default" value="Create student">
	</form>
@stop

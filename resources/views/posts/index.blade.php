@extends('layouts.master')

@section('content')
	<table class = "table">
		<tr>
			<th>Post Name</th>
		</tr>
	@foreach($posts as $post)
		<tr>
			<td>{{$post->title}}</td>
		</tr>
	@endforeach
	</table>
@stop
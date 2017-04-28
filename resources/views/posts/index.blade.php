@extends('layouts.master')

@section('content')

	@foreach($posts as $post)
		<a href="{{ action('PostsController@show', $post->id) }}">
			<div class="col-xs-12" id="post_box">
				<div class="col-xs-12" id="post_title">{{$post->title}}</div>
				<br>

				<div class="post_content">{{$post->content}}</div>
				<br>

				<div class="post_url">{{$post->url}}</div>

				<div>Posted on: {{ $post->created_at->setTimezone('America/Chicago')->toDayDateTimeString() }}</div>
				<br>

            	@if($post->created_at != $post->updated_at)

                <div>Edited {{ $post->updated_at->setTimezone('America/Chicago')->diffForHumans() }}</div>
                <br>

            	@endif
			</div>
		</a>
	@endforeach


	{!! $posts->render() !!}

@stop

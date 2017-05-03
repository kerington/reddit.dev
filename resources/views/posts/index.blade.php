@extends('layouts.master')

@section('content')

	<div div class="col-xs-12" id="search">
		<form method="get" action="">
		    <input type="text" class="search" name="search" id="search" placeholder="Search for...">
		    	<button type="submit" class="searchButton" onclick="index($request)">Search
		    		<i class="fa fa-search"></i>
		    	</button>
	    </form>
	</div>

	@foreach($posts as $post)
		<main>
			<a href="{{ action('PostsController@show', $post->id) }}">
				<div class="col-xs-4" id="post_box">
					<div class="col-xs-12" id="post_title"><h1>{{$post->title}}</h1></div>
						<br>

					<div class="post_content">
						@if (strlen($post->content) > 150)
							{{ substr ( $post->content, 0, 150) }}
						@else {{$post->content}}
						@endif...
					</div>
						<br>

					<!-- <div class="post_url">{{$post->url}}</div> -->
					<div>Created By: {{$post->user->name}}</div>

					<div>Posted on: {{ $post->created_at->setTimezone('America/Chicago')->toDayDateTimeString() }}</div>

	            	@if($post->created_at != $post->updated_at)

	                <div>Edited {{ $post->updated_at->setTimezone('America/Chicago')->diffForHumans() }}</div>
	                
	            	@endif
				</div>
			</a>
		</main>
	@endforeach
	<hr>
	<section>
		<div class="container">
			<div class="col-xs-12 offset-xs-6" id="buttons">
			{!! $posts->render() !!}
			</div>
		</div>
	</section>

<!-- <?php
	// $postCount = DB::table('posts')->orderBy('created_at', 'asc')->get();
?> -->


@stop

@extends('layouts.master')

@section('content')

	@foreach($posts as $post)
		<main>
			<a href="{{ action('PostsController@show', $post->id) }}">
				<div class="col-xs-4" id="post_box">
					<div class="col-xs-12" id="post_title">{{$post->title}}</div>
					<br>

					<div class="post_content">
						@if (strlen($post->content) > 200)
							{{ substr ( $post->content, 0, 200) }}
						@else {{$post->content}}
						@endif...</div>
					<br>

					<div class="post_url">{{$post->url}}</div>

					<div>Posted on: {{ $post->created_at->setTimezone('America/Chicago')->toDayDateTimeString() }}</div>
					<br>

	            	@if($post->created_at != $post->updated_at)

	                <div>Edited {{ $post->updated_at->setTimezone('America/Chicago')->diffForHumans() }}</div>
	                
	            	@endif
	                
					Created By:{{$post->user->name}}
				</div>
			</a>
		</main>
	@endforeach
	<br><br><br>
<section>
	<div class="container">
		<div class="col-xs-6" id="search_bar">
			<input type="text" name="search" placeholder="Search...">
		</div>
		<div class="col-xs-6" id="buttons">
		{!! $posts->render() !!}
		</div>
	</div>
</section>

<!-- <?php
	// $postCount = DB::table('posts')->orderBy('created_at', 'asc')->get();
?> -->


@stop

@extends('layouts.master')
@section('content')
<sections class="col-xs-12" id="post_box">
	<div class="col-xs-12" id="post_title">{{$post->title}}</div>
	<br>

	<div class="post_content">{{$post->content}}

	</div>
	<br>

	<div class="post_url">{{$post->url}}</div>

	<div class="post_url">{{$post->created_at->format('l jS \\of F Y g:i:s A')}}</div>

	<a href="{{ action('PostsController@edit', $post->id) }}" class='click_to_edit'>Click here to edit this post!</a>
<br>
	Created By:{{$post->user->name}}

    @if(session()->has('successMessage'))
        <p>{{ session('successMessage') }}</p>
    @endif

</section>


@stop

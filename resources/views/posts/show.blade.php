@extends('layouts.master')
@section('content')
<sections class="col-xs-12" id="post_box_show">
	<div class="col-xs-12" id="post_title">{{$post->title}}</div>
	<br>

	<div class="post_content">{{$post->content}}

	</div>
	<br>
	Created By:{{$post->user->name}}
	<div class="post_url">{{$post->created_at->format('l jS \\of F Y g:i:s A')}}</div>
	<div class="post_url">{{$post->url}}</div>

	<div class="col-xs-6 offset-xs-4">
	<a href="{{ action('PostsController@edit', $post->id) }}" class='btn btn-default'>EDIT THIS POST!</a>
	</div>

	<div class="col-xs-6">
	<form action="{{ action('PostsController@destroy', $post->id) }}" method="post">
		{{ csrf_field ()}}
		{{ method_field('DELETE') }}
		<button class='btn btn-default'>DELETE THIS POST!</button>
	</form>
	</div>

<br>

    @if(session()->has('successMessage'))
        <p>{{ session('successMessage') }}</p>
    @endif

</section>


@stop

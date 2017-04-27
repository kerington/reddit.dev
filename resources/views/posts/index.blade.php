@extends('layouts.master')

@section('content')

	@foreach($posts as $post)
		<div class="col-xs-12" id="post_box">
			<div class="col-xs-12" id="post_title">{{$post->title}}</div>
			<br>

			<div class="post_content">{{$post->content}}</div>
			<br>

			<div class="post_url">{{$post->url}}</div>
		</div>
		<!-- </tr> -->
	@endforeach
	<!-- </table> -->

	{!! $posts->render() !!}

@stop

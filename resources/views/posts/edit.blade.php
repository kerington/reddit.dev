@extends('layouts.master')
@section ('content')
<h1>Edit:</h1>

	<form method="POST" action="{{ action('PostsController@update', $post->id) }}">
	{!! csrf_field() !!}
<h4>Title:</h4>

<input type="text" name="title" value="{{ isset($post->title)? $post->title:old('title' )}}"><br>

<h4>Content:</h4><textarea type="text" name="content" rows="5" cols="20"> {{ isset($post->content)? $post->content:old('content' )}} </textarea></h4><br>

<h4>URL:</h4><input type="text" name="url"  value="{{ isset($post->url)? $post->url:old('url' )}}"><br>


</textarea>
<input type="submit">

{{ method_field('PUT') }}

</form>
@stop
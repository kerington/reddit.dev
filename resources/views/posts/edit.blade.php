@extends('layouts.master')
@section ('content')
<h1>Edit:</h1>

<form method="POST" action="{{ action('PostsController@store') }}">
{!! csrf_field() !!}
<h4>Title:</h4>

<input type="text" name="title" value="{{old('title')}}"><br>

<h4>Content:</h4><textarea type="text" name="content" rows="5" cols="20">{{old('content')}}</textarea></h4><br>

<h4>URL:</h4><input type="text" name="website"  value="{{old('website')}}"><br>


</textarea>
<input type="submit">
</form>
@stop
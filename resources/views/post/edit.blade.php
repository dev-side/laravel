@extends('post/master')

@section('content')
	
	
	<hr>
	<h2>Edit post</h2>
	<form action="{{url('/post/update/'. $post->id)}}" method="post">

		{{ csrf_field() }}

		Title <br>
		<input type="text" name="title" value="{{$post->title}}"><br><br>

		Body <br>
		<textarea name="body" rows="8" cols="80">{{$post->body}}</textarea><br> <br>

		<input type="submit" value="Update Post">
	</form>
@stop
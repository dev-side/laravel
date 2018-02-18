@extends('post/master')

@section('content')
	
	<table border="1">
		<tr>
			<th>Post Title</th>
			<th>Category</th>
			<th>Date</th>
			<th>#</th>
		</tr>
		@foreach($posts as $post)
			<tr>
				<td>
					<a href="{{url('/post/view/'.$post->id)}}">{{$post['title']}}</a>
				</td>
				<td>-</td>
				<td>{{$post->created_at}}</td>
				<td>
					<a href="{{url('/post/edit/'. $post->id)}}">Edit</a>
					<a href="{{url('/post/delete/'. $post->id)}}">Del</a>
				</td>
			</tr>
		@endforeach
	
	</table>
	<hr>
	<h2>New post</h2>
	<form action="{{url('/post/add')}}" method="post">

		{{ csrf_field() }}

		Title <br>
		<input type="text" name="title"><br><br>

		Body <br>
		<textarea name="body" rows="8" cols="80"></textarea><br> <br>

		<input type="submit" name="Add Post">
	</form>
@stop
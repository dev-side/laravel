
@extends('post/master')

@section('content')
<a href="{{url('/post/list')}}">Post List</a>
<h1>{{$post->title}}</h1>
<p>{{$post->body}}</p>
@stop
<?php 


	namespace App\Http\Controllers;

	use App\Http\Controllers\Controller;
	use App\Post;
	use App\Category;

	/**
	* Index
	*/
	class PostController extends Controller
	{
		
		function index()
		{
			$posts = Post::all();
			$cats = Category::all();
			return view("post/index",[
				"posts" => $posts,
				"cats" => $cats
			]);
		}
		function view($id)
		{
			$post = Post::find($id);
			return view("post/view",[
				"post"=>$post
			]);
		}

		function add()
		{
			$post = new Post();
			$post->title = request()->title;
			$post->body = request()->body;
			$post->category_id = request()-> category_id;
			$post->save();

			return redirect('post/list');

		}
		
		function delete($id)
		{
			$post =Post::find($id);
			$post->delete();
			return redirect('post/list');

		}

		function edit($id)
		{
			$post = Post::find($id);
			
			return view('post/edit',["post"=>$post]);

		}function update($id)
		{
			$post = Post::find($id);
			$post->title = request()->title;
			$post->body = request()->body;
			$post->category_id = request()->category_id;
			$post->save();


			return redirect('post/list');

		}
	}
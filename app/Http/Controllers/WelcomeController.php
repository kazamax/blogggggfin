<?php namespace Curso\Http\Controllers;

use Curso\Post;

class WelcomeController extends Controller {


	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		$posts = \DB::table('posts')->orderBy('id', 'desc')->paginate(8);
		return view('welcome')
		->with('posts', $posts);
		
	}

	public function article($slug){
		$post = Post::findBySlug($slug);

		return view('article')
		->with('post', $post);
		}

	public function tags($tag){

		$posts = Post::where('tags', 'LIKE', '%'.$tag.'%')->get();
		return view('tags')
		->with('posts', $posts)
		->with('tag', $tag);
	}
}


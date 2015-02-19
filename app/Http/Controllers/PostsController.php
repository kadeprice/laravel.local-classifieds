<?php

namespace Classifieds\Http\Controllers;
use Classifieds\Post;
use Classifieds\User;
use Classifieds\Categories;
use Illuminate\Support\Facades\Auth;

class PostsController extends Controller {
    
        /**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct(Post $post)
	{
		$this->middleware('auth', ['except' => ['index','show','category']]);
                $this->post = $post;
	}
        

	/**
	 * Display a listing of posts
	 *
	 * @return Response
	 */
	public function index()
	{
            $posts = Post::approvedPosts();

            return view('posts.index', compact('posts'));
	}

	/**
	 * Show the form for creating a new post
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('posts.create');
	}

	/**
	 * Store a newly created post in storage.
	 *
	 * @return Response
	 */
	public function store(\Illuminate\Http\Request $request)
	{
            $this->validate($request, $this->post->rules);
            
            $post = new Post($request->all());
            $post->active = 1;
            $post->category_id = 1;
            Auth::user()->posts()->save($post);
            
            return redirect()->route('post.index');
            
            
	}

	/**
	 * Display the specified post.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$post = Post::findOrFail($id);

		return view('posts.show', compact('post'));
	}

	/**
	 * Show the form for editing the specified post.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$post = Post::find($id);

		return View::make('posts.edit', compact('post'));
	}

	/**
	 * Update the specified post in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$post = Post::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Post::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$post->update($data);

		return Redirect::route('posts.index');
	}

	/**
	 * Remove the specified post from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Post::destroy($id);

		return Redirect::route('posts.index');
	}
        
        /**
         * Shows list of all posts with passed category_id
         * 
         * @param type $id
         * 
         */
        public function category($key){
            $category = Categories::whereKey($key)->first();
            $posts = $category->posts()->whereApproved(true)->whereActive(true)->orderBy('id', 'desc')->get();
            return view('posts.index', compact('posts','category'));
        }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Post;
use App\User;
use Session;
use Log;


class PostsController extends Controller
{
    public function __construct()
    {
        // $this->middleware('auth', ['create', 'store', 'edit', 'update', 'destroy']); //SAME AS LINE BELOW
        $this->middleware('auth', ['except' => ['index', 'show']]);
        // $this->middleware('auth', ['only'] => ['create', 'store', 'edit', 'update', 'destroy']);
    }

    //**INDEX FUNCTION**//
    public function index(Request $request)
    {
        // $posts = App\Models\Post::with('user')->get();
        if ($request->has('search')) {
            $posts = Post::join('users', 'created_by', '=', 'users.id')
            ->where('title', 'LIKE', "%$request->search%")
            ->orWhere('name', 'LIKE', "%$request->search%")
            ->orderBy('created_by', 'ASC')
            ->paginate(6);
        } else {
            $posts = Post::orderBy('created_by', 'ASC')->paginate(6);
        }

        // $posts = Post::with('user')->paginate(6);

        // $data = [];
        // $data['posts'] = $posts;

        // return view('posts.index')->with($data);
    }


    //**CREATE FUNCTION**//
    public function create(Request $request)
    {
        if (!\Auth::check()) {
            redirect()->action('Auth\AuthController@getLogin');
        }

        return view('posts.create'); //IS GET
    }


    //**STORE FUNCTION**//
    public function store(Request $request)
    {
        $rules = [
            'title' => 'required|max:100',
            'url' => 'required',
            'content' => 'required',
        ];

    $this->validate($request, $rules);

        $post = new Post();
        $post->title = $request->title;
        $post->content = $request->content;
        $post->url = $request->url;
        $post->created_by = $loggedInUser = \Auth::id();
        

        // In the store method of your PostsController, use the Auth class to insert the currently logged-in user's id in the 'created_by' column.
        // Use the AuthController to ensure that only logged-in users can create posts.

        $post->save();

        Log::info("New post saved", $request->all());

        $request->session()->flash('successMessage', 'Post saved successfully');
        return redirect()->action('PostsController@show', [$post->id]);

        // $data = [];
        // $data['post'] = $post;

        // return view('posts.show')->with($data);
    }



    //**SHOW FUNCTION**//
    public function show($id)
    {
        $post = Post::find($id);

        if(!$post) {
            Log::info('Post with ID of $id cannot be found!');
            abort(404);
        }

        $data = [];
        $data['post'] = $post;

        return view('posts.show')->with($data);
    }

    //     return view('posts.show', ['post' => $post]);
    // }



    //**EDIT FUNCTION**//
    public function edit(Request $request, $id)
    {
        $post = Post::find($id);

        if(!$post) {
            Log::error("Post with ID of $id not found!");
            abort(404);
        }

        $data = [];
        $data['post'] = $post;

        return view('posts.edit')->with($data);
    }



    //**UPDATE FUNCTION**//
    public function update(Request $request, $id)
    {
        $rules = [
            'title' => 'required|max:100',
            'url'   => 'required|url',
            'content'   => 'required',
        ];

        $this->validate($request, Post::$rules);

        $post = Post::find($id);

        if (!$post) {
            Log::error("Post with ID of $id not found!");
            abort(404);
        }


        $post->title = $request->title;
        $post->url = $request->url;
        $post->content = $request->content;
        $post->created_by = $request->created_by;
        $post->save();

        $request->session()->flash('successMessage', 'Post updated successfully'); return redirect()->action('PostsController@show', [$post->id]);

        // return view('posts.show')->with($data);
    }



    //**DESTROY FUNCTION**//
    public function destroy($id)
    {
        $post = Post::find($id);

        if (!$post) {
            Log::error("Post with ID of $is not found!");
            abort(404);
        }

        $post->delete();

        $request->session()->flash('successMessage', 'Post deleted successfully');

        return view('posts.index');
    }
}







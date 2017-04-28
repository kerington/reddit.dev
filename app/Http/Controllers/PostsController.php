<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Post;
use Log;


class PostsController extends Controller
{


    //**INDEX FUNCTION**//
    public function index()
    {
        $posts = Post::paginate(4);

        $data = [];
        $data['posts'] = $posts;

        return view('posts.index')->with($data);
    }


    //**CREATE FUNCTION**//
    public function create()
    {
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

        $post = new \App\Models\Post();
        $post->title = $request->title;
        $post->content = $request->content;
        $post->url = $request->url;
        $post->created_by = 1;

        $post->save();

        $data = [];
        $data['post'] = $post;

        return view('posts.show')->with($data);
    }



    //**SHOW FUNCTION**//
    public function show($id)
    {
        $post = Post::find($id);

        $data = [];
        $data['post'] = $post;

        if(!$post) {
            Log::info('Post with ID $id cannot be found!');
            abort(404);
        }

        return view('posts.show')->with($data);
    }

    //     return view('posts.show', ['post' => $post]);
    // }



    //**EDIT FUNCTION**//
    public function edit($id)
    {
        $post = Post::find($id);

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

        $this->validate($request, $rules);

        $post = Post::find($id);


        $post->title = $request->title;
        $post->url = $request->url;
        $post->content = $request->content;
        $post->created_by = $request->created_by;
        $post->save();

        $data = [];
        $data['post'] = $post;

        return view('posts.show')->with($data);
    }



    //**DESTROY FUNCTION**//
    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();
        return view('posts.index');
    }
}







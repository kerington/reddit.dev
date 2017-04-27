<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;


class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = \App\Models\Post::all();
        return view ('posts.index', ['posts' => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create'); //IS GET
    }

    public function store(Request $request)
    {
        $rules = [
        'title' => 'required|max:100',
        'url'   => 'required'
    ];

    $this->validate($request, $rules);

        $post = new \App\Models\Post();
        $post->title = $request->title;
        $post->content = $request->content;
        $post->url = $request->website;
        $post->created_by = 1;
        $post->save();

        $data = [];
        $data['post'] = $post;

        return view('posts.show')->width($data);
        // return redirect()->action('PostsController@index');
    }

    public function show($id)
    {
        $post = \App\Models\Post::find($id);
        return view('posts.show', ['post' => $post]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('posts.edit');
    }

    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return 'Deleting post with ID ' . $id;

    }
}


// Update the store action on the PostsController to validate the inputs before creating the new post.
// Upon validation failure, redirect back to the create action with the validation errors. Update the create view so that all the validation errors are shown to the user.
// Reference the laravel docs on validation rules and add a validation rule to ensure that the 'url' is a valid url.


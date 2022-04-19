<?php

namespace App\Http\Controllers;

use App\Models\Post;

use Illuminate\Http\Request;


class PostsController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('posts.index' , ['posts' => $posts]);
    }

    public function edit(Post $post)
    {
        return view('posts.edit', ['post' => $post]);
    }

    public function update(Post $post)
    {

        request()->validate([
            'title' => 'required',
            'content' => 'required',
            'due' => 'nullable|date'
        ]);

        $post->update([
            'title' => request('title'),
            'content' => request('content'),
            'due' => request('due'),
        ]);

        return redirect('/posts');
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store()
    {
        request()->validate([
            'title' => 'required',
            'content' => 'required',
            'due' => 'nullable|date'
        ]);

        Post::create([
            'title' => request('title'),
            'content' => request('content'),
            'due' => request('due'),
        ]);

        return redirect('/posts');
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return redirect('/posts');
    }
}

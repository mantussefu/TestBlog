<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostValidate;
use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{
    public function index () {
        $posts = Post::latest()->get();
        return view('posts.index', compact('posts'));
    }

    public function show (Post $post) {
        return view('posts.show', compact('post'));
    }

    public function create () {
        return view('posts.create');
    }

    public function store (PostValidate $request) {

//        $request->validate([
//            'title' => 'required',
//            'body' => 'required'
//        ]);

        Post::create([
            'title' => request('title'),
            'body' => request('body'),
            'author' => 'bossul'
        ]);

        return redirect('/');
    }
}

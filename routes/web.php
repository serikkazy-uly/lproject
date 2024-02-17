<?php

use Illuminate\Support\Facades\Route;

use App\Post;

Route::get('/', function () {
    // dd(Post::all());
    $posts = Post::all();
    $posts =Post::simplePaginate(5);

    return view('welcome', ['posts' => $posts]);
});

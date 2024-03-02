
<?php

use App\Http\Controllers\UserController;

// use App\Post;
// use App\User;
use Illuminate\Support\Facades\Route;


// Route::get('/', function () {
    // $user = User::first();
    // dd($user);
    // $post = Post::first();
    // dd($user->posts->pluck('title')->all());
    // dd($post);
//hasMany:
    // $user->phone;
    // $user->comments;
    // $post->comments;
    // $comment->post;
    // $comment->user;
// });
Route::get('/users', [UserController::class, 'index'])->name('users.index');

Route::get('/users/create', [UserController::class, 'create'])->name('users.create');

Route::post('/users', [UserController::class, 'store'])->name('users.store');
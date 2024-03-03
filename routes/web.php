
<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// use App\Post;
// use App\User;

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
Route::get('/', function () {
    return view('welcome');
});
Route::get('/users', [App\Http\Controllers\UserController::class, 'index'])->name('user.index'); // list

Route::get('/users/create', [App\Http\Controllers\UserController::class, 'create'])->name('user.create'); // interface of create

Route::post('/users', [App\Http\Controllers\UserController::class, 'store'])->name('user.store'); // add user to db
Route::get('/users/{user}', [App\Http\Controllers\UserController::class, 'show'])->name('user.show'); // get only one user {id}
Route::get('/users/{user}/edit', [App\Http\Controllers\UserController::class, 'edit'])->name('user.edit'); // upd by one user
Route::put('/users/{user}', [App\Http\Controllers\UserController::class, 'update'])->name('user.update'); // upd by action
Route::delete('/users/{user}', [App\Http\Controllers\UserController::class, 'destroy'])->name('user.destroy');


<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/users', 'App\Http\Controllers\UserController@index')->name('user.index'); // list
Route::get('/users/create', 'App\Http\Controllers\UserController@create')->name('user.create'); // interface of create
Route::get('/users/update', 'App\Http\Controllers\UserController@update')->name('user.update'); // upd by action
Route::get('/users/delete', 'App\Http\Controllers\UserController@delete')->name('user.delete');
Route::get('/users/first_or_create', 'App\Http\Controllers\UserController@firstOrCreate')->name('user.firstOrCreate');

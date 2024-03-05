
<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/users', 'App\Http\Controllers\UserController@index')->name('user.index');
Route::get('/users/create', 'App\Http\Controllers\UserController@create');
Route::get('/users/update', 'App\Http\Controllers\UserController@update'); 
Route::get('/users/delete', 'App\Http\Controllers\UserController@delete');
Route::get('/users/first_or_create', 'App\Http\Controllers\UserController@firstOrCreate');
Route::get('/users/update_or_create', 'App\Http\Controllers\UserController@updateOrCreate');


Route::get('/main', 'App\Http\Controllers\MainController@index')->name('main.index');
Route::get('/about', 'App\Http\Controllers\AboutController@index')->name('about.index');
 

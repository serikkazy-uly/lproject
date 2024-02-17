<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

// Route::get('/', [LoginController::class, 'test']);
// Route::get('/', "Auth\LoginController@test");
Route::get('/', "App\Http\Controllers\Auth\LoginController@test");

Route::post('/test', function(Request $request){
    dd($request->all());
});
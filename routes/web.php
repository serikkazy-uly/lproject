<?php

use Illuminate\Support\Facades\Route;


Route::middleware(['guest', 'admin'])->group(function () {
    Route::get('/', function () {
        return view('welcome');
    });
});

Route::get('asdad', function(){
    echo 'login page';
})->name('login');

Route::post('/test', "App\Http\Controllers\Auth\LoginController@test");

// function(Request $request){
//     dd($request->all());
// }
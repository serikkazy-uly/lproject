<?php

namespace App\Http\Controllers;

use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('user.index', ['users' => $users]); // compact('users')
    }

    public function create()
    {
        return view('user.create');
    }


    public function store()
    {
        $data=request()->validate([
            'name' => 'string',
            'email' => 'string',
            'password' => 'string',
        ]);
        User::create($data);
        return redirect()->route('user.index');
        // dd($data);
        // dd(request()->all());
    }


    public function update(User $user)
    {
        $user = User::find(7);
        $user->update([
            'name' => 'updated',
            'email' => 'updated',
            'password' => 'updated',
        ]);


    }

    public function delete(User $user)
    {
        // dd('delete page');
        $user = User::withTrashed()->find(2);
        // dd($user->name);
        $user->restore(); // восстановление удаленной строки
        // $user->delete();
        // dd('deleted');
    }

    public function firstOrCreate()
    {
        // $user = User::find(1);
        $otherUser = [
            'name' => 'fara',
            'email' => 'fara@example.com',
            'password' => 'dadada',
        ];

        $user = User::firstOrCreate([
            'email' => 'dayana2@email.com',
        ], [
            'name' => 'dayana',
            'email' => 'dayana2@email.com',
            'password' => '123456',
        ]);
        // dump($user->name);
        // dd('end');
    }

    public function updateOrCreate()
    {
        // dd(111);
        $otherUser = [
            'name' => 'fara',
            'email' => 'fara@example.com',
            'password' => 'dadada',
        ];

        $user = User::updateOrCreate([
            'email' => 'dayana@email.com',
        ], [
            'name' => 'dayana',
            'email' => 'dayana@email.com',
            'password' => '123456',
        ]);
        // dump($user->name);
        // dd('end');
    }

    // public function main(){

    // }

}

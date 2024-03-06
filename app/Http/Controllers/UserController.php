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
        $data = request()->validate([
            'name' => 'string',
            'email' => 'string',
            'password' => 'string',
        ]);
        User::create($data);
        return redirect()->route('user.index');
    }

    public function show(User $user)
    {
        // $user = User::findOrFail();
        // dd($user->name);
        return view('user.show', ['user' => $user]);
    }

    public function edit(User $user)
    {
        // $user = User::findOrFail();
        // dd($user->name);
        return view('user.edit', ['user' => $user]);
    }


    public function update(User $user)
    {
        // dump($user->all());
        $data = request()->validate([
            'name' => 'string',
            'email' => 'string',
            'password' => 'string',
        ]);
        $user->update($data);
        return redirect()->route('user.show', $user->id);
        // dd($data);
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


    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('user.index');
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
    }


}

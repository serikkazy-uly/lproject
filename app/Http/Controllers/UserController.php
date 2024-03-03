<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        // return view('users.index');
        $users = User::all();
        return view('users.index', ['users' => $users]);
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(Request $request)
    {
        // dd($request);    
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);
        User::create($request->all());
        $newUser = User::create($data);

        return redirect(route('user.index'));
    }

    public function edit(User $user)
    {
        return view('users.edit', ['user' => $user]);
    }

    public function update(User $user, Request $request)
    {
        // dd($request);    
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);
        $user->update($data);
        return redirect(route('user.index'))->with('success', 'User Updated Succesffully');
    }

    public function destroy(User $user)
    {
        $user->delete();
        return redirect(route('user.index'))->with('success', 'User deleted Succesffully');
    }
}

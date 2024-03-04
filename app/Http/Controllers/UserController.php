<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        // dd($user);
        $users = User::all();
        // dd($users);
        return view('user.index', ['users' => $users]);
    }

    public function create()
    {
        $userArr = [
            [
                'name' => 'dayana2',
                'email' => 'dayana2@email.com',
                'password' => 'password2',
            ],
        ];

        foreach ($userArr as $user) {
            // dd($user);
            User::create($user); // Добавил юзера
        }
        dd('created');
        // return view('user.create');
    }

    // public function store(Request $request)
    // {
    //     // dd($request);    
    //     $data = $request->validate([
    //         'name' => 'required',
    //         'email' => 'required|email|unique:users',
    //         'password' => 'required|min:6',
    //     ]);
    //     User::create($data);
    //     return redirect(route('user.index'));
    // }

    // public function edit(User $user)
    // {
    //     return view('user.edit', ['user' => $user]);
    // }

    public function update(User $user)
    {
        $user = User::find(7);
        $user->update([
            'name' => 'updated',
            'email' => 'updated',
            'password' => 'updated',
        ]);
        // dd('updated');

        // $data = $request->validate([
        //     'name' => 'required',
        //     'email' => 'required|email|unique:users',
        //     'password' => 'required|min:6',
        // ]);
        // $user->update($data);
        // dd($user);
        // return redirect(route('user.index'))->with('success', 'User Updated Succesffully');
    }

    public function delete(User $user)
    {
        // dd('delete page');
        $user = User::withTrashed()->find(2);
        // dd($user->name);
        $user->restore();
        // $user->delete();
        dd('deleted');
        // $user->delete();
        // return redirect(route('user.index'))->with('success', 'User deleted Succesffully');
    }   
}

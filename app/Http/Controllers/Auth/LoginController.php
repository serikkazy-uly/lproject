<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;

class LoginController extends Controller
{

    protected $redirectTo = 'home';

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    function test()
    {
        return view('welcome');
    }
}

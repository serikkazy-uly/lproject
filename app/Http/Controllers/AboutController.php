<?php

namespace App\Http\Controllers;

use App\Models\User;

class AboutController extends Controller
{
    public function index()
    {
       
        return view('about');
        // dd('end');
    }

   

}

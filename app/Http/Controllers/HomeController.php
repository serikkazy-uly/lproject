<?php

namespace App\Http\Controllers;

use App\Facades\HomePageViewFacade;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('index');

        // Логирование просмотра главной страницы
        HomePageViewFacade::logPageView();
    }
}

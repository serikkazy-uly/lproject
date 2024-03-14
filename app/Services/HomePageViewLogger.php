<?php

namespace App\Services;

use Illuminate\Support\Facades\Log;

class HomePageViewLogger
{
    public function logPageView()
    {
        Log::info('Главная страница была просмотрена');
    }
}

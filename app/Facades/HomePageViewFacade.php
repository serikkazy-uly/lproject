<?php

namespace App\Facades;

use Illuminate\Support\Facades\Facade;

class HomePageViewFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'homepageviewlogger'; //ключ, под которым сервис-провайдер регистрирует экземпляр класса
    }
}

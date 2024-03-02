<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    public static function register()
    {
    }


    public function posts()
    {
        return $this->hasMany('App\Post');
    }
    public function phone()
    {
        return $this->hasOne('App\Post');
    }

    public function comments()
    {
        return $this->hasMany('App\Comment');
    }
}
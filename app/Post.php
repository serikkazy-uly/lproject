<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public $fillable =["title", "slug", "content", "date", "user_id"]; 
    // public $guarded = [];
}
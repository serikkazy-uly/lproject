<!-- <php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // public $fillable =["title", "slug", "content", "date", "user_id"]; 
    public $guarded = [];
    public $table = 'posts';

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    // for example:
    public function comments()
    {
        return $this->hasMany('App\Comment', 'commentable');
    }

} -->


//For example:
// class Comment{
//     public function post()
//     {
//         return $this->belongsTo('App\Post');
//     }

//     public function user()
//     {
//         return $this->belongsTo('App\User');
//     }
// }

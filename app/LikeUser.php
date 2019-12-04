<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LikeUser extends Model
{
    public function likes_user()
    {
        return $this->belongsTo('App\User', 'likes_user_id');
    }
    
    public function liked_user()
    {
        return $this->belongsTo('App\User', 'liked_user_id');
    }
}

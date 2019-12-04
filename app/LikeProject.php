<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LikeProject extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    
    public function project()
    {
        return $this->belongsTo('App\Project');
    }
}

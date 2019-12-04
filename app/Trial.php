<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trial extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function project()
    {
        return $this->belongsTo('App\Project');
    }

    public function comments()
    {
        return $this->hasMany('App\Comment');
    }

}

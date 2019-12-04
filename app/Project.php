<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    public function trials()
    {
        return $this->hasMany('App\Trial');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function store()
    {
        return $this->belongsTo('App\Store');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    public function projects()
    {
        return $this->hasMany('App\Project');
    }

    public function reviews()
    {
        return $this->hasMany('App\StoreReview');
    }
}

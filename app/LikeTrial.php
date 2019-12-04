<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LikeTrial extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    
    public function trial()
    {
        return $this->belongsTo('App\Trial');
    }
}

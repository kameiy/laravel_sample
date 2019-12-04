<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function trials()
    {
        return $this->hasMany('App\Trial');
    }

    public function reviews()
    {
        return $this->hasMany('App\StoreReview');
    }

    public function comments()
    {
        return $this->hasMany('App\Comment');
    }

    public function like_stores()
    {
        return $this->hasManyThrough(
            'App\Store',
            'App\LikeStore',
            'user_id',
            'id',
            'id',
            'id'
        );
    }

    public function like_projects()
    {
        return $this->hasManyThrough(
            'App\Store',
            'App\LikeProject',
            'user_id',
            'id',
            'id',
            'id'
        );
    }

    public function like_trials()
    {
        return $this->hasManyThrough(
            'App\Store',
            'App\LikeTrial',
            'user_id',
            'id',
            'id',
            'id'
        );
    }

    public function likes_users()
    {
        return $this->hasManyThrough(
            'App\User',
            'App\LikeUser',
            'likes_user_id',
            'id',
            'id',
            'id'
        );
    }

    public function liked_users()
    {
        return $this->hasManyThrough(
            'App\User',
            'App\LikeUser',
            'liked_user_id',
            'id',
            'id',
            'id'
        );
    }
}

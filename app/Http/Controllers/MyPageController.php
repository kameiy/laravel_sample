<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MyPageController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $like_stores = $user->like_stores;
        $like_projects = $user->like_projects;
        $like_trials = $user->like_trials;
        $likes_users = $user->likes_users;
        $liked_users = $user->liked_users;

        return view('mypage', [
            'user' => $user,
            'like_stores' => $like_stores,
            'like_projects' => $like_projects,
            'like_trials' => $like_trials,
            'likes_users' => $likes_users,
            'liked_users' => $liked_users
            ]);
    }
}

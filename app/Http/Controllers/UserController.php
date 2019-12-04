<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show(User $user)
    {
        $trials = $user->trials;
        return view('users.show', ['user' => $user, 'trials' => $trials]);
    }
}

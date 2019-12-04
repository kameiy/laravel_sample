<?php

namespace App\Http\Controllers;

use App\LikeUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LikeUserController extends Controller
{
    public function store(Request $request)
    {
        $like_user = new LikeUser;
        $like_user->likes_user_id = Auth::user()->id;
        $like_user->liked_user_id = $request->user_id;
        $like_user->save();
        return redirect('users/'.$like_user->liked_user_id);
    }

    public function destroy(Store $like_user)
    {
        $like_user->delete();
    }
}

<?php

namespace App\Http\Controllers;

use App\LikeTrial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LikeTrialController extends Controller
{
    public function store(Request $request)
    {
        $like_trial = new LikeTrial;
        $like_trial->user_id = Auth::user()->id;
        $like_trial->trial_id = $request->trial_id;
        $like_trial->save();
        return redirect('trials/'.$like_trial->trial_id);
    }

    public function destroy(Store $like_trial)
    {
        $like_trial->delete();
    }
}

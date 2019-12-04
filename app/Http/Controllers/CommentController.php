<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        $user = Auth::user();
        $comment = new Comment;
        $comment->user_id = $user->id;
        $comment->trial_id = $request->trial_id;
        $comment->comment = $request->comment;
        $comment->save();
        return redirect('projects/'.$comment->trial->project->id);
    }

    public function destroy(Store $comment)
    {
        $trial_id = $comment->trial_id;
        $comment->delete();
        return redirect('projects/'.$comment->trial->project->id);
    }
}

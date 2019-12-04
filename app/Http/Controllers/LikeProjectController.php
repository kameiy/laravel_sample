<?php

namespace App\Http\Controllers;

use App\LikeProject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LikeProjectController extends Controller
{
    public function store(Request $request)
    {
        $like_project = new LikeProject;
        $like_project->user_id = Auth::user()->id;
        $like_project->project_id = $request->project_id;
        $like_project->save();
        return redirect('projects/'.$like_project->project_id);
    }

    public function destroy(Store $like_project)
    {
        $like_project->delete();
    }
}

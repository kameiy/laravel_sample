<?php

namespace App\Http\Controllers;

use App\Trial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TrialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($project_id)
    {
        $user = Auth::user();
        return view('trials.create', ['project_id' => $project_id, 'user_id' => $user->id]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $trial = new trial;
        $trial->user_id = $request->user_id;
        $trial->project_id = $request->project_id;
        $trial->content = $request->content;
        $trial->url = $request->url;
        $trial->save();
        return redirect('projects/'.$trial->project_id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Trial  $trial
     * @return \Illuminate\Http\Response
     */
    public function show(Trial $trial)
    {
        $comments = $trial->comments;
        return view('trials.show', ['trial' => $trial, 'comments' => $comments]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Trial  $trial
     * @return \Illuminate\Http\Response
     */
    public function edit(Trial $trial)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Trial  $trial
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Trial $trial)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Trial  $trial
     * @return \Illuminate\Http\Response
     */
    public function destroy(Trial $trial)
    {
        //
    }
}

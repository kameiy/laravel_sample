<?php

namespace App\Http\Controllers;

use App\StoreReview;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StoreReviewController extends Controller
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
    public function create($store_id)
    {
        $user = Auth::user();
        return view('storeReviews.create', ['store_id' => $store_id, 'user_id' => $user->id]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $storeReview = new storeReview;
        $storeReview->user_id = $request->user_id;
        $storeReview->store_id = $request->store_id;
        $storeReview->content = $request->content;
        $storeReview->save();
        return redirect('stores/'.$storeReview->store_id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\StoreReview  $storeReview
     * @return \Illuminate\Http\Response
     */
    public function show(StoreReview $storeReview)
    {
        return view('storeReviews.show', ['storeReview' => $storeReview]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\StoreReview  $storeReview
     * @return \Illuminate\Http\Response
     */
    public function edit(StoreReview $storeReview)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\StoreReview  $storeReview
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, StoreReview $storeReview)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\StoreReview  $storeReview
     * @return \Illuminate\Http\Response
     */
    public function destroy(StoreReview $storeReview)
    {
        $store_id = $storeReview->store->id;
        $storeReview->delete();
        return redirect('stores/'.$store_id);
    }
}

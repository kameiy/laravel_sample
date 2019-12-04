<?php

namespace App\Http\Controllers;

use App\LikeStore;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LikeStoreController extends Controller
{
    public function store(Request $request)
    {
        $like_store = new LikeStore;
        $like_store->user_id = Auth::user()->id;
        $like_store->store_id = $request->store_id;
        $like_store->save();
        return redirect('stores/'.$like_store->store_id);
    }

    public function destroy(Store $like_store)
    {
        $like_store->delete();
    }
}

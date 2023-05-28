<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BookmarkController extends Controller
{

    //if isset store else destroy
    public function store(Request $request)
    {
        if ($request->user()->bookmarks()->where('event_id', $request->event_id)->exists()) {
            return $this->destroy($request);
        }else{
            $request->user()->bookmarks()->create(['event_id' => $request->event_id]);
        }
        return redirect()->route('home');
    }

    //destroy
    public function destroy(Request $request)
    {
        $request->user()->bookmarks()->where('event_id', $request->event_id)->delete();
        return redirect()->route('home');
    }

    //show
    public function show(Request $request)
    {
        $bookmarks = $request->user()->bookmarks()->get();
        return view('pages.bookmarks', compact('bookmarks'));
    }

}

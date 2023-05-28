<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrganiserController extends Controller
{
    public function index(Request $request)
    {
        $user = auth()->user();
        $bookmarkedEvents = $request->user()->bookmarks()->get();
        $recentlyEvents = $request->user()->bookings()->orderBy('created_at', 'desc')->take(30)->get();
        return view('pages.organiser_profile_view', compact('user', 'bookmarkedEvents', 'recentlyEvents'));
    }
}

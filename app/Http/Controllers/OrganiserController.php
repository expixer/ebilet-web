<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrganiserController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        return view('pages.organiser_profile_view', compact('user'));
    }
}

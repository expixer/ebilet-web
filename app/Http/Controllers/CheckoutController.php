<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function index(Request $request): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        $event = Event::find($request->event_id);
        $seats = $request->seats;
        $seatCount = count(array_filter($seats));
        return view('pages.checkout', compact('event', 'seats', 'seatCount'));
    }

    public function payConfirm(Request $request): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {

        $event = Event::find($request->event_id);
        $seats = ($event->seats);
        foreach (array_unique(explode(',', $request->seats)) as $seatId) {
            $seats[$seatId - 1] = $request->user()->id;
        }
        $event->update(['seats' => $seats]);
        return view('pages.booking_confirmed', compact('event'));
    }

}

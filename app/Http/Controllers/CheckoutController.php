<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function index(Request $request): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse
    {
        if (!auth()->user()) {
            return redirect()->route('sign_in');
        }

        $event = Event::find($request->event_id);
        $seats = $request->seats;
        $seatCount = count(array_filter($seats));
        $price = $event->lowest_price;
        $user = $request->user();
        return view('pages.checkout', compact('event', 'seats', 'seatCount', 'price', 'user'));
    }

    public function payConfirm(Request $request): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse
    {
        if (!auth()->user()) {
            return redirect()->route('home');
        }
        $event = Event::find($request->event_id);
        $seats = ($event->seats);
        if ($request->seats){
            foreach (array_unique(explode(',', $request->seats)) as $seatId) {
                $seats[$seatId - 1] = $request->user()->id;
            }
            $event->update(['seats' => $seats]);
        } else {
            $event->update(['tickets' => $event->tickets ? $event->tickets . ',' . $request->user()->id : $request->user()->id]);
        }
        $booking = \App\Models\Booking::create([
            'user_id' => $request->user()->id,
            'booking_number' => 'BK' . $request->user()->id . rand(1000, 9999),
            'event_id' => $request->event_id,
            'seats' => $request->seats,
            'seatCount' => $request->seat_count,
            'price' => $request->price,
        ]);
        return view('pages.booking_confirmed', compact('event'));
    }

}

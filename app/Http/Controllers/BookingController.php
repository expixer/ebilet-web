<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function show($user_id)
    {
        $bookings = \App\Models\Booking::where('user_id', $user_id)->get();
        return view('pages.bookings', compact('bookings'));
    }

    public function cancel($booking_id)
    {
        $booking = \App\Models\Booking::find($booking_id);
        $booking->delete();
        return redirect()->back();
    }

    public function confirm($booking_id)
    {
        $booking = \App\Models\Booking::find($booking_id);
        $booking->update(['status' => 'confirmed']);
        return redirect()->back();
    }

    public function reject($booking_id)
    {
        $booking = \App\Models\Booking::find($booking_id);
        $booking->update(['status' => 'rejected']);
        return redirect()->back();
    }

    public function create(Request $request)
    {
        $event = \App\Models\Event::find($request->event_id);
        $seats = ($event->seats);
        foreach (array_unique(explode(',', $request->seats)) as $seatId) {
            $seats[$seatId - 1] = $request->user()->id;
        }
        $event->update(['seats' => $seats]);
        $booking = \App\Models\Booking::create([
            'user_id' => $request->user()->id,
            'event_id' => $request->event_id,
            'seats' => $request->seats,
            'status' => 'pending',
        ]);
        return redirect()->route('bookings.show', $request->user()->id);
    }
}

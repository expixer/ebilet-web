<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function show($user_id)
    {
        $bookings = \App\Models\Booking::where('user_id', $user_id)->get();
        return response()->json($bookings);
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
        return response()->json($booking);
    }
}

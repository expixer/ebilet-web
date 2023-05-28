<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function index(Request $request): \Illuminate\Http\JsonResponse
    {
        $event = Event::find($request->event_id);
        $seats = $request->seats;
        $seatCount = count(array_filter($seats));
        $price = $event->lowest_price;
        $user = $request->user();
        return response()->json(compact('event', 'seats', 'seatCount', 'price', 'user'));
    }

    public function payConfirm(Request $request): \Illuminate\Http\JsonResponse
    {
        $event = Event::find($request->event_id);
        $seats = ($event->seats);
        foreach (array_unique(explode(',', $request->seats)) as $seatId) {
            $seats[$seatId - 1] = $request->user()->id;
        }
        $event->update(['seats' => $seats]);
        $booking = \App\Models\Booking::create([
            'user_id' => $request->user()->id,
            'booking_number' => 'BK' . $request->user()->id . rand(1000, 9999),
            'event_id' => $request->event_id,
            'seats' => $request->seats,
            'seatCount' => $request->seat_count,
            'price' => $request->price,
        ]);
        return response()->json($booking);
    }

}

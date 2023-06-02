<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\Event;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function index(Request $request): \Illuminate\Http\JsonResponse
    {
        return response()->json(Booking::all());
    }

    public function payConfirm(Request $request): \Illuminate\Http\JsonResponse
    {
        $event = Event::find($request->event_id);
        $seats = ($event->seats);
        if ($request->seats) {
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
        return response()->json($booking);
    }

    public function getBooking(Request $request): \Illuminate\Http\JsonResponse
    {
        $booking = Booking::find($request->booking_id);
        return response()->json($booking);
    }

    public function getBookings(Request $request): \Illuminate\Http\JsonResponse
    {
        $bookings = Booking::where('user_id', $request->user()->id)->get();
        return response()->json($bookings);
    }

    public function getBookingsByEvent(Request $request): \Illuminate\Http\JsonResponse
    {
        $bookings = Booking::where('event_id', $request->event_id)->get();
        return response()->json($bookings);
    }

    public function useTicket(Request $request): \Illuminate\Http\JsonResponse
    {
        $booking = Booking::where('booking_number', $request->booking_number)->firstOrFail();
        $booking->update(['isConfirmed' => true]);
        return response()->json($booking);
    }

}

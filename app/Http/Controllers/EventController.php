<?php

namespace App\Http\Controllers;

use App\Http\Requests\EventRequest;
use App\Models\Event;
use Arr;
use Carbon\Carbon;
use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('pages.create.create_venue_event');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(EventRequest $request)
    {
        $path = $request->file('image')->storeAs('events', $request->name . '-' . time() . '.jpg', 'public');
        $event = Event::create(
            array_merge(
                Arr::except($request->validated(), ['image']),
                [
                    'image' => $path,
                    'end_date' => Carbon::createFromFormat('Y-m-d H:i', $request->start_date)->addMinutes($request->duration),
                    'merchant_id' => auth()->user()->merchant->id,
                ]
            )
        );

        return response()->json($event, 201);
    }


    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show(Request $request, $event)
    {
        $event = Event::with(['products', 'merchant'])->find($event);
        if (auth()->check() && $request->user()->bookings()->count() > 0) {
            $lastBooking = $request->user()->bookings()->orderBy('created_at', 'desc')->first();
            $lastEvent = $lastBooking->event;
            $suggestionEvents = Event::with(['products', 'merchant'])
                ->where('events.category_id', $lastEvent->category_id)
                ->where('events.id', '!=', $lastEvent->id)
                ->leftJoin('products', 'event_id', 'events.id')
                ->leftJoin('product_inventories', 'product_inventories.product_id', 'products.id')
                ->groupBy('events.id')
                ->orderByDesc('events.created_at')
                ->limit(4)
                ->get(['events.*', \DB::raw('min(product_inventories.price) as min_price')]);
        } else {
            $suggestionEvents = Event::with(['products', 'merchant'])
                ->leftJoin('products', 'event_id', 'events.id')
                ->leftJoin('product_inventories', 'product_inventories.product_id', 'products.id')
                ->groupBy('events.id')
                ->get(['events.*', \DB::raw('min(product_inventories.price) as min_price')])
                ->random(4);
        }
        $bookmarks = auth()->user() ? auth()->user()->bookmarks()->pluck('event_id')->toArray() : [];
        return view('pages.venue_event_detail_view', compact('event', 'suggestionEvents', 'bookmarks'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

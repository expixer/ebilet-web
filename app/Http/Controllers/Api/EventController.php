<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\EventRequest;
use App\Http\Resources\EventResource;
use App\Models\Event;
use Arr;
use Carbon\Carbon;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index()
    {
        return EventResource::collection(Event::with(['products', 'merchant'])->get());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param EventRequest $request
     * @return EventResource
     */
    public function store(EventRequest $request)
    {
        $path = $request->file('image')->storeAs('events', $request->name . '-'. time() . '.jpg', 'public');
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

        return new EventResource($event);
    }

    /**
     * Display the specified resource.
     *
     * @param Event $event
     * @return EventResource
     */
    public function show($event)
    {
        return new EventResource(Event::with(['products', 'merchant'])->find($event));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param EventRequest $request
     * @param Event $event
     * @return EventResource
     */
    public function update(EventRequest $request, Event $event)
    {
        $event->update($request->validated());

        return new EventResource($event);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Event $event
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $event)
    {
        $event->delete();

        return response()->noContent();
    }
}

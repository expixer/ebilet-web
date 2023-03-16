<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\EventRequest;
use App\Http\Resources\EventResource;
use App\Models\Event;

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
        $event = Event::create($request->validated());

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

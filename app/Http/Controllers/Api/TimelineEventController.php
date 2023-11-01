<?php

namespace App\Http\Controllers\Api;

use App\Models\TimelineEvent;
use App\Http\Requests\StoreTimelineEventRequest;
use App\Http\Requests\UpdateTimelineEventRequest;

class TimelineEventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return TimelineEvent::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTimelineEventRequest $request)
    {
        return TimelineEvent::create($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(TimelineEvent $timelineEvent)
    {
        return $timelineEvent;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTimelineEventRequest $request, TimelineEvent $timelineEvent)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($timelineEventId)
    {
        $user = TimelineEvent::find($timelineEventId);
        $user->forceDelete();
    }
}

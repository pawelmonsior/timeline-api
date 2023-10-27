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
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTimelineEventRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(TimelineEvent $timelineEvent)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TimelineEvent $timelineEvent)
    {
        //
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
    public function destroy(TimelineEvent $timelineEvent)
    {
        //
    }
}

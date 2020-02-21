<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    /**
     * The attributes that are not mass assignable.
     *
     * @var array
     */
    protected $guarded = [
        'created_at', 'updated_at',
    ];

    protected $dates = [
        'start_date',
        'end_date',
    ];

    public function getAllEvents()
    {
        $events = Event::all();
        return view('events.index', ['events' => $events]);
    }

    public function showEvent($eventName)
    {
        $eventName = str_replace('_', ' ', $eventName);
        $event = Event::where('name', $eventName)->first();

        $nextEvent = Event::where('id', $event->id + 1)->first();
        if ($nextEvent) {
            $nextEvent = $nextEvent->name;
        } else {
            $nextEvent = null;
        }
        $previousEvent = Event::where('id', $event->id - 1)->first();
        if ($previousEvent) {
            $previousEvent = $previousEvent->name;
        } else {
            $previousEvent = null;
        }
        $eventregisters = EventRegister::where('event_id', $event->id)->get();

        return view('events.show', [
            'event' => $event, 
            'eventregisters' => $eventregisters, 
            'nextEvent' => $nextEvent, 
            'previousEvent' => $previousEvent]);
    }   
}

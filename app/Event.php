<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use App\Traits\NextAndPreviousEvents;

class Event extends Model
{
    use NextAndPreviousEvents;

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
        return ($events);
    }

    public function showEvent($eventName)
    {
        $eventName = str_replace('_', ' ', $eventName);

        $event = Event::where('name', $eventName)->first();

        $nextEvent = $this->nextEvent($event->id);

        $previousEvent = $this->previousEvent($event->id);

        $eventregisters = EventRegister::where('event_id', $event->id)->get();

     return collect( [
        'event' => $event,
        'eventregisters' => $eventregisters,
        'nextEvent' => $nextEvent,
        'previousEvent' => $previousEvent]);
    }
}

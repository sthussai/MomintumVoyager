<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Traits\DisplayStatus;
use App\Events\EventRegistrationCreated;
use App\Events\EventRegistrationDeleted;
use Illuminate\Database\QueryException;

class EventRegister extends Model
{
    use DisplayStatus;

    public function createNewEventRegistration($array)
    {
        try {
            $eventregister = new EventRegister();
            $eventregister->name = request()->name;
            $eventregister->email = request()->email;
            $eventregister->phone = request()->phone;
            $eventregister->status = 'New Registration Created';
            $eventregister->owner_id = auth()->user()->id;
            $eventregister->event_id = request()->event_id;
            $eventregister->event_name = request()->event_name;
            $eventregister->save();
            event(new EventRegistrationCreated($eventregister));
        } catch (QueryException $e) {
            return false;
        }
    }

    public function showEventRegistration($eventregister)
    {
        $eventregister = $this->styleStatus($eventregister);
        return($eventregister);
    }   
}

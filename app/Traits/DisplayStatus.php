<?php

namespace App\Traits;

use Illuminate\Http\Request;
use App\EventRegister;
use App\Event;

trait DisplayStatus
{
    public function getRegistrationStatus()
    {
        $eventregisters = EventRegister::where('owner_id', auth()->id())->get();
        foreach ($eventregisters as $eventregister) {
            if ($eventregister->status == 'New Registration Created') {
                $eventregister->status = "<span class='w3-small w3-pale-red w3-round-large w3-padding'>" . $eventregister->status . '</span>';
            } elseif ($eventregister->status == 'Cancelled') {
                $eventregister->status = "<span id='register' class='w3-small w3-grey w3-round-large w3-padding'>" . $eventregister->status . '</span>';
            } elseif ($eventregister->status == 'Confirmed: will pay in person') {
                $eventregister->status = "<span id='register' class='w3-small w3-blue w3-round-large w3-padding'>" . $eventregister->status . '</span>';
            } elseif ($eventregister->status == 'Paid Online') {
                $eventregister->status = "<span id='register' class='w3-green w3-round-large w3-padding'>" . $eventregister->status . '</span>';
            } else {
                $eventregister->status = "<span class='w3-small w3-margin-bottom w3-light-green w3-round-large w3-padding'>" . $eventregister->status . '</span>';
            }
        }
        return $eventregisters;
    }

    public function styleStatus($eventregister)
    {
        $online = null;
        $showform = null;
        $showDeleteForm = true;

        if ($eventregister->status == 'New Registration Created') {
            $showform = true;
            $eventregister->status = "<span class='w3-pale-red w3-round-large w3-padding'>" . $eventregister->status . '</span>';
        } elseif ($eventregister->status == 'Cancelled') {
            $showform = true;
            $eventregister->status = "<span id='register' class='w3-grey w3-round-large w3-padding'>" . $eventregister->status . '</span>';
        } elseif ($eventregister->status == 'Confirmed: will pay in person') {
            $showform = true;
            $eventregister->status = "<span id='register' class='w3-blue w3-round-large w3-padding'>" . $eventregister->status . '</span>';
        } elseif ($eventregister->status == 'Paid Online') {
            $showform = false;
            $online = false;
            $showDeleteForm = false;
            $eventregister->status = "<span id='register' class='w3-green w3-round-large w3-padding'>" . $eventregister->status . '</span>';
        } else {
            $showform = true;
            $online = true;
            $eventregister->status = "<span id='register' class='w3-light-green w3-round-large w3-padding'>" . $eventregister->status . '</span>';
        }
        $eventregister = collect(['eventregister' => $eventregister,
            'showform' => $showform,
            'online' => $online,
            'showDeleteForm' => $showDeleteForm,
        ]);
        return($eventregister);
    }
}

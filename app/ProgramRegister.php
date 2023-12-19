<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Traits\DisplayStatus;
use Illuminate\Database\QueryException;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Activitylog\LogOptions;

class ProgramRegister extends Model
{
    use DisplayStatus, LogsActivity;

    public function createNewProgramRegistration($array)
    {
        try {
            $programregister = new ProgramRegister();
            $programregister->name = request()->name;
            $programregister->email = request()->email;
            $programregister->phone = request()->phone;
            $programregister->status = 'New Registration Created';
            $programregister->owner_id = auth()->user()->id;
            $programregister->program_id = request()->program_id;
            $programregister->program_name = request()->program_name;
            $programregister->save();
        } catch (QueryException $e) {
            return false;
        }
    }

    public function showProgramRegistration($programregister)
    {
        $programregister = $this->styleStatus($programregister);
        return($programregister);
    }

    /*     Check that the event status in the request is one of the valid acceptable options. */
    /*     validStatus() from the trait DisplayStatus. */

    public function requestStatusChecked($request)
    {
        if ($this->validStatus($request)) {
            return true;
        } else {
            $request->session()->flash('Notice', 'Please Select a Valid Program Status!');
            return back();
        }
    }


    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults();
    }
}

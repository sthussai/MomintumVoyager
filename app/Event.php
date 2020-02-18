<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    //

    protected $dates = [
        'start_date',
        'end_date',
    ];

/*     public function getStartDateAttribute($value)
    {
        return Carbon::parse($value)->format('l M d, Y');
    }

    public function getEndDateAttribute($value)
    {

            return Carbon::parse($value)->format('l M d, Y');
        
    } */

}

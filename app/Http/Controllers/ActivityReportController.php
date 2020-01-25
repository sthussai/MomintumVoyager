<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\ActivityReport;

class ActivityReportController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $activityReport = new ActivityReport();

        $activityReport->name = request()->name;
        $activityReport->date = request()->date;
        $activityReport->category = request()->category;
        $activityReport->hours = request()->hours;
        $activityReport->approved = 'Pending approval';
        $activityReport->owner_id= Auth::user()->id;
    

        $activityReport->save();
        
        return redirect('/mprofile'); 
        

    }



}

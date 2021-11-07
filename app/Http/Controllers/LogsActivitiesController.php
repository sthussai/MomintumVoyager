<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class LogsActivitiesController extends Controller
{
    public function index()
    {
//        $activities = auth()->user()->actions;
        $activities = DB::table('activity_log')->get();
       // dd($activities);
        return view('vendor.voyager.activitieslog', ['activities' => $activities]);
        
    }

    public function gravy()
    {
        $users = User::paginate(10);
        return view('vendor.voyager.gravy', ['users' => $users]);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\User;
use App\Flight;
use App\Event;
use App\EventRegister;
use App\Program;
use App\ProgramRegister;
use App\ActivityReport;
use Spatie\Activitylog\Models\Activity;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except(['test', 'musers']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('welcome');
    }

    public function musers()
    {
        $users = User::paginate(10);

        return view('momintum.musers', ['users' => $users]);
    }

    public function mprofile()
    {
        $events = Event::paginate(4);
        $programs = Program::paginate(4);
        $user = Auth::user();
        $eventregisters = EventRegister::where('owner_id', auth()->id())->get();
        $programregisters = ProgramRegister::where('owner_id', auth()->id())->get();
        $activityreports = ActivityReport::where('owner_id', auth()->id())->get();
        $message = null;
        $cardonfile = null;
        return view('momintum.mprofile', 
        ['user' => $user,
        'cardonfile' => $cardonfile,
        'message' => $message,
           'events' => $events,
            'eventregisters' => $eventregisters,
           'programs' => $programs,
            'programregisters' => $programregisters,
             'activityreports' => $activityreports
        ]);
    }

    public function activitylog()
    {   
        $logs = Activity::all();
        $message = 'Activity logs';
        return view('momintum.activitylog',[
        'message' => $message,
        'logs' => $logs,
       ]); 
    }
    public function test()
    {   
        $logs = Activity::all();
        $message = 'Activity logs';
        return view('momintum.activitylog',[
        'message' => $message,
        'logs' => $logs,
       ]); 
    }

    public function locationinfo()
    {   
        $user = Auth::user();
        $ip = '2001:56a:f9a3:fd00:c84b:a911:3015:624b';
        $data = \Location::get($user->last_login_ip);
        $data = \Location::get($ip);
        return view('momintum.mlocation', ['user' => $user, 'data' => $data]);
    }
}

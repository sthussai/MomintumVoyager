<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\User;
use App\Flight;
use App\Event;
use App\EventRegister;
use App\ActivityReport;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except('musers');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');    
    }

    public function musers()
    {
        $users = User::paginate(5);

        return view('momintum.musers', ['users' => $users]);
    }

    public function mprofile()
    {
        $events = Event::paginate(4);
        $user = Auth::user();
        $eventregisters = EventRegister::where('owner_id', auth()->id())->get();
        $activityreports = ActivityReport::where('owner_id', auth()->id())->get();

        /*         if ($user->subscribed('Momintum')) {
                    //
                    $message='Subscribed to momintum!';
                } else{$message='No subscriptions';}

                if ($user->hasPaymentMethod()) {
                    //
                    $cardonfile='Yes';
                }else{$cardonfile='No Card on file';} */

        $message = null;
        $cardonfile = null;
        return view('momintum.mprofile', ['user' => $user, 'cardonfile' => $cardonfile, 'message' => $message, 'events' => $events, 'eventregisters' => $eventregisters, 'activityreports' => $activityreports]);
    }

    //test function to turn on/off admin features
    public function test()
    {
        $user = Auth::user();
        if ($user->hasPermissionTo('admin')) {
            $user->revokePermissionTo('admin');
        } elseif (!$user->hasPermissionTo('admin')) {
            $user->givePermissionTo('admin');
        }
        return back();
    }
}

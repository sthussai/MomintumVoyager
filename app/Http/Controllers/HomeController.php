<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\User;
use App\Flight;
use App\Event;
use App\EventRegister;
use App\ActivityReport;
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
        $message = null;
        $cardonfile = null;
        return view('momintum.mprofile', ['user' => $user, 'cardonfile' => $cardonfile, 'message' => $message, 'events' => $events, 'eventregisters' => $eventregisters, 'activityreports' => $activityreports]);
    }

    public function test()
    {
        $collection = collect([
            ['lat' => 53.51978872112979, 'lng' => -113.52213084697725],
            ['lat' => 53.519932252142254, 'lng' => -113.52233469486238],
            ['lat' => 53.51999604354725, 'lng' => -113.52245807647706],
            ['lat' => 53.520088540913875, 'lng' => -113.52259755134584],
            ['lat' => 53.52015233208357, 'lng' => -113.52273166179658],
            ['lat' => 53.52013957385732, 'lng' => -113.52291941642763],
            ['lat' => 53.52011724695212, 'lng' => -113.52320909500123],
            ['lat' => 53.520136384300145, 'lng' => -113.52352023124696],
            ['lat' => 53.52013319474274, 'lng' => -113.52379381656648],
            ['lat' => 53.5201300051851, 'lng' => -113.52407276630403],
            ['lat' => 53.52014914252736, 'lng' => -113.52428734302521],
            ['lat' => 53.52024153781535, 'lng' => -113.52429270744325],
            ['lat' => 53.52035954376579, 'lng' => -113.52429807186127],
            ['lat' => 53.52045841336309, 'lng' => -113.52428197860719],
            ['lat' => 53.52058279736744, 'lng' => -113.52427124977113],
            ['lat' => 53.52060512266288, 'lng' => -113.5241425037384],
        ]);

        $lat = $collection->pluck('lat');

        $lat->all();
        $lng = $collection->pluck('lng');

        $lng->all();

        $e = DB::table('activities')->where('id', '6')->value('subject_id');
        if ($e > 15) {
            $e = 0;
        }
        $response = response()->json([
            'geometry' => ['type' => 'Point',
                'coordinates' => [$lng[$e], $lat[$e]]],
            'type' => 'Feature',
            'properties' => []
        ]);
        $affected = DB::table('activities')
        ->where('id', 6)
        ->update(['subject_id' => $e + 1]);
        return($response);
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

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use App\EventRegister;

class EventController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);
        $this->event = new Event();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return $this->event->getAllEvents();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($eventName)
    {
        return $this->event->showEvent($eventName);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('events.create');
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
        $event = new Event();

        $event->owner_id = auth()->id();
        $event->type = request()->type;
        $event->name = request()->name;
        $event->description = request()->description;
        $event->url = request()->url;
        $event->cost = request()->cost;
        $start_date = request()->start_date;
        $start_date = date('Y-m-d', strtotime(str_replace('-', '/', $start_date)));
        $end_date = request()->end_date;
        $end_date = date('Y-m-d', strtotime(str_replace('-', '/', $end_date)));

        $event->start_date = $start_date;
        $event->end_date = $end_date;

        $event->save();

        return redirect('/events');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $event = Event::find($id);
        return view('events.edit', ['event' => $event]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $event = Event::find($id);
        $event->name = request()->name;
        $event->type = request()->type;
        $event->description = request()->description;
        $event->url = request()->url;
        $event->cost = request()->cost;
        $start_date = request()->start_date;
        $start_date = date('Y-m-d', strtotime(str_replace('-', '/', $start_date)));
        $end_date = request()->end_date;
        $end_date = date('Y-m-d', strtotime(str_replace('-', '/', $end_date)));
        $event->start_date = $start_date;
        $event->end_date = $end_date;
        $event->save();

        return redirect('/events');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $event = Event::find($id)->delete();

        return redirect('/events');
    }
}

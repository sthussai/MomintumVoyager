<?php

namespace App\Http\Controllers;

use Validator;
use Illuminate\Support\Collection;
use Illuminate\Http\Request;
use App\EventRegister;
use App\Event;
use Illuminate\Validation\Rule;

class EventRegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->EventRegister = new EventRegister();
        $this->middleware('auth');
    }

    public function index()
    {
        $eventregisters = $this->EventRegister->getRegistrationStatus();
        return view('eventregister.index', ['eventregisters' => $eventregisters]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($eventid)
    {
        $event = Event::find($eventid);
        return view('eventregister.create', ['event' => $event]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $messages = [
            'event_id.unique' => 'This user is already registered in this event!',
        ];

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'event_id' => Rule::unique('event_registers')->where(function ($query) {
                return $query->where('owner_id', auth()->user()->id);
            }),
            'phone' => 'required|digits_between:10,11',
        ], $messages)->validate();

        $this->EventRegister->createNewEventRegistration($request->all());
        $request->session()->flash('Notice', 'Event Registration Created Successfully!');
        return redirect('/eventregister');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(EventRegister $eventregister)
    {
        $this->EventRegister->showEventRegistration($eventregister);
        dd($eventregister);
        $event = Event::find($eventregister->event_id);

        //        $eventregister = collect([$eventregister, $event])->collapse();
        $eventregister = collect(['eventregister' => $eventregister, 'event' => $event]);

        ($eventregister['eventregister']->name);
        //$eventregister->put('price', 100);
        $eventregister->toArray();

        //        dd($eventregister['price']);
//        dd($eventregister[0]->name . '<br>' . $eventregister[1]->name);
        return view('eventregister.show', [
            'eventregister' => $eventregister,
            'event' => $event,
            'online' => $online,
            'showform' => $showform,
            'showDeleteForm' => $showDeleteForm
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $eventregister = EventRegister::find($id);
        return view('eventregister.edit', ['eventregister' => $eventregister]);
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
        $eventregister = EventRegister::find($id);

        $eventregister->name = request()->name;
        $eventregister->email = request()->email;
        $eventregister->phone = request()->phone;
        $eventregister->status = 'Registration Changed/Updated';
        $eventregister->owner_id = auth()->id();
        $eventregister->event_id = event()->id();

        $eventregister->save();

        return redirect('/eventregister');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $eventregister = EventRegister::findOrFail($id);

//        event(new EventRegistrationDeleted($eventregister));

        $eventregister->delete();

        $request->session()->flash('Notice', 'Event Registration Deleted');
        return redirect('/eventregister');
    }

    //This method updates the event registration status
    public function confirm(Request $request, EventRegister $eventregister)
    {
        $eventregister->status = $request->status;
        $eventregister->save();

        $event = Event::find($eventregister->event_id);

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

        return view('eventregister.show', [
            'eventregister' => $eventregister,
            'event' => $event,
            'online' => $online,
            'showform' => $showform,
            'showDeleteForm' => $showDeleteForm
        ]);
    }
}

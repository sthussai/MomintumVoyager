<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\EventRegister;  
use App\Event;

class EventRegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        //
        $eventregisters = EventRegister::where('owner_id', auth()->id())->get();
      //dd($eventregisters);
        foreach ($eventregisters as $eventregister){
        if($eventregister->status == 'New Registration Created'){
            $eventregister->status= "<span class='w3-small w3-pale-red w3-round-large w3-padding'>".$eventregister->status."</span>";
         } elseif($eventregister->status == 'Cancelled'){
            $eventregister->status="<span id='register' class='w3-small w3-grey w3-round-large w3-padding'>".$eventregister->status."</span>";
         } elseif($eventregister->status == 'Confirmed: will pay in person'){
             $eventregister->status="<span id='register' class='w3-small w3-blue w3-round-large w3-padding'>".$eventregister->status."</span>";
          } elseif($eventregister->status == 'Paid Online'){
                $eventregister->status="<span id='register' class='w3-green w3-round-large w3-padding'>".$eventregister->status."</span>";
            }
         else{
            $eventregister->status="<span class='w3-small w3-margin-bottom w3-light-green w3-round-large w3-padding'>".$eventregister->status."</span>";
         }
        }


            
        return view('eventregister.index',['eventregisters'=>$eventregisters]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($eventid)
    {   
        //return($event);
        $event = Event::find($eventid);
        return view('eventregister.create', ['event'=>$event]);
        //
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
        $eventregister = new EventRegister();

        $eventregister->name = request()->name;
        $eventregister->email = request()->email;
        $eventregister->phone = request()->phone;
        $eventregister->status = 'New Registration Created';
        $eventregister->owner_id= Auth::user()->id;
        $eventregister->event_id= request()->event_id;
        $eventregister->event_name  = request()->event_name;


        $eventregister->save();
        
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
        
        //$this->authorize('view', $eventregister);
        auth()->user()->cannot('view', $eventregister); 
        //abort_if(\Gate::denies('view', $eventregister ), 403);
        //$eventregister = EventRegister::find($id);
         $event = Event::find($eventregister->event_id);
         $online=null;
         $showform=null;
         $showDeleteForm=true;

         if($eventregister->status == 'New Registration Created'){
            $showform=true;
            $eventregister->status= "<span class='w3-pale-red w3-round-large w3-padding'>".$eventregister->status."</span>";
         } elseif($eventregister->status == 'Cancelled'){
            $showform=true;
            $eventregister->status="<span id='register' class='w3-grey w3-round-large w3-padding'>".$eventregister->status."</span>";
         } elseif($eventregister->status == 'Confirmed: will pay in person'){
            $showform=true;
             $eventregister->status="<span id='register' class='w3-blue w3-round-large w3-padding'>".$eventregister->status."</span>";
        } elseif($eventregister->status == 'Paid Online'){
        $showform=false;
        $online=false;
        $showDeleteForm=false;
            $eventregister->status="<span id='register' class='w3-green w3-round-large w3-padding'>".$eventregister->status."</span>";
        } 
         else {
            $showform=true;
            $online=true;
             $eventregister->status="<span id='register' class='w3-light-green w3-round-large w3-padding'>".$eventregister->status."</span>";}


        return view('eventregister.show', ['eventregister'=>$eventregister,
        'event'=>$event,
        'online'=>$online,
        'showform'=>$showform,
        'showDeleteForm'=>$showDeleteForm]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      //
        $eventregister = EventRegister::find($id);
        return view('eventregister.edit',['eventregister'=>$eventregister]);

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
        $eventregister->owner_id= auth()->id();
        $eventregister->event_id= event()->id();
        
        $eventregister->save();

        return redirect('/eventregister');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $eventregister = EventRegister::find($id)->delete();

        return redirect('/mprofile');

    }

//This method updates the event registration status
    public function confirm(Request $request, EventRegister $eventregister)
    {  // dd($request->status);
       $eventregister->status = $request->status;
       $eventregister->save();

$event = Event::find($eventregister->event_id);

$online=null;
$showform=null;
$showDeleteForm=true;
if($eventregister->status == 'New Registration Created'){
   $showform=true;
   $eventregister->status= "<span class='w3-pale-red w3-round-large w3-padding'>".$eventregister->status."</span>";
} elseif($eventregister->status == 'Cancelled'){
   $showform=true;
   $eventregister->status="<span id='register' class='w3-grey w3-round-large w3-padding'>".$eventregister->status."</span>";
} elseif($eventregister->status == 'Confirmed: will pay in person'){
   $showform=true;
    $eventregister->status="<span id='register' class='w3-blue w3-round-large w3-padding'>".$eventregister->status."</span>";
} elseif($eventregister->status == 'Paid Online'){
$showform=false;
$online=false;
$showDeleteForm=false;
   $eventregister->status="<span id='register' class='w3-green w3-round-large w3-padding'>".$eventregister->status."</span>";
} 
else {
   $showform=true;
   $online=true;
    $eventregister->status="<span id='register' class='w3-light-green w3-round-large w3-padding'>".$eventregister->status."</span>";}

   
return view('eventregister.show', ['eventregister'=>$eventregister,
    'event'=>$event,
    'online'=>$online,
    'showform'=>$showform,
    'showDeleteForm'=>$showDeleteForm]);
    
}



}

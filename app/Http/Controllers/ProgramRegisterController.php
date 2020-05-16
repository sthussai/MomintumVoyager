<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProgramRegister;
use App\Program;
use Validator;
use Illuminate\Validation\Rule;

class ProgramRegisterController extends Controller
{
    public function __construct()
    {
        $this->ProgramRegister = new ProgramRegister();
        $this->middleware('auth');
    }

    public function index()
    {
        $programregisters = $this->ProgramRegister->getProgramRegistrationStatus();
        return view('programregister.index', ['programregisters' => $programregisters]);
    }

    public function create($programid)
    {
        $program = Program::find($programid);
        return view('programregister.create', ['program' => $program]);
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
            'program_id.unique' => 'This user is already registered in this program!',
        ];

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'program_id' => Rule::unique('program_registers')->where(function ($query) {
                return $query->where('owner_id', auth()->user()->id);
            }),
            'phone' => 'required|digits_between:10,11',
        ], $messages)->validate();

        $this->ProgramRegister->createNewProgramRegistration($request->all());
        $request->session()->flash('Notice', 'Program Registration Created Successfully!');
        return redirect('/programregister');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(ProgramRegister $programregister)
    {
        $programregister = $this->ProgramRegister->showProgramRegistration($programregister);
        $program = Program::find($programregister['registration']->program_id);
        return view('programregister.show', compact('programregister', 'program'));
    }

    //This method updates the program registration status
    public function updateStatus(Request $request)
    {
        if ($this->ProgramRegister->requestStatusChecked($request)) {
            $programregister = ProgramRegister::findOrFail($request->programregister_id);
            $programregister->status = $request->status;
            $programregister->save();
            return redirect()->action('ProgramRegisterController@show', ['programregister' => $programregister]);
        }
    }

    /**
         * Remove the specified resource from storage.
         *
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
    public function destroy(Request $request, $id)
    {
        $programregister = ProgramRegister::findOrFail($id);
//      event(new ProgramRegistrationDeleted($programregister));

        $programregister->delete();

        $request->session()->flash('Notice', 'Event Registration Deleted');
        return redirect('/eventregister');
    }
}

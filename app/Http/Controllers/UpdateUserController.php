<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\User;

class UpdateUserController extends Controller
{
    //

        /**
     * Store a new username of logged in user in database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
    $user = User::find(Auth::user()->id);
    $user->name = request()->name;

    $user->save();

    return redirect('/mprofile'); 
    }
}

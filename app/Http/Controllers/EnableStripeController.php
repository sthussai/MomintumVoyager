<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\User;

class EnableStripeController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        //
        $user = User::findOrFail(Auth::id());
        if($user->stripe_id===null){
            $user->createAsStripeCustomer();
            return redirect()->back()->with('status','Success! Online Payment Options are now enabled.');
            
        } else{
            return redirect('/payment');
        }

        
    }
}

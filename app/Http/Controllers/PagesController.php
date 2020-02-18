<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Middleware\Authenticate;
use Illuminate\Contracts\Auth\Authenticatable;
use App\Program;
use App\User;
use App\Flight;

class PagesController extends Controller
{
    //

    public function mmain()
    {
        $posts = \TCG\Voyager\Models\Post::where('status', 'PUBLISHED')->paginate(6);
        $programs = Program::paginate(6);

        ($posts);
        return view('momintum.mmain', ['programs' => $programs, 'posts' => $posts]);
    }

    public function showprogram($id)
    {
        $program = Program::find($id);
        $programs = Program::paginate(4);
        return view('programs.show', ['program' => $program, 'programs' => $programs]);
    }
}

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

        $posts = \TCG\Voyager\Models\Post::where('status','PUBLISHED')->paginate(3);
        $programs = Program::paginate(6);

        //dd($posts);
        return view('momintum.mmain', ['programs'=>$programs, 'posts'=>$posts]); 
    }


/* 
    public function test()
    {  // Auth::login($user);

     
        $tests = Flight::where('id','<', 14)->Paginate(5);
        return view('momintum.mtest', ['tests'=>$tests]);
    } */


    public function insert()
    {
        $users = DB::insert('insert into users (id, name, email) values (?, ?, ?)', [1, 'Momin', 'Momin@test.com']);

        //$affected = DB::update('update users set id = 1 where id = ?', [2]);

        DB::table('users')->insert([
            'name' => 'random',
            'email' => 'random'.'@gmail.com',
            'password' => bcrypt('password'),
        ]);


       // $inserting = DB::insert('insert into users (name, email, password) values (?, ?, ?)', ['Momin', 'Momin@test.com', 'test1234']);

        return view('user.index', ['users' => $users]);
    }

}

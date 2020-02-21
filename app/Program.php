<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class Program extends Model
{
    /**
     * The attributes that are not mass assignable.
     *
     * @var array
     */
    protected $guarded = [
        'created_at', 'updated_at',
    ];

    public function getAllProgramsAndPublishedPosts()
    {
        $programs = Program::paginate(6);
        $posts = \TCG\Voyager\Models\Post::where('status', 'PUBLISHED')->paginate(6);
        return view('momintum.mmain', [
            'programs' => $programs,
            'posts' => $posts,
        ]);
    }

    public function showProgram($programTitle)
    {
        $programTitle = str_replace('_', ' ', $programTitle);
        $program = Program::where('title', $programTitle)->first();
        $programs = Program::paginate(4);
        return view('programs.show', ['program' => $program, 'programs' => $programs]);
    }
}

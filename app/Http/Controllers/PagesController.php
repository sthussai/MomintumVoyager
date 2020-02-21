<?php

namespace App\Http\Controllers;

use App\Program;

class PagesController extends Controller
{
    public function __construct()
    {
        $this->program = new Program();
    }

    public function mmain()
    {
        return $this->program->getAllProgramsAndPublishedPosts();
    }

    public function showProgram($programTitle)
    {
        return $this->program->showProgram($programTitle);
    }
}

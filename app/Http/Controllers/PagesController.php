<?php

namespace App\Http\Controllers;

use App\Program;

class PagesController extends Controller
{
    public function __construct()
    {
        $this->model = new Program();
    }

    public function mmain()
    {
        return $this->model->getAllProgramsAndPublishedPosts();
    }

    public function showProgram($programTitle)
    {
        return $this->mdodel->showProgram($programTitle);
    }
}

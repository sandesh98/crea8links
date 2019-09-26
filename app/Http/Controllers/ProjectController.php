<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function __invoke()
    {
        return view('project.index');
    }

    public function example()
    {
        return view('project.projects.example');
    }
}

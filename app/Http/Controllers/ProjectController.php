<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    //index
    public function index(){
        //$projects = \App\Models\Poject::all();

        $projects = \App\Models\Project::all();
        return view('projects.index',[
            'projectsList' => $projects
        ]);
    }
}

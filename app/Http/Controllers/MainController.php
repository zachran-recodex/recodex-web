<?php

namespace App\Http\Controllers;

use App\Models\Hero;
use App\Models\Project;
use App\Models\Service;
use App\Models\WorkProcess;

class MainController extends Controller
{
    public function index()
    {
        $hero = Hero::first();
        $services = Service::all();
        $projects = Project::all();
        $workProcesses = WorkProcess::all();

        return view('main.index', compact('hero', 'services', 'projects', 'workProcesses'));
    }
}

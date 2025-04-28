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

        $services = Service::where('is_active', true)
            ->orderBy('sort_order')
            ->get();

        $projects = Project::all();
        $workProcesses = WorkProcess::all();

        return view('main.index', compact('hero', 'services', 'projects', 'workProcesses'));
    }

    public function service()
    {
        $services = Service::where('is_active', true)
            ->orderBy('sort_order')
            ->get();

        return view('main.service', compact('services'));
    }

    public function showService(Service $service)
    {
        // Check if service is active, if not, return 404
        if (!$service->is_active) {
            abort(404);
        }

        // Get related services
        $relatedServices = Service::where('id', '!=', $service->id)
            ->where('is_active', true)
            ->orderBy('sort_order')
            ->limit(3)
            ->get();

        return view('main.service-details', compact('service', 'relatedServices'));
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Faq;
use App\Models\Hero;
use App\Models\Member;
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

        $projects = Project::where('is_active', true)
            ->orderBy('sort_order')
            ->get();

        $works = WorkProcess::where('is_active', true)
            ->orderBy('sort_order')
            ->get();

        $members = Member::where('is_active', true)
            ->orderBy('sort_order')
            ->limit(4)
            ->get();

        return view('main.index', compact('hero', 'services', 'projects', 'works', 'members'));
    }

    public function about()
    {
        $about = About::first();

        $members = Member::where('is_active', true)
            ->orderBy('sort_order')
            ->get();

        return view('main.about', compact('about', 'members'));
    }

    public function service()
    {
        $services = Service::where('is_active', true)
            ->orderBy('sort_order')
            ->get();

        $works = WorkProcess::where('is_active', true)
            ->orderBy('sort_order')
            ->get();

        $faqs = Faq::where('is_active', true)
            ->orderBy('sort_order')
            ->get();

        return view('main.service', compact('services', 'works', 'faqs'));
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

    public function project()
    {
        $projects = Project::where('is_active', true)
            ->orderBy('sort_order')
            ->get();

        return view('main.project', compact('projects'));
    }

    public function showProject($slug, $client_slug)
    {
        $project = Project::where('slug', $slug)
            ->where('client_slug', $client_slug)
            ->where('is_active', true)
            ->firstOrFail();

        // Get related projects
        $relatedProjects = Project::where('id', '!=', $project->id)
            ->where('is_active', true)
            ->orderBy('sort_order')
            ->limit(6)
            ->get();

        return view('main.project-details', compact('project', 'relatedProjects'));
    }

    public function contact()
    {
        return view('main.contact');
    }
}

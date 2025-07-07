<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\News;
use App\Models\Volunteer;
use App\Models\Contact;

class PageController extends Controller
{
    public function home()
    {
        //$projects = Project::where('featured', true)->limit(3)->get();
        //$news = News::latest()->limit(3)->get();
        return view('public.pages.home'/*, compact('projects', 'news')*/);
    }

    public function about()
    {
        return view('public.pages.about');
    }

    public function projects()
    {
        /*$projects = Project::all();*/
        return view('public.pages.projects');
    }

    public function news()
    {
        return view('public.pages.news');
    }

    public function gallery()
    {
        return view('public.pages.gallery');
    }

    public function volunteer()
    {
        return view('public.pages.volunteer');
    }

    public function donate()
    {
        return view('public.pages.donate');
    }

    public function contact()
    {
        return view('public.pages.contact');
    }

    public function login()
    {
        return view('admin.login');
    }


    public function authLogin()
    {
        return view('admin.pages.dashboard');
    }

    public function projectDetail($id)
    {
        $project = Project::findOrFail($id);
        return view('public.pages.project-detail', compact('project'));
    }
}

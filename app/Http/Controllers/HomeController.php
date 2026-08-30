<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $latestBlogs = Blog::where('is_published', true)->latest('published_at')->take(3)->get();
        return view('pages.home', compact('latestBlogs'));
    }

    public function about()
    {
        return view('pages.about');
    }

    public function services()
    {
        return view('pages.services');
    }

    public function serviceDetails()
    {
        return view('pages.service-details');
    }

    public function projects()
    {
        return view('pages.projects');
    }

    public function projectDetails()
    {
        return view('pages.project-details');
    }
}

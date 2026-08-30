<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Project;
use App\Models\ContactMessage;

class AdminDashboardController extends Controller
{
    /**
     * Display the Admin Dashboard metrics & stats
     */
    public function index()
    {
        $stats = [
            'total_blogs' => Blog::count(),
            'total_projects' => Project::count(),
            'unread_messages' => ContactMessage::where('is_read', false)->count(),
        ];

        $recentMessages = ContactMessage::latest()->take(5)->get();
        $recentBlogs = Blog::latest()->take(5)->get();

        return view('admin.dashboard', compact('stats', 'recentMessages', 'recentBlogs'));
    }
}

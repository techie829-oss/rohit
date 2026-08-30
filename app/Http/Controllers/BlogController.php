<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display Blog Grid List (30 Items Per Page)
     */
    public function index(Request $request)
    {
        $query = Blog::where('is_published', true);

        if ($request->has('category') && !empty($request->category)) {
            $query->where('category', $request->category);
        }

        $blogs = $query->latest('published_at')->paginate(30)->withQueryString();
        $categories = Blog::where('is_published', true)->distinct()->pluck('category');

        return view('pages.blog', compact('blogs', 'categories'));
    }

    /**
     * Display Blog Classic Stream (30 Items Per Page)
     */
    public function classic(Request $request)
    {
        $query = Blog::where('is_published', true);

        if ($request->has('category') && !empty($request->category)) {
            $query->where('category', $request->category);
        }

        $blogs = $query->latest('published_at')->paginate(30)->withQueryString();
        $recentBlogs = Blog::where('is_published', true)->latest('published_at')->take(5)->get();

        return view('pages.blog-classic', compact('blogs', 'recentBlogs'));
    }

    /**
     * Display Single Blog Article Details
     */
    public function show($slug = null)
    {
        if ($slug && $slug !== 'blog-details') {
            $blog = Blog::where('slug', $slug)->where('is_published', true)->firstOrFail();
        } else {
            $blog = Blog::where('is_published', true)->latest('published_at')->firstOrFail();
        }

        $recentBlogs = Blog::where('is_published', true)->where('id', '!=', $blog->id)->latest('published_at')->take(4)->get();

        return view('pages.blog-details', compact('blog', 'recentBlogs'));
    }
}

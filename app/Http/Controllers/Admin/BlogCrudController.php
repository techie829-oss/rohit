<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BlogCrudController extends Controller
{
    public function index()
    {
        $blogs = Blog::latest()->paginate(10);
        return view('admin.blogs.index', compact('blogs'));
    }

    public function create()
    {
        return view('admin.blogs.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'category' => 'required|string|max:100',
            'summary' => 'required|string|max:500',
            'content' => 'required|string',
            'author' => 'nullable|string|max:100',
        ]);

        $validated['is_published'] = $request->has('is_published');
        $validated['slug'] = Str::slug($request->title);
        $validated['author'] = $request->author ?: 'Rohit Kumar (Coolhax RK)';
        $validated['published_at'] = $validated['is_published'] ? now() : null;

        Blog::create($validated);

        return redirect()->route('admin.blogs.index')->with('success', 'Blog article created successfully!');
    }

    public function edit(Blog $blog)
    {
        return view('admin.blogs.edit', compact('blog'));
    }

    public function update(Request $request, Blog $blog)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'category' => 'required|string|max:100',
            'summary' => 'required|string|max:500',
            'content' => 'required|string',
            'author' => 'nullable|string|max:100',
        ]);

        $validated['is_published'] = $request->has('is_published');
        $validated['slug'] = Str::slug($request->title);
        $validated['author'] = $request->author ?: 'Rohit Kumar (Coolhax RK)';
        if ($validated['is_published'] && !$blog->published_at) {
            $validated['published_at'] = now();
        }

        $blog->update($validated);

        return redirect()->route('admin.blogs.index')->with('success', 'Blog article updated successfully!');
    }

    public function destroy(Blog $blog)
    {
        $blog->delete();
        return redirect()->route('admin.blogs.index')->with('success', 'Blog article deleted successfully!');
    }
}

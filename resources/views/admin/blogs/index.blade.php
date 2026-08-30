@extends('layouts.app')

@section('title', 'Manage Blogs - Admin Portal')

@section('content')
<section class="pt-120 pb-120">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-4 flex-wrap gap-2">
            <div>
                <a href="{{ route('admin.dashboard') }}" class="text-warning text-decoration-none small"><i class="fa-solid fa-arrow-left me-1"></i> Back to Dashboard</a>
                <h1 class="text-white fw-bold fs-2 mb-0 mt-1">Blog Articles Management</h1>
            </div>
            <a href="{{ route('admin.blogs.create') }}" class="btn btn-warning rounded-pill px-4 fw-bold text-dark"><i class="fa-solid fa-plus me-1"></i> Add New Blog</a>
        </div>

        @if(session('success'))
            <div class="alert alert-success bg-dark text-warning border-warning mb-4 rounded-3">
                <i class="fa-solid fa-circle-check me-2"></i> {{ session('success') }}
            </div>
        @endif

        <div class="bg-dark p-4 rounded-4 border border-secondary text-white">
            <div class="table-responsive">
                <table class="table table-dark table-hover align-middle mb-0">
                    <thead>
                        <tr class="text-warning">
                            <th>ID</th>
                            <th>Title</th>
                            <th>Category</th>
                            <th>Author</th>
                            <th>Published Date</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($blogs as $blog)
                        <tr>
                            <td>#{{ $blog->id }}</td>
                            <td class="fw-bold" style="max-width: 300px;"><a href="{{ route('blog.show', $blog->slug) }}" target="_blank" class="text-white text-decoration-none">{{ $blog->title }}</a></td>
                            <td><span class="badge bg-warning text-dark rounded-pill">{{ $blog->category }}</span></td>
                            <td>{{ $blog->author }}</td>
                            <td>{{ $blog->published_at ? $blog->published_at->format('M d, Y') : '-' }}</td>
                            <td>
                                @if($blog->is_published)
                                    <span class="badge bg-success">Published</span>
                                @else
                                    <span class="badge bg-secondary">Draft</span>
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('admin.blogs.edit', $blog->id) }}" class="btn btn-sm btn-outline-warning rounded-pill me-1"><i class="fa-solid fa-pen me-1"></i> Edit</a>
                                <form action="{{ route('admin.blogs.destroy', $blog->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure you want to delete this blog?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-outline-danger rounded-pill"><i class="fa-solid fa-trash"></i></button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="7" class="text-center py-4 text-secondary">No blogs found.</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            @if($blogs->hasPages())
            <div class="mt-4 d-flex justify-content-center">
                {{ $blogs->links('vendor.pagination.theme') }}
            </div>
            @endif
        </div>
    </div>
</section>
@endsection

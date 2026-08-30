@extends('layouts.app')

@section('title', 'Admin Dashboard - Rohit Kumar Portfolio')

@section('content')
<section class="th-admin-dashboard pt-120 pb-120">
    <div class="container">
        <!-- Dashboard Header -->
        <div class="d-flex justify-content-between align-items-center mb-4 flex-wrap gap-3 p-4 rounded-4" style="background: rgba(255,255,255,0.02); border: 1px solid rgba(255,123,0,0.3);">
            <div>
                <span class="badge bg-warning text-dark px-3 py-1 fs-6 rounded-pill mb-2 fw-bold">PORTFOLIO CONTROL CENTER</span>
                <h1 class="text-white fw-bold fs-2 mb-0">Welcome Back, {{ auth()->user()->name ?? 'Rohit' }}! 👋</h1>
            </div>
            <div class="d-flex gap-2">
                <a href="{{ route('admin.blogs.create') }}" class="btn btn-warning rounded-pill px-4 fw-bold text-dark"><i class="fa-solid fa-plus me-1"></i> Add New Blog</a>
                <form action="{{ route('admin.logout') }}" method="POST" class="d-inline">
                    @csrf
                    <button type="submit" class="btn btn-outline-danger rounded-pill px-4 fw-bold"><i class="fa-solid fa-right-from-bracket me-1"></i> Logout</button>
                </form>
            </div>
        </div>

        @if(session('success'))
            <div class="alert alert-success bg-dark text-warning border-warning mb-4 rounded-3">
                <i class="fa-solid fa-circle-check me-2"></i> {{ session('success') }}
            </div>
        @endif

        <!-- Stats Cards -->
        <div class="row mb-5 g-4">
            <div class="col-md-4">
                <div class="bg-dark p-4 rounded-4 border border-secondary text-white h-100 shadow-sm">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <span class="text-secondary small fw-bold">TOTAL PUBLISHED BLOGS</span>
                        <i class="fa-solid fa-newspaper text-warning fs-3"></i>
                    </div>
                    <div class="fs-1 fw-bold text-warning">{{ $stats['total_blogs'] ?? 0 }}</div>
                    <p class="text-secondary small mb-0 mt-2">Active engineering articles in database</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="bg-dark p-4 rounded-4 border border-secondary text-white h-100 shadow-sm">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <span class="text-secondary small fw-bold">LIVE ENTERPRISE PLATFORMS</span>
                        <i class="fa-solid fa-cubes text-warning fs-3"></i>
                    </div>
                    <div class="fs-1 fw-bold text-warning">{{ $stats['total_projects'] ?? 5 }}</div>
                    <p class="text-secondary small mb-0 mt-2">SaaS applications in portfolio</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="bg-dark p-4 rounded-4 border border-secondary text-white h-100 shadow-sm">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <span class="text-secondary small fw-bold">CONTACT INQUIRIES</span>
                        <i class="fa-solid fa-envelope text-warning fs-3"></i>
                    </div>
                    <div class="fs-1 fw-bold text-warning">{{ $stats['unread_messages'] ?? 0 }}</div>
                    <p class="text-secondary small mb-0 mt-2">Submissions from contact form</p>
                </div>
            </div>
        </div>

        <!-- Recent Contact Inquiries Table -->
        <div class="bg-dark p-4 rounded-4 border border-secondary text-white mb-5">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h3 class="fw-bold mb-0 text-warning fs-4"><i class="fa-solid fa-inbox me-2"></i> Recent Contact Submissions</h3>
            </div>
            <div class="table-responsive">
                <table class="table table-dark table-hover align-middle mb-0">
                    <thead>
                        <tr class="text-warning">
                            <th>Date</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Subject</th>
                            <th>Message</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($recentMessages as $msg)
                        <tr>
                            <td>{{ $msg->created_at->format('M d, Y H:i') }}</td>
                            <td class="fw-bold">{{ $msg->name }}</td>
                            <td><a href="mailto:{{ $msg->email }}" class="text-warning text-decoration-none">{{ $msg->email }}</a></td>
                            <td>{{ $msg->subject ?: 'General Inquiry' }}</td>
                            <td>{{ Str::limit($msg->message, 60) }}</td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="5" class="text-center py-4 text-secondary">No contact form submissions recorded yet.</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Recent Blogs Management Table -->
        <div class="bg-dark p-4 rounded-4 border border-secondary text-white">
            <div class="d-flex justify-content-between align-items-center mb-3 flex-wrap gap-2">
                <h3 class="fw-bold mb-0 text-warning fs-4"><i class="fa-solid fa-newspaper me-2"></i> Recent Blog Articles</h3>
                <a href="{{ route('admin.blogs.index') }}" class="btn btn-sm btn-outline-warning rounded-pill px-3">View All {{ $stats['total_blogs'] }} Blogs</a>
            </div>
            <div class="table-responsive">
                <table class="table table-dark table-hover align-middle mb-0">
                    <thead>
                        <tr class="text-warning">
                            <th>ID</th>
                            <th>Article Title</th>
                            <th>Category</th>
                            <th>Published Date</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($recentBlogs as $blog)
                        <tr>
                            <td>#{{ $blog->id }}</td>
                            <td class="fw-bold"><a href="{{ route('blog.show', $blog->slug) }}" target="_blank" class="text-white text-decoration-none">{{ Str::limit($blog->title, 45) }}</a></td>
                            <td><span class="badge bg-warning text-dark rounded-pill">{{ $blog->category }}</span></td>
                            <td>{{ $blog->published_at ? $blog->published_at->format('M d, Y') : '-' }}</td>
                            <td>
                                <a href="{{ route('admin.blogs.edit', $blog->id) }}" class="btn btn-sm btn-outline-warning rounded-pill me-1"><i class="fa-solid fa-pen"></i> Edit</a>
                                <form action="{{ route('admin.blogs.destroy', $blog->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure you want to delete this blog?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-outline-danger rounded-pill"><i class="fa-solid fa-trash"></i></button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="5" class="text-center py-4 text-secondary">No blogs found.</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
@endsection

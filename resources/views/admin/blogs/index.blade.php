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
                                <div class="d-flex gap-1">
                                    <button class="btn btn-sm btn-outline-info rounded-pill" onclick="openSocialModal({{ $blog->id }})">
                                        <i class="fa-solid fa-mobile-screen-button"></i> Post
                                    </button>
                                    <a href="{{ route('admin.blogs.edit', $blog->id) }}" class="btn btn-sm btn-outline-warning rounded-pill"><i class="fa-solid fa-pen me-1"></i> Edit</a>
                                    <form action="{{ route('admin.blogs.destroy', $blog->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure you want to delete this blog?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-outline-danger rounded-pill"><i class="fa-solid fa-trash"></i></button>
                                    </form>
                                </div>
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

<!-- Social Post Modal -->
<div class="modal fade" id="socialModal" tabindex="-1" aria-labelledby="socialModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content bg-dark border-warning text-white">
            <div class="modal-header border-secondary">
                <h5 class="modal-title text-warning fw-bold" id="socialModalLabel"><i class="fa-solid fa-rocket me-2"></i> Social Media Post</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p class="small text-secondary mb-2">Copy this text and paste it on LinkedIn or Twitter.</p>
                <textarea id="socialPostContent" class="form-control bg-dark text-white border-secondary mb-3 font-monospace" rows="8" readonly></textarea>
                <div id="socialPostStatus" class="alert d-none py-2 mb-0"></div>
            </div>
            <div class="modal-footer border-secondary d-flex justify-content-between">
                <button type="button" class="btn btn-outline-secondary rounded-pill px-4" data-bs-dismiss="modal">Close</button>
                <div class="d-flex gap-2">
                    <button type="button" class="btn btn-info rounded-pill px-4" onclick="copySocialPost()"><i class="fa-regular fa-copy me-1"></i> Copy Text</button>
                    <button type="button" class="btn btn-warning rounded-pill px-4 text-dark fw-bold" id="btnMarkPublished" onclick="markSocialPublished()"><i class="fa-solid fa-check me-1"></i> Mark as Posted</button>
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script>
    let currentBlogId = null;

    function openSocialModal(blogId) {
        currentBlogId = blogId;
        const modal = new bootstrap.Modal(document.getElementById('socialModal'));
        const textarea = document.getElementById('socialPostContent');
        const statusAlert = document.getElementById('socialPostStatus');
        const btnMark = document.getElementById('btnMarkPublished');
        
        textarea.value = "Generating post...";
        statusAlert.classList.add('d-none');
        btnMark.disabled = true;
        
        modal.show();

        fetch(`/admin/blogs/${blogId}/social-post`)
            .then(res => res.json())
            .then(data => {
                textarea.value = data.post;
                if (data.is_published) {
                    statusAlert.className = 'alert alert-success bg-dark text-success border-success py-2 mb-0';
                    statusAlert.innerHTML = '<i class="fa-solid fa-check-circle me-1"></i> Already marked as published.';
                    btnMark.style.display = 'none';
                } else {
                    btnMark.style.display = 'block';
                    btnMark.disabled = false;
                }
            })
            .catch(err => {
                textarea.value = "Error generating post.";
                console.error(err);
            });
    }

    function copySocialPost() {
        const textarea = document.getElementById('socialPostContent');
        textarea.select();
        document.execCommand('copy');
        alert('Copied to clipboard!');
    }

    function markSocialPublished() {
        if (!currentBlogId) return;
        
        const btnMark = document.getElementById('btnMarkPublished');
        btnMark.innerHTML = '<i class="fa-solid fa-spinner fa-spin me-1"></i> Marking...';
        btnMark.disabled = true;

        fetch(`/admin/blogs/${currentBlogId}/mark-social-published`, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
            }
        })
        .then(res => res.json())
        .then(data => {
            if (data.success) {
                const statusAlert = document.getElementById('socialPostStatus');
                statusAlert.className = 'alert alert-success bg-dark text-success border-success py-2 mb-0 mt-3';
                statusAlert.innerHTML = '<i class="fa-solid fa-check-circle me-1"></i> Successfully marked as published!';
                btnMark.style.display = 'none';
            }
        })
        .catch(err => {
            console.error(err);
            btnMark.innerHTML = '<i class="fa-solid fa-check me-1"></i> Mark as Posted';
            btnMark.disabled = false;
        });
    }
</script>
@endpush
@endsection

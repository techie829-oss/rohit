@extends('layouts.app')

@section('title', 'Edit Blog Article - Admin Portal')

@section('content')
<section class="pt-120 pb-120">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-9 col-lg-10">
                <div class="mb-4">
                    <a href="{{ route('admin.blogs.index') }}" class="text-warning text-decoration-none small"><i class="fa-solid fa-arrow-left me-1"></i> Back to Blogs List</a>
                    <h1 class="text-white fw-bold fs-2 mb-0 mt-1">Edit Engineering Article #{{ $blog->id }}</h1>
                </div>

                <div class="p-4 p-md-5 rounded-4 shadow-lg border text-white" style="background: rgba(18, 18, 18, 0.95); border-color: rgba(255, 123, 0, 0.3) !important;">
                    @if($errors->any())
                        <div class="alert alert-danger bg-dark text-danger border-danger mb-4">
                            <ul class="mb-0 ps-3">
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('admin.blogs.update', $blog->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="row g-3 mb-4">
                            <div class="col-md-8">
                                <label for="title" class="form-label text-light fw-bold">Article Title *</label>
                                <input type="text" name="title" id="title" class="form-control bg-dark text-white border-secondary p-3 rounded-3" value="{{ old('title', $blog->title) }}" required>
                            </div>
                            <div class="col-md-4">
                                <label for="category" class="form-label text-light fw-bold">Category *</label>
                                <input type="text" name="category" id="category" class="form-control bg-dark text-white border-secondary p-3 rounded-3" value="{{ old('category', $blog->category) }}" required>
                            </div>
                        </div>

                        <div class="mb-4">
                            <label for="summary" class="form-label text-light fw-bold">Executive Summary *</label>
                            <textarea name="summary" id="summary" rows="3" class="form-control bg-dark text-white border-secondary p-3 rounded-3" required>{{ old('summary', $blog->summary) }}</textarea>
                        </div>

                        <div class="mb-4">
                            <label for="content" class="form-label text-light fw-bold">Article Content (Markdown / HTML supported) *</label>
                            <textarea name="content" id="content" rows="12" class="form-control bg-dark text-white border-secondary p-3 rounded-3 font-monospace" required>{{ old('content', $blog->content) }}</textarea>
                        </div>

                        <div class="row g-3 mb-4">
                            <div class="col-md-6">
                                <label for="author" class="form-label text-light fw-bold">Author Name</label>
                                <input type="text" name="author" id="author" class="form-control bg-dark text-white border-secondary p-3 rounded-3" value="{{ old('author', $blog->author) }}">
                            </div>
                            <div class="col-md-6 d-flex align-items-center pt-4">
                                <div class="form-check form-switch">
                                    <input class="form-check-input bg-dark border-secondary" type="checkbox" role="switch" name="is_published" id="is_published" value="1" {{ $blog->is_published ? 'checked' : '' }}>
                                    <label class="form-check-label text-white fw-bold ms-2" for="is_published">Article Published</label>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex justify-content-between align-items-center pt-3 border-top border-secondary">
                            <a href="{{ route('blog.show', $blog->slug) }}" target="_blank" class="btn btn-outline-warning rounded-pill px-4"><i class="fa-solid fa-eye me-1"></i> Preview Live</a>
                            <div class="d-flex gap-2">
                                <a href="{{ route('admin.blogs.index') }}" class="btn btn-outline-secondary rounded-pill px-4">Cancel</a>
                                <button type="submit" class="btn btn-warning rounded-pill px-5 fw-bold text-dark"><i class="fa-solid fa-floppy-disk me-1"></i> Update Article</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@extends('layouts.app')

@section('title', 'Blog Classic Stream - Rohit Kumar (Coolhax RK)')
@section('meta_description', 'Classic technical blog stream featuring 20+ software engineering & SaaS architecture articles by Rohit Kumar.')

@section('content')
<!-- =========== breadcrumb area start =========== -->
<section class="th-breadcrumb-area" style="background-image: url({{ asset('assets/img/designer/th-breadcrumb-bg.png') }});">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 mx-auto text-center">
                <div class="th-breadcrumb-content">
                    <h2 class="th-breadcrumb-title">Blog Classic</h2>
                    <ul>
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li><span><i class="fa-solid fa-angle-right"></i></span></li>
                        <li><a href="#" class="active">Blog Classic Stream</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- =========== breadcrumb area end =========== -->

<section class="pt-120 pb-90">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 col-lg-8">
                @foreach($blogs as $article)
                <div class="p-4 rounded-4 mb-4" style="background: rgba(255,255,255,0.02); border: 1px solid rgba(255,123,0,0.2);">
                    <div class="rounded-3 overflow-hidden mb-3 text-center" style="max-height: 360px;">
                        <img class="w-100 h-100 rounded-3" src="{{ asset($article->image ?: 'assets/img/devceloper/th-blog-thumb2.1.png') }}" alt="{{ $article->title }}" style="object-fit: cover;">
                    </div>
                    <div class="d-flex align-items-center gap-3 mb-2 text-warning fs-6">
                        <span><i class="fa-solid fa-calendar me-1"></i> {{ $article->published_at ? $article->published_at->format('M d, Y') : $article->created_at->format('M d, Y') }}</span>
                        <span class="badge bg-warning text-dark rounded-pill px-2 py-1 fs-6">{{ $article->category }}</span>
                    </div>
                    <h2 class="text-white fs-3 mb-2"><a href="{{ route('blog.show', $article->slug) }}" class="text-white text-decoration-none">{{ $article->title }}</a></h2>
                    <p class="text-light mb-3 fs-5">{{ $article->summary }}</p>
                    <a href="{{ route('blog.show', $article->slug) }}" class="text-warning text-decoration-none fw-bold fs-6">Read Full Article <i class="fa-solid fa-arrow-right ms-1"></i></a>
                </div>
                @endforeach

                @if($blogs->hasPages())
                <div class="mt-4 d-flex justify-content-center">
                    {{ $blogs->links('vendor.pagination.theme') }}
                </div>
                @endif
            </div>

            <div class="col-xl-4 col-lg-4">
                <div class="p-4 rounded-4 mb-30" style="background: rgba(255,255,255,0.02); border: 1px solid rgba(255,123,0,0.2);">
                    <h3 class="fs-4 fw-bold text-white mb-3"><i class="fa-solid fa-fire text-warning me-2"></i> Recent Articles</h3>
                    <ul class="list-unstyled mb-0">
                        @foreach($recentBlogs as $rec)
                        <li class="mb-3 pb-3 border-bottom border-secondary">
                            <a href="{{ route('blog.show', $rec->slug) }}" class="text-warning text-decoration-none fw-bold fs-6 d-block mb-1">{{ $rec->title }}</a>
                            <span class="text-secondary fs-6"><i class="fa-solid fa-calendar me-1"></i> {{ $rec->published_at ? $rec->published_at->format('M d, Y') : '' }}</span>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

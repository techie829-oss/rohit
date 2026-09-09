@extends('layouts.app')

@section('title', ($blog->title ?? 'Article Details') . ' - Rohit Kumar (Coolhax RK)')
@section('meta_description', Str::limit($blog->summary ?? 'Technical article by Rohit Kumar', 150))

@section('content')
<!-- =========== breadcrumb area start =========== -->
<section class="th-breadcrumb-area" style="background-image: url({{ asset('assets/img/designer/th-breadcrumb-bg.png') }});">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 mx-auto text-center">
                <div class="th-breadcrumb-content">
                    <h2 class="th-breadcrumb-title">Article Details</h2>
                    <ul>
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li><span><i class="fa-solid fa-angle-right"></i></span></li>
                        <li><a href="{{ route('blog.index') }}">Blog</a></li>
                        <li><span><i class="fa-solid fa-angle-right"></i></span></li>
                        <li><a href="#" class="active">{{ Str::limit($blog->title, 25) }}</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- =========== breadcrumb area end =========== -->

<!-- =========== article content start =========== -->
<section class="pt-120 pb-90">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 col-lg-8">
                <div class="mb-4">
                    <span class="badge bg-warning text-dark px-3 py-2 fs-6 rounded-pill mb-3 fw-bold">{{ $blog->category }}</span>
                    <h1 class="text-white fs-1 fw-bold mb-3 lh-sm">{{ $blog->title }}</h1>
                    <div class="d-flex align-items-center gap-4 text-warning mb-4 fs-6">
                        <span><i class="fa-solid fa-user me-1"></i> {{ $blog->author }}</span>
                        <span><i class="fa-solid fa-calendar me-1"></i> {{ $blog->published_at ? $blog->published_at->format('M d, Y') : $blog->created_at->format('M d, Y') }}</span>
                        <span><i class="fa-solid fa-eye me-1"></i> {{ number_format($blog->views) }} Views</span>
                    </div>
                </div>

                <div class="rounded-4 overflow-hidden mb-4 shadow-lg border border-secondary" style="border-color: rgba(255,123,0,0.3) !important;">
                    <img class="w-100" src="{{ asset($blog->image ?: 'assets/img/devceloper/th-blog-thumb2.1.png') }}" alt="{{ $blog->title }}" style="max-height: 480px; object-fit: cover;">
                </div>

                <div class="article-body text-light fs-5 lh-lg p-4 rounded-4" style="background: rgba(255,255,255,0.015); border: 1px solid rgba(255,123,0,0.15);">
                    <div class="p-3 rounded-3 mb-4" style="background: rgba(255,123,0,0.08); border-left: 4px solid #FF7B00;">
                        <p class="fs-5 text-warning mb-0 font-italics"><strong>Executive Summary:</strong> {{ $blog->summary }}</p>
                    </div>

                    <div class="blog-rich-text">
                        {!! $blog->content !!}
                    </div>
                </div>

                <!-- Social Share Area -->
                <div class="mt-4 mb-4 d-flex align-items-center gap-3">
                    <span class="text-white fw-bold fs-5">Share this article:</span>
                    <a href="https://www.linkedin.com/sharing/share-offsite/?url={{ urlencode(request()->url()) }}" target="_blank" class="btn btn-outline-warning rounded-circle" style="width: 45px; height: 45px; display: inline-flex; align-items: center; justify-content: center;">
                        <i class="fa-brands fa-linkedin-in fs-5"></i>
                    </a>
                    <a href="https://twitter.com/intent/tweet?url={{ urlencode(request()->url()) }}&text={{ urlencode($blog->title) }}" target="_blank" class="btn btn-outline-warning rounded-circle" style="width: 45px; height: 45px; display: inline-flex; align-items: center; justify-content: center;">
                        <i class="fa-brands fa-x-twitter fs-5"></i>
                    </a>
                    <a href="https://api.whatsapp.com/send?text={{ urlencode($blog->title . ' - ' . request()->url()) }}" target="_blank" class="btn btn-outline-warning rounded-circle" style="width: 45px; height: 45px; display: inline-flex; align-items: center; justify-content: center;">
                        <i class="fa-brands fa-whatsapp fs-5"></i>
                    </a>
                </div>

                <!-- Author Box -->
                <div class="th-servic-auth-box-flex mt-5 p-4 rounded-4" style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,123,0,0.3);">
                    <div class="th-servie-sm-thumb">
                        <img src="{{ asset('assets/img/rohit.jpeg') }}" alt="Rohit Kumar" style="width: 70px; height: 70px; border-radius: 50%; object-fit: cover; border: 2px solid #FF7B00;">
                    </div>
                    <div class="th-servie-sm-content">
                        <h4 class="th-auth-title text-white fs-4 mb-1">Written by Rohit Kumar (Coolhax RK)</h4>
                        <p class="th-position text-warning mb-2 fw-bold">Full Stack Lead &amp; Technical Founder</p>
                        <p class="text-light fs-6 mb-0">Specializing in high-concurrency Laravel &amp; Node.js microservices, multi-tenant SaaS engineering, database optimization, and cloud DevOps infrastructure.</p>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-lg-4 mt-4 mt-lg-0">
                <div class="p-4 rounded-4 mb-30" style="background: rgba(255,255,255,0.02); border: 1px solid rgba(255,123,0,0.2);">
                    <h3 class="fs-4 fw-bold text-white mb-3"><i class="fa-solid fa-fire-flame-curved text-warning me-2"></i> Trending Articles</h3>
                    <ul class="list-unstyled mb-0">
                        @foreach($trendingBlogs as $rec)
                        <li class="mb-3 pb-3 border-bottom border-secondary">
                            <a href="{{ route('blog.show', $rec->slug) }}" class="text-warning text-decoration-none fw-bold fs-6 d-block mb-1">{{ $rec->title }}</a>
                            <div class="d-flex justify-content-between align-items-center text-secondary fs-6">
                                <span><i class="fa-solid fa-calendar me-1"></i> {{ $rec->published_at ? $rec->published_at->format('M d, Y') : '' }}</span>
                                <span><i class="fa-solid fa-eye me-1"></i> {{ number_format($rec->views) }}</span>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- =========== article content end =========== -->
@endsection

@extends('layouts.app')

@section('title', 'Technical Blog & Articles (20+ Seeded) - Rohit Kumar (Coolhax RK)')
@section('meta_description', 'Read 20+ technical engineering articles on Laravel, Node.js, Cloud DevOps, Multi-Tenant SaaS Architecture, and Database Tuning by Rohit Kumar.')

@section('content')
<!-- =========== breadcrumb area start =========== -->
<section class="th-breadcrumb-area" style="background-image: url({{ asset('assets/img/designer/th-breadcrumb-bg.png') }});">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 mx-auto text-center">
                <div class="th-breadcrumb-content">
                    <h2 class="th-breadcrumb-title">Blog &amp; Articles</h2>
                    <ul>
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li><span><i class="fa-solid fa-angle-right"></i></span></li>
                        <li><a href="#" class="active">Blog ({{ $blogs->total() }} Articles)</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- =========== breadcrumb area end =========== -->

<!-- =========== blog section start =========== -->
<section class="th-blog-inner-wrap pt-120 pb-90">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 mx-auto text-center mb-50">
                <div class="th-section-title">
                    <p class="sub-title mb-16" data-aos="fade-up">{ ENGINEERING ARTICLES }</p>
                    <h2 class="title text-anime-style-2">Insights On Systems Architecture &amp; Full Stack Engineering</h2>
                </div>

                @if(isset($categories) && count($categories) > 0)
                <div class="d-flex flex-wrap justify-content-center gap-2 mt-4">
                    <a href="{{ route('blog.index') }}" class="btn btn-sm {{ !request()->has('category') ? 'btn-warning text-dark fw-bold' : 'btn-outline-secondary text-light' }} rounded-pill px-3">All Articles</a>
                    @foreach($categories as $cat)
                        <a href="{{ route('blog.index', ['category' => $cat]) }}" class="btn btn-sm {{ request('category') == $cat ? 'btn-warning text-dark fw-bold' : 'btn-outline-secondary text-light' }} rounded-pill px-3">{{ $cat }}</a>
                    @endforeach
                </div>
                @endif
            </div>
        </div>

        <div class="row">
            @forelse($blogs as $article)
            <div class="col-xl-4 col-md-6 mb-30">
                <div class="th-blog-grid-box h-100 p-4 rounded-4 d-flex flex-column justify-content-between" style="background: rgba(255,255,255,0.02); border: 1px solid rgba(255,123,0,0.2);">
                    <div>
                        <div class="th-blog-grid-thumb mb-3 rounded-3 overflow-hidden border border-secondary text-center" style="max-height: 220px;">
                            <img class="w-100 h-100 rounded-3" src="{{ asset($article->image ?: 'assets/img/devceloper/th-blog-thumb2.1.png') }}" alt="{{ $article->title }}" style="object-fit: cover;">
                        </div>
                        <div class="th-blog-grid-content">
                            <div class="d-flex align-items-center justify-content-between mb-2 text-warning fs-6">
                                <span><i class="fa-solid fa-calendar me-1"></i> {{ $article->published_at ? $article->published_at->format('M d, Y') : $article->created_at->format('M d, Y') }}</span>
                                <span class="badge bg-warning text-dark rounded-pill px-2 py-1 fs-6">{{ $article->category }}</span>
                            </div>
                            <h3 class="th-title fs-5 fw-bold text-white mb-2">
                                <a href="{{ route('blog.show', $article->slug) }}" class="text-white text-decoration-none">{{ $article->title }}</a>
                            </h3>
                            <p class="th-para text-light fs-6 mb-3">{{ Str::limit($article->summary, 110) }}</p>
                        </div>
                    </div>
                    <div class="pt-3 border-top border-secondary">
                        <a href="{{ route('blog.show', $article->slug) }}" class="text-warning text-decoration-none fw-bold">Read Full Article <i class="fa-solid fa-arrow-right ms-1"></i></a>
                    </div>
                </div>
            </div>
            @empty
            <div class="col-12 text-center py-5">
                <h3 class="text-white">No articles found in this category.</h3>
                <a href="{{ route('blog.index') }}" class="btn btn-warning mt-3 rounded-pill px-4">View All Articles</a>
            </div>
            @endforelse
        </div>

        @if($blogs->hasPages())
        <div class="row mt-4">
            <div class="col-12 d-flex justify-content-center">
                {{ $blogs->links('vendor.pagination.theme') }}
            </div>
        </div>
        @endif
    </div>
</section>
<!-- =========== blog section end =========== -->
@endsection

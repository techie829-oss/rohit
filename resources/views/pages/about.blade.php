@extends('layouts.app')

@section('title', 'About Me - Rohit Kumar (Coolhax RK)')
@section('meta_description', 'Learn about Rohit Kumar (Coolhax RK), Full Stack Engineering Lead at FinCrif India, Founder at Solidrix Solutions & Former Co-Founder/CTO at GullySystem with 5+ years of experience in enterprise SaaS, Laravel, Node.js & Cloud DevOps.')

@section('content')
<!-- =========== breadcrumb area start =========== -->
<section class="th-breadcrumb-area" style="background-image: url({{ asset('assets/img/designer/th-breadcrumb-bg.png') }});">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 mx-auto text-center">
                <div class="th-breadcrumb-content">
                    <h2 class="th-breadcrumb-title">About Me</h2>
                    <ul>
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li><span><i class="fa-solid fa-angle-right"></i></span></li>
                        <li><a href="#" class="active">About Me</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- =========== breadcrumb area end =========== -->

<!-- =========== about area start =========== -->
<section id="about" class="th-about-area p-relative z-index-1 fix pt-120 pb-90">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="th-section-title mb-48">
                    <p class="sub-title mb-16" data-aos="fade-up">{ ABOUT ME }</p>
                    <h2 class="title text-anime-style-2">I’m Rohit Kumar (Coolhax RK), Full Stack Lead &amp; Technical Founder Dedicated To
                        <span>Building Scalable Systems</span> That Drive Enterprise Business Growth.
                    </h2>
                </div>
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-xl-4">
                <div class="p-relative mb-30 text-center text-xl-start">
                    <h2 class="th-exp-title"><span class="count">5</span>+</h2>
                    <p class="th-exp-box fs-5 fw-bold text-white">
                        Years of Full Stack Engineering &amp; Architecture
                    </p>
                </div>

                <div class="th-exp-grop-flex mb-30">
                    <div class="th-exp-grop-flex-thumb">
                        <img src="{{ asset('assets/img/rohit.jpeg') }}" alt="Rohit Kumar" style="width: 60px; height: 60px; border-radius: 50%; object-fit: cover; border: 2px solid #FF7B00;">
                    </div>
                    <div class="th-exp-grop-flex-content">
                        <h3 class="title">(Trusted by 20+ Production Platforms)</h3>
                        <div class="th-exp-box-review">
                            <ul>
                                <li><i class="fa-solid fa-star text-warning"></i></li>
                                <li><i class="fa-solid fa-star text-warning"></i></li>
                                <li><i class="fa-solid fa-star text-warning"></i></li>
                                <li><i class="fa-solid fa-star text-warning"></i></li>
                                <li><i class="fa-solid fa-star text-warning"></i></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-8">
                <div class="th-about-box-wrap mb-30">
                    <div class="th-section-title pb-32">
                        <p class="para fs-5 lh-lg text-light">I’m Rohit Kumar (Coolhax RK), Backend Developer Lead at FinCrif India Private Limited, Founder at Solidrix Solutions, and Former Co-Founder/CTO at GullySystem. With 5+ years of hands-on technical expertise, I design and architect complete end-to-end digital solutions — from robust Laravel and Node.js backends to enterprise multi-tenant SaaS applications, real-time API integrations, and automated cloud DevOps infrastructure.</p>
                    </div>

                    <div class="th-circle-box-grid">
                        <div class="th-circle-box-grid-singlebox">
                            <div class="th-icon pb-16">
                                <span><i class="fa-solid fa-server text-warning fs-3"></i></span>
                            </div>
                            <div class="th-content">
                                <h3 class="title"><a href="{{ route('services') }}">Backend &amp; API Architecture</a></h3>
                            </div>
                        </div>

                        <div class="th-circle-box-grid-singlebox">
                            <div class="th-icon pb-16">
                                <span><i class="fa-solid fa-cubes text-warning fs-3"></i></span>
                            </div>
                            <div class="th-content">
                                <h3 class="title"><a href="{{ route('services') }}">Multi-Tenant SaaS Systems</a></h3>
                            </div>
                        </div>

                        <div class="th-circle-box-grid-singlebox">
                            <div class="th-icon pb-16">
                                <span><i class="fa-solid fa-cloud text-warning fs-3"></i></span>
                            </div>
                            <div class="th-content">
                                <h3 class="title"><a href="{{ route('services') }}">Cloud DevOps &amp; CI/CD</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- =========== about area end =========== -->

<!-- =========== fact area start =========== -->
<section class="th-fact-wrap pb-90">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 mb-30">
                <div class="th-funfact-wrap">
                    <div class="row">
                        <div class="col-xl-6 col-md-6">
                            <div class="th-single-fact mr24">
                                <h3 class="th-fact-title"><span class="count">20</span>+</h3>
                                <h4 class="th-para">SaaS &amp; Client Projects</h4>
                            </div>
                        </div>
                        <div class="col-xl-6 col-md-6">
                            <div class="th-single-fact th-single-fact-2 mt-56">
                                <h3 class="th-fact-title th-fact-title-2"><span class="count">99.9</span>%</h3>
                                <h4 class="th-para">Production System Uptime</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 mb-30">
                <div class="th-fact-content-wrap">
                    <div class="th-section-title mb-48">
                        <p class="sub-title mb-16" data-aos="fade-up">{ INSIGHTS &amp; MILESTONES }</p>
                        <h2 class="title text-anime-style-2 mb-24">Engineering Leadership Built On High Performance</h2>
                        <p class="th-para">Every system I architect focuses on maintainable codebases, zero-downtime database migrations, micro-second query responses, and scalable cloud deployments that empower businesses to grow seamlessly.</p>
                    </div>

                    <div class="th-fact-btn mt-30">
                        <a href="{{ route('contact') }}" class="th-primary-btn th-primary-btn-3">
                            <span class="th-icon"><img src="{{ asset('assets/img/icon/th-up-arrow-wh-3.1.png') }}" alt=""></span>
                            <span class="th-text th-upper">GET IN TOUCH</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- =========== fact area end =========== -->

<!-- =========== Infographic & PDF Blueprint Showcase =========== -->
<section class="th-achivement-area fix pt-90 pb-90">
    <div class="container">
        <div class="row align-items-center mb-50">
            <div class="col-xl-8 col-lg-8">
                <div class="th-section-title">
                    <p class="sub-title mb-16" data-aos="fade-up">{ TECHNICAL BLUEPRINT &amp; LEADERSHIP INFOGRAPHIC }</p>
                    <h2 class="title text-anime-style-2">Engineering Leadership Portfolio</h2>
                    <p class="th-para fs-5 text-light mt-3">Visual breakdown of engineering leadership, system architecture methodologies, and downloadable PDF technical guide.</p>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 text-center text-lg-end mt-4 mt-lg-0">
                <a href="{{ asset('assets/docs/Enterprise_Systems_Architect.pdf') }}" download="Enterprise_Systems_Architect.pdf" class="th-primary-btn th-primary-btn-3">
                    <span class="th-icon"><i class="fa-solid fa-file-pdf text-white fs-5"></i></span>
                    <span class="th-text">DOWNLOAD PDF GUIDE (16 MB)</span>
                </a>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-xl-12">
                <div class="p-4 rounded-4 shadow-lg border text-center overflow-hidden position-relative" style="background: rgba(255,255,255,0.02); border-color: rgba(255,123,0,0.4) !important;">
                    <a href="{{ asset('assets/img/infographics/Rohit_Kumar_Engineering_Leadership_Portfolio.png') }}" target="_blank" title="Click to view full high-res infographic">
                        <img src="{{ asset('assets/img/infographics/Rohit_Kumar_Engineering_Leadership_Portfolio.png') }}" alt="Rohit Kumar Engineering Leadership Portfolio Infographic" class="w-100 rounded-4 shadow-sm" style="max-height: 850px; object-fit: contain; background: #000;">
                    </a>
                    <div class="mt-4 d-flex justify-content-center gap-3 flex-wrap">
                        <a href="{{ asset('assets/img/infographics/Rohit_Kumar_Engineering_Leadership_Portfolio.png') }}" target="_blank" class="btn btn-warning text-dark fw-bold rounded-pill px-4 py-2">
                            <i class="fa-solid fa-expand me-2"></i> Open Full High-Res Infographic
                        </a>
                        <a href="{{ asset('assets/docs/Enterprise_Systems_Architect.pdf') }}" download="Enterprise_Systems_Architect.pdf" class="btn btn-outline-warning fw-bold rounded-pill px-4 py-2">
                            <i class="fa-solid fa-download me-2"></i> Download PDF Architecture Guide
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- =========== Infographic & PDF Blueprint Showcase End =========== -->

<!-- =========== Experience & Career Journey =========== -->
<section class="th-award-bg pt-120 pb-90 parallaxie" style="background-image: url({{ asset('assets/img/designer/th-award1.1.png') }});">
    <div class="container">
        <div class="row">
            <div class="col-xl-5 col-lg-5 mb-30">
                <div class="th-award-title">
                    <div class="th-section-title mb-48">
                        <p class="sub-title mb-16" data-aos="fade-up">{ CAREER &amp; ROLES }</p>
                        <h2 class="title text-anime-style-2">Professional <span>Leadership Roles</span></h2>
                    </div>

                    <div class="tharard-thumb-wrap text-center p-relative">
                        <img class="rounded-4 shadow-lg w-100" src="{{ asset('assets/img/rohit.jpeg') }}" alt="Rohit Kumar" style="max-height: 420px; object-fit: cover; border: 3px solid #FF7B00;">
                    </div>
                </div>
            </div>
            <div class="col-xl-7 col-lg-7 mb-30">
                <div class="th-award-items-flex p-relative mb-3 d-flex justify-content-between align-items-center p-4 rounded-4" style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.1);">
                    <div class="th-awaard-content-wrap">
                        <h3 class="th-title fs-4 fw-bold text-white mb-1">Backend Developer Lead</h3>
                        <p class="th-para text-warning mb-0"><i class="fa-solid fa-building me-2"></i>FinCrif India Private Limited (Current)</p>
                    </div>
                    <span class="badge bg-warning text-dark px-3 py-2 fs-6 rounded-pill">Lead Role</span>
                </div>

                <div class="th-award-items-flex p-relative mb-3 d-flex justify-content-between align-items-center p-4 rounded-4" style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.1);">
                    <div class="th-awaard-content-wrap">
                        <h3 class="th-title fs-4 fw-bold text-white mb-1">Founder &amp; Technical Architect</h3>
                        <p class="th-para text-warning mb-0"><i class="fa-solid fa-rocket me-2"></i>Solidrix Solutions</p>
                    </div>
                    <span class="badge bg-warning text-dark px-3 py-2 fs-6 rounded-pill">Founder</span>
                </div>

                <div class="th-award-items-flex p-relative mb-3 d-flex justify-content-between align-items-center p-4 rounded-4" style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.1);">
                    <div class="th-awaard-content-wrap">
                        <h3 class="th-title fs-4 fw-bold text-white mb-1">Former Co-Founder &amp; CTO</h3>
                        <p class="th-para text-secondary mb-0"><i class="fa-solid fa-laptop-code me-2"></i>GullySystem (Ex-CTO)</p>
                    </div>
                    <span class="badge bg-secondary text-white px-3 py-2 fs-6 rounded-pill">Ex-CTO</span>
                </div>

                <div class="th-award-items-flex p-relative d-flex justify-content-between align-items-center p-4 rounded-4" style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.1);">
                    <div class="th-awaard-content-wrap">
                        <h3 class="th-title fs-4 fw-bold text-white mb-1">Full Stack Senior Engineer</h3>
                        <p class="th-para text-warning mb-0"><i class="fa-solid fa-code me-2"></i>Enterprise SaaS Platforms</p>
                    </div>
                    <span class="badge bg-warning text-dark px-3 py-2 fs-6 rounded-pill">5+ Years</span>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

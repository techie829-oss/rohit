@extends('layouts.app')

@section('title', 'Backend & SaaS Architecture Services - Rohit Kumar (Coolhax RK)')
@section('meta_description', 'In-depth overview of Rohit Kumar’s backend architecture, enterprise SaaS engineering, API development, and cloud deployment capabilities.')

@section('content')
<!-- =========== breadcrumb area start =========== -->
<section class="th-breadcrumb-area" style="background-image: url({{ asset('assets/img/designer/th-breadcrumb-bg.png') }});">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 mx-auto text-center">
                <div class="th-breadcrumb-content">
                    <h2 class="th-breadcrumb-title">Service Details</h2>
                    <ul>
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li><span><i class="fa-solid fa-angle-right"></i></span></li>
                        <li><a href="{{ route('services') }}">Services</a></li>
                        <li><span><i class="fa-solid fa-angle-right"></i></span></li>
                        <li><a href="#" class="active">Backend Architecture</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- =========== breadcrumb area end =========== -->

<!-- =========== service details area start =========== -->
<section class="th-service-iconbox-wrap pt-120 pb-90">
    <div class="container">
        <!-- Main Service Hero Image -->
        <div class="th-service-large-thumb image-anime mb-5 text-center rounded-4 overflow-hidden shadow-lg border border-secondary" style="border-color: rgba(255,123,0,0.4) !important;">
            <img class="w-100 rounded-4" src="{{ asset('assets/img/services/backend-architecture.png') }}" alt="Backend & Microservices Architecture" style="max-height: 540px; object-fit: cover;">
        </div>

        <div class="row">
            <div class="col-xl-8 col-lg-8">
                <div class="th-service-large-content-wrap">
                    <div class="service-lar-content-box-1 mb-40">
                        <span class="badge bg-warning text-dark px-3 py-2 fs-6 rounded-pill mb-3 fw-bold">Enterprise Backend Engineering</span>
                        <h2 class="th-title fs-1 fw-bold text-white mb-20">Enterprise Backend &amp; SaaS Architecture</h2>
                        <p class="th-para fs-5 lh-lg text-light">Designing robust backend systems requires deep expertise in data structures, microservices concurrency, database indexing, and fault-tolerant cloud infrastructure. My engineering workflow turns complex business domain logic into ultra-fast, maintainable web applications capable of handling millions of daily requests.</p>

                        <div class="th-servic-auth-box-flex mt-4 p-4 rounded-4" style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,123,0,0.3);">
                            <div class="th-servie-sm-thumb">
                                <img src="{{ asset('assets/img/rohit.jpeg') }}" alt="Rohit Kumar" style="width: 65px; height: 65px; border-radius: 50%; object-fit: cover; border: 2px solid #FF7B00;">
                            </div>
                            <div class="th-servie-sm-content">
                                <h4 class="th-para text-white fs-5 font-italics">"Clean architecture, zero-downtime database migrations, and sub-50ms API response times are non-negotiable for production platforms."</h4>
                                <h3 class="th-auth-title text-warning mt-2 mb-0">Rohit Kumar (Coolhax RK)</h3>
                                <p class="th-position text-secondary mb-0">Backend Lead &amp; Technical Founder</p>
                            </div>
                        </div>
                    </div>

                    <!-- Secondary Service Image -->
                    <div class="my-5 rounded-4 overflow-hidden shadow-lg border border-secondary" style="border-color: rgba(255,123,0,0.4) !important;">
                        <img class="w-100 rounded-4" src="{{ asset('assets/img/services/saas-devops.png') }}" alt="Multi-Tenant SaaS Infrastructure" style="max-height: 480px; object-fit: cover;">
                    </div>

                    <div class="service-lar-content-box-1 mb-40">
                        <h2 class="th-title th-title-2 fs-3 text-white mb-20">Core Technical Capabilities:</h2>
                        <ul class="list-unstyled">
                            <li class="mb-3 text-light fs-5"><i class="fa-solid fa-circle-check text-warning me-2"></i> <strong>Multi-Tenant Data Isolation:</strong> Schema-per-tenant or single DB with strict row-level tenant security.</li>
                            <li class="mb-3 text-light fs-5"><i class="fa-solid fa-circle-check text-warning me-2"></i> <strong>High Concurrency RESTful APIs:</strong> OAuth2, Sanctum, JWT authentication with rate-limiting and webhook listeners.</li>
                            <li class="mb-3 text-light fs-5"><i class="fa-solid fa-circle-check text-warning me-2"></i> <strong>Automated Payroll &amp; Financial Calculators:</strong> High-precision tax, deduction, and statutory payroll compliance engines.</li>
                            <li class="mb-3 text-light fs-5"><i class="fa-solid fa-circle-check text-warning me-2"></i> <strong>Cloud DevOps &amp; Containerization:</strong> Dockerized environments with automated Nginx reverse proxy, SSL renewal, and CI/CD pipelines.</li>
                            <li class="mb-3 text-light fs-5"><i class="fa-solid fa-circle-check text-warning me-2"></i> <strong>Database Performance Tuning:</strong> Query profiling, composite indexing, Redis caching, and zero-downtime schema migrations.</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-lg-4">
                <div class="p-4 rounded-4 mb-30" style="background: rgba(255,255,255,0.02); border: 1px solid rgba(255,123,0,0.3);">
                    <h3 class="fs-4 fw-bold text-white mb-3"><i class="fa-solid fa-cubes text-warning me-2"></i> Production Platforms</h3>
                    <ul class="list-unstyled mb-4">
                        <li class="mb-3"><a href="https://hr.solidrix.com/" target="_blank" class="text-warning text-decoration-none fw-bold fs-6"><i class="fa-solid fa-users-gear me-2"></i> Enterprise HRMS &amp; Payroll</a></li>
                        <li class="mb-3"><a href="https://sklops.com/" target="_blank" class="text-warning text-decoration-none fw-bold fs-6"><i class="fa-solid fa-graduation-cap me-2"></i> SKLOPS School ERP</a></li>
                        <li class="mb-3"><a href="https://vedantbilling.com/" target="_blank" class="text-warning text-decoration-none fw-bold fs-6"><i class="fa-solid fa-receipt me-2"></i> Vedant Billing POS ERP</a></li>
                        <li class="mb-3"><a href="https://send.solidrix.com/" target="_blank" class="text-warning text-decoration-none fw-bold fs-6"><i class="fa-solid fa-paper-plane me-2"></i> Solidrix Send Email Router</a></li>
                        <li class="mb-3"><a href="https://smm.solidrix.com" target="_blank" class="text-warning text-decoration-none fw-bold fs-6"><i class="fa-solid fa-bolt me-2"></i> Solidrix SMM Panel</a></li>
                    </ul>

                    <a href="{{ route('contact') }}" class="th-primary-btn th-primary-btn-3 w-100 text-center">
                        <span class="th-icon"><img src="{{ asset('assets/img/icon/th-up-arrow-wh-3.1.png') }}" alt=""></span>
                        <span class="th-text th-upper">HIRE ME NOW</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- =========== service details area end =========== -->
@endsection

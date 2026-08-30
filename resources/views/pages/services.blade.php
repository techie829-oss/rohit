@extends('layouts.app')

@section('title', 'Engineering Services - Rohit Kumar (Coolhax RK)')
@section('meta_description', 'Explore professional full stack development services by Rohit Kumar: Backend Architecture, Enterprise Multi-Tenant SaaS, Cloud DevOps, Database Optimization, ERP & HRMS Solutions.')

@section('content')
<!-- =========== breadcrumb area start =========== -->
<section class="th-breadcrumb-area" style="background-image: url({{ asset('assets/img/designer/th-breadcrumb-bg.png') }});">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 mx-auto text-center">
                <div class="th-breadcrumb-content">
                    <h2 class="th-breadcrumb-title">Our Services</h2>
                    <ul>
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li><span><i class="fa-solid fa-angle-right"></i></span></li>
                        <li><a href="#" class="active">Services</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- =========== breadcrumb area end =========== -->

<!-- =========== service area start =========== -->
<section class="th-service-iconbox-wrap pt-120 pb-90">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 mx-auto text-center">
                <div class="th-section-title mb-48">
                    <p class="sub-title mb-16" data-aos="fade-up">{ WHAT WE OFFER }</p>
                    <h2 class="title text-anime-style-2">Specialized Engineering &amp; Architecture Services</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- single service -->
            <div class="col-xl-4 col-md-6 mb-30">
                <div class="th-service-icnbox h-100 d-flex flex-column justify-content-between p-4 rounded-4" style="background: rgba(255,255,255,0.02); border: 1px solid rgba(255,123,0,0.2);">
                    <div>
                        <div class="th-service-icnbox-flex-2 mb-3">
                            <div class="th-service-icnbox-icon">
                                <span><i class="fa-solid fa-server text-warning fs-2"></i></span>
                            </div>
                            <div class="th-service-icnbox-content">
                                <h3 class="th-right-title">Service 01</h3>
                            </div>
                        </div>
                        <h2 class="th-service-icnbox-title mb-3"><a href="{{ route('services.details') }}">Backend &amp; API Architecture</a></h2>
                        <p class="th-service-icnbox-para text-light">Designing robust Laravel and Node.js RESTful APIs, microservices, secure authentication, and high-performance server logic built for high concurrency.</p>
                    </div>
                    <a href="{{ route('services.details') }}" class="th-service-arrow-icon mt-4">
                        <span class="th-arrow-bg"><img src="{{ asset('assets/img/icon/th-arrow-icon-ser.png') }}" alt=""></span>
                        <span class="th-arrow-content">VIEW DETAILS</span>
                    </a>
                </div>
            </div>

            <!-- single service -->
            <div class="col-xl-4 col-md-6 mb-30">
                <div class="th-service-icnbox h-100 d-flex flex-column justify-content-between p-4 rounded-4" style="background: rgba(255,255,255,0.02); border: 1px solid rgba(255,123,0,0.2);">
                    <div>
                        <div class="th-service-icnbox-flex-2 mb-3">
                            <div class="th-service-icnbox-icon">
                                <span><i class="fa-solid fa-layer-group text-warning fs-2"></i></span>
                            </div>
                            <div class="th-service-icnbox-content">
                                <h3 class="th-right-title">Service 02</h3>
                            </div>
                        </div>
                        <h2 class="th-service-icnbox-title mb-3"><a href="{{ route('services.details') }}">Multi-Tenant SaaS Systems</a></h2>
                        <p class="th-service-icnbox-para text-light">Architecting scalable multi-tenant SaaS applications with custom database isolation, subscription engines, RBAC permissions, and custom domains.</p>
                    </div>
                    <a href="{{ route('services.details') }}" class="th-service-arrow-icon mt-4">
                        <span class="th-arrow-bg"><img src="{{ asset('assets/img/icon/th-arrow-icon-ser.png') }}" alt=""></span>
                        <span class="th-arrow-content">VIEW DETAILS</span>
                    </a>
                </div>
            </div>

            <!-- single service -->
            <div class="col-xl-4 col-md-6 mb-30">
                <div class="th-service-icnbox h-100 d-flex flex-column justify-content-between p-4 rounded-4" style="background: rgba(255,255,255,0.02); border: 1px solid rgba(255,123,0,0.2);">
                    <div>
                        <div class="th-service-icnbox-flex-2 mb-3">
                            <div class="th-service-icnbox-icon">
                                <span><i class="fa-solid fa-cloud text-warning fs-2"></i></span>
                            </div>
                            <div class="th-service-icnbox-content">
                                <h3 class="th-right-title">Service 03</h3>
                            </div>
                        </div>
                        <h2 class="th-service-icnbox-title mb-3"><a href="{{ route('services.details') }}">Cloud DevOps &amp; Containerization</a></h2>
                        <p class="th-service-icnbox-para text-light">Automated Docker deployments, Linux server management, Nginx reverse proxy configuration, SSL automation, and CI/CD pipelines for 99.99% uptime.</p>
                    </div>
                    <a href="{{ route('services.details') }}" class="th-service-arrow-icon mt-4">
                        <span class="th-arrow-bg"><img src="{{ asset('assets/img/icon/th-arrow-icon-ser.png') }}" alt=""></span>
                        <span class="th-arrow-content">VIEW DETAILS</span>
                    </a>
                </div>
            </div>

            <!-- single service -->
            <div class="col-xl-4 col-md-6 mb-30">
                <div class="th-service-icnbox h-100 d-flex flex-column justify-content-between p-4 rounded-4" style="background: rgba(255,255,255,0.02); border: 1px solid rgba(255,123,0,0.2);">
                    <div>
                        <div class="th-service-icnbox-flex-2 mb-3">
                            <div class="th-service-icnbox-icon">
                                <span><i class="fa-solid fa-database text-warning fs-2"></i></span>
                            </div>
                            <div class="th-service-icnbox-content">
                                <h3 class="th-right-title">Service 04</h3>
                            </div>
                        </div>
                        <h2 class="th-service-icnbox-title mb-3"><a href="{{ route('services.details') }}">Database Optimization</a></h2>
                        <p class="th-service-icnbox-para text-light">MySQL &amp; PostgreSQL query optimization, composite indexing, zero-downtime schema migrations, redis caching strategies, and data integrity design.</p>
                    </div>
                    <a href="{{ route('services.details') }}" class="th-service-arrow-icon mt-4">
                        <span class="th-arrow-bg"><img src="{{ asset('assets/img/icon/th-arrow-icon-ser.png') }}" alt=""></span>
                        <span class="th-arrow-content">VIEW DETAILS</span>
                    </a>
                </div>
            </div>

            <!-- single service -->
            <div class="col-xl-4 col-md-6 mb-30">
                <div class="th-service-icnbox h-100 d-flex flex-column justify-content-between p-4 rounded-4" style="background: rgba(255,255,255,0.02); border: 1px solid rgba(255,123,0,0.2);">
                    <div>
                        <div class="th-service-icnbox-flex-2 mb-3">
                            <div class="th-service-icnbox-icon">
                                <span><i class="fa-solid fa-calculator text-warning fs-2"></i></span>
                            </div>
                            <div class="th-service-icnbox-content">
                                <h3 class="th-right-title">Service 05</h3>
                            </div>
                        </div>
                        <h2 class="th-service-icnbox-title mb-3"><a href="{{ route('services.details') }}">Enterprise ERP &amp; HRMS Solutions</a></h2>
                        <p class="th-service-icnbox-para text-light">Custom HRMS, automated monthly payroll engines, attendance tracking systems, school ERP portals (SKLOPS), and GST retail billing software (Vedant Billing).</p>
                    </div>
                    <a href="{{ route('services.details') }}" class="th-service-arrow-icon mt-4">
                        <span class="th-arrow-bg"><img src="{{ asset('assets/img/icon/th-arrow-icon-ser.png') }}" alt=""></span>
                        <span class="th-arrow-content">VIEW DETAILS</span>
                    </a>
                </div>
            </div>

            <!-- single service -->
            <div class="col-xl-4 col-md-6 mb-30">
                <div class="th-service-icnbox h-100 d-flex flex-column justify-content-between p-4 rounded-4" style="background: rgba(255,255,255,0.02); border: 1px solid rgba(255,123,0,0.2);">
                    <div>
                        <div class="th-service-icnbox-flex-2 mb-3">
                            <div class="th-service-icnbox-icon">
                                <span><i class="fa-solid fa-paper-plane text-warning fs-2"></i></span>
                            </div>
                            <div class="th-service-icnbox-content">
                                <h3 class="th-right-title">Service 06</h3>
                            </div>
                        </div>
                        <h2 class="th-service-icnbox-title mb-3"><a href="{{ route('services.details') }}">Multi-SMTP Routers &amp; Webhooks</a></h2>
                        <p class="th-service-icnbox-para text-light">Building high-deliverability transactional email routers (Solidrix Send) with automated failover, real-time webhook parsing, and WhatsApp messaging integrations.</p>
                    </div>
                    <a href="{{ route('services.details') }}" class="th-service-arrow-icon mt-4">
                        <span class="th-arrow-bg"><img src="{{ asset('assets/img/icon/th-arrow-icon-ser.png') }}" alt=""></span>
                        <span class="th-arrow-content">VIEW DETAILS</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- =========== service area end =========== -->
@endsection

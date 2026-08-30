@extends('layouts.app')

@section('title', 'Project Case Study - Rohit Kumar (Coolhax RK)')
@section('meta_description', 'Detailed technical case study of Enterprise HRMS & Payroll platform engineered by Rohit Kumar (Coolhax RK).')

@section('content')
<!-- =========== breadcrumb area start =========== -->
<section class="th-breadcrumb-area" style="background-image: url({{ asset('assets/img/designer/th-breadcrumb-bg.png') }});">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 mx-auto text-center">
                <div class="th-breadcrumb-content">
                    <h2 class="th-breadcrumb-title">Project Case Study</h2>
                    <ul>
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li><span><i class="fa-solid fa-angle-right"></i></span></li>
                        <li><a href="{{ route('projects') }}">Projects</a></li>
                        <li><span><i class="fa-solid fa-angle-right"></i></span></li>
                        <li><a href="#" class="active">Case Study</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- =========== breadcrumb area end =========== -->

<!-- =========== project details start =========== -->
<section class="pt-120 pb-90">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 mb-40">
                <div class="rounded-4 overflow-hidden text-center shadow-lg">
                    <img class="w-100" src="{{ asset('assets/img/marketer/th-portfolio-details.png') }}" alt="Enterprise HRMS Case Study" style="max-height: 520px; object-fit: cover;">
                </div>
            </div>
            <div class="col-xl-8 col-lg-8">
                <h2 class="text-white fs-1 fw-bold mb-3">Enterprise HRMS &amp; Automated Payroll Engine</h2>
                <p class="text-warning fs-5 mb-4">Multi-Tenant SaaS System for High-Scale Employee Management</p>
                <p class="text-light fs-5 lh-lg mb-4">Built from the ground up to solve complex enterprise workforce management challenges, this platform automates daily employee check-ins, shift rotations, leave approvals, and monthly salary disbursement calculations with statutory compliance.</p>

                <h3 class="text-white fs-3 mb-3">Technical Highlights &amp; Stack:</h3>
                <ul class="list-unstyled mb-4">
                    <li class="mb-3 text-light fs-6"><i class="fa-solid fa-check-circle text-warning me-2"></i> <strong>Backend Stack:</strong> Laravel 11, PHP 8.3, MySQL, Redis Cache.</li>
                    <li class="mb-3 text-light fs-6"><i class="fa-solid fa-check-circle text-warning me-2"></i> <strong>Tenant Security:</strong> Multi-tenant database isolation preventing cross-tenant data leaks.</li>
                    <li class="mb-3 text-light fs-6"><i class="fa-solid fa-check-circle text-warning me-2"></i> <strong>High Concurrency:</strong> Optimized indexing and queue workers processing 10,000+ daily check-ins under 50ms latency.</li>
                    <li class="mb-3 text-light fs-6"><i class="fa-solid fa-check-circle text-warning me-2"></i> <strong>Live URL:</strong> <a href="https://hr.solidrix.com/" target="_blank" class="text-warning">https://hr.solidrix.com/</a></li>
                </ul>
            </div>
            <div class="col-xl-4 col-lg-4">
                <div class="p-4 rounded-4" style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,123,0,0.3);">
                    <h4 class="text-white fs-4 mb-3">Project Metadata</h4>
                    <p class="text-light mb-2"><strong>Client / Product:</strong> Enterprise HRMS</p>
                    <p class="text-light mb-2"><strong>Role:</strong> Lead Full Stack Architect</p>
                    <p class="text-light mb-2"><strong>Category:</strong> Multi-Tenant SaaS</p>
                    <p class="text-light mb-4"><strong>Status:</strong> Live in Production</p>

                    <a href="https://hr.solidrix.com/" target="_blank" class="btn btn-warning w-100 fw-bold py-2 rounded-pill">Visit Live SaaS Platform <i class="fa-solid fa-arrow-up-right-from-square ms-1"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- =========== project details end =========== -->
@endsection

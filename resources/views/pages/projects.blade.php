@extends('layouts.app')

@section('title', 'Featured Enterprise Projects & SaaS Platforms - Rohit Kumar (Coolhax RK)')
@section('meta_description', 'Explore live production enterprise SaaS platforms engineered by Rohit Kumar: Enterprise HRMS & Payroll, SKLOPS School ERP, Vedant Billing POS, Solidrix Send Email Router.')

@section('content')
<!-- =========== breadcrumb area start =========== -->
<section class="th-breadcrumb-area" style="background-image: url({{ asset('assets/img/designer/th-breadcrumb-bg.png') }});">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 mx-auto text-center">
                <div class="th-breadcrumb-content">
                    <h2 class="th-breadcrumb-title">Portfolio Showcase</h2>
                    <ul>
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li><span><i class="fa-solid fa-angle-right"></i></span></li>
                        <li><a href="#" class="active">Featured Projects</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- =========== breadcrumb area end =========== -->

<!-- =========== portfolio area start =========== -->
<section class="th-portfolio-area-wrap pt-120 pb-90">
    <div class="container">
        <div class="row align-items-center mb-50">
            <div class="col-xl-8 col-lg-8">
                <div class="th-section-title">
                    <p class="sub-title mb-16" data-aos="fade-up">{ PRODUCTION SaaS &amp; ENTERPRISE SYSTEMS }</p>
                    <h2 class="title text-anime-style-2">Architected &amp; Delivered For Scale</h2>
                    <p class="th-para fs-5 text-light mt-3">From multi-tenant HRMS payroll engines to school management portals, retail POS systems, and transactional email routers — every platform is engineered with clean code, robust database architecture, and automated cloud DevOps.</p>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 text-center text-lg-end mt-4 mt-lg-0">
                <a href="{{ route('contact') }}" class="th-primary-btn th-primary-btn-3">
                    <span class="th-icon"><img src="{{ asset('assets/img/icon/th-up-arrow-wh-3.1.png') }}" alt=""></span>
                    <span class="th-text">DISCUSS A PROJECT</span>
                </a>
            </div>
        </div>

        <div class="row g-4">
            <!-- Project 1: Enterprise HRMS -->
            <div class="col-xl-6 col-lg-6 mb-30">
                <div class="th-portfolio-card h-100 p-4 rounded-4 shadow-lg d-flex flex-column justify-content-between" style="background: rgba(255,255,255,0.02); border: 1px solid rgba(255,123,0,0.3); transition: transform 0.3s ease;">
                    <div>
                        <div class="th-portfolio-card-thumb mb-4 rounded-4 overflow-hidden border border-secondary text-center" style="max-height: 320px;">
                            <img class="w-100 h-100 rounded-4" src="{{ asset('assets/img/projects/hrms.png') }}" alt="Enterprise HRMS & Payroll" style="object-fit: cover; object-position: top;">
                        </div>
                        
                        <div class="d-flex align-items-center justify-content-between flex-wrap gap-2 mb-3">
                            <span class="badge bg-warning text-dark px-3 py-2 fs-6 rounded-pill fw-bold">Multi-Tenant SaaS</span>
                            <span class="text-warning fs-6"><i class="fa-solid fa-users me-1"></i> 10,000+ Daily Check-ins</span>
                        </div>

                        <h3 class="th-title fs-3 fw-bold text-white mb-3">
                            <a href="https://hr.solidrix.com/" target="_blank" class="text-white text-decoration-none">Enterprise HRMS &amp; Automated Payroll</a>
                        </h3>
                        <p class="th-para text-light fs-6 mb-4">Complete multi-tenant workforce &amp; payroll system featuring automated biometric attendance sync, leave workflow engine, statutory tax compliance, and automated monthly salary disbursements.</p>

                        <div class="tech-stack-badges d-flex flex-wrap gap-2 mb-4">
                            <span class="badge bg-dark text-warning border border-secondary px-2 py-1 fs-6">Laravel 11</span>
                            <span class="badge bg-dark text-warning border border-secondary px-2 py-1 fs-6">MySQL</span>
                            <span class="badge bg-dark text-warning border border-secondary px-2 py-1 fs-6">Redis Cache</span>
                            <span class="badge bg-dark text-warning border border-secondary px-2 py-1 fs-6">Docker</span>
                            <span class="badge bg-dark text-warning border border-secondary px-2 py-1 fs-6">Bootstrap 5</span>
                        </div>
                    </div>

                    <div class="d-flex align-items-center justify-content-between pt-3 border-top border-secondary">
                        <a href="https://hr.solidrix.com/" target="_blank" class="btn btn-warning text-dark fw-bold rounded-pill px-4">
                            Visit Live Platform <i class="fa-solid fa-arrow-up-right-from-square ms-1"></i>
                        </a>
                        <a href="{{ route('projects.details') }}" class="text-warning text-decoration-none fw-bold">
                            Case Study <i class="fa-solid fa-chevron-right ms-1"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Project 2: SKLOPS School ERP -->
            <div class="col-xl-6 col-lg-6 mb-30">
                <div class="th-portfolio-card h-100 p-4 rounded-4 shadow-lg d-flex flex-column justify-content-between" style="background: rgba(255,255,255,0.02); border: 1px solid rgba(255,123,0,0.3); transition: transform 0.3s ease;">
                    <div>
                        <div class="th-portfolio-card-thumb mb-4 rounded-4 overflow-hidden border border-secondary text-center" style="max-height: 320px;">
                            <img class="w-100 h-100 rounded-4" src="{{ asset('assets/img/projects/sklops.png') }}" alt="SKLOPS School ERP" style="object-fit: cover; object-position: top;">
                        </div>

                        <div class="d-flex align-items-center justify-content-between flex-wrap gap-2 mb-3">
                            <span class="badge bg-warning text-dark px-3 py-2 fs-6 rounded-pill fw-bold">EdTech ERP</span>
                            <span class="text-warning fs-6"><i class="fa-solid fa-graduation-cap me-1"></i> 50+ Educational Institutions</span>
                        </div>

                        <h3 class="th-title fs-3 fw-bold text-white mb-3">
                            <a href="https://sklops.com/" target="_blank" class="text-white text-decoration-none">SKLOPS School ERP &amp; Parent Portal</a>
                        </h3>
                        <p class="th-para text-light fs-6 mb-4">All-in-one school management suite covering online fee collection with payment gateway integration, automated student grade sheets, timetable scheduling, and parent notification portal.</p>

                        <div class="tech-stack-badges d-flex flex-wrap gap-2 mb-4">
                            <span class="badge bg-dark text-warning border border-secondary px-2 py-1 fs-6">Laravel</span>
                            <span class="badge bg-dark text-warning border border-secondary px-2 py-1 fs-6">Vue.js</span>
                            <span class="badge bg-dark text-warning border border-secondary px-2 py-1 fs-6">MySQL</span>
                            <span class="badge bg-dark text-warning border border-secondary px-2 py-1 fs-6">Razorpay API</span>
                            <span class="badge bg-dark text-warning border border-secondary px-2 py-1 fs-6">Nginx</span>
                        </div>
                    </div>

                    <div class="d-flex align-items-center justify-content-between pt-3 border-top border-secondary">
                        <a href="https://sklops.com/" target="_blank" class="btn btn-warning text-dark fw-bold rounded-pill px-4">
                            Visit Live Platform <i class="fa-solid fa-arrow-up-right-from-square ms-1"></i>
                        </a>
                        <a href="{{ route('projects.details') }}" class="text-warning text-decoration-none fw-bold">
                            Case Study <i class="fa-solid fa-chevron-right ms-1"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Project 3: Vedant Billing ERP -->
            <div class="col-xl-6 col-lg-6 mb-30">
                <div class="th-portfolio-card h-100 p-4 rounded-4 shadow-lg d-flex flex-column justify-content-between" style="background: rgba(255,255,255,0.02); border: 1px solid rgba(255,123,0,0.3); transition: transform 0.3s ease;">
                    <div>
                        <div class="th-portfolio-card-thumb mb-4 rounded-4 overflow-hidden border border-secondary text-center" style="max-height: 320px;">
                            <img class="w-100 h-100 rounded-4" src="{{ asset('assets/img/projects/vedant-billing.png') }}" alt="Vedant Billing POS ERP" style="object-fit: cover; object-position: top;">
                        </div>

                        <div class="d-flex align-items-center justify-content-between flex-wrap gap-2 mb-3">
                            <span class="badge bg-warning text-dark px-3 py-2 fs-6 rounded-pill fw-bold">Retail POS ERP</span>
                            <span class="text-warning fs-6"><i class="fa-solid fa-receipt me-1"></i> Fast Thermal Printing</span>
                        </div>

                        <h3 class="th-title fs-3 fw-bold text-white mb-3">
                            <a href="https://vedantbilling.com/" target="_blank" class="text-white text-decoration-none">Vedant Billing &amp; Retail POS ERP</a>
                        </h3>
                        <p class="th-para text-light fs-6 mb-4">High-speed retail point-of-sale software featuring instant barcode scanning, multi-store stock sync, automated GST invoice generation, and financial ledger exports.</p>

                        <div class="tech-stack-badges d-flex flex-wrap gap-2 mb-4">
                            <span class="badge bg-dark text-warning border border-secondary px-2 py-1 fs-6">Laravel</span>
                            <span class="badge bg-dark text-warning border border-secondary px-2 py-1 fs-6">JavaScript POS</span>
                            <span class="badge bg-dark text-warning border border-secondary px-2 py-1 fs-6">MySQL</span>
                            <span class="badge bg-dark text-warning border border-secondary px-2 py-1 fs-6">Thermal Printer API</span>
                        </div>
                    </div>

                    <div class="d-flex align-items-center justify-content-between pt-3 border-top border-secondary">
                        <a href="https://vedantbilling.com/" target="_blank" class="btn btn-warning text-dark fw-bold rounded-pill px-4">
                            Visit Live Platform <i class="fa-solid fa-arrow-up-right-from-square ms-1"></i>
                        </a>
                        <a href="{{ route('projects.details') }}" class="text-warning text-decoration-none fw-bold">
                            Case Study <i class="fa-solid fa-chevron-right ms-1"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Project 4: Solidrix Send -->
            <div class="col-xl-6 col-lg-6 mb-30">
                <div class="th-portfolio-card h-100 p-4 rounded-4 shadow-lg d-flex flex-column justify-content-between" style="background: rgba(255,255,255,0.02); border: 1px solid rgba(255,123,0,0.3); transition: transform 0.3s ease;">
                    <div>
                        <div class="th-portfolio-card-thumb mb-4 rounded-4 overflow-hidden border border-secondary text-center" style="max-height: 320px;">
                            <img class="w-100 h-100 rounded-4" src="{{ asset('assets/img/projects/solidrix-send.png') }}" alt="Solidrix Send Email Router" style="object-fit: cover; object-position: top;">
                        </div>

                        <div class="d-flex align-items-center justify-content-between flex-wrap gap-2 mb-3">
                            <span class="badge bg-warning text-dark px-3 py-2 fs-6 rounded-pill fw-bold">Email Infrastructure</span>
                            <span class="text-warning fs-6"><i class="fa-solid fa-paper-plane me-1"></i> 99.99% Inbox Deliverability</span>
                        </div>

                        <h3 class="th-title fs-3 fw-bold text-white mb-3">
                            <a href="https://send.solidrix.com/" target="_blank" class="text-white text-decoration-none">Solidrix Send Multi-SMTP Email Router</a>
                        </h3>
                        <p class="th-para text-light fs-6 mb-4">High-throughput transactional email routing engine with dynamic multi-provider load balancing, automated SMTP failover, real-time bounce processing, and webhook callbacks.</p>

                        <div class="tech-stack-badges d-flex flex-wrap gap-2 mb-4">
                            <span class="badge bg-dark text-warning border border-secondary px-2 py-1 fs-6">Node.js</span>
                            <span class="badge bg-dark text-warning border border-secondary px-2 py-1 fs-6">Express</span>
                            <span class="badge bg-dark text-warning border border-secondary px-2 py-1 fs-6">Redis Queue</span>
                            <span class="badge bg-dark text-warning border border-secondary px-2 py-1 fs-6">SMTP Cluster</span>
                            <span class="badge bg-dark text-warning border border-secondary px-2 py-1 fs-6">Webhooks</span>
                        </div>
                    </div>

                    <div class="d-flex align-items-center justify-content-between pt-3 border-top border-secondary">
                        <a href="https://send.solidrix.com/" target="_blank" class="btn btn-warning text-dark fw-bold rounded-pill px-4">
                            Visit Live Platform <i class="fa-solid fa-arrow-up-right-from-square ms-1"></i>
                        </a>
                        <a href="{{ route('projects.details') }}" class="text-warning text-decoration-none fw-bold">
                            Case Study <i class="fa-solid fa-chevron-right ms-1"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Project 5: Solidrix SMM Panel -->
            <div class="col-xl-6 col-lg-6 mb-30">
                <div class="th-portfolio-card h-100 p-4 rounded-4 shadow-lg d-flex flex-column justify-content-between" style="background: rgba(255,255,255,0.02); border: 1px solid rgba(255,123,0,0.3); transition: transform 0.3s ease;">
                    <div>
                        <div class="th-portfolio-card-thumb mb-4 rounded-4 overflow-hidden border border-secondary text-center" style="max-height: 320px;">
                            <img class="w-100 h-100 rounded-4" src="{{ asset('assets/img/projects/solidrix-smm.png') }}" alt="Solidrix SMM Panel" style="object-fit: cover; object-position: top;">
                        </div>

                        <div class="d-flex align-items-center justify-content-between flex-wrap gap-2 mb-3">
                            <span class="badge bg-warning text-dark px-3 py-2 fs-6 rounded-pill fw-bold">Digital Automation</span>
                            <span class="text-warning fs-6"><i class="fa-solid fa-bolt me-1"></i> Automated API Dispatch</span>
                        </div>

                        <h3 class="th-title fs-3 fw-bold text-white mb-3">
                            <a href="https://smm.solidrix.com" target="_blank" class="text-white text-decoration-none">Solidrix SMM Marketing Panel</a>
                        </h3>
                        <p class="th-para text-light fs-6 mb-4">High-volume social media marketing order management portal with automated provider API synchronization, live order tracking, and instant payment reconciliation.</p>

                        <div class="tech-stack-badges d-flex flex-wrap gap-2 mb-4">
                            <span class="badge bg-dark text-warning border border-secondary px-2 py-1 fs-6">Laravel</span>
                            <span class="badge bg-dark text-warning border border-secondary px-2 py-1 fs-6">MySQL</span>
                            <span class="badge bg-dark text-warning border border-secondary px-2 py-1 fs-6">REST API Sync</span>
                            <span class="badge bg-dark text-warning border border-secondary px-2 py-1 fs-6">Cron Jobs</span>
                        </div>
                    </div>

                    <div class="d-flex align-items-center justify-content-between pt-3 border-top border-secondary">
                        <a href="https://smm.solidrix.com" target="_blank" class="btn btn-warning text-dark fw-bold rounded-pill px-4">
                            Visit Live Panel <i class="fa-solid fa-arrow-up-right-from-square ms-1"></i>
                        </a>
                        <a href="{{ route('projects.details') }}" class="text-warning text-decoration-none fw-bold">
                            Case Study <i class="fa-solid fa-chevron-right ms-1"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- =========== portfolio area end =========== -->
@endsection

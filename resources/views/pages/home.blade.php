@extends('layouts.app')

@section('content')
<!-- =========== banner area start =========== -->
        <div class="p-relative">
            <div class="th-banner-area-thee-3 p-relative"
                style="background-image: url({{ asset('assets/img/marketer/th-hero-bg-3.1.png') }});">
                <div class="container">
                    <div class="th-banner-wrapper-3">
                        <div class="p-relative">
                            <h2 class="th-absolute-text d-none d-xl-block">Full Stack &amp; Tech Leader</h2>
                        </div>
                        <div class="row align-items-center">
                            <div class="col-xl-6 col-lg-6 order-2 order-lg-0">
                                <div class="th-banner-hero-thumb-three">
                                    <img class="w-100" src="{{ asset('assets/img/rohit.jpeg') }}" alt="Rohit Kumar">
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 mb-30 order-1">
                                <div class="th-banner-content-thee mt-100">
                                    <h3 class="th-subtitle" data-aos="fade-ul"> <span class="mr-4"><img
                                                src="{{ asset('assets/img/icon/th-subtitle-icon-3.1.png') }}" alt=""></span> Hello
                                        Everyone! 👋</h3>
                                    <h1 class="th-title text-anime-style-2">I’m Rohit Kumar <span>Full Stack Leader</span>
                                    </h1>
                                    <p class="th-para text-anime-style-1">Full Stack Engineer &amp; Tech Leader with 5+ years of experience building complete digital products end-to-end. From scalable Laravel &amp; Node.js backends to cloud DevOps, frontend platforms, and enterprise solutions — delivering as a leader &amp; technical architect.</p>

                                     <!-- th button area -->
                                     <div class="th-banner-btn-wrap mb-4 d-flex align-items-center flex-wrap gap-3">
                                         <!-- primary btn -->
                                         <a href="{{ route('contact') }}" class="th-primary-btn th-primary-btn-3"
                                             data-aos="fade-up">
                                             <span class="th-icon"><img src="{{ asset('assets/img/icon/th-up-arrow-wh-3.1.png') }}"
                                                     alt=""></span>
                                             <span class="th-text">GET IN TOUCH</span>
                                         </a>

                                         <!-- primary btn -->
                                         <a href="https://wa.me/917007420572" target="_blank" class="th-primary-btn th-primary-btn-secondary-3"
                                             data-aos="fade-up">
                                             <span class="th-icon"><img src="{{ asset('assets/img/icon/th-arrow-oran.png') }}"
                                                     alt=""></span>
                                             <span class="th-text">WHATSAPP CHAT</span>
                                         </a>

                                         <!-- PDF Download btn -->
                                         <a href="{{ asset('assets/docs/Enterprise_Systems_Architect.pdf') }}" download="Enterprise_Systems_Architect.pdf" class="th-primary-btn th-primary-btn-secondary-3"
                                             data-aos="fade-up">
                                             <span class="th-icon"><i class="fa-solid fa-file-pdf text-warning fs-5"></i></span>
                                             <span class="th-text">DOWNLOAD PDF BLUEPRINT</span>
                                         </a>
                                     </div>

                                     <!-- separate role badges -->
                                     <div class="d-flex flex-wrap gap-2 mt-2" data-aos="fade-up">
                                         <span class="badge bg-dark text-warning border border-secondary px-3 py-2 fs-6 rounded-pill fw-medium">
                                             <i class="fa-solid fa-crown me-1"></i> Backend Lead @ FinCrif
                                         </span>
                                         <span class="badge bg-dark text-warning border border-secondary px-3 py-2 fs-6 rounded-pill fw-medium">
                                             <i class="fa-solid fa-rocket me-1"></i> Founder @ Solidrix
                                         </span>
                                         <span class="badge bg-dark text-warning border border-secondary px-3 py-2 fs-6 rounded-pill fw-medium">
                                             <i class="fa-solid fa-building me-1"></i> Ex-CTO @ GullySystem
                                         </span>
                                     </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- social -->
                <div class="th-banner-social-thee d-none d-xl-block">
                    <ul>
                        <li><a href="https://github.com/techie829-oss" target="_blank"><span></span>GITHUB</a></li>
                        <li><a href="https://www.linkedin.com/in/rohitk-coolhax" target="_blank"><span></span>LINKEDIN</a></li>
                        <li><a href="https://www.instagram.com/coolhax_/" target="_blank"><span></span>INSTAGRAM</a></li>
                        <li><a href="https://www.facebook.com/rohitkumarmaurya.rohitkumarmaurya" target="_blank"><span></span>FACEBOOK</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="th-black-bg-common-three"></div>

        <!-- =========== banner area end =========== -->

        <div class="th-brand-height-214 th-mt-265 fix">
            <div class="tp-brand-area tp-brand-area-1 th-orange-bg pt-40 pb-40">
                <div class="tp-brand-wrapper">
                    <div class="swiper tp-brand-top-active">
                        <div class="swiper-wrapper tp-slide-transtion">
                            <div class="swiper-slide tp-brand-slide-element">
                                <div class="tp-brand-img d-flex align-items-center">
                                    <span class="th-icn-1"><img src="{{ asset('assets/img/icon/th-Star3.png') }}" alt=""></span>
                                    <i class="fa-solid fa-layer-group text-white fs-4 ms-2 me-2"></i>
                                    <span class="text-white font-weight-bold fs-5">Full Stack Architecture</span>
                                </div>
                            </div>
                            <div class="swiper-slide tp-brand-slide-element">
                                <div class="tp-brand-img d-flex align-items-center">
                                    <span class="th-icn-1"><img src="{{ asset('assets/img/icon/th-Star3.png') }}" alt=""></span>
                                    <i class="fa-brands fa-laravel text-white fs-4 ms-2 me-2"></i>
                                    <span class="text-white font-weight-bold fs-5">Laravel &amp; PHP Engineering</span>
                                </div>
                            </div>
                            <div class="swiper-slide tp-brand-slide-element">
                                <div class="tp-brand-img d-flex align-items-center">
                                    <span class="th-icn-1"><img src="{{ asset('assets/img/icon/th-Star3.png') }}" alt=""></span>
                                    <i class="fa-brands fa-node-js text-white fs-4 ms-2 me-2"></i>
                                    <span class="text-white font-weight-bold fs-5">Node.js &amp; NestJS APIs</span>
                                </div>
                            </div>
                            <div class="swiper-slide tp-brand-slide-element">
                                <div class="tp-brand-img d-flex align-items-center">
                                    <span class="th-icn-1"><img src="{{ asset('assets/img/icon/th-Star3.png') }}" alt=""></span>
                                    <i class="fa-brands fa-docker text-white fs-4 ms-2 me-2"></i>
                                    <span class="text-white font-weight-bold fs-5">Docker Containerization</span>
                                </div>
                            </div>
                            <div class="swiper-slide tp-brand-slide-element">
                                <div class="tp-brand-img d-flex align-items-center">
                                    <span class="th-icn-1"><img src="{{ asset('assets/img/icon/th-Star3.png') }}" alt=""></span>
                                    <i class="fa-brands fa-aws text-white fs-4 ms-2 me-2"></i>
                                    <span class="text-white font-weight-bold fs-5">AWS Cloud &amp; VPS Infra</span>
                                </div>
                            </div>
                            <div class="swiper-slide tp-brand-slide-element">
                                <div class="tp-brand-img d-flex align-items-center">
                                    <span class="th-icn-1"><img src="{{ asset('assets/img/icon/th-Star3.png') }}" alt=""></span>
                                    <i class="fa-brands fa-whatsapp text-white fs-4 ms-2 me-2"></i>
                                    <span class="text-white font-weight-bold fs-5">WhatsApp Cloud API</span>
                                </div>
                            </div>
                            <div class="swiper-slide tp-brand-slide-element">
                                <div class="tp-brand-img d-flex align-items-center">
                                    <span class="th-icn-1"><img src="{{ asset('assets/img/icon/th-Star3.png') }}" alt=""></span>
                                    <i class="fa-solid fa-diagram-project text-white fs-4 ms-2 me-2"></i>
                                    <span class="text-white font-weight-bold fs-5">Multi-Tenant SaaS Systems</span>
                                </div>
                            </div>
                            <div class="swiper-slide tp-brand-slide-element">
                                <div class="tp-brand-img d-flex align-items-center">
                                    <span class="th-icn-1"><img src="{{ asset('assets/img/icon/th-Star3.png') }}" alt=""></span>
                                    <i class="fa-solid fa-users-gear text-white fs-4 ms-2 me-2"></i>
                                    <span class="text-white font-weight-bold fs-5">Enterprise HRMS &amp; Payroll</span>
                                </div>
                            </div>
                            <div class="swiper-slide tp-brand-slide-element">
                                <div class="tp-brand-img d-flex align-items-center">
                                    <span class="th-icn-1"><img src="{{ asset('assets/img/icon/th-Star3.png') }}" alt=""></span>
                                    <i class="fa-solid fa-code text-white fs-4 ms-2 me-2"></i>
                                    <span class="text-white font-weight-bold fs-5">RESTful APIs &amp; Microservices</span>
                                </div>
                            </div>
                            <div class="swiper-slide tp-brand-slide-element">
                                <div class="tp-brand-img d-flex align-items-center">
                                    <span class="th-icn-1"><img src="{{ asset('assets/img/icon/th-Star3.png') }}" alt=""></span>
                                    <i class="fa-solid fa-rotate text-white fs-4 ms-2 me-2"></i>
                                    <span class="text-white font-weight-bold fs-5">CI/CD Release Automation</span>
                                </div>
                            </div>
                            <div class="swiper-slide tp-brand-slide-element">
                                <div class="tp-brand-img d-flex align-items-center">
                                    <span class="th-icn-1"><img src="{{ asset('assets/img/icon/th-Star3.png') }}" alt=""></span>
                                    <i class="fa-solid fa-database text-white fs-4 ms-2 me-2"></i>
                                    <span class="text-white font-weight-bold fs-5">PostgreSQL, MySQL &amp; Redis</span>
                                </div>
                            </div>
                            <div class="swiper-slide tp-brand-slide-element">
                                <div class="tp-brand-img d-flex align-items-center">
                                    <span class="th-icn-1"><img src="{{ asset('assets/img/icon/th-Star3.png') }}" alt=""></span>
                                    <i class="fa-solid fa-chart-line text-white fs-4 ms-2 me-2"></i>
                                    <span class="text-white font-weight-bold fs-5">Custom CRM &amp; Lead Automations</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- =========== about area start =========== -->
        <section class="th-about-area-there fix p-relative pt-120">
            <div class="container">
                <div class="row">
                    <div class="col-xl-5">
                        <div class="th-about-wrap-3">
                            <div class="th-section-title th-section-title-3 mb-30">
                                <!-- th section subtitle -->
                                <p class="sub-title th-flex mb-16" data-aos="fade-up"> <span><img
                                            src="{{ asset('assets/img/icon/th-subtitle-icon-3.1.png') }}" alt=""></span> ABOUT ME <span
                                        class="th-arrow-line d-none d-xl-block"><img
                                            src="{{ asset('assets/img/icon/th-about-line3.1.png') }}" alt=""></span></p>
                            </div>
                            <!-- btn -->
                            <div class="th-hire-btn-wrap p-relative">
                                <a href="{{ route('contact') }}" class="th-btn-hire">
                                    For Tech Lead &amp; Full Stack HIRE ME
                                    <span><img src="{{ asset('assets/img/icon/th-arrow-hire.png') }}" alt=""></span>
                                </a>
                                <div class="th-hire-btn-shap">
                                    <img src="{{ asset('assets/img/icon/th-btn-shape-3.png') }}" alt="">
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="col-xl-7">
                        <div class="th-section-title th-section-title-3 mb-30">
                            <!-- th section title -->
                            <h2 class="title text-anime-style-2">Passionate About Full-Stack Product Engineering &amp; Digital Automation</h2>
                            <p class="th-para pt-32" data-aos="fade-up">Backend Developer Lead at FinCrif India Private Limited, former Co-Founder &amp; CTO at GullySystem Private Limited, and Founder of Solidrix Solutions with 5+ years of core software engineering &amp; product architecture experience. Building complete applications — from intuitive user interfaces to scalable Laravel/Node.js backends, multi-tenant databases, containerized cloud infrastructure, and 99.9% production uptime.</p>
                        </div>

                        <div class="row g-5">
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="th-number-boxwrap" data-aos="fade-up">
                                    <h2 class="th-number-boxwrap-umber"><span class="count">5</span>+ Yrs</h2>
                                    <p class="th-number-boxwrap-text">SENIOR FULL STACK &amp; TECH LEAD EXP.</p>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="th-number-boxwrap" data-aos="fade-up">
                                    <h2 class="th-number-boxwrap-umber"><span class="count">20</span>+</h2>
                                    <p class="th-number-boxwrap-text">ENTERPRISE SAAS &amp; AUTOMATION PLATFORMS</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="th-brand-wrap-flex-three" data-aos="fade-up">
                    <div class="th-company-brand text-center p-3">
                        <i class="fa-brands fa-laravel text-warning fs-3 mb-2 d-block"></i>
                        <span class="text-white font-weight-bold fs-5 d-block">Laravel</span>
                        <span class="text-warning small">Enterprise Framework</span>
                    </div>
                    <div class="th-company-brand text-center p-3">
                        <i class="fa-brands fa-node-js text-warning fs-3 mb-2 d-block"></i>
                        <span class="text-white font-weight-bold fs-5 d-block">Node.js &amp; NestJS</span>
                        <span class="text-warning small">Microservices &amp; APIs</span>
                    </div>
                    <div class="th-company-brand text-center p-3">
                        <i class="fa-brands fa-docker text-warning fs-3 mb-2 d-block"></i>
                        <span class="text-white font-weight-bold fs-5 d-block">Docker &amp; K8s</span>
                        <span class="text-warning small">DevOps &amp; Containers</span>
                    </div>
                    <div class="th-company-brand text-center p-3">
                        <i class="fa-brands fa-aws text-warning fs-3 mb-2 d-block"></i>
                        <span class="text-white font-weight-bold fs-5 d-block">AWS &amp; Cloud</span>
                        <span class="text-warning small">VPS &amp; Infrastructure</span>
                    </div>
                    <div class="th-company-brand text-center p-3">
                        <i class="fa-solid fa-database text-warning fs-3 mb-2 d-block"></i>
                        <span class="text-white font-weight-bold fs-5 d-block">PostgreSQL &amp; Redis</span>
                        <span class="text-warning small">Databases &amp; Caching</span>
                    </div>
                    <div class="th-company-brand text-center p-3">
                        <i class="fa-brands fa-whatsapp text-warning fs-3 mb-2 d-block"></i>
                        <span class="text-white font-weight-bold fs-5 d-block">WhatsApp Cloud API</span>
                        <span class="text-warning small">Meta Bot Automations</span>
                    </div>
                </div>
            </div>
            <h3 class="th-about-rotate-text d-none d-xl-block">ABOUT ME</h3>
        </section>
        <!-- =========== about area end =========== -->

        <!-- =========== offer area start =========== -->
        <section class="th-offer-area p-relative fix pt-120 pb-90">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 mx-auto text-center">
                        <div class="th-section-title th-section-title-3 mb-48">
                            <!-- th section subtitle -->
                            <p class="sub-title mb-16" data-aos="fade-up"> <span><img
                                        src="{{ asset('assets/img/icon/th-subtitle-icon-3.1.png') }}" alt=""></span> WHAT I OFFER
                                <span><img src="{{ asset('assets/img/icon/th-subtitle-icon-3.1.png') }}" alt=""></span>
                            </p>
                            <!-- th section title -->
                            <h2 class="title text-anime-style-2">Full Stack Engineering &amp; System Automation</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">

                <!-- Row 1: 3 Services -->
                <div class="th-expand-mainflex mb-30">
                    <!-- single expand -->
                    <div class="th-offer-box-wrap mb-30">
                        <!-- topflex -->
                        <div class="th-offer-box-wrap-topflex">
                            <div class="th-offer-box-wrap-topflex-icon">
                                <span><img src="{{ asset('assets/img/marketer/th-offer-icon1.1.png') }}" alt=""></span>
                            </div>
                            <div class="th-offer-box-wrap-topflex-tag">
                                <a href="{{ route('services.details') }}" class="tag3">Service _ 01</a>
                            </div>
                        </div>
                        <!-- centerflex -->
                        <div class="th-offer-box-wrap-centerflex">
                            <h3 class="th-offer-box-wrap-centerflex-title"><a href="{{ route('services.details') }}">Full Stack App Development &amp; SaaS</a>
                            </h3>
                            <p class="th-offer-box-wrap-centerflex-para">End-to-end product architecture from responsive frontends to high-performance Laravel &amp; Node.js/NestJS backends, multi-tenancy, and secure RBAC.</p>
                        </div>
                        <!-- button -->
                        <div class="th-offer-box-wrap-bottomflex">
                            <a href="{{ route('services.details') }}" class="th-btn-blog3"> <span><img
                                        src="{{ asset('assets/img/icon/th-blog-arrow-3.1.png') }}" alt=""></span> VIEW DETAILS </a>
                        </div>
                    </div>

                    <!-- single expand -->
                    <div class="th-offer-box-wrap mb-30">
                        <!-- topflex -->
                        <div class="th-offer-box-wrap-topflex">
                            <div class="th-offer-box-wrap-topflex-icon">
                                <span><img src="{{ asset('assets/img/marketer/th-offer-icon1.2.png') }}" alt=""></span>
                            </div>
                            <div class="th-offer-box-wrap-topflex-tag">
                                <a href="{{ route('services.details') }}" class="tag3">Service _ 02</a>
                            </div>
                        </div>
                        <!-- centerflex -->
                        <div class="th-offer-box-wrap-centerflex">
                            <h3 class="th-offer-box-wrap-centerflex-title"><a href="{{ route('services.details') }}">DevOps &amp; Cloud Automation</a></h3>
                            <p class="th-offer-box-wrap-centerflex-para">Containerized Docker orchestrations, AWS &amp; VPS setup, CI/CD automated release pipelines, SSL, DNS, monitoring, and zero-downtime deployments.</p>
                        </div>
                        <!-- button -->
                        <div class="th-offer-box-wrap-bottomflex">
                            <a href="{{ route('services.details') }}" class="th-btn-blog3"> <span><img
                                        src="{{ asset('assets/img/icon/th-blog-arrow-3.1.png') }}" alt=""></span> VIEW DETAILS </a>
                        </div>
                    </div>

                    <!-- single expand -->
                    <div class="th-offer-box-wrap mb-30">
                        <!-- topflex -->
                        <div class="th-offer-box-wrap-topflex">
                            <div class="th-offer-box-wrap-topflex-icon">
                                <span><img src="{{ asset('assets/img/marketer/th-offer-icon1.3.png') }}" alt=""></span>
                            </div>
                            <div class="th-offer-box-wrap-topflex-tag">
                                <a href="{{ route('services.details') }}" class="tag3">Service _ 03</a>
                            </div>
                        </div>
                        <!-- centerflex -->
                        <div class="th-offer-box-wrap-centerflex">
                            <h3 class="th-offer-box-wrap-centerflex-title"><a href="{{ route('services.details') }}">WhatsApp Cloud API &amp; Bot Automations</a></h3>
                            <p class="th-offer-box-wrap-centerflex-para">Meta WhatsApp Cloud API integration, automated customer bots, bulk marketing dispatchers, CRM webhooks, and transactional alert workflows.</p>
                        </div>
                        <!-- button -->
                        <div class="th-offer-box-wrap-bottomflex">
                            <a href="{{ route('services.details') }}" class="th-btn-blog3"> <span><img
                                        src="{{ asset('assets/img/icon/th-blog-arrow-3.1.png') }}" alt=""></span> VIEW DETAILS </a>
                        </div>
                    </div>
                </div>

                <!-- Row 2: 3 Services -->
                <div class="th-expand-mainflex mb-30">
                    <!-- single expand -->
                    <div class="th-offer-box-wrap mb-30">
                        <!-- topflex -->
                        <div class="th-offer-box-wrap-topflex">
                            <div class="th-offer-box-wrap-topflex-icon">
                                <span><img src="{{ asset('assets/img/marketer/th-offer-icon1.3.png') }}" alt=""></span>
                            </div>
                            <div class="th-offer-box-wrap-topflex-tag">
                                <a href="{{ route('services.details') }}" class="tag3">Service _ 04</a>
                            </div>
                        </div>
                        <!-- centerflex -->
                        <div class="th-offer-box-wrap-centerflex">
                            <h3 class="th-offer-box-wrap-centerflex-title"><a href="{{ route('services.details') }}">Enterprise HRMS, ERP &amp; Business Tools</a></h3>
                            <p class="th-offer-box-wrap-centerflex-para">Automated payroll calculation engines, employee attendance tracking, GST invoicing, lead pipelines, and database optimization (MySQL/PostgreSQL/Redis).</p>
                        </div>
                        <!-- button -->
                        <div class="th-offer-box-wrap-bottomflex">
                            <a href="{{ route('services.details') }}" class="th-btn-blog3"> <span><img
                                        src="{{ asset('assets/img/icon/th-blog-arrow-3.1.png') }}" alt=""></span> VIEW DETAILS </a>
                        </div>
                    </div>
                    <!-- single expand -->
                    <div class="th-offer-box-wrap mb-30">
                        <!-- topflex -->
                        <div class="th-offer-box-wrap-topflex">
                            <div class="th-offer-box-wrap-topflex-icon">
                                <span><img src="{{ asset('assets/img/marketer/th-offer-icon1.1.png') }}" alt=""></span>
                            </div>
                            <div class="th-offer-box-wrap-topflex-tag">
                                <a href="{{ route('services.details') }}" class="tag3">Service _ 05</a>
                            </div>
                        </div>
                        <!-- centerflex -->
                        <div class="th-offer-box-wrap-centerflex">
                            <h3 class="th-offer-box-wrap-centerflex-title"><a href="{{ route('services.details') }}">RESTful APIs &amp; Payment Gateways</a></h3>
                            <p class="th-offer-box-wrap-centerflex-para">Secure OAuth2 &amp; JWT authentication, Razorpay/Stripe/Paytm gateway integrations, automated webhook dispatches, and third-party API sync.</p>
                        </div>
                        <!-- button -->
                        <div class="th-offer-box-wrap-bottomflex">
                            <a href="{{ route('services.details') }}" class="th-btn-blog3"> <span><img
                                        src="{{ asset('assets/img/icon/th-blog-arrow-3.1.png') }}" alt=""></span> VIEW DETAILS </a>
                        </div>
                    </div>
                    <!-- single expand -->
                    <div class="th-offer-box-wrap mb-30">
                        <!-- topflex -->
                        <div class="th-offer-box-wrap-topflex">
                            <div class="th-offer-box-wrap-topflex-icon">
                                <span><img src="{{ asset('assets/img/marketer/th-offer-icon1.2.png') }}" alt=""></span>
                            </div>
                            <div class="th-offer-box-wrap-topflex-tag">
                                <a href="{{ route('services.details') }}" class="tag3">Service _ 06</a>
                            </div>
                        </div>
                        <!-- centerflex -->
                        <div class="th-offer-box-wrap-centerflex">
                            <h3 class="th-offer-box-wrap-centerflex-title"><a href="{{ route('services.details') }}">EdTech &amp; Vehicle GPS Live Tracking</a></h3>
                            <p class="th-offer-box-wrap-centerflex-para">Real-time vehicle GPS tracking systems, parent &amp; admin notification dispatches, School ERP integration, and fleet management automation.</p>
                        </div>
                        <!-- button -->
                        <div class="th-offer-box-wrap-bottomflex">
                            <a href="{{ route('services.details') }}" class="th-btn-blog3"> <span><img
                                        src="{{ asset('assets/img/icon/th-blog-arrow-3.1.png') }}" alt=""></span> VIEW DETAILS </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="th-expand-card-bottom mt-18">
                    <div class="th-divider"><img class="w-100" src="{{ asset('assets/img/marketer/th-large-dividar.png') }}" alt="">
                    </div>
                    <div class="th-center-box">
                        <p class="th-btn-box">Contact Us or Send An <span>Email to</span> rohitkmarch96@gmail.com</p>
                    </div>
                </div>
            </div>
            <h3 class="th-about-rotate-text th-about-rotate-text-2 d-none d-xl-block">SERVICES</h3>
        </section>
        <!-- =========== offer area end =========== -->

        <!-- =========== work area start =========== -->
        <section class="th-work-area-there p-relative fix pt-120 pb-90"
            style="background-image: url({{ asset('assets/img/marketer/th-ptoject-bg-3.1.png') }});">
            <div class="container">
                <div class="row">
                    <div class="th-mb-48-flex">
                        <div class="th-section-title th-section-title-3">
                            <!-- th section subtitle -->
                            <p class="sub-title th-flex mb-16" data-aos="fade-up"> <span><img
                                        src="{{ asset('assets/img/icon/th-subtitle-icon-3.1.png') }}" alt=""></span> Selected Work
                                <span class="th-arrow-line d-none d-xl-block"><img
                                        src="{{ asset('assets/img/icon/th-about-line3.2.png') }}" alt=""></span>
                            </p>
                        </div>
                        <div class="th-section-title th-section-title-3">
                            <!-- th section title -->
                            <h2 class="title text-anime-style-2">Featured Full Stack &amp; Automation Systems</h2>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container p-relative">
                <div class="row">
                    <div class="col-xl-11">
                        <div class="th-testiumonial-main-wrap p-relative">
                            <div class="th-project-slider">
                                <div class="th-number-nav">
                                    <span class="th-num1 th-active" data-slide="0">01</span>
                                    <span class="th-num1" data-slide="1">02</span>
                                    <span class="th-num1" data-slide="2">03</span>
                                    <span class="th-num1" data-slide="3">04</span>
                                </div>
                                <div class="swiper thHeroSwiper th-swiper">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <a href="https://hr.solidrix.com/" target="_blank" class="d-block text-decoration-none">
                                                <div class="th-slide-image p-relative">
                                                    <img src="{{ asset('assets/img/projects/hrms.png') }}" alt="Enterprise HRMS &amp; Payroll System">
                                                    <!-- th-project content -->
                                                    <div class="th-marketing-content">
                                                        <p class="th-sutitle">Enterprise HRMS &amp; Payroll System</p>
                                                        <h2 class="th-title">Automated Payroll, Geo-Attendance &amp; Multi-Tenant HRMS</h2>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="swiper-slide">
                                            <a href="https://sklops.com/" target="_blank" class="d-block text-decoration-none">
                                                <div class="th-slide-image p-relative">
                                                    <img src="{{ asset('assets/img/projects/sklops.png') }}" alt="SKLOPS School ERP">
                                                    <!-- th-project content -->
                                                    <div class="th-marketing-content">
                                                        <p class="th-sutitle">SKLOPS School ERP System</p>
                                                        <h2 class="th-title">School Automation, Fee Management &amp; Parent Portal</h2>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="swiper-slide">
                                            <a href="https://vedantbilling.com/" target="_blank" class="d-block text-decoration-none">
                                                <div class="th-slide-image p-relative">
                                                    <img src="{{ asset('assets/img/projects/vedant-billing.png') }}" alt="Vedant Billing ERP">
                                                    <!-- th-project content -->
                                                    <div class="th-marketing-content">
                                                        <p class="th-sutitle">Vedant Billing &amp; ERP</p>
                                                        <h2 class="th-title">GST Invoicing, Inventory &amp; Retail ERP Software</h2>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="swiper-slide">
                                            <a href="https://send.solidrix.com/" target="_blank" class="d-block text-decoration-none">
                                                <div class="th-slide-image p-relative">
                                                    <img src="{{ asset('assets/img/projects/solidrix-send.png') }}" alt="Solidrix Send Email Router">
                                                    <!-- th-project content -->
                                                    <div class="th-marketing-content">
                                                        <p class="th-sutitle">Solidrix Send Email Router</p>
                                                        <h2 class="th-title">Multi-SMTP Email Dispatcher, Routing Engine &amp; Webhooks</h2>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="th-control-pagination th-control-dot-3">
                                        <div class="swiper-pagination"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-1 d-none d-xl-block">
                        <div class="th-project-year25">
                            <h3 class="th-yrtitle">2026</h3>
                            <span><img src="{{ asset('assets/img/marketer/th-line25.png') }}" alt=""></span>
                        </div>
                    </div>
                </div>

                <div class="container gx-0">
                    <div class="col-xl-12 d-none d-xl-block mx-auto">
                        <div class="th-slider-arrow-control">
                            <div class="swiper-pagination"></div>
                            <div class="th-testimonial-navigation th-testimonial-navigation-3">
                                <div
                                    class="th-testimonial-navigation-next th-testimonial-navigation-button th-testimonial-navigation-button-3">
                                    <span><img src="{{ asset('assets/img/icon/th-arrow-right.png') }}" alt=""></span></div>
                                <div
                                    class="th-testimonial-navigation-prev th-testimonial-navigation-button th-testimonial-navigation-button-3">
                                    <span><img src="{{ asset('assets/img/icon/th-arrow-left.png') }}" alt=""></span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <h3 class="th-about-rotate-text th-about-rotate-text-3 d-none d-xl-block">PROJECT</h3>
        </section>
        <!-- =========== slider area end =========== -->



        <!-- =========== achivement area start =========== -->
        <section class="th-achivement-area fix pt-120">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 mx-auto text-center">
                        <div class="th-section-title th-section-title-3 mb-48">
                            <!-- th section subtitle -->
                            <p class="sub-title mb-16" data-aos="fade-up"> <span><img
                                        src="{{ asset('assets/img/icon/th-subtitle-icon-3.1.png') }}" alt=""></span> MY ACHIEVEMENTS
                                <span><img src="{{ asset('assets/img/icon/th-subtitle-icon-3.1.png') }}" alt=""></span></p>
                            <!-- th section title -->
                            <h2 class="title text-anime-style-2">Tech Leadership Milestones &amp; Recognition</h2>
                        </div>
                    </div>
                </div>

                <div class="th-achivement-box-grid">
                    <!-- single iconbox -->
                    <div class="th-single-achivement" data-aos="fade-up">
                        <div class="th-single-achivement-icon">
                            <span><img src="{{ asset('assets/img/icon/th-achive-icon-3.1.png') }}" alt=""></span>
                        </div>
                        <h3 class="th-single-achivement-title">Backend Developer Lead @ FinCrif India &bull; 2026</h3>
                    </div>
                    <!-- single iconbox -->
                    <div class="th-single-achivement" data-aos="fade-up">
                        <div class="th-single-achivement-icon">
                            <span><img src="{{ asset('assets/img/icon/th-achive-icon-3.2.png') }}" alt=""></span>
                        </div>
                        <h3 class="th-single-achivement-title">Co-Founder &amp; CTO @ GullySystem &bull; 2022 - 2026</h3>
                    </div>
                    <!-- single iconbox -->
                    <div class="th-single-achivement" data-aos="fade-up">
                        <div class="th-single-achivement-icon">
                            <span><img src="{{ asset('assets/img/icon/th-achive-icon-3.3.png') }}" alt=""></span>
                        </div>
                        <h3 class="th-single-achivement-title">Founder &amp; Principal Architect @ Solidrix &bull; 2026</h3>
                    </div>
                    <!-- single iconbox -->
                    <div class="th-single-achivement" data-aos="fade-up">
                        <div class="th-single-achivement-icon">
                            <span><img src="{{ asset('assets/img/icon/th-achive-icon-3.4.png') }}" alt=""></span>
                        </div>
                        <h3 class="th-single-achivement-title">Chief Enterprise SaaS &amp; Systems Architect &bull; 2023</h3>
                    </div>
                    <!-- single iconbox -->
                    <div class="th-single-achivement th-single-achivement-2" data-aos="fade-up">
                        <div class="th-single-achivement-icon">
                            <span><img src="{{ asset('assets/img/icon/th-achive-icon-3.5.png') }}" alt=""></span>
                        </div>
                        <h3 class="th-single-achivement-title">Meta WhatsApp Cloud API &amp; Automation Pioneer &bull; 2026</h3>
                    </div>
                    <!-- single iconbox -->
                    <div class="th-single-achivement th-single-achivement-2" data-aos="fade-up">
                        <div class="th-single-achivement-icon">
                            <span><img src="{{ asset('assets/img/icon/th-achive-icon-3.6.png') }}" alt=""></span>
                        </div>
                        <h3 class="th-single-achivement-title">99.9% Uptime Production Cloud &amp; DevOps Infra &bull; 2025</h3>
                    </div>
                    <!-- single iconbox -->
                    <div class="th-single-achivement th-single-achivement-2" data-aos="fade-up">
                        <div class="th-single-achivement-icon">
                            <span><img src="{{ asset('assets/img/icon/th-achive-icon-3.7.png') }}" alt=""></span>
                        </div>
                        <h3 class="th-single-achivement-title">Automated HRMS &amp; Payroll Creator &bull; 2025</h3>
                    </div>
                    <!-- single iconbox -->
                    <div class="th-single-achivement th-single-achivement-2" data-aos="fade-up">
                        <div class="th-single-achivement-icon">
                            <span><img src="{{ asset('assets/img/icon/th-achive-icon-3.8.png') }}" alt=""></span>
                        </div>
                        <h3 class="th-single-achivement-title">Founder &amp; Tech Lead Delivering 20+ SaaS Products &bull; 2026</h3>
                    </div>
                </div>
            </div>
        </section>
        <!-- =========== achivement area end =========== -->

        <!-- =========== testimonial area start =========== -->
        <section class="th-achivement-area fix pt-120 pb-90">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="th-section-title th-section-title-3 mb-48">
                            <!-- th section subtitle -->
                            <p class="sub-title mb-16" data-aos="fade-up"> <span><img
                                        src="{{ asset('assets/img/icon/th-subtitle-icon-3.1.png') }}" alt=""></span> Client Reviews</p>
                            <!-- th section title -->
                            <h2 class="title text-anime-style-2">What Our Clients Say</h2>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xl-3 col-lg-3 mb-30 d-flex">
                        <div class="th-testimoninial-reviewbox h-100 w-100 d-flex flex-column justify-content-center" data-aos="fade-up">
                            <div class="th-testimoninial-flex">
                                <div class="th-star-logo mr-8"><i class="fa-solid fa-star text-warning fs-4"></i></div>
                                <div class="th-star-content">
                                    <h3 class="title">5.0 Rating</h3>
                                </div>
                            </div>
                            <div class="th-test-center-content">
                                <div class="th-thumb my-3"><i class="fa-solid fa-award text-warning fs-1"></i></div>
                                <p class="th-title">Trusted By <span>20+</span> Production Platforms &amp; Enterprise Clients</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-9 col-lg-9 mb-30">
                        <div class="swiper tp-test-slider-space thtestimonialactive3" data-aos="fade-up">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="th-testimonial-box-thee">
                                        <!-- content -->
                                        <div class="th-testimonial-box-content w-100 me-0">
                                            <h2 class="th-para">&ldquo;Rohit built our entire multi-tenant HRMS &amp; Payroll platform from scratch. His backend architecture and automated payroll engine handled 10,000+ daily employee check-ins flawlessly with 99.9% uptime.&rdquo;</h2>

                                            <div class="th-testimonial-auth-thee">
                                                <h3 class="th-auth-title">Anand Sharma <span>/ Operations Lead, Enterprise HRMS</span></h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="th-testimonial-box-thee">
                                        <!-- content -->
                                        <div class="th-testimonial-box-content w-100 me-0">
                                            <h2 class="th-para">&ldquo;Our school management &amp; parent portal (SKLOPS) became 10x faster after Rohit redesigned our API pipeline and database queries. Truly a world-class Full Stack &amp; DevOps leader.&rdquo;</h2>

                                            <div class="th-testimonial-auth-thee">
                                                <h3 class="th-auth-title">Rajesh Verma <span>/ Product Director, SKLOPS</span></h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="th-testimonial-box-thee">
                                        <!-- content -->
                                        <div class="th-testimonial-box-content w-100 me-0">
                                            <h2 class="th-para">&ldquo;The Solidrix Send Multi-SMTP Email Router built by Rohit revolutionized our transactional emails. Automated SMTP failover routing with real-time webhooks ensured 99.99% inbox deliverability.&rdquo;</h2>

                                            <div class="th-testimonial-auth-thee">
                                                <h3 class="th-auth-title">Vikram Patel <span>/ Infrastructure Lead, Solidrix Send</span></h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="th-testimonial-box-thee">
                                        <!-- content -->
                                        <div class="th-testimonial-box-content w-100 me-0">
                                            <h2 class="th-para">&ldquo;Vedant Billing ERP was delivered with high precision — seamless GST invoicing, multi-store inventory sync, and instant POS printing. Outstanding software engineering.&rdquo;</h2>

                                            <div class="th-testimonial-auth-thee">
                                                <h3 class="th-auth-title">Sanjay Malhotra <span>/ Retail Operations Lead</span></h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- =========== testimonial area end =========== -->

        <!-- =========== video section start =========== -->
        <section class="th-video-area fix pt-60 pb-90 p-relative">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 mx-auto text-center">
                        <div class="th-section-title th-section-title-3 mb-48">
                            <p class="sub-title mb-16" data-aos="fade-up"> 
                                <span><img src="{{ asset('assets/img/icon/th-subtitle-icon-3.1.png') }}" alt=""></span> VIDEO SHOWCASE 
                                <span><img src="{{ asset('assets/img/icon/th-subtitle-icon-3.1.png') }}" alt=""></span>
                            </p>
                            <h2 class="title text-anime-style-2">Watch Rohit Kumar In Action</h2>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-xl-10 col-lg-12">
                        <div class="position-relative text-center rounded-4 overflow-hidden shadow-lg border" style="border-color: rgba(255,123,0,0.5) !important;">
                            <video class="w-100 rounded-4" controls style="width: 100%; aspect-ratio: 16 / 9; object-fit: contain; background: #000;">
                                <source src="{{ asset('assets/video/rohit-intro.mp4') }}" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- =========== video section end =========== -->

        <!-- =========== blog area start =========== -->
        <section class="th-achivement-area fix pt-120 pb-90">
            <div class="container">
                <div class="row align-items-center ">
                    <div class="th-mb-48-flex">
                        <div class="th-section-title th-section-title-3">
                            <!-- th section subtitle -->
                            <p class="sub-title" data-aos="fade-up"> <span><img
                                        src="{{ asset('assets/img/icon/th-subtitle-icon-3.1.png') }}" alt=""></span> My Articles </p>
                        </div>

                        <div class="th-section-title th-section-title-3">
                            <!-- th section title -->
                            <h2 class="title text-anime-style-2">Our Recent Blog & Articles</h2>
                        </div>
                    </div>
                </div>

                <div class="row">
                    @if(isset($latestBlogs) && count($latestBlogs) > 0)
                        @foreach($latestBlogs as $blog)
                        <div class="col-xl-4 col-lg-4 col-md-6 mb-30" data-aos="fade-up">
                            <div class="vl-blog-wrap-3 h-100 p-4 rounded-4 shadow-sm d-flex flex-column justify-content-between" style="background: rgba(255,255,255,0.02); border: 1px solid rgba(255,123,0,0.2);">
                                <div>
                                    <!-- blog thumb -->
                                    <div class="th-blog-thumb-3 image-anime rounded-3 overflow-hidden mb-3" style="max-height: 220px;">
                                        <img class="w-100 h-100" src="{{ asset($blog->image ?: 'assets/img/devceloper/th-blog-thumb2.1.png') }}" alt="{{ $blog->title }}" style="object-fit: cover;">
                                    </div>
                                    <!-- blog content -->
                                    <div class="th-blog-content-3">
                                        <!-- meta tag -->
                                        <div class="th-blog-meta-flex-3 mb-2">
                                            <a href="{{ route('blog.show', $blog->slug) }}" class="th-blog-tag3"> <span><img src="{{ asset('assets/img/icon/th-blog-tag-line.png') }}" alt=""></span> {{ $blog->published_at ? $blog->published_at->format('M d, Y') : $blog->created_at->format('M d, Y') }}</a>
                                            <cite class="th-slash">/</cite>
                                            <span class="badge bg-warning text-dark rounded-pill px-2 py-1 fs-6">{{ $blog->category }}</span>
                                        </div>
                                        <!-- title -->
                                        <h2 class="th-blog-title-3 fs-5 fw-bold mb-2"><a href="{{ route('blog.show', $blog->slug) }}">{{ Str::limit($blog->title, 55) }}</a></h2>
                                        <p class="th-para text-light fs-6 mb-3">{{ Str::limit($blog->summary, 85) }}</p>
                                    </div>
                                </div>
                                <div class="pt-2">
                                    <a href="{{ route('blog.show', $blog->slug) }}" class="th-btn-blog3"> <span><img src="{{ asset('assets/img/icon/th-blog-arrow-3.1.png') }}" alt=""></span> READ ARTICLE </a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </section>
        <!-- =========== blog area end =========== -->

        <!-- =========== contact area start =========== -->
        <section class="th-achivement-area fix pb-90">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 mx-auto text-center">
                        <div class="th-section-title th-section-title-3 mb-48">
                            <!-- th section subtitle -->
                            <p class="sub-title" data-aos="fade-up"> <span><img
                                        src="{{ asset('assets/img/icon/th-subtitle-icon-3.1.png') }}" alt=""></span> Contact Us
                                <span><img src="{{ asset('assets/img/icon/th-subtitle-icon-3.1.png') }}" alt=""></span>
                            </p>
                            <h2 class="title text-anime-style-2">Let’s Work Together</h2>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xl-12">
                        <div class="th-contact-main-wrap-3">
                            <div class="row">
                                <div class="col-xl-6 col-lg-6" data-aos="fade-right">
                                    <div class="th-contact-maps-wrap">
                                        <iframe
                                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d423284.0444158046!2d-118.74138745752992!3d34.020608405863136!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2c75ddc27da13%3A0xe22fdf6f254608f4!2sLos%20Angeles%2C%20CA%2C%20USA!5e0!3m2!1sen!2sbd!4v1771764657420!5m2!1sen!2sbd"
                                            class="th-map"></iframe>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6">
                                    <div class="th-contact-wrap" data-aos="fade-left">
                                        <h3 class="th-contact-title">Get in Touch</h3>
                                        <div class="row">
                                            <div class="col-xl-6 mb-16">
                                                <label>Name</label>
                                                <input type="text" placeholder="Enter your name">
                                            </div>
                                            <div class="col-xl-6 mb-16">
                                                <label>Email</label>
                                                <input type="email" placeholder="Enter your email">
                                            </div>
                                            <div class="col-xl-12 mb-16">
                                                <label>Message</label>
                                                <textarea name="message" id="message"
                                                    placeholder="Type your message"></textarea>
                                            </div>

                                            <div class="col-xl-12">
                                                <a href="#" class="w-100 text-center th-primary-btn th-primary-btn-3">
                                                    <span class="th-icon"><img
                                                            src="{{ asset('assets/img/icon/th-up-arrow-wh-3.1.png') }}" alt=""></span>
                                                    <span class="th-text">DOWNLOAD CV</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- =========== contact area end =========== -->
@endsection

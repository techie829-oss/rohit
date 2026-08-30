<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Rohit Kumar (Coolhax RK) - Full Stack Lead, Tech Founder & Architect')</title>
    <meta name="description" content="@yield('meta_description', 'Rohit Kumar (Coolhax RK) - Backend Developer Lead at FinCrif India, Founder at Solidrix Solutions & Former Co-Founder/CTO at GullySystem. 5+ Years in Full Stack Engineering, Enterprise SaaS, Laravel, Node.js & Cloud DevOps.')">
    <meta name="keywords" content="Rohit Kumar, Coolhax, Coolhax RK, Full Stack Lead, Backend Developer Lead, FinCrif India, Solidrix Solutions, GullySystem, Laravel Developer, Node.js Architect, Enterprise SaaS, Multi-Tenant HRMS, SKLOPS, Vedant Billing">
    <meta name="author" content="Rohit Kumar (Coolhax RK)">
    <meta name="robots" content="index, follow">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="@yield('title', 'Rohit Kumar (Coolhax RK) - Full Stack Lead & Tech Founder')">
    <meta property="og:description" content="@yield('meta_description', 'Backend Developer Lead @ FinCrif India, Founder @ Solidrix Solutions, Former CTO @ GullySystem. 5+ Years in Full Stack Engineering & Cloud DevOps.')">
    <meta property="og:image" content="{{ asset('assets/img/og-banner.png') }}">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="@yield('title', 'Rohit Kumar (Coolhax RK) - Full Stack Lead & Tech Founder')">
    <meta name="twitter:description" content="@yield('meta_description', 'Backend Developer Lead @ FinCrif India, Founder @ Solidrix Solutions, Former CTO @ GullySystem. 5+ Years in Full Stack Engineering & Cloud DevOps.')">
    <meta name="twitter:image" content="{{ asset('assets/img/og-banner.png') }}">

    <!-- Structured Data JSON-LD -->
    @verbatim
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Person",
      "name": "Rohit Kumar",
      "alternateName": ["Coolhax", "Coolhax RK"],
      "jobTitle": "Backend Developer Lead & Technical Founder",
      "worksFor": {
        "@type": "Organization",
        "name": "FinCrif India Private Limited"
      },
      "founder": {
        "@type": "Organization",
        "name": "Solidrix Solutions"
      },
      "email": "mailto:rohitkmarch96@gmail.com",
      "telephone": "+91-7007420572",
      "sameAs": [
        "https://github.com/techie829-oss",
        "https://www.linkedin.com/in/rohitk-coolhax",
        "https://www.instagram.com/coolhax_/",
        "https://www.facebook.com/rohitkumarmaurya.rohitkumarmaurya"
      ]
    }
    </script>
    @endverbatim

    <!-- fav logo -->
    <link rel="shortcut icon" href="{{ asset('assets/img/favicon.png') }}" type="image/png">
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <!-- magnific-popup css -->
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
    <!-- swiper-bundle -->
    <link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.min.css') }}">
    <!-- nice-select -->
    <link rel="stylesheet" href="{{ asset('assets/css/nice-select.css') }}">
    <!-- aos -->
    <link rel="stylesheet" href="{{ asset('assets/css/aos.css') }}">
    <!-- fontawesome -->
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome-pro.css') }}">
    <!-- odometer -->
    <link rel="stylesheet" href="{{ asset('assets/css/odometer-theme-default.min.css') }}">
    <!-- style css -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    <style>
    /* Reset rotated span on title for straight, clean typography */
    .th-banner-content-thee .th-title span {
        transform: none !important;
    }

    @media (max-width: 991px) {
        .th-banner-content-thee {
            text-align: center !important;
            margin-top: 40px !important;
        }
        .th-banner-content-thee .th-subtitle,
        .th-banner-content-thee .th-title,
        .th-banner-content-thee .th-para {
            text-align: center !important;
            margin-left: auto !important;
            margin-right: auto !important;
        }
        .th-banner-btn-wrap {
            justify-content: center !important;
        }
        .th-banner-content-thee .d-flex {
            justify-content: center !important;
        }
        .th-section-title {
            text-align: center !important;
        }
        .th-section-title .sub-title,
        .th-section-title .title {
            text-align: center !important;
        }
    }
    </style>

    @stack('styles')
</head>

<body>
    <!-- Preloader -->
    <div class="preloader">
        <svg viewBox="0 0 1000 1000" preserveAspectRatio="none">
            <path id="svg" d="M0,1005S175,995,500,995s500,5,500,5V0H0Z"></path>
        </svg>
        <h5 class="preloader-text">Rohit Kumar</h5>
    </div>
    <script>
        window.addEventListener('DOMContentLoaded', function() {
            setTimeout(function() {
                var loader = document.querySelector('.preloader');
                if (loader) {
                    loader.style.opacity = '0';
                    loader.style.transition = 'opacity 0.4s ease';
                    setTimeout(function() {
                        loader.style.display = 'none';
                        loader.style.zIndex = '-999';
                    }, 400);
                }
            }, 600);
        });
    </script>

    <!-- =========== header area start =========== -->
    <header class="th-header-area-three th-header-sticky">
        <div class="th-header-wrapper">
            <div class="th-logo-3">
                <a href="{{ route('home') }}" class="d-inline-flex align-items-center text-decoration-none gap-2">
                    <img src="{{ asset('assets/img/rohit.jpeg') }}" alt="Coolhax RK" style="width: 44px; height: 44px; border-radius: 50%; object-fit: cover; border: 2px solid #FF7B00;">
                    <span class="fs-4 fw-bold text-white" style="font-family: var(--th-fonts-Urbanist), sans-serif; letter-spacing: 0.5px;">Coolhax <span style="color: #FF7B00;">RK</span></span>
                </a>
            </div>
            <div class="th-main-menu bg-transparent d-none d-lg-block">
                <nav class="th-mobile-menu-active">
                    <ul>
                        <li class="{{ request()->routeIs('home') ? 'active' : '' }}"><a href="{{ route('home') }}">HOME</a></li>
                        <li class="{{ request()->routeIs('about') ? 'active' : '' }}"><a href="{{ route('about') }}">ABOUT ME</a></li>
                        <li class="{{ request()->routeIs('services*') ? 'active' : '' }}"><a href="{{ route('services') }}">SERVICES</a></li>
                        <li class="{{ request()->routeIs('projects*') ? 'active' : '' }}"><a href="{{ route('projects') }}">PROJECTS</a></li>
                        <li class="{{ request()->routeIs('blog*') ? 'active' : '' }}"><a href="{{ route('blog.index') }}">BLOG</a></li>
                        <li class="{{ request()->routeIs('contact') ? 'active' : '' }}"><a href="{{ route('contact') }}">CONTACT US</a></li>
                    </ul>
                </nav>
            </div>
            <div class="th-header-top-btn-flex">
                <!-- header btn -->
                <div class="th-header-btn d-none d-xl-block">
                    <a href="{{ route('contact') }}" class="th-primary-btn th-primary-btn-3">
                        <span class="th-icon"><img src="{{ asset('assets/img/icon/th-up-arrow-wh-3.1.png') }}" alt=""></span>
                        <span class="th-text">GET IN TOUCH</span>
                    </a>
                </div>
                <!-- action btn -->
                <div class="th-header-action-item d-xl-none">
                    <a href="#" class="th-menu-btn th-offcanvas-toggle">MENU <span><img src="{{ asset('assets/img/icon/th-menu.svg') }}" alt=""></span></a>
                </div>
            </div>
        </div>
    </header>

    <!-- MouseCursor Start -->
    <div class="mouseCursor cursor-outer color-3"></div>
    <div class="mouseCursor cursor-inner color-3"></div>

    <!-- offcanvas menu start -->
    <div class="th-offcanvas">
        <div class="th-offcanvas-wrapper">
            <div class="th-offcanvas-header d-flex justify-content-between align-items-center mb-50">
                <div class="th-offcanvas-logo">
                    <a href="{{ route('home') }}" class="d-inline-flex align-items-center text-decoration-none gap-2">
                        <img src="{{ asset('assets/img/rohit.jpeg') }}" alt="Coolhax RK" style="width: 44px; height: 44px; border-radius: 50%; object-fit: cover; border: 2px solid #FF7B00;">
                        <span class="fs-4 fw-bold text-white" style="font-family: var(--th-fonts-Urbanist), sans-serif; letter-spacing: 0.5px;">Coolhax <span style="color: #FF7B00;">RK</span></span>
                    </a>
                </div>
                <div class="th-offcanvas-close">
                    <button class="th-offcanvas-close-toggle"><i class="fa-regular fa-xmark"></i></button>
                </div>
            </div>

            <div class="th-offcanvas-menu d-xl-none mb-40">
                <nav></nav>
            </div>

            <div class="th-offcanvas-content mb-40">
                <h2 class="th-offcanvas-title">Rohit Kumar</h2>
                <p class="th-offcanvas-para">Backend Developer Lead @ FinCrif India & Founder @ Solidrix Solutions. 5+ Years in Full Stack Engineering, Enterprise SaaS & Cloud DevOps.</p>
            </div>

            <div class="th-offcanvas-gallery mb-40">
                <a class="popup-image" href="{{ asset('assets/img/devceloper/th-blog-thumb2.1.png') }}"><img class="w-100" src="{{ asset('assets/img/devceloper/th-blog-thumb2.1.png') }}" alt=""></a>
                <a class="popup-image" href="{{ asset('assets/img/devceloper/th-blog-thumb2.2.png') }}"><img class="w-100" src="{{ asset('assets/img/devceloper/th-blog-thumb2.2.png') }}" alt=""></a>
            </div>

            <div class="th-offcanvas-info mb-30">
                <h3 class="th-offcanvas-title mb-20">Contact Us</h3>
                <a href="tel:+917007420572">+91-7007420572</a>
                <a href="mailto:rohitkmarch96@gmail.com">rohitkmarch96@gmail.com</a>
                <a href="#">Lucknow / Noida, UP, India</a>
            </div>

            <div class="th-offcanvas-social mb-30">
                <h3 class="th-offcanvas-title mb-20">Follow Us</h3>
                <a href="https://www.facebook.com/rohitkumarmaurya.rohitkumarmaurya" target="_blank"><i class="fab fa-facebook-f"></i></a>
                <a href="https://www.instagram.com/coolhax_/" target="_blank"><i class="fab fa-instagram"></i></a>
                <a href="https://github.com/techie829-oss" target="_blank"><i class="fab fa-github"></i></a>
                <a href="https://www.linkedin.com/in/rohitk-coolhax" target="_blank"><i class="fab fa-linkedin-in"></i></a>
            </div>
        </div>
    </div>
    <div class="th-offcanvas-overlay"></div>

    <!-- Main Content Container with Exact Theme Background -->
    <main class="th-designer-bg parallaxie" style="background-image: url({{ asset('assets/img/designer/th-designer-bg.png') }});">
        @yield('content')
    </main>

    <!-- =========== footer area start =========== -->
    <footer class="th-footer-area fix pt-120"
        style="background-image: url({{ asset('assets/img/devceloper/th-footer-bg-3.1.png') }});">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12 mx-auto text-center">
                    <a href="{{ route('contact') }}" data-aos="fade-up">
                        <div class="footer-large-title tp_fade_anim mb-30">
                            <h3 class="footer-title footer-title-2">LET'S WORK TOGETHER</h3>
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-xl-8 mx-auto text-center">
                    <!-- footer widget 1 -->
                    <div class="th-footer-widget-1 mb-80">
                        <!-- logo -->
                        <div class="th-footer-logo-3 mb-48 text-center">
                            <a href="{{ route('home') }}" class="d-inline-flex align-items-center text-decoration-none gap-2">
                                <img src="{{ asset('assets/img/rohit.jpeg') }}" alt="Coolhax RK" style="width: 50px; height: 50px; border-radius: 50%; object-fit: cover; border: 2px solid #FF7B00;">
                                <span class="fs-3 fw-bold text-white" style="font-family: var(--th-fonts-Urbanist), sans-serif; letter-spacing: 0.5px;">Coolhax <span style="color: #FF7B00;">RK</span></span>
                            </a>
                        </div>
                        <div class="th-footer-social-3 mb-32">
                            <ul>
                                <li><a href="https://www.facebook.com/rohitkumarmaurya.rohitkumarmaurya" target="_blank"><span><i class="fa-brands fa-facebook-f"></i></span></a>Facebook</li>
                                <li><a href="https://www.instagram.com/coolhax_/" target="_blank"><span><i class="fa-brands fa-instagram"></i></span></a>Instagram</li>
                                <li><a href="https://github.com/techie829-oss" target="_blank"><span><i class="fa-brands fa-github"></i></span></a>GitHub</li>
                                <li><a href="https://www.linkedin.com/in/rohitk-coolhax" target="_blank"><span><i class="fa-brands fa-linkedin-in"></i></span></a>LinkedIn</li>
                            </ul>
                        </div>
                        <div class="th-footer-menu th-footer-menu-3 text-center">
                            <ul>
                                <li><a href="{{ route('about') }}">ABOUT ME</a></li>
                                <li><a href="{{ route('services') }}">SERVICES</a></li>
                                <li><a href="{{ route('projects') }}">PORTFOLIO</a></li>
                                <li><a href="{{ route('blog.index') }}">BLOG</a></li>
                                <li><a href="{{ route('contact') }}">CONTACT US</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="th-footer-logo-area-2">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6">
                        <div class="th-footer-center-main-wrap">
                            <div class="th-footer-center-main-wrap-copyright mb-30">
                                <p class="th-para mt-8">Copyright © 2026 <a href="{{ route('home') }}"><span>Coolhax RK</span></a>, All Rights Reserved.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="th-footer-menu-three">
                            <ul>
                                <li><a href="#">Terms & Conditions</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- =========== footer area end =========== -->

    <!-- progress -->
    <div class="paginacontainer">
        <div class="progress-wrap progress-wrap-3">
            <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
                <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
            </svg>
        </div>
    </div>

    <!-- JS Scripts -->
    <script src="{{ asset('assets/js/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/js/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/nice-select.js') }}"></script>
    <script src="{{ asset('assets/js/aos.js') }}"></script>
    <script src="{{ asset('assets/js/fontawesome.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugin.js') }}"></script>
    <script src="{{ asset('assets/js/gAnim.js') }}"></script>
    <script src="{{ asset('assets/js/SmoothScroll.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.waypoints.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('assets/js/parallaxie.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>

    @stack('scripts')
</body>

</html>
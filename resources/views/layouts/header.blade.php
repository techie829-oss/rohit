<!-- Header Navigation -->
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

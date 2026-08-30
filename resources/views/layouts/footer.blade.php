<!-- Footer Area -->
<footer class="th-footer-area-three p-relative pt-120">
    <div class="container">
        <div class="th-footer-top-3 fix pb-120">
            <div class="row align-items-center">
                <div class="col-xl-7 col-lg-7">
                    <div class="th-footer-title-wrap-3">
                        <h2 class="title" data-aos="fade-up">Let's Work Together & Build Scalable Systems!</h2>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-5">
                    <div class="th-footer-btn-3 text-lg-end" data-aos="fade-up">
                        <a href="{{ route('contact') }}" class="th-primary-btn th-primary-btn-3">
                            <span class="th-icon"><img src="{{ asset('assets/img/icon/th-up-arrow-wh-3.1.png') }}" alt=""></span>
                            <span class="th-text">GET IN TOUCH</span>
                        </a>
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
                            <p class="th-para mt-8">Copyright © {{ date('Y') }} <a href="{{ route('home') }}"><span>Coolhax RK</span></a>, All Rights Reserved.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="th-footer-menu-three">
                        <ul>
                            <li><a href="{{ route('about') }}">About</a></li>
                            <li><a href="{{ route('services') }}">Services</a></li>
                            <li><a href="{{ route('projects') }}">Projects</a></li>
                            <li><a href="{{ route('contact') }}">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

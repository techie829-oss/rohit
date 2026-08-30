@extends('layouts.app')

@section('title', 'Contact Me - Rohit Kumar (Coolhax RK)')
@section('meta_description', 'Get in touch with Rohit Kumar (Coolhax RK) for Full Stack Lead roles, Technical Architecture, Backend Engineering, Enterprise SaaS, or Cloud DevOps consulting.')

@section('content')
<!-- =========== breadcrumb area start =========== -->
<section class="th-breadcrumb-area" style="background-image: url({{ asset('assets/img/designer/th-breadcrumb-bg.png') }});">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 mx-auto text-center">
                <div class="th-breadcrumb-content">
                    <h2 class="th-breadcrumb-title">Contact Me</h2>
                    <ul>
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li><span><i class="fa-solid fa-angle-right"></i></span></li>
                        <li><a href="#" class="active">Contact Me</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- =========== breadcrumb area end =========== -->

<!-- =========== contact area start =========== -->
<section class="th-blog-inner-wrap pt-120 pb-90">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 mb-30">
                <div class="th-fact-content-wrap-2">
                    <div class="th-section-title">
                        <p class="sub-title mb-16" data-aos="fade-up">{ Get In Touch }</p>
                        <h2 class="title mb-16">Let’s Discuss Your Next Scalable Project</h2>
                        <p class="th-para mb-30">Have a new enterprise platform idea, technical leadership requirement, or architectural inquiry? Feel free to send a message or reach out directly via Phone/WhatsApp.</p>
                    </div>
                    <div class="row">
                        <div class="col-xl-6 col-md-6 mb-30">
                            <div class="th-contact-sm-widget-1">
                                <h3 class="title pb-16"><i class="fa-solid fa-location-dot text-warning me-2"></i> Location:</h3>
                                <p class="th-parea text-white mb-0">Lucknow / Noida, UP, India</p>
                            </div>
                        </div>

                        <div class="col-xl-6 col-md-6 mb-30">
                            <div class="th-contact-sm-widget-1">
                                <h3 class="title pb-16"><i class="fa-solid fa-phone text-warning me-2"></i> Phone / WhatsApp:</h3>
                                <a href="https://wa.me/917007420572" target="_blank" class="th-parea">+91-7007420572</a>
                            </div>
                        </div>

                        <div class="col-xl-6 col-md-6 mb-30">
                            <div class="th-contact-sm-widget-1">
                                <h3 class="title pb-16"><i class="fa-solid fa-envelope text-warning me-2"></i> Email Address:</h3>
                                <a href="mailto:rohitkmarch96@gmail.com" class="th-parea">rohitkmarch96@gmail.com</a>
                            </div>
                        </div>

                        <div class="col-xl-6 col-md-6 mb-30">
                            <div class="th-contact-sm-widget-1">
                                <h3 class="title pb-16"><i class="fa-solid fa-share-nodes text-warning me-2"></i> Social Profiles:</h3>
                                <div class="d-flex align-items-center gap-2">
                                    <a href="https://github.com/techie829-oss" target="_blank" class="contact-social"><i class="fa-brands fa-github"></i></a>
                                    <a href="https://www.linkedin.com/in/rohitk-coolhax" target="_blank" class="contact-social"><i class="fa-brands fa-linkedin-in"></i></a>
                                    <a href="https://www.facebook.com/rohitkumarmaurya.rohitkumarmaurya" target="_blank" class="contact-social"><i class="fa-brands fa-facebook-f"></i></a>
                                    <a href="https://www.instagram.com/coolhax_/" target="_blank" class="contact-social"><i class="fa-brands fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-6 mb-30">
                <div class="th-pixlora-contact-form">
                    @if(session('success'))
                        <div class="alert alert-success alert-dismissible fade show mb-4 rounded-3" role="alert">
                            <i class="fa-solid fa-circle-check me-2"></i> {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    @if($errors->any())
                        <div class="alert alert-danger alert-dismissible fade show mb-4 rounded-3" role="alert">
                            <strong><i class="fa-solid fa-triangle-exclamation me-2"></i> Please check the form errors:</strong>
                            <ul class="mb-0 mt-2 ps-3">
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    <form action="{{ route('contact.submit') }}" method="POST">
                        @csrf
                        {{-- Anti-bot honeypot field --}}
                        <div style="display: none !important;" aria-hidden="true">
                            <input type="text" name="website_url" tabindex="-1" autocomplete="off">
                        </div>
                        <div class="row">
                            <div class="col-xl-6 col-md-6">
                                <div class="th-single-form th-single-form-2 mb-20">
                                    <h3 class="th-balel-title pb-12">Your Name <span class="text-danger">*</span></h3>
                                    <input type="text" name="name" value="{{ old('name') }}" placeholder="Rohit Kumar" required>
                                </div>
                            </div>

                            <div class="col-xl-6 col-md-6">
                                <div class="th-single-form th-single-form-2 mb-20">
                                    <h3 class="th-balel-title pb-12">Your Email <span class="text-danger">*</span></h3>
                                    <input type="email" name="email" value="{{ old('email') }}" placeholder="name@example.com" required>
                                </div>
                            </div>

                            <div class="col-xl-6 col-md-6">
                                <div class="th-single-form th-single-form-2 mb-20">
                                    <h3 class="th-balel-title pb-12">Phone Number</h3>
                                    <input type="text" name="phone" value="{{ old('phone') }}" placeholder="+91-7007420572">
                                </div>
                            </div>

                            <div class="col-xl-6 col-md-6">
                                <div class="th-single-form th-single-form-2 mb-20">
                                    <h3 class="th-balel-title pb-12">Subject</h3>
                                    <input type="text" name="subject" value="{{ old('subject') }}" placeholder="Project Inquiry / Hiring">
                                </div>
                            </div>

                            <div class="col-xl-12">
                                <div class="th-single-form th-single-form-2 mb-20">
                                    <h3 class="th-balel-title pb-12">Message <span class="text-danger">*</span></h3>
                                    <textarea name="message" id="message" rows="5" placeholder="Hi Rohit, I would like to discuss..." required>{{ old('message') }}</textarea>
                                </div>
                            </div>

                            <div class="col-xl-12">
                                <button type="submit" class="th-primary-btn th-primary-btn-3 mt-20 w-100 border-0">
                                    <span class="th-icon"><img src="{{ asset('assets/img/icon/th-contact-arrow.png') }}" alt=""></span>
                                    <span class="th-text th-upper">SEND MESSAGE NOW</span>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- =========== contact area end =========== -->

<div class="th-map-area">
    <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14132.836814917409!2d80.924911!3d27.8953989!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3998cf262569147f%3A0x9146ec89a72dfc73!2sSolidrix%20Technologies!5e0!3m2!1sen!2sin!4v1710000000000!5m2!1sen!2sin"
        class="th-contact-map" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
@endsection

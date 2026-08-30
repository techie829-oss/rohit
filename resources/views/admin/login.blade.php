@extends('layouts.app')

@section('title', 'Admin Portal Login - Rohit Kumar Portfolio')

@section('content')
<section class="pt-120 pb-120" style="min-height: 80vh;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-5 col-lg-6 col-md-8">
                <div class="p-5 rounded-4 shadow-lg border text-white" style="background: rgba(18, 18, 18, 0.95); border-color: rgba(255, 123, 0, 0.4) !important; backdrop-filter: blur(10px);">
                    <div class="text-center mb-4">
                        <img src="{{ asset('assets/img/rohit.jpeg') }}" alt="Coolhax RK" class="rounded-circle mb-3 shadow" style="width: 80px; height: 80px; border: 3px solid #FF7B00; object-fit: cover;">
                        <h2 class="fs-2 fw-bold text-white mb-1">Admin Portal Login</h2>
                        <p class="text-secondary fs-6">Coolhax RK Portfolio Control Center</p>
                    </div>

                    @if(session('success'))
                        <div class="alert alert-success bg-dark text-warning border-warning mb-4">
                            <i class="fa-solid fa-circle-check me-2"></i> {{ session('success') }}
                        </div>
                    @endif

                    @if($errors->any())
                        <div class="alert alert-danger bg-dark text-danger border-danger mb-4">
                            <ul class="mb-0 ps-3">
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('admin.login.submit') }}" method="POST">
                        @csrf
                        <div class="mb-4">
                            <label for="email" class="form-label text-light fs-6 fw-bold mb-2">Email Address</label>
                            <input type="email" name="email" id="email" class="form-control bg-dark text-white border-secondary p-3 rounded-3" placeholder="admin@solidrix.com" value="{{ old('email', 'admin@solidrix.com') }}" required autofocus>
                        </div>

                        <div class="mb-4">
                            <label for="password" class="form-label text-light fs-6 fw-bold mb-2">Password</label>
                            <input type="password" name="password" id="password" class="form-control bg-dark text-white border-secondary p-3 rounded-3" placeholder="••••••••" value="password" required>
                        </div>

                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <div class="form-check">
                                <input class="form-check-input bg-dark border-secondary" type="checkbox" name="remember" id="remember" checked>
                                <label class="form-check-label text-secondary small" for="remember">Remember me</label>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-warning w-100 py-3 rounded-pill fw-bold text-dark fs-5 shadow">
                            <i class="fa-solid fa-right-to-bracket me-2"></i> SIGN IN TO DASHBOARD
                        </button>
                    </form>

                    <div class="mt-4 pt-3 border-top border-secondary text-center">
                        <span class="text-secondary small"><i class="fa-solid fa-lock me-1"></i> Protected Admin Authentication Portal</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

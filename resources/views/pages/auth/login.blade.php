@extends('layouts.auth')

@section('title', 'Login')

@section('content')
    <div class="col-md-8 col-lg-6 col-xxl-3">
        <div class="card mb-0">
            <div class="card-body">
                <a href="#" class="text-nowrap logo-img text-center d-block py-3 w-100">
                <img src="{{ asset('user/images/Logo-DWO.png') }}" alt="DWO Wedding Organizer" width="120" class="me-2">
                </a>
                <p class="text-center">Dewi Wedding (DWO)</p>
                <form method="POST" action="{{ route('login') }}" novalidate="">
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" id="email"
                            class="form-control
                            @error('email') is-invalid @enderror"
                            value="{{ old('email') }}">
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" id="password"
                            class="form-control @error('password') is-invalid @enderror">
                        @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2">Sign In</button>
                    <div class="d-flex align-items-center justify-content-center">
                        <p class="fs-4 mb-0 fw-bold">Belum memiliki akun?</p>
                        <a class="text-primary fw-bold ms-2" href="{{ route('register') }}">Daftar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
@endpush

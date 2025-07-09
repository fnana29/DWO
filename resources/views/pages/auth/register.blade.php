@extends('layouts.auth')

@section('title', 'Register')

@section('content')
    <div class="col-md-8 col-lg-6 col-xxl-3">
        <div class="card mb-0">
            <div class="card-body">
                <a class="text-nowrap logo-img text-center d-block py-3 w-100">
                    <img src="{{ asset('user/images/Logo-DWO.png') }}" width="90" alt="">
                </a>
                <p class="text-center">Dewi Wedding</p>
                <form method="POST" action="{{ route('register') }}" novalidate="">
                    @csrf
                    <div class="mb-2">
                        <label for="name" class="form-label">Nama Lengkap</label>
                        <input type="text" name="name" id="name"
                            class="form-control @error('name') is-invalid @enderror">
                        @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-2">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" id="email"
                            class="form-control
                            @error('email') is-invalid @enderror">
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-2">
                        <label for="phone_number" class="form-label">Nomor Telepon</label>
                        <input type="tel" name="phone_number" id="phone_number"
                            class="form-control
                            @error('phone_number') is-invalid @enderror">
                        @error('phone_number')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-2">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" id="password"
                            class="form-control @error('password') is-invalid @enderror">
                        @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-2">
                        <label for="password_confirmation" class="form-label"> Konfirmasi Password</label>
                        <input type="password" name="password_confirmation" id="password_confirmation"
                            class="form-control @error('password_confirmation') is-invalid @enderror">
                        @error('password_confirmation')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary w-100 py-8 fs-4 mb-2 rounded-2">Sign Up</button>
                    <div class="d-flex align-items-center justify-content-center">
                        <p class="fs-4 mb-0 fw-bold">Sudah memiliki akun?</p>
                        <a class="text-primary fw-bold ms-2" href="{{ route('login') }}">Masuk</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
@endpush

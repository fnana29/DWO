@extends('layouts.admin.app')

@section('content')
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">
        <!--  Main wrapper -->
        <div class="body-wrapper">
            <div class="container-fluid">
                <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Form Edit Profile Website</h4>
                            <form method="POST" action="{{ route('settings.update', $settings) }}" class="forms-sample">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label for="phone_number" class="mt-2 mb-2">Nomor Telepon</label>
                                    <input type="tel"
                                        class="form-control mb-2 @error('phone_number') is-invalid
                                    @enderror"
                                        id="phone_number" name="phone_number" value="{{ $settings->phone_number }}">
                                    @error('phone_number')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="email" class="mt-2 mb-2">Email</label>
                                    <input type="email"
                                        class="form-control mb-2 @error('email') is-invalid
                                    @enderror"
                                        id="email" name="email" value="{{ $settings->email }}">
                                    @error('email')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group mt-3">
                                    <label for="address" class="mb-2">Alamat</label>
                                    <textarea class="form-control mb-2 @error('address') is-invalid
                                    @enderror"
                                        id="address" name="address">{{ old('address', $settings->address) }}</textarea>
                                    @error('address')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="instagram" class="mt-2 mb-2">Instagram</label>
                                    <input type="instagram"
                                        class="form-control mb-2 @error('instagram') is-invalid
                                    @enderror"
                                        id="instagram" name="instagram" value="{{ $settings->instagram }}">
                                    @error('instagram')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="time_business_hour" class="mt-2 mb-2">Jam Operasional</label>
                                    <input type="time_business_hour"
                                        class="form-control mb-2 @error('time_business_hour') is-invalid
                                    @enderror"
                                        id="time_business_hour" name="time_business_hour"
                                        value="{{ $settings->time_business_hour }}">
                                    @error('time_business_hour')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <button type="submit" class="btn btn-primary me-2">Submit</button>
                                <a href="{{ route('settings.index') }}" class="btn btn-danger mr-1 mt-md-0">Cancel</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
@endpush

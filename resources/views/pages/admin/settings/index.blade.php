@extends('layouts.admin.app')

@section('content')
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">
        <!--  Main wrapper -->
        <div class="body-wrapper">
            <div class="container-fluid">
                <div
                    class="d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center mb-3">
                    <h4 class="card-title fw-bold text-black">Manajemen Profile Website</h4>
                    <div class="d-flex flex-column flex-md-row justify-content-between">
                        <div class="mb-2 mb-md-0">
                        </div>
                    </div>
                </div>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nomor Telepon</th>
                            <th scope="col">Email</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Instagram</th>
                            <th scope="col">Jam Operasional</th>
                            <th scope="col">Dibuat Oleh</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($settings as $index => $setting)
                            <tr>
                                <td>
                                    {{ $index + 1 }}
                                </td>
                                <td> {{ $setting->phone_number }} </td>
                                <td> {{ $setting->email }} </td>
                                <td> {{ $setting->address }} </td>
                                <td> {{ $setting->instagram }} </td>
                                <td> {{ $setting->time_business_hour }} </td>
                                <td> {{ $setting->user->name ?? '-' }} </td>
                                <td>
                                    <div class="d-flex justify-content-center">
                                        <a href="{{ route('settings.edit', ['setting' => $setting]) }}"
                                            class="btn btn-sm btn-warning mx-1">
                                            <i class="ti ti-edit"></i> Edit
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
@endpush

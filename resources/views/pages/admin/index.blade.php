@extends('layouts.admin.app')

@section('content')
    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">
        <!--  Main wrapper -->
        <div class="body-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="card overflow-hidden">
                            <div class="card-body p-4 mb-5">
                                <h5 class="card-title mb-9 fw-semibold">Total Katalog</h5>
                                <p class="text-dark me-1 fs-3 mb-4">{{ $totalCatalogues }} Katalog</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="card overflow-hidden">
                            <div class="card-body p-4 mb-5">
                                <h5 class="card-title mb-9 fw-semibold">Total Pemesanan</h5>
                                <p class="text-dark me-1 fs-3 mb-md-4">{{ $totalOrder }} Pemesanan</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="card overflow-hidden">
                            <div class="card-body p-4 mb-5">
                                <h5 class="card-title mb-9 fw-semibold">Total Pengguna</h5>
                                <p class="text-dark me-1 fs-3 mb-0">{{ $totalAdmin }} Admin</p>
                                <p class="text-dark me-1 fs-3 mb-1">{{ $totalUser }} User</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
@endpush

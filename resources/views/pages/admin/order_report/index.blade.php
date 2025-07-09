@extends('layouts.admin.app')

@section('content')
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">
        <!--  Main wrapper -->
        <div class="body-wrapper">
            <div class="container-fluid">
                <div
                    class="d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center mb-3">
                    <h4 class="card-title fw-bold text-black">Laporan Pemesanan</h4>
                    <div class="d-flex flex-column flex-md-row justify-content-between">
                        <form action="{{ route('order-report.index') }}" method="GET" class="d-flex">
                            <div class="input-group mb-2">
                                <input type="text" class="form-control me-2" placeholder="Search" name="package_name"
                                    value="{{ request('package_name') }}">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="submit"><i class="ti ti-search"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Tanggal Booking</th>
                            <th scope="col">Tanggal Pernikahan</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Email</th>
                            <th scope="col">Nomor Telepon</th>
                            <th scope="col">Katalog</th>
                            <th scope="col">Harga</th>
                            <th scope="col">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($orderReport as $index => $order)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ \Carbon\Carbon::parse($order->created_at)->format('d-m-Y') }}</td>
                                <td>{{ \Carbon\Carbon::parse($order->wedding_date)->format('d-m-Y') }}</td>
                                <td>{{ $order->user->name ?? '-' }}</td>
                                <td>{{ $order->user->email ?? '-' }}</td>
                                <td>{{ $order->user->phone_number ?? '-' }}</td>
                                <td>{{ $order->catalogue->package_name ?? '-' }}</td>
                                <td>{{ $order->catalogue->price }}</td>
                                <td>{{ $order->status }}</td>
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

@extends('layouts.admin.app')

@section('content')
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">
        <!--  Main wrapper -->
        <div class="body-wrapper">
            <div class="container-fluid">
                <div
                    class="d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center mb-3">
                    <h4 class="card-title fw-bold text-black">Manajemen Pemesanan</h4>
                    <div class="d-flex flex-column flex-md-row justify-content-between">
                        <div class="mb-2 mb-md-0">
                        </div>
                        <div class="ms-0 ms-md-2">
                            <a class="btn btn-primary" href="{{ route('order.create') }}">Tambah Data
                                <i class="ti ti-plus"></i></a>
                        </div>
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
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($order as $index => $order)
                            <tr>
                                <td>
                                    {{ $index + 1 }}
                                </td>
                                <td>{{ \Carbon\Carbon::parse($order->created_at)->format('d-m-Y') }}</td>
                                <td>{{ \Carbon\Carbon::parse($order->wedding_date)->format('d-m-y') }}</td>
                                <td> {{ $order->user->name ?? '-' }} </td>
                                <td> {{ $order->user->email ?? '-' }} </td>
                                <td> {{ $order->user->phone_number ?? '-' }} </td>
                                <td> {{ $order->catalogue->package_name ?? '-' }} </td>
                                <td> {{ $order->catalogue->price }} </td>
                                <td> {{ $order->status }} </td>
                                <td>
                                    <div class="d-flex justify-content-center">
                                        <a href="{{ route('order.edit', $order->order_id) }}"
                                            class="btn btn-sm btn-warning mx-1">
                                            <i class="ti ti-edit"></i> Edit
                                        </a>

                                        <form action="{{ route('order.destroy', $order->order_id) }}"
                                            method="POST" class="">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-sm btn-danger confirm-delete">
                                                <i class="ti ti-trash"></i> Delete
                                            </button>
                                        </form>
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

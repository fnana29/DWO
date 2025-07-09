@extends('layouts.user.app')

@section('content')
    <div class="check-order">
        <div class="container">
            <div class="row justify-content-lg-center">
                <div class="col-12 col-lg-9">
                    <div class="bg-white border rounded shadow-sm overflow-hidden">

                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">No.</th>
                                    <th scope="col">Tanggal Pemesanan</th>
                                    <th scope="col">Nama Lengkap</th>
                                    <th scope="col">Nomor Telepon</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Katalog Pernikahan</th>
                                    <th scope="col">Status Pemesanan</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($orders as $index => $order)
                                    <tr>
                                        <td>{{ $index + 1 }}</td>
                                        <td>{{ $order->created_at }}</td>
                                        <td>{{ $order->user->name }}</td>
                                        <td>{{ $order->user->phone_number }}</td>
                                        <td>{{ $order->user->email }}</td>
                                        <td>{{ $order->catalogue->package_name }}</td>
                                        <td>{{ $order->status }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

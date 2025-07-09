@extends('layouts.admin.app')

@section('content')
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">
        <!--  Main wrapper -->
        <div class="body-wrapper">
            <div class="container-fluid">
                <div
                    class="d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center mb-3">
                    <h4 class="card-title fw-bold text-black">Manajemen Kategori</h4>
                    <div class="d-flex flex-column flex-md-row justify-content-between">
                        <div class="mb-2 mb-md-0">
                        </div>
                        <div class="ms-0 ms-md-2">
                            <a class="btn btn-primary" href="{{ route('category.create') }}">Tambah Data
                                <i class="ti ti-plus"></i></a>
                        </div>
                    </div>
                </div>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Judul Kategori</th>
                            <th scope="col">Deskripsi Kategori</th>
                            <th scope="col">Dibuat Oleh</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($category as $index => $category)
                            <tr>
                                <td>
                                    {{ $index + 1 }}
                                </td>
                                <td> {{ $category->name }} </td>
                                <td> {{ $category->description }} </td>
                                <td> {{ $category->users->name ?? '-' }} </td>
                                <td>
                                    <div class="d-flex justify-content-center">
                                        <a href="{{ route('category.edit', ['category' => $category]) }}"
                                            class="btn btn-sm btn-warning mx-1">
                                            <i class="ti ti-edit"></i> Edit
                                        </a>

                                        <form action="{{ route('category.destroy', ['category' => $category]) }}"
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

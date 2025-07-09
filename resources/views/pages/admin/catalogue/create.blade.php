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
                            <h4 class="card-title">Form Tambah Katalog</h4>
                            <p class="card-description"> <span class="text-danger">*</span> Wajib diisi</p>
                            <form method="POST" action="{{ route('catalogue.store') }}" class="forms-sample"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="image">Gambar Katalog</label>
                                    <input type="file" class="form-control mt-2" id="image" name="image"
                                        @error('image') is-invalid @enderror required>
                                </div>
                                @error('image')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                                <div class="form-group">
                                    <label for="package_name" class="mt-2 mb-2">Judul Katalog <span
                                            class="text-danger">*</span></label>
                                    <input type="text" class="form-control mb-2" id="package_name" name="package_name" required>
                                </div>
                                <div class="form-group">
                                    <label for="category">Kategori Katalog <span class="text-danger">*</span></label>
                                    <select class="form-control mt-2" id="category_id" name="category_id" required>
                                        <option value="">Pilih Kategori</option>
                                        @foreach ($category as $item)
                                            <option value="{{ $item->category_id }}">{{ $item->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group mt-3">
                                    <label for="description" class="mb-2">Deskripsi Kategori <span
                                            class="text-danger">*</span></label>
                                    <textarea type="text" class="form-control mb-2" id="description" name="description" required></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="price" class="mb-2">Harga <span class="text-danger">*</span></label>
                                    <input type="numeric" class="form-control mb-4" id="price" name="price" required>
                                </div>
                                <button type="submit" class="btn btn-primary me-2">Submit</button>
                                <a href="{{ route('catalogue.index') }}" class="btn btn-danger mr-1 mt-md-0">Cancel</a>
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

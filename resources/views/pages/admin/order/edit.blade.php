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
                            <h4 class="card-title">Form Edit Pemesanan</h4>
                            <p class="card-description"> <span class="text-danger">*</span> Wajib diisi</p>
                            <form method="POST" action="{{ route('order.update', $order) }}" class="forms-sample">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label for="wedding_date" class="mt-2 mb-2">Tanggal Pernikahan <span
                                            class="text-danger">*</span></label>
                                    <input type="date"
                                        class="form-control mb-2 @error('wedding_date') is-invalid
                                    @enderror"
                                        id="wedding_date" name="wedding_date" value="{{ $order->wedding_date }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="user_id">User <span class="text-danger">*</span></label>
                                    <select class="form-control mt-2" id="user_id" name="user_id" required>
                                        <option value="">Pilih Email User</option>
                                        @foreach ($users as $user)
                                            <option value="{{ $user->id }}"
                                                {{ $user->id == $order->user_id ? 'selected' : '' }}
                                                data-name="{{ $user->name }}" data-phone="{{ $user->phone_number }}">
                                                {{ $user->email }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="name" class="mt-2 mb-2">Nama <span class="text-danger">*</span></label>
                                    <input type="text"
                                        class="form-control mb-2 @error('name') is-invalid
                                    @enderror"
                                        id="name" name="name" value="{{ $user->name }}" required readonly
                                        disabled>
                                </div>
                                <div class="form-group">
                                    <label for="phone_number" class="mt-2 mb-2">Nomor Telepon <span
                                            class="text-danger">*</span></label>
                                    <input type="tel"
                                        class="form-control mb-2 @error('phone_number') is-invalid
                                    @enderror"
                                        id="phone_number" phone_number="name" value="{{ $user->phone_number }}" required
                                        readonly disabled>
                                </div>
                                <div class="form-group">
                                    <label for="catalogue_id">Katalog <span class="text-danger">*</span></label>
                                    <select class="form-control mt-2" id="catalogue_id" name="catalogue_id" required>
                                        <option value="">Pilih Katalog</option>
                                        @foreach ($catalogue as $item)
                                            <option value="{{ $item->catalogue_id }}"
                                                {{ $item->catalogue_id == $order->catalogue_id ? 'selected' : '' }}
                                                data-price="{{ $item->price }}">
                                                {{ $item->package_name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="price" class="mt-2 mb-2">Harga <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control mb-4" id="price" name="price"
                                        value="{{ $order->catalogue->price }}" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="status">Status <span class="text-danger">*</span></label>
                                    <select class="form-control mt-2 mb-4" id="status" name="status" required>
                                        <option value="">Pilih Status</option>
                                        <option value="requested"
                                            {{ isset($order) && $order->status == 'requested' ? 'selected' : '' }}>
                                            Requested
                                        </option>
                                        <option value="approved"
                                            {{ isset($order) && $order->status == 'approved' ? 'selected' : '' }}>Approved
                                        </option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary me-2">Submit</button>
                                <a href="{{ route('order.index') }}" class="btn btn-danger mr-1 mt-md-0">Cancel</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const catalogueSelect = document.getElementById('catalogue_id');
            const priceInput = document.getElementById('price');

            catalogueSelect.dispatchEvent(new Event('change'));

            catalogueSelect.addEventListener('change', function() {
                const selectedOption = catalogueSelect.options[catalogueSelect.selectedIndex];
                const price = selectedOption.getAttribute('data-price') || '';
                priceInput.value = price;
            });
        });

        $(document).ready(function() {
            $('#user_id').change(function() {
                var selectedEmail = $(this).val();
                var selectedOption = $(this).find('option:selected');
                var name = selectedOption.data('name');
                var phone = selectedOption.data('phone');

                $('#name').val(name);
                $('#phone_number').val(phone);
            });
        });
    </script>
@endpush

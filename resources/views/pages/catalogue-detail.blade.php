@extends('layouts.user.app')

@section('content')
    <div class="catalogue_image_card">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-md-12">
                    <div class="card">
                        <div class="row">
                            <div class="col-md-6 card-1">
                                <div class="image">
                                    <img src="{{ Storage::url('catalogue/' . basename($catalogue->image)) }}" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="p-4">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="d-flex align-items-center">
                                            <i class="fa fa-long-arrow-left"></i>
                                            <a href="{{ route('user.catalogue.index') }}"
                                                class="text-decoration-none back-href"> Back</a>
                                        </div>
                                    </div>
                                    <div class="mt-4 mb-3">
                                        <span class="text-uppercase text-muted">{{ $catalogue->category->name }}</span>
                                        <h5 class="text-uppercase">{{ $catalogue->package_name }}</h5>
                                        <div class="price d-flex flex-row align-items-center">
                                            <p>Rp. {{ number_format($catalogue->price, 0, ',', '.') }}</p>
                                        </div>
                                    </div>
                                    <p>{{ $catalogue->description }}</p>
                                    <div class="btn-booking mt-4 align-items-center">
                                        <a href="{{ route('user.order-form', ['id' => $catalogue->catalogue_id]) }}">
                                            <button class="btn btn-outline-secondary text-uppercase mr-2 px-4">Booking</button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

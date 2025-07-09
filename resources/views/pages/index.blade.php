@extends('layouts.user.app')

@section('content')
    <!-- hero section -->
    <div class="main-hero">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="item">
                        <div class="header-text">
                            <h2>Dengan DWO, menikah menjadi lebih mudah</h2>
                            <p>Pernikahan Indah, Perencanaan Mudah Bersama DWO</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- about section -->
    <div class="about">
        <div class="container">
            <h2 class="text-center mb-5 text-uppercase">Tentang Kami</h2>
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="about-item">
                        <div class="main-content">
                            <h4 class="text-center">Visi</h4>
                            <p>
                                Menjadi wedding organizer terdepan yang mewujudkan pernikahan impian setiap pasangan
                                dengan profesionalisme, kreativitas, dan layanan terbaik.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="about-item">
                        <div class="main-content">
                            <h4 class="text-center">Misi</h4>
                            <p>
                                1. Memberikan layanan wedding planning yang komprehensif dan terencana dengan baik. <br>
                                2. Memahami dan mewujudkan setiap keinginan dan kebutuhan pasangan dalam pernikahan mereka. <br>
                                3. Bekerja sama dengan vendor pernikahan terpercaya untuk memastikan kualitas terbaik di setiap aspek pernikahan.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- catalogue section -->
    <div class="catalogue">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="mb-5 fw-bold">
                        <h2 class="text-uppercase">Katalog</h2>
                    </div>
                </div>
            </div>

            <!-- Filter tombol -->
            <ul class="catalogue_filter">
                <li>
                    <a class="is_active text-decoration-none" href="" data-filter="*">Show All</a>
                </li>
                @foreach ($categories as $category)
                    <li>
                        <a href="#" class="text-decoration-none"
                           data-filter=".{{ str_replace(' ', '-', strtolower($category->name)) }}">
                            {{ $category->name }}
                        </a>
                    </li>
                @endforeach
            </ul>

            <!-- Item katalog -->
            <div class="row catalogue_box">
                @foreach ($catalogues as $catalogueItem)
                    <div class="col-lg-4 col-md-6 align-self-center mb-30 catalogue_outer {{ str_replace(' ', '-', strtolower($catalogueItem->category->name)) }}">
                        <div class="catalogue_item">
                            <div class="thumb">
                                <a href="{{ route('user.catalogue.detail', $catalogueItem->catalogue_id) }}">
                                    <img src="{{ Storage::url('catalogue/' . basename($catalogueItem->image)) }}" alt="">
                                </a>
                                <span class="category">{{ $catalogueItem->category->name }}</span>
                            </div>
                            <div class="down-content">
                                <h4>{{ $catalogueItem->package_name }}</h4>
                                <p>Rp. {{ number_format($catalogueItem->price, 0, ',', '.') }}</p>
                                <a href="{{ route('user.catalogue.detail', $catalogueItem->catalogue_id) }}" class="detail">
                                    Detail klik disini
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </div>
@endsection

@push('scripts')
    <!-- Isotope -->
    <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Inisialisasi grid
            var $grid = $('.catalogue_box').isotope({
                itemSelector: '.catalogue_outer',
                layoutMode: 'fitRows'
            });

            // Tombol filter
            $('.catalogue_filter a').on('click', function (e) {
                e.preventDefault();
                $('.catalogue_filter a').removeClass('is_active');
                $(this).addClass('is_active');

                var filterValue = $(this).attr('data-filter');
                $grid.isotope({ filter: filterValue });
            });
        });
    </script>
@endpush

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DWO - ADMIN</title>
    <link rel="shortcut icon" type="image/png" href="{{ asset('user/images/Logo-DWO.png') }}" />
    <link rel="stylesheet" href="{{ asset('admin/css/styles.min.css') }}" />
</head>

<body>

    <div class="page-wrapper d-flex flex-column min-vh-100" id="main-wrapper" data-layout="vertical"
        data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed">

        <!-- Header -->
        @include('components.admin.header')

        <!-- Sidebar -->
        @include('components.admin.sidebar')

        <!-- Content -->
        <main class="flex-grow-1">
            @yield('content')
        </main>

        <!-- Footer -->
        @include('components.admin.footer')

    </div>

    <script src="{{ asset('admin/libs/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('admin/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('admin/js/sidebarmenu.js') }}"></script>
    <script src="{{ asset('admin/js/app.min.js') }}"></script>
    <script src="{{ asset('admin/libs/apexcharts/dist/apexcharts.min.js') }}"></script>
    <script src="{{ asset('admin/libs/simplebar/dist/simplebar.min.js') }}"></script>
    <script src="{{ asset('admin/js/dashboard.js') }}"></script>
    @stack('scripts')

</body>

</html>

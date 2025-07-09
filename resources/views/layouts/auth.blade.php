<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title') &mdash; Dewi Wedding</title>

    <link rel="shortcut icon" type="image/png" href="{{ asset('user/images/logo.png') }}" />
    <link rel="stylesheet" href="{{ asset('admin/css/styles.min.css') }}" />
</head>

<body>
    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">
        <div
            class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
            <div class="d-flex align-items-center justify-content-center w-100">
                <div class="row justify-content-center w-100">

                    @yield('content')

                    <script src="{{ asset('admin/libs/jquery/dist/jquery.min.js') }}"></script>
                    <script src="{{ asset('admin/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
                    @stack('scripts')
                </div>
            </div>
        </div>
    </div>
</body>

</html>

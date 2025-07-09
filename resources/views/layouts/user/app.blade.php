<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dewi Wedding</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('user/css/style.css') }}">
    <link rel="shorcut icon" href="{{ asset('user/images/logo.png') }}">
</head>

<body>

    <!-- Header -->
    @include('components.user.header')

    <!-- Content -->
    @yield('content')

    <!-- Footer -->
    @include('components.user.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous    ">
    </script>
    <script src="{{ asset('user/js/script.js') }}"></script>
    <script src="https://kit.fontawesome.com/89e8dae9e7.js" crossorigin="anonymous"></script>
    @stack('scripts')

</body>

</html>

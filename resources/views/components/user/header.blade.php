<header>
    <nav class="navbar navbar-expand-lg navbar-transparent mt-4">
        <div class="container">
            <a class="navbar-brand text-uppercase fw-bold" href="#">Dewi Wedding</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                <ul class="navbar-nav mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="{{ route('home.index') }}">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('user.catalogue.index') }}">Katalog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('contact') }}">Kontak Kami</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('check-order') }}">Cek Pesanan</a>
                    </li>
                </ul>
            </div>
            <!-- if user login -->
            @if (Auth::check())
                <a class="btn btn-login ms-3" href="{{ route('logout') }}"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
                <!-- If user not logged in -->
            @else
                <a class="btn btn-login ms-3" href="{{ route('login') }}">Login</a>
            @endif
        </div>
    </nav>
</header>

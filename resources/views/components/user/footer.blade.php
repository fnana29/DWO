<div class="footer">
    <footer>
        <div class="container p-4">
            <div class="row mt-5">
                <div class="col-lg-6 col-md-12 mb-4">
                    <h5 class="mb-3">Dewi Wedding</h5>
                    <p>
                         Terima kasih telah menjadi bagian dari hari bahagia kami.
                    </p>
                </div>
                @foreach ($settings as $setting)
                    <div class="col-lg-3 col-md-6 mb-4">
                        <h5 class="mb-3">Kontak Kami</h5>
                        <ul class="list-unstyled mb-0"> 
                            <li class="mb-1">
                                <i class="fas fa-map-marker-alt"></i>
                                <span>{{ $setting->address }}</span>
                            </li>
                            <li class="mb-1">
                                <i class="fa-regular fa-envelope"></i>
                                <span>{{ $setting->email }}</span>
                            </li>
                            <li class="mb-1">
                                <i class="fas fa-phone"></i>
                                <span>{{ $setting->phone_number }}</span>
                            </li>
                            <li class="mb-1">
                                <i class="fab fa-instagram"></i>
                                <a href="#" target="_blank"
                                    class="text-decoration-none text-black">{{ $setting->instagram }}</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4">
                        <h5 class="mb-3">Jam Operasional</h5>
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td>{{ $setting->time_business_hour }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="text-center p-3">
            <script>
                document.write("© ")
                document.write(new Date().getFullYear())
            </script>
            Dewi Wedding - <strong>All Right Reserved</strong>
        </div>
    </footer>
</div>

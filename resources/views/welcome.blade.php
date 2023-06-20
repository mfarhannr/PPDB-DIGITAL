<!DOCTYPE html>
<html lang="en">

<head>
    <title>PPDB Digital</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('assets/dist/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/dist/owl.theme.default.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/dist/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/dist/css/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/dist/css/style.min.css') }}">
</head>

<body id="body" data-spy="scroll" data-target=".navbar" data-offset="100">
    <header id="header-section">
        <nav class="navbar navbar-expand-lg pl-3 pl-sm-0" id="navbar">
            <div class="container">
                <div class="navbar-brand-wrapper d-flex w-100">
                    <img src="{{ asset('assets/static/arsip2.png') }}" height="40" alt="">
                    <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="mdi mdi-menu navbar-toggler-icon"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse navbar-menu-wrapper" id="navbarSupportedContent">
                </div>
            </div>
        </nav>
    </header>
    <div class="banner">
        <div class="container">
            <h1 class="font-weight-semibold">Aplikasi PPDB Digital</h1>
            <h6 class="font-weight-normal text-muted pb-3 mt-4">Hanya dari rumah anda bisa mendaftar PPDB kedepannya</h6>
            <div>
                <a href="{{ route('login') }}" class="btn btn-primary mr-1 mb-5">
                    Get Started
                </a>
            </div>
            <img src="https://smktibazma.sch.id/static/media/masjid.d157934d98cee11f144c.jpg" alt="" class="img-fluid">
        </div>
    </div>
    <script src="{{ asset('assets/dist/css/owl.carousel.min.css') }}"></script>
    <script src="{{ asset('assets/vendors/bootstrap/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/dist/css/materialdesignicons.min.css') }}"></script>
    <script src="{{ asset('assets/dist/css/aos.css') }}"></script>
    <script src="{{ asset('assets/dist/css/style.min.css') }}"></script>
</body>

</html>

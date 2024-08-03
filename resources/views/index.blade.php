<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css2?family=Gotham:wght@200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <style>
        body {
            font-family: 'Gotham', sans-serif;
        }

        @media (min-width: 992px) {
            .navbar {
                padding: 8px 150px
            }
        }

        .hero {
            height: 400px;
            background-image: url('{{ asset('img/hero.png') }}');
            background-size: cover;
            background-position: center;
            background-blend-mode: overlay;
            background-color: rgba(0, 0, 0, 0.7);
        }

        .active {
            color: #C19D6C !important;
        }

        .btn-outline-main {
            border-color: #C19D6C !important;
            color: #C19D6C !important;
        }

        .btn-main {
            background-color: #C19D6C !important;
            color: white !important;
        }

        .nav-link {
            color: black;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg justify-content-evenly">
        <a class="navbar-brand" href="#">
            <img src="{{ asset('img/logo.png') }}" width="100" alt="">
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                stroke-linecap="round" stroke-linejoin="round">
                <path d="M3 6h18M3 12h18M3 18h18" />
            </svg>
        </button>

        <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link active" href="#">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Benefit</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Paket</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Kelas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Kontak Kami</a>
                </li>
            </ul>
        </div>

        <div class="d-none d-lg-block">
            <button class="btn btn-main">Ajukan Demo</button>
            <button class="btn btn-outline-main">Masuk</button>
        </div>
    </nav>

    <div class="d-flex align-items-center justify-content-center hero">
        <div class="text-center text-white">
            <span class="font-weight-bold" style="font-size: 24px !important">Tingkatkan Performa Bisnis Anda</span>
            <p>
                Semua solusi untuk mempermudah Training dan Upskilling karyawan di perusahaan Anda
            </p>
            <button class="btn btn-main">Ajukan Demo</button>
        </div>
    </div>

    <div class="d-flex flex-column align-items-center justify-content-center py-5">
        <h4>Telah Dipercaya oleh 10.000+ Profesional User dari</h4>
        <div class="d-flex overflow-x-auto">
            <div class="d-flex mx-3">
                <img src="{{ asset('img/client-logo/1.png') }}" alt="Client Logo" class="img-fluid">
                <img src="{{ asset('img/client-logo/2.png') }}" alt="Client Logo" class="img-fluid">
                <img src="{{ asset('img/client-logo/3.png') }}" alt="Client Logo" class="img-fluid">
                <img src="{{ asset('img/client-logo/4.png') }}" alt="Client Logo" class="img-fluid">
                <img src="{{ asset('img/client-logo/5.png') }}" alt="Client Logo" class="img-fluid">
                <img src="{{ asset('img/client-logo/6.png') }}" alt="Client Logo" class="img-fluid">
                <img src="{{ asset('img/client-logo/7.png') }}" alt="Client Logo" class="img-fluid">
                <img src="{{ asset('img/client-logo/8.png') }}" alt="Client Logo" class="img-fluid">
                <img src="{{ asset('img/client-logo/9.png') }}" alt="Client Logo" class="img-fluid">
                <img src="{{ asset('img/client-logo/10.png') }}" alt="Client Logo" class="img-fluid">
                <img src="{{ asset('img/client-logo/11.png') }}" alt="Client Logo" class="img-fluid">
                <img src="{{ asset('img/client-logo/12.png') }}" alt="Client Logo" class="img-fluid">
                <img src="{{ asset('img/client-logo/13.png') }}" alt="Client Logo" class="img-fluid">
            </div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>

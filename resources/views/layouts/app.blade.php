<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- Scripts -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
   
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" integrity="...">
   

<style>
    body {
        background-color: #f8f9fa; /* Warna latar belakang abu-abu terang */
        color: #495057; /* Warna teks abu-abu gelap */
    }

    .cardd {
        background-color: #ffffff; /* Warna latar belakang kartu putih */
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
    }

    .card-headerr {
        background-color: #007bff; /* Warna biru utama */
        color: #ffffff; /* Teks putih */
        font-size: 24px;
        text-align: center;
        border-bottom: 0; /* Hapus batas bawaan */
    }

    .card-bodyy {
        padding: 20px;
    }

    .leadd {
        font-size: 18px;
    }

    .btn-primary {
        background-color: #007bff; /* Warna biru utama */
        border-color: #007bff;
        width: 100%; /* Tombol mengambil lebar penuh */
    }

    .btn-primary:hover {
        background-color: #0056b3; /* Sedikit lebih gelap saat dihover */
        border-color: #0056b3;
    }

    .table {
        background-color: #ffffff; /* Warna latar belakang tabel putih */
    }

    /* Tengahkan tabel di dalam kartu */
    .center-table {
        margin: 0 auto;
    }
</style>


</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/home') }}">Home</a>
                            </li>
                            
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/pelanggan') }}">Pelanggan</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/golongan') }}">Golongan</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/user') }}">User</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            <div class="container">
                @yield('content')
            </div>
        </main>
    </div>
</body>

</html>

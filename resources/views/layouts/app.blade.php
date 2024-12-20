<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Rapor-Mu') }}</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <style>
        /* Mengatur agar halaman memiliki tinggi minimal 100% dan footer tetap di bawah */
        html,
        body {
            height: 100%;
            margin: 0;
            padding: 0;
        }

        #app {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        main {
            flex-grow: 1;
        }

        footer {
            background-color: #343a40;
            color: white;
            text-align: center;
            padding: 10px 0;
            width: 100%;
        }

        /* Navbar Listrik */
        .navbar {
            background: linear-gradient(90deg, #0d0d0d, #1a1a1a, #0d0d0d);
            box-shadow: 0 0 20px rgba(0, 255, 255, 0.5), 0 0 30px rgba(0, 255, 255, 0.3);
            border-bottom: 3px solid cyan;
        }

        .navbar-brand {
            font-family: 'Great Vibes', cursive;
            font-size: 2.5rem;
            color: cyan !important;
            text-shadow: 0 0 10px cyan, 0 0 20px rgba(0, 255, 255, 0.8);
        }

        .nav-link {
            color: white !important;
            font-weight: bold;
            transition: all 0.3s ease;
            text-shadow: 0 0 5px rgba(0, 255, 255, 0.7);
        }

        .nav-link:hover {
            color: cyan !important;
            text-shadow: 0 0 20px rgba(0, 255, 255, 1), 0 0 30px rgba(0, 255, 255, 0.8);
        }

        .navbar-toggler-icon {
            background-image: linear-gradient(to right, cyan, rgba(0, 255, 255, 0.7));
        }

        /* Footer */
        footer {
            background-color: #343a40;
            color: white;
            text-align: center;
            padding: 10px 0;
        }
    </style>
</head>

<body>
    <div id="app">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-md navbar-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ url('/') }}">
                    Rapor-Mu
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/dashboard') }}">{{ __('Dashboard') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/absensi') }}">{{ __('Absensi') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/guru') }}">{{ __('Guru') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/kelas') }}">{{ __('Kelas') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/pelajaran') }}">{{ __('Pelajaran') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/penilaian') }}">{{ __('Penilaian') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/siswa') }}">{{ __('Siswa') }}</a>
                        </li>
                    </ul>

                    <ul class="navbar-nav ms-auto">
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
            @yield('content')
        </main>

        <!-- Footer Section -->
        <footer>
            <p>&copy; 2024 Eric Inzaghi Firdaus. All rights reserved.</p>
        </footer>
    </div>
</body>

</html>

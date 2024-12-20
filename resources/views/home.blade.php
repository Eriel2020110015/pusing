@extends('layouts.app')

@section('title', 'Home Page') <!-- Judul halaman -->

@section('nav')
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Rapor-Mu</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
@endsection

@section('content')
    <!-- Full screen container -->
    <div class="container-fluid d-flex justify-content-center align-items-center"
        style="min-height: 100vh; position: relative; padding: 0; overflow: hidden;">
        <div class="row text-center" style="width: 100%; max-width: 1200px; padding: 0 15px;">
            <!-- Informasi Informative -->
            <div class="col-12 mb-4">
                <div class="alert alert-info">
                    <h4 class="alert-heading">Informasi Terbaru</h4>
                    <p>Platform ini menyediakan kemudahan bagi para guru untuk memantau dan mengelola rapor siswa secara
                        efisien. Segera masukkan nilai tugas, ujian, dan kepribadian siswa untuk memastikan proses belajar
                        mengajar berjalan lancar.</p>
                    <hr>
                    <p class="mb-0">Silakan cek fitur-fitur terbaru di menu dashboard untuk mendapatkan update terkini
                        tentang laporan dan pengelolaan nilai.</p>
                </div>
            </div>
            <!-- Teks Selamat Datang -->
            <h1 class="mb-4"
                style="font-size: 3rem; font-weight: 700; position: absolute; top: 10%; left: 50%; transform: translateX(-50%);">
                Selamat Datang di Rapor-Mu</h1>
            <p style="font-size: 1.1rem; position: absolute; top: 20%; left: 50%; transform: translateX(-50%);">Rapor-Mu
                Tercipta Karena Sesuatu Yang Terjadi Dalam Situasi Genting Dan Siyap Membantu Anda Wahai Para Guru</p>
        </div>
    </div>

    <!-- Elemen untuk hujan dan komet -->
    <div id="rain-container"></div>
    <div id="comet-container"></div>
@endsection

@section('footer')
    <!-- Running text footer -->
    <footer class="bg-dark text-white text-center p-3">
        <marquee behavior="scroll" direction="left">Rapor-Mu Tercipta Karena Sesuatu Yang Terjadi Dalam Situasi Genting Dan
            Siyap Membantu Anda Wahai Para Guru</marquee>
    </footer>
@endsection

<!-- Styling -->
<style>
    body,
    html {
        margin: 0;
        padding: 0;
        height: 100%;
        width: 100%;
        box-sizing: border-box;
        background-color: #f8f9fa;
    }

    .container-fluid {
        height: 100%;
        width: 100%;
        padding: 0;
        overflow: hidden;
    }

    .navbar {
        margin-bottom: 0;
    }

    footer {
        position: fixed;
        bottom: 0;
        width: 100%;
    }

    /* Animasi Hujan */
    @keyframes rain {
        0% {
            top: -100px;
        }

        100% {
            top: 100vh;
        }
    }

    .rain-drop {
        position: absolute;
        width: 2px;
        height: 10px;
        background-color: rgba(255, 255, 255, 0.5);
        animation: rain 1s linear infinite;
    }

    .rain-drop:nth-child(even) {
        animation-duration: 1.5s;
        animation-delay: 0.5s;
    }

    .rain-drop:nth-child(odd) {
        animation-duration: 1.8s;
        animation-delay: 0s;
    }

    /* Animasi Komet Jatuh */
    @keyframes comet-fall {
        0% {
            top: -10%;
            left: 100%;
        }

        100% {
            top: 100%;
            left: -10%;
        }
    }

    .comet {
        position: absolute;
        width: 5px;
        height: 5px;
        background-color: rgba(255, 255, 255, 0.8);
        border-radius: 50%;
        box-shadow: 0 0 20px rgba(255, 255, 255, 0.6);
        animation: comet-fall 3s linear infinite;
    }

    .comet:nth-child(even) {
        animation-duration: 5s;
    }

    .comet:nth-child(odd) {
        animation-duration: 6s;
    }
</style>

<!-- JavaScript -->
<script>
    // Fungsi untuk membuat hujan
    function createRain() {
        const rainContainer = document.getElementById("rain-container");
        for (let i = 0; i < 100; i++) {
            const drop = document.createElement("div");
            drop.classList.add("rain-drop");
            drop.style.left = Math.random() * 100 + "vw";
            drop.style.animationDuration = Math.random() * 1 + 0.5 + "s";
            rainContainer.appendChild(drop);
        }
    }

    // Fungsi untuk membuat komet
    function createComets() {
        const cometContainer = document.getElementById("comet-container");
        for (let i = 0; i < 5; i++) {
            const comet = document.createElement("div");
            comet.classList.add("comet");
            comet.style.left = Math.random() * 100 + "vw";
            comet.style.animationDuration = Math.random() * 5 + 4 + "s";
            cometContainer.appendChild(comet);
        }
    }

    // Memanggil fungsi untuk membuat hujan dan komet saat halaman dimuat
    window.onload = function() {
        createRain();
        createComets();
    };
</script>

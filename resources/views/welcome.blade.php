<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome to Rapor-Mu</title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <style>
        /* Mengatur tampilan seluruh halaman */
        html,
        body {
            height: 100%;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #6a11cb, #2575fc);
            /* Latar belakang gradien */
            color: white;
        }

        /* Kontainer Utama */
        .welcome-container {
            text-align: center;
            padding: 2rem;
            background-color: rgba(255, 255, 255, 0.1);
            border-radius: 15px;
            box-shadow: 0px 8px 20px rgba(0, 0, 0, 0.2);
        }

        /* Judul Selamat Datang */
        .welcome-title {
            font-size: 2.5rem;
            font-weight: 600;
        }

        /* Tombol Get Started */
        .get-started {
            display: flex;
            justify-content: center;
            margin-top: 2rem;
        }

        .get-started a {
            background-color: #28a745;
            color: white;
            font-weight: bold;
            font-size: 1.2rem;
            padding: 0.75rem 2rem;
            border-radius: 50px;
            text-decoration: none;
            transition: all 0.3s ease;
            box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.3);
        }

        .get-started a:hover {
            background-color: #218838;
            box-shadow: 0px 6px 16px rgba(0, 0, 0, 0.6);
        }

        /* Efek Hover pada container */
        .welcome-container:hover {
            transform: scale(1.02);
            transition: transform 0.3s ease-in-out;
        }
    </style>
</head>

<body>

    <!-- Kontainer Halaman -->
    <div class="welcome-container">
        <h1 class="welcome-title">Selamat Datang di Rapor-Mu</h1>
        <p>Aplikasi pengelolaan nilai untuk SMK yang modern dan mudah digunakan</p>

        <!-- Tombol Get Started -->
        <div class="get-started">
            <a href="{{ route('login') }}">Get Started</a>
        </div>
    </div>

    <!-- Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>

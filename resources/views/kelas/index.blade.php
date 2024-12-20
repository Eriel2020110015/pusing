@extends('layouts.app')

@section('content')
    <div class="container" style="animation: fadeIn 1.5s;">
        <h1 class="mb-4" style="font-family: 'Poppins', sans-serif; color: #4B0082; font-weight: bold;">Data Kelas</h1>

        <!-- Dropdown Filter dengan teks warna emas -->
        <div class="mb-4">
            <select id="filterTingkat" class="form-select" onchange="filterKelas()"
                style="border-color: #4B0082; background-color: #f7f5fc; color: #4B0082;">
                <option value="">-- Pilih Tingkat Kelas --</option>
                <option value="10">Kelas 10</option>
                <option value="11">Kelas 11</option>
                <option value="12">Kelas 12</option>
            </select>
        </div>

        <!-- Tombol Tambah Kelas -->
        <div class="d-flex justify-content-between align-items-center mb-3">
            <a href="{{ route('kelas.create') }}" class="btn btn-primary"
                style="background-color: #6A5ACD; border-color: #6A5ACD;">Tambah Kelas</a>
        </div>

        <!-- Pesan Sukses -->
        @if (session('success'))
            <div class="alert alert-success" style="animation: slideInLeft 1s;">
                {{ session('success') }}
            </div>
        @endif

        <!-- Tabel Data Kelas yang lebih elegan dengan warna ungu muda -->
        <table class="table table-hover" style="background-color: #f9f8fd; border-radius: 10px;">
            <thead style="background-color: #6A5ACD; color: white;">
                <tr>
                    <th>Kode Kelas</th>
                    <th>Nama Kelas</th>
                    <th>Pelajaran</th> <!-- Menambahkan kolom Pelajaran -->
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody id="kelasTableBody">
                @foreach ($data_kelas as $kelas)
                    <tr class="kelas-row" data-tingkat="{{ substr($kelas->kode_kelas, 0, 2) }}"
                        style="transition: all 0.3s;">
                        <td style="background-color: #e0dbff; color: black;">{{ $kelas->kode_kelas }}</td>
                        <td style="background-color: #e0dbff; color: black;">{{ $kelas->nama_kelas }}</td>

                        <!-- Mengambil data pelajaran yang terkait dengan kelas -->
                        <td style="background-color: #e0dbff; color: black;">
                            @foreach ($kelas->pelajaran as $pelajaran)
                                <!-- Pastikan relasi antara kelas dan pelajaran sudah ada -->
                                <p>{{ $pelajaran->nama_pelajaran }}</p>
                            @endforeach
                        </td>

                        <td style="background-color: #e0dbff;">
                            <!-- Tombol Lihat: Biru Muda -->
                            <a href="{{ route('kelas.show', $kelas->id) }}" class="btn btn-info btn-lg m-1"
                                style="background-color: #87CEEB; border-color: #87CEEB; font-weight: bold;">
                                Lihat
                            </a>

                            <!-- Tombol Edit: Kuning -->
                            <a href="{{ route('kelas.edit', $kelas->id) }}" class="btn btn-warning btn-lg m-1"
                                style="background-color: #FFD700; border-color: #FFD700; font-weight: bold;">
                                Edit
                            </a>

                            <!-- Tombol Hapus: Merah -->
                            <form action="{{ route('kelas.destroy', $kelas->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-lg m-1"
                                    style="background-color: #FF6347; border-color: #FF6347; font-weight: bold;"
                                    onclick="return confirm('Yakin ingin menghapus?')">
                                    Hapus
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <!-- Tombol Kembali di Footer -->
        <div class="d-flex justify-content-start mt-4" style="animation: slideInLeft 1s;">
            <a href="{{ route('home') }}" class="btn btn-secondary"
                style="background-color: #9370DB; border-color: #9370DB;">⬅ Kembali ke Home</a>
        </div>
    </div>

    <script>
        function filterKelas() {
            var selectedTingkat = document.getElementById('filterTingkat').value;
            var kelasRows = document.querySelectorAll('.kelas-row');

            kelasRows.forEach(function(row) {
                var tingkat = row.getAttribute('data-tingkat');
                if (!selectedTingkat) {
                    row.style.display = 'none';
                } else if (tingkat === selectedTingkat) {
                    row.style.display = '';
                } else {
                    row.style.display = 'none';
                }
            });
        }

        window.onload = function() {
            filterKelas();
        }
    </script>

    <!-- Animasi Halaman -->
    <style>
        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        @keyframes slideInLeft {
            from {
                transform: translateX(-100%);
            }

            to {
                transform: translateX(0);
            }
        }

        table {
            box-shadow: 0 0 10px rgba(106, 90, 205, 0.5);
        }

        table tbody tr:hover {
            background-color: #eceaff;
            transform: scale(1.02);
        }

        /* Menonjolkan tombol aksi */
        .btn-info,
        .btn-warning,
        .btn-danger {
            font-size: 1.2rem;
            padding: 10px 15px;
            text-transform: uppercase;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }

        .btn-info:hover {
            background-color: #87CEEB;
            box-shadow: 0 6px 10px rgba(0, 191, 255, 0.5);
        }

        .btn-warning:hover {
            background-color: #FFD700;
            box-shadow: 0 6px 10px rgba(255, 223, 0, 0.5);
        }

        .btn-danger:hover {
            background-color: #FF4500;
            box-shadow: 0 6px 10px rgba(255, 69, 0, 0.5);
        }

        /* Background Gradien Bergerak */
        body {
            background: linear-gradient(270deg, #f9f8fd, #c0c0ff, #d0cfff);
            background-size: 400% 400%;
            animation: gradientAnimation 15s ease infinite;
        }

        @keyframes gradientAnimation {
            0% {
                background-position: 0% 50%;
            }

            50% {
                background-position: 100% 50%;
            }

            100% {
                background-position: 0% 50%;
            }
        }

        /* Efek Hover pada baris tabel */
        tr {
            transition: transform 0.3s;
        }

        tr:hover {
            transform: scale(1.05);
            box-shadow: 0px 0px 15px rgba(106, 90, 205, 0.5);
        }
    </style>
@endsection

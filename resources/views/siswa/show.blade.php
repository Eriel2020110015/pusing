@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Detail Siswa</h2>

        <table class="table table-striped">
            <tr>
                <th>NIS</th>
                <td>{{ $siswa->nis }}</td>
            </tr>
            <tr>
                <th>Nama Siswa</th>
                <td>{{ $siswa->nama_siswa }}</td>
            </tr>
            <tr>
                <th>Kelas</th>
                <!-- Menampilkan nama kelas jika ada, jika tidak tampilkan "Belum ada kelas" -->
                <td>{{ $siswa->kelas ? $siswa->kelas->nama_kelas : 'Belum ada kelas' }}</td>
            </tr>
        </table>

        <!-- Tombol Kembali -->
        <a href="{{ route('siswa.index') }}" class="btn btn-secondary mt-3">Kembali</a>
    </div>
@endsection

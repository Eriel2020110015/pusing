@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Detail Absensi</h1>

        <table class="table table-striped">
            <tr>
                <th>Kode Absensi</th>
                <td>{{ $absensi->kode_absensi }}</td>
            </tr>
            <tr>
                <th>Tanggal</th>
                <td>{{ $absensi->tanggal }}</td>
            </tr>
            <tr>
                <th>Siswa</th>
                <td>{{ $absensi->siswa->nama_siswa }}</td>
            </tr>
            <tr>
                <th>Guru</th>
                <td>{{ $absensi->guru->nama }}</td>
            </tr>
            <tr>
                <th>Status</th>
                <td>{{ $absensi->status }}</td>
            </tr>
        </table>

        <a href="{{ route('absensi.index') }}" class="btn btn-secondary">Kembali</a>
    </div>
@endsection

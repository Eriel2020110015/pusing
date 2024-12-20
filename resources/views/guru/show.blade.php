@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Detail Guru</h1>

        <div class="mb-3">
            <label class="form-label">Kode Guru:</label>
            <p>{{ $guru->kode_guru }}</p>
        </div>

        <div class="mb-3">
            <label class="form-label">Nama Guru:</label>
            <p>{{ $guru->nama_guru }}</p>
        </div>

        <div class="mb-3">
            <label class="form-label">Kelas:</label>
            <p>{{ $guru->kelas ? $guru->kelas->nama_kelas : 'Tidak Ada' }}</p>
        </div>

        <a href="{{ route('guru.index') }}" class="btn btn-secondary">Kembali</a>
    </div>
@endsection

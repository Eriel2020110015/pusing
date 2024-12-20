@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Detail Kelas</h1>

        <div class="mb-3">
            <label class="form-label">Kode Kelas:</label>
            <p>{{ $kelas->kode_kelas }}</p>
        </div>

        <div class="mb-3">
            <label class="form-label">Nama Kelas:</label>
            <p>{{ $kelas->nama_kelas }}</p>
        </div>

        <a href="{{ route('kelas.index') }}" class="btn btn-secondary">Kembali</a>
    </div>
@endsection

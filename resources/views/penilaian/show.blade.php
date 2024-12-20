@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Detail Penilaian</h1>

        <div class="mb-3">
            <label for="kode_penilaian" class="form-label">Kode Penilaian</label>
            <input type="text" class="form-control" value="{{ $penilaian->kode_penilaian }}" readonly>
        </div>

        <div class="mb-3">
            <label for="nilai" class="form-label">Nilai</label>
            <input type="number" class="form-control" value="{{ $penilaian->nilai }}" readonly>
        </div>

        <div class="mb-3">
            <label for="siswa" class="form-label">Siswa</label>
            <input type="text" class="form-control" value="{{ $penilaian->siswa->nama_siswa }}" readonly>
        </div>

        <div class="mb-3">
            <label for="guru" class="form-label">Guru</label>
            <input type="text" class="form-control" value="{{ $penilaian->guru->nama_guru }}" readonly>
        </div>

        <a href="{{ route('penilaian.index') }}" class="btn btn-secondary">Kembali</a>
    </div>
@endsection

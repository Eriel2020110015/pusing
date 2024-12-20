@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Detail Pelajaran</h1>

        <div class="form-group">
            <label for="kode_pelajaran">Kode Pelajaran</label>
            <input type="text" name="kode_pelajaran" id="kode_pelajaran" class="form-control"
                value="{{ $pelajaran->kode_pelajaran }}" readonly>
        </div>

        <div class="form-group">
            <label for="nama_pelajaran">Nama Pelajaran</label>
            <input type="text" name="nama_pelajaran" id="nama_pelajaran" class="form-control"
                value="{{ $pelajaran->nama_pelajaran }}" readonly>
        </div>

        <div class="form-group">
            <label for="kelas_id">Kelas</label>
            <input type="text" name="kelas_id" id="kelas_id" class="form-control"
                value="{{ $pelajaran->kelas->nama_kelas }}" readonly>
        </div>

        <a href="{{ route('pelajaran.index') }}" class="btn btn-primary mt-3">Kembali</a>
    </div>
@endsection

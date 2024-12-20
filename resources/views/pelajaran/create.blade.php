@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Tambah Pelajaran</h1>

        <form action="{{ route('pelajaran.store') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="kode_pelajaran">Kode Pelajaran</label>
                <input type="text" name="kode_pelajaran" id="kode_pelajaran" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="nama_pelajaran">Nama Pelajaran</label>
                <input type="text" name="nama_pelajaran" id="nama_pelajaran" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="kelas_id">Kelas</label>
                <select name="kelas_id" id="kelas_id" class="form-control" required>
                    <option value="">Pilih Kelas</option>
                    @foreach ($kelas as $item)
                        <option value="{{ $item->id }}">{{ $item->nama_kelas }}</option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-success mt-3">Simpan Pelajaran</button>
            <a href="{{ route('pelajaran.index') }}" class="btn btn-secondary mt-3">Kembali</a> <!-- Tombol Kembali -->
        </form>
    </div>
@endsection

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Tambah Penilaian</h1>

        <form action="{{ route('penilaian.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="kode_penilaian" class="form-label">Kode Penilaian</label>
                <input type="text" name="kode_penilaian" class="form-control" id="kode_penilaian" required>
            </div>

            <div class="mb-3">
                <label for="nilai" class="form-label">Nilai</label>
                <input type="number" name="nilai" class="form-control" id="nilai" min="0" max="100"
                    required>
            </div>

            <div class="mb-3">
                <label for="siswa_id" class="form-label">Siswa</label>
                <select name="siswa_id" class="form-control" id="siswa_id" required>
                    @foreach ($siswa as $item)
                        <option value="{{ $item->id }}">{{ $item->nama_siswa }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="guru_id" class="form-label">Guru</label>
                <select name="guru_id" class="form-control" id="guru_id" required>
                    @foreach ($guru as $item)
                        <option value="{{ $item->id }}">{{ $item->nama_guru }}</option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="{{ route('penilaian.index') }}" class="btn btn-secondary">Kembali</a> <!-- Tombol Kembali -->
        </form>
    </div>
@endsection

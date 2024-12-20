@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Tambah Absensi</h1>

        <form action="{{ route('absensi.store') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="kode_absensi">Kode Absensi</label>
                <input type="text" name="kode_absensi" id="kode_absensi" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="tanggal">Tanggal</label>
                <input type="date" name="tanggal" id="tanggal" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="siswa_id">Nama Siswa</label>
                <select name="siswa_id" id="siswa_id" class="form-control" required>
                    <option value="">Pilih Siswa</option>
                    @foreach ($siswa as $item)
                        <option value="{{ $item->id }}">{{ $item->nama_siswa }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="guru_id">Guru</label>
                <select name="guru_id" id="guru_id" class="form-control" required>
                    <option value="">Pilih Guru</option>
                    @foreach ($guru as $item)
                        <option value="{{ $item->id }}">{{ $item->nama_guru }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="status">Status</label>
                <select name="status" id="status" class="form-control" required>
                    <option value="Hadir">Hadir</option>
                    <option value="Izin">Izin</option>
                    <option value="Sakit">Sakit</option>
                    <option value="Alpa">Alpa</option>
                </select>
            </div>

            <button type="submit" class="btn btn-success mt-3">Simpan Absensi</button>
            <!-- Tombol Kembali -->
            <a href="{{ route('absensi.index') }}" class="btn btn-secondary mt-3">Kembali</a>
        </form>
    </div>
@endsection

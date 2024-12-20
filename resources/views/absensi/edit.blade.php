@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Absensi</h1>

        <form action="{{ route('absensi.update', $absensi->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="kode_absensi">Kode Absensi</label>
                <input type="text" name="kode_absensi" id="kode_absensi" class="form-control"
                    value="{{ $absensi->kode_absensi }}" required>
            </div>

            <div class="form-group">
                <label for="tanggal">Tanggal</label>
                <input type="date" name="tanggal" id="tanggal" class="form-control" value="{{ $absensi->tanggal }}"
                    required>
            </div>

            <div class="form-group">
                <label for="siswa_id">Nama Siswa</label>
                <select name="siswa_id" id="siswa_id" class="form-control" required>
                    @foreach ($siswa as $item)
                        <option value="{{ $item->id }}" {{ $absensi->siswa_id == $item->id ? 'selected' : '' }}>
                            {{ $item->nama_siswa }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="guru_id">Guru</label>
                <select name="guru_id" id="guru_id" class="form-control" required>
                    @foreach ($guru as $item)
                        <option value="{{ $item->id }}" {{ $absensi->guru_id == $item->id ? 'selected' : '' }}>
                            {{ $item->nama_guru }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="status">Status</label>
                <select name="status" id="status" class="form-control" required>
                    <option value="Hadir" {{ $absensi->status == 'Hadir' ? 'selected' : '' }}>Hadir</option>
                    <option value="Izin" {{ $absensi->status == 'Izin' ? 'selected' : '' }}>Izin</option>
                    <option value="Sakit" {{ $absensi->status == 'Sakit' ? 'selected' : '' }}>Sakit</option>
                    <option value="Alpa" {{ $absensi->status == 'Alpa' ? 'selected' : '' }}>Alpa</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary mt-3">Update Absensi</button>
        </form>

        <!-- Tombol Kembali -->
        <a href="{{ route('absensi.index') }}" class="btn btn-secondary mt-3">Kembali</a>
    </div>
@endsection

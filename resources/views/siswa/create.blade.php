@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Tambah Data Siswa</h2>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('siswa.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nis">NIS:</label>
                <input type="text" class="form-control" id="nis" name="nis" value="{{ old('nis') }}">
            </div>
            <div class="form-group">
                <label for="nama_siswa">Nama Siswa:</label>
                <input type="text" class="form-control" id="nama_siswa" name="nama_siswa"
                    value="{{ old('nama_siswa') }}">
            </div>
            <div class="form-group">
                <label for="kelas_id">Kelas:</label>
                <select class="form-control" id="kelas_id" name="kelas_id">
                    <option value="">Pilih Kelas</option>
                    @foreach ($kelas as $kls)
                        <option value="{{ $kls->id }}" {{ old('kelas_id') == $kls->id ? 'selected' : '' }}>
                            {{ $kls->nama_kelas }}
                        </option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary mt-3">Simpan</button>
            <a href="{{ route('siswa.index') }}" class="btn btn-secondary mt-3">Batal</a>
        </form>
    </div>
@endsection

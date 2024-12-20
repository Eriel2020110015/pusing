@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Tambah Guru</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('guru.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="kode_guru" class="form-label">Kode Guru</label>
                <input type="text" class="form-control" id="kode_guru" name="kode_guru" value="{{ old('kode_guru') }}"
                    required>
            </div>
            <div class="mb-3">
                <label for="nama_guru" class="form-label">Nama Guru</label>
                <input type="text" class="form-control" id="nama_guru" name="nama_guru" value="{{ old('nama_guru') }}"
                    required>
            </div>
            <div class="mb-3">
                <label for="kelas_id" class="form-label">Kelas (Opsional)</label>
                <select class="form-select" id="kelas_id" name="kelas_id">
                    <option value="">Pilih Kelas</option>
                    @foreach ($kelas as $kls)
                        <option value="{{ $kls->id }}">{{ $kls->nama_kelas }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="{{ route('guru.index') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
@endsection

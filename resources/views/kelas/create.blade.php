@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Tambah Kelas</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('kelas.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="kode_kelas" class="form-label">Kode Kelas</label>
                <input type="text" class="form-control" id="kode_kelas" name="kode_kelas" value="{{ old('kode_kelas') }}"
                    required>
            </div>
            <div class="mb-3">
                <label for="nama_kelas" class="form-label">Nama Kelas</label>
                <input type="text" class="form-control" id="nama_kelas" name="nama_kelas" value="{{ old('nama_kelas') }}"
                    required>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
@endsection

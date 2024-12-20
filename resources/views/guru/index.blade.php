@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Data Guru</h1>
        <a href="{{ route('guru.create') }}" class="btn btn-primary mb-3">Tambah Guru</a>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Kode Guru</th>
                    <th>Nama Guru</th>
                    <th>Kelas</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data_guru as $guru)
                    <tr>
                        <td>{{ $guru->kode_guru }}</td>
                        <td>{{ $guru->nama_guru }}</td>
                        <td>{{ $guru->kelas ? $guru->kelas->nama_kelas : 'Tidak Ada' }}</td>
                        <td>
                            <a href="{{ route('guru.show', $guru->id) }}" class="btn btn-info">Lihat</a>
                            <a href="{{ route('guru.edit', $guru->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('guru.destroy', $guru->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger"
                                    onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <a href="{{ route('home') }}" class="btn btn-secondary mt-3">Kembali</a>
    </div>
@endsection

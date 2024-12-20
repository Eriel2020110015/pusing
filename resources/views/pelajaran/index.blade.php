@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Daftar Pelajaran</h1>

        <a href="{{ route('pelajaran.create') }}" class="btn btn-primary mb-3">Tambah Pelajaran</a>

        <a href="{{ route('home') }}" class="btn btn-secondary mb-3">Kembali</a> <!-- Tombol Kembali -->

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Kode Pelajaran</th>
                    <th>Nama Pelajaran</th>
                    <th>Kelas</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pelajaran as $item)
                    <tr>
                        <td>{{ $item->kode_pelajaran }}</td>
                        <td>{{ $item->nama_pelajaran }}</td>
                        <td>{{ $item->kelas->nama_kelas }}</td>
                        <td>
                            <a href="{{ route('pelajaran.show', $item->id) }}" class="btn btn-info">Lihat</a>
                            <a href="{{ route('pelajaran.edit', $item->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('pelajaran.destroy', $item->id) }}" method="POST"
                                style="display:inline;">
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
    </div>
@endsection

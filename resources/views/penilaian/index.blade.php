@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Daftar Penilaian</h1>

        <a href="{{ route('penilaian.create') }}" class="btn btn-success mb-3">Tambah Penilaian</a>

        <a href="{{ route('home') }}" class="btn btn-secondary mb-3">Kembali</a> <!-- Tombol Kembali -->

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Kode Penilaian</th>
                    <th>Nilai</th>
                    <th>Nama Siswa</th>
                    <th>Nama Guru</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($penilaian as $item)
                    <tr>
                        <td>{{ $item->kode_penilaian }}</td>
                        <td>{{ $item->nilai }}</td>
                        <td>{{ $item->siswa->nama_siswa }}</td>
                        <td>{{ $item->guru->nama_guru }}</td>
                        <td>
                            <a href="{{ route('penilaian.show', $item->id) }}" class="btn btn-info">Detail</a>
                            <a href="{{ route('penilaian.edit', $item->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('penilaian.destroy', $item->id) }}" method="POST"
                                style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

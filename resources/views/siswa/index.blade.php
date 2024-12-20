@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Daftar Siswa</h2>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <a href="{{ route('siswa.create') }}" class="btn btn-primary mb-3">Tambah Siswa</a>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>NIS</th>
                    <th>Nama Siswa</th>
                    <th>Kelas</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data_siswa as $siswa)
                    <tr>
                        <td>{{ $siswa->nis }}</td>
                        <td>{{ $siswa->nama_siswa }}</td>
                        <!-- Menampilkan nama kelas jika ada, jika tidak tampilkan 'Belum ada kelas' -->
                        <td>{{ $siswa->kelas ? $siswa->kelas->nama_kelas : 'Belum ada kelas' }}</td>
                        <td>
                            <a href="{{ route('siswa.show', $siswa->id) }}" class="btn btn-info">Lihat</a>
                            <a href="{{ route('siswa.edit', $siswa->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('siswa.destroy', $siswa->id) }}" method="POST" style="display:inline;">
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

        <!-- Tombol Kembali -->
        <a href="{{ url()->previous() }}" class="btn btn-secondary mt-3">Kembali</a>
    </div>
@endsection

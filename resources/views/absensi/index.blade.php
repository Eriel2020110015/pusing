@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Daftar Absensi</h1>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <a href="{{ route('absensi.create') }}" class="btn btn-primary mb-3">Tambah Absensi</a>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Kode Absensi</th>
                    <th>Tanggal</th>
                    <th>Siswa</th>
                    <th>Guru</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($absensi as $item)
                    <tr>
                        <td>{{ $item->kode_absensi }}</td>
                        <td>{{ $item->tanggal }}</td>
                        <td>{{ $item->siswa->nama_siswa }}</td>
                        <td>{{ $item->guru->nama }}</td>
                        <td>
                            <span
                                class="
                                @if ($item->status == 'Hadir') text-success
                                @elseif($item->status == 'Izin') text-primary
                                @elseif($item->status == 'Sakit') text-warning
                                @elseif($item->status == 'Alpa') text-danger @endif
                            ">
                                {{ $item->status }}
                            </span>
                        </td>
                        <td>
                            <a href="{{ route('absensi.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('absensi.destroy', $item->id) }}" method="POST" class="d-inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <!-- Tombol Kembali -->
        <a href="javascript:history.back()" class="btn btn-secondary mt-3">Kembali</a>
    </div>
@endsection

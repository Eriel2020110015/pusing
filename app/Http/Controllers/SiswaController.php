<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use App\Models\Kelas;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index()
    {
        $data_siswa = Siswa::with('kelas')->get();  // Memuat siswa beserta kelasnya
        return view('siswa.index', compact('data_siswa'));
    }

    public function create()
    {
        $kelas = Kelas::all();  // Ambil semua data kelas untuk pilihan kelas
        return view('siswa.create', compact('kelas'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nis' => 'required|unique:siswa,nis',  // Pastikan nis unik
            'nama_siswa' => 'required',
            'kelas_id' => 'required|exists:kelas,id',  // Validasi kelas_id agar sesuai dengan id kelas yang ada
        ]);

        // Simpan data siswa dengan kelas_id yang dipilih
        Siswa::create([
            'nis' => $request->nis,
            'nama_siswa' => $request->nama_siswa,
            'kelas_id' => $request->kelas_id,
        ]);

        return redirect()->route('siswa.index')->with('success', 'Data siswa berhasil ditambahkan.');
    }

    public function show($id)
    {
        $siswa = Siswa::with('kelas')->findOrFail($id);  // Memuat siswa beserta kelasnya
        return view('siswa.show', compact('siswa'));
    }

    public function edit($id)
    {
        $siswa = Siswa::findOrFail($id);
        $kelas = Kelas::all();  // Ambil semua data kelas untuk pilihan kelas
        return view('siswa.edit', compact('siswa', 'kelas'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nis' => 'required|unique:siswa,nis,' . $id,  // Pastikan nis unik kecuali untuk id siswa yang sedang diedit
            'nama_siswa' => 'required',
            'kelas_id' => 'required|exists:kelas,id',  // Validasi kelas_id agar sesuai dengan id kelas yang ada
        ]);

        $siswa = Siswa::findOrFail($id);
        $siswa->update([
            'nis' => $request->nis,
            'nama_siswa' => $request->nama_siswa,
            'kelas_id' => $request->kelas_id,
        ]);

        return redirect()->route('siswa.index')->with('success', 'Data siswa berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $siswa = Siswa::findOrFail($id);
        $siswa->delete();

        return redirect()->route('siswa.index')->with('success', 'Data siswa berhasil dihapus.');
    }
}

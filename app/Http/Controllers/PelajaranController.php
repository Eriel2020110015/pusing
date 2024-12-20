<?php

namespace App\Http\Controllers;

use App\Models\Pelajaran;
use App\Models\Kelas;  // Import model Kelas
use Illuminate\Http\Request;

class PelajaranController extends Controller
{
    // Menampilkan semua pelajaran
    public function index()
    {
        $pelajaran = Pelajaran::all();  // Ambil semua data pelajaran
        return view('pelajaran.index', compact('pelajaran'));  // Kirim ke view
    }

    // Menampilkan form untuk membuat pelajaran baru
    public function create()
    {
        $kelas = Kelas::all();  // Ambil semua data kelas
        return view('pelajaran.create', compact('kelas'));  // Kirim data kelas ke form
    }

    // Menyimpan data pelajaran baru
    public function store(Request $request)
    {
        $request->validate([
            'kode_pelajaran' => 'required|string',
            'nama_pelajaran' => 'required|string',
            'kelas_id' => 'required|exists:kelas,id',  // Pastikan kelas_id ada di tabel kelas
        ]);

        Pelajaran::create($request->all());  // Simpan data pelajaran
        return redirect()->route('pelajaran.index');  // Redirect setelah menyimpan
    }

    // Menampilkan form untuk mengedit pelajaran
    public function edit(Pelajaran $pelajaran)
    {
        $kelas = Kelas::all();  // Ambil data kelas
        return view('pelajaran.edit', compact('pelajaran', 'kelas'));  // Kirim data pelajaran dan kelas ke form edit
    }

    // Memperbarui data pelajaran
    public function update(Request $request, Pelajaran $pelajaran)
    {
        $request->validate([
            'kode_pelajaran' => 'required|string',
            'nama_pelajaran' => 'required|string',
            'kelas_id' => 'required|exists:kelas,id',
        ]);

        $pelajaran->update($request->all());  // Update data pelajaran
        return redirect()->route('pelajaran.index');  // Redirect setelah update
    }

    // Menampilkan detail pelajaran
    public function show(Pelajaran $pelajaran)
    {
        return view('pelajaran.show', compact('pelajaran'));  // Kirim data pelajaran ke view show
    }

    // Menghapus pelajaran
    public function destroy(Pelajaran $pelajaran)
    {
        $pelajaran->delete();  // Hapus pelajaran
        return redirect()->route('pelajaran.index');  // Redirect setelah menghapus
    }
}

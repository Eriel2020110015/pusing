<?php

namespace App\Http\Controllers;

use App\Models\Penilaian;
use App\Models\Siswa;
use App\Models\Guru;
use Illuminate\Http\Request;

class PenilaianController extends Controller
{
    public function index()
    {
        $penilaian = Penilaian::with(['siswa', 'guru'])->get();  // Memuat data penilaian beserta siswa dan guru
        return view('penilaian.index', compact('penilaian'));
    }

    public function create()
    {
        $siswa = Siswa::all();  // Mengambil semua siswa untuk dropdown
        $guru = Guru::all();    // Mengambil semua guru untuk dropdown
        return view('penilaian.create', compact('siswa', 'guru'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'kode_penilaian' => 'required|unique:penilaian',
            'nilai' => 'required|integer|min:0|max:100',
            'siswa_id' => 'required',
            'guru_id' => 'required',
        ]);

        Penilaian::create($request->all());

        return redirect()->route('penilaian.index')->with('success', 'Penilaian berhasil ditambahkan.');
    }

    public function show($id)
    {
        $penilaian = Penilaian::with(['siswa', 'guru'])->findOrFail($id);
        return view('penilaian.show', compact('penilaian'));
    }

    public function edit($id)
    {
        $penilaian = Penilaian::findOrFail($id);
        $siswa = Siswa::all();  // Ambil semua siswa untuk dropdown
        $guru = Guru::all();    // Ambil semua guru untuk dropdown
        return view('penilaian.edit', compact('penilaian', 'siswa', 'guru'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'kode_penilaian' => 'required',
            'nilai' => 'required|integer|min:0|max:100',
            'siswa_id' => 'required',
            'guru_id' => 'required',
        ]);

        $penilaian = Penilaian::findOrFail($id);
        $penilaian->update($request->all());

        return redirect()->route('penilaian.index')->with('success', 'Penilaian berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $penilaian = Penilaian::findOrFail($id);
        $penilaian->delete();

        return redirect()->route('penilaian.index')->with('success', 'Penilaian berhasil dihapus.');
    }
}

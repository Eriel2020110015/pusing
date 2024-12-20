<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\Kelas;
use Illuminate\Http\Request;

class GuruController extends Controller
{
    public function index()
    {
        $data_guru = Guru::with('kelas')->get();  // Memuat data guru beserta kelasnya (jika ada)
        return view('guru.index', compact('data_guru'));
    }

    public function create()
    {
        $kelas = Kelas::all();  // Ambil semua kelas untuk dropdown kelas
        return view('guru.create', compact('kelas'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'kode_guru' => 'required|unique:guru',
            'nama_guru' => 'required',
            'kelas_id' => 'nullable',
        ]);

        Guru::create($request->all());

        return redirect()->route('guru.index')->with('success', 'Data guru berhasil ditambahkan.');
    }

    public function show($id)
    {
        $guru = Guru::with('kelas')->findOrFail($id);
        return view('guru.show', compact('guru'));
    }

    public function edit($id)
    {
        $guru = Guru::findOrFail($id);
        $kelas = Kelas::all();  // Ambil semua kelas untuk pilihan
        return view('guru.edit', compact('guru', 'kelas'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'kode_guru' => 'required',
            'nama_guru' => 'required',
            'kelas_id' => 'nullable',
        ]);

        $guru = Guru::findOrFail($id);
        $guru->update($request->all());

        return redirect()->route('guru.index')->with('success', 'Data guru berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $guru = Guru::findOrFail($id);
        $guru->delete();

        return redirect()->route('guru.index')->with('success', 'Data guru berhasil dihapus.');
    }
}

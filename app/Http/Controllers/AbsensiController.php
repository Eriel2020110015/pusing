<?php

namespace App\Http\Controllers;

use App\Models\Absensi;
use App\Models\Siswa;
use App\Models\Guru;
use Illuminate\Http\Request;

class AbsensiController extends Controller
{
    public function index()
    {
        // Get absensi data, including the related siswa and guru data
        $absensi = Absensi::with(['siswa', 'guru'])->get();  // Load absensi with siswa and guru
        return view('absensi.index', compact('absensi'));
    }

    // Menampilkan form untuk tambah absensi
    public function create()
    {
        $siswa = Siswa::all();  // Mengambil semua data siswa
        $guru = Guru::all();    // Mengambil semua data guru jika perlu
        return view('absensi.create', compact('siswa', 'guru'));
    }

    public function store(Request $request)
    {
        // Validate the request
        $request->validate([
            'kode_absensi' => 'required|unique:absensi',
            'tanggal' => 'required|date',
            'status' => 'required|in:Hadir,Izin,Sakit,Alpa',
            'siswa_id' => 'required',
            'guru_id' => 'required',
        ]);

        // Create the Absensi record
        Absensi::create([
            'kode_absensi' => $request->kode_absensi,
            'tanggal' => $request->tanggal,
            'status' => $request->status,
            'siswa_id' => $request->siswa_id,
            'guru_id' => $request->guru_id,
        ]);

        // Redirect to the index with a success message
        return redirect()->route('absensi.index')->with('success', 'Absensi berhasil ditambahkan.');
    }

    public function show($id)
    {
        // Find the absensi record with related siswa and guru
        $absensi = Absensi::with(['siswa', 'guru'])->findOrFail($id);
        return view('absensi.show', compact('absensi'));
    }

    public function edit($id)
    {
        // Find the absensi record and get the siswa and guru for dropdowns
        $absensi = Absensi::findOrFail($id);
        $siswa = Siswa::all();  // Get all siswa for dropdown
        $guru = Guru::all();    // Get all guru for dropdown
        return view('absensi.edit', compact('absensi', 'siswa', 'guru'));
    }

    public function update(Request $request, $id)
    {
        // Validate the request
        $request->validate([
            'kode_absensi' => 'required',
            'tanggal' => 'required|date',
            'status' => 'required|in:Hadir,Izin,Sakit,Alpa',
            'siswa_id' => 'required',
            'guru_id' => 'required',
        ]);

        // Find the absensi record and update it
        $absensi = Absensi::findOrFail($id);
        $absensi->update([
            'kode_absensi' => $request->kode_absensi,
            'tanggal' => $request->tanggal,
            'status' => $request->status,
            'siswa_id' => $request->siswa_id,
            'guru_id' => $request->guru_id,
        ]);

        // Redirect to the index with a success message
        return redirect()->route('absensi.index')->with('success', 'Absensi berhasil diperbarui.');
    }

    public function destroy($id)
    {
        // Find the absensi record and delete it
        $absensi = Absensi::findOrFail($id);
        $absensi->delete();

        // Redirect to the index with a success message
        return redirect()->route('absensi.index')->with('success', 'Absensi berhasil dihapus.');
    }
}

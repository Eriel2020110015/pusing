<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;

    protected $table = 'siswa';  // Konsisten dengan nama tabel

    protected $fillable = [
        'nis',
        'nama_siswa',
        'kelas_id',  // Menambahkan kelas_id agar dapat diisi saat menyimpan data siswa
    ];

    // Relasi ke model Kelas
    public function kelas()
    {
        return $this->belongsTo(Kelas::class);  // Setiap siswa berhubungan dengan satu kelas
    }

    // Relasi ke model Penilaian
    public function penilaians()
    {
        return $this->hasMany(Penilaian::class);  // Setiap siswa bisa memiliki banyak penilaian
    }
}

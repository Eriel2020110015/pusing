<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Absensi extends Model
{
    use HasFactory;

    protected $table = 'absensi';  // Nama tabel

    protected $fillable = [
        'kode_absensi',
        'tanggal',
        'status',
        'siswa_id',
        'guru_id',
    ];

    // Relasi ke model Siswa
    public function siswa()
    {
        return $this->belongsTo(Siswa::class);
    }

    // Relasi ke model Guru
    public function guru()
    {
        return $this->belongsTo(Guru::class);
    }
}

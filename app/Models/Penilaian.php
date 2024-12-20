<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penilaian extends Model
{
    use HasFactory;

    protected $table = 'penilaian';  // Konsisten dengan nama tabel

    protected $fillable = [
        'kode_penilaian',
        'nilai',
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

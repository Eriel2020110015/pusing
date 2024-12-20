<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    use HasFactory;

    protected $table = 'guru';  // Konsisten dengan nama tabel

    protected $fillable = [
        'kode_guru',
        'nama_guru',
        'kelas_id',
    ];

    public function kelas()
    {
        return $this->belongsTo(Kelas::class);  // Relasi opsional ke kelas
    }
}

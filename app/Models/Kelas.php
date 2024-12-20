<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    use HasFactory;

    protected $table = 'kelas';  // Konsisten dengan nama tabel

    protected $fillable = [
        'kode_kelas',
        'nama_kelas',
    ];

    public function pelajaran()
    {
        return $this->hasMany(Pelajaran::class);  // Satu kelas memiliki banyak pelajaran
    }
}

<?php

namespace Database\Seeders;

use App\Models\Guru;
use Illuminate\Database\Seeder;

class GuruSeeder extends Seeder
{
    public function run()
    {
        // Menambahkan data dummy ke dalam tabel 'guru' dengan mengacu pada kelas_id yang ada
        Guru::create([
            'kode_guru' => 'G001',
            'nama_guru' => 'Dr. Agus Setiawan',
            'kelas_id' => 1,  // Mengacu pada KLS001 - 10 Pariwisata
        ]);

        Guru::create([
            'kode_guru' => 'G002',
            'nama_guru' => 'Siti Murni',
            'kelas_id' => 2,  // Mengacu pada KLS002 - 11 Pariwisata
        ]);

        Guru::create([
            'kode_guru' => 'G003',
            'nama_guru' => 'Herman Saputra',
            'kelas_id' => 3,  // Mengacu pada KLS003 - 12 Pariwisata
        ]);

        Guru::create([
            'kode_guru' => 'G004',
            'nama_guru' => 'Lina Wahyuni',
            'kelas_id' => 4,  // Mengacu pada KLS004 - 10 Perhotelan
        ]);

        Guru::create([
            'kode_guru' => 'G005',
            'nama_guru' => 'Rudi Pratama',
            'kelas_id' => 5,  // Mengacu pada KLS005 - 11 Perhotelan
        ]);

        Guru::create([
            'kode_guru' => 'G006',
            'nama_guru' => 'Nina Rahmawati',
            'kelas_id' => 6,  // Mengacu pada KLS006 - 12 Perhotelan
        ]);

        Guru::create([
            'kode_guru' => 'G007',
            'nama_guru' => 'Fauzan Ali',
            'kelas_id' => 7,  // Mengacu pada KLS007 - 10 Akuntansi
        ]);

        Guru::create([
            'kode_guru' => 'G008',
            'nama_guru' => 'Dewi Arini',
            'kelas_id' => 8,  // Mengacu pada KLS008 - 11 Akuntansi
        ]);

        Guru::create([
            'kode_guru' => 'G009',
            'nama_guru' => 'Tatang Sudrajat',
            'kelas_id' => 9,  // Mengacu pada KLS009 - 12 Akuntansi
        ]);

        Guru::create([
            'kode_guru' => 'G010',
            'nama_guru' => 'Joko Santoso',
            'kelas_id' => 10,  // Mengacu pada KLS010 - 10 Tata Boga
        ]);

        Guru::create([
            'kode_guru' => 'G011',
            'nama_guru' => 'Maya Puspita',
            'kelas_id' => 11,  // Mengacu pada KLS011 - 11 Tata Boga
        ]);

        Guru::create([
            'kode_guru' => 'G012',
            'nama_guru' => 'Siti Fatimah',
            'kelas_id' => 12,  // Mengacu pada KLS012 - 12 Tata Boga
        ]);
    }
}

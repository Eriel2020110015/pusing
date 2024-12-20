<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SiswaSeeder extends Seeder
{
    public function run()
    {
        DB::table('siswa')->insert([
            // Siswa Kelas 10 Pariwisata
            [
                'nis' => '1234567890',
                'nama_siswa' => 'Ahmad Rizky',
                'kelas_id' => 1, // Kelas 10 Pariwisata
            ],
            [
                'nis' => '1234567891',
                'nama_siswa' => 'Rina Maharani',
                'kelas_id' => 1, // Kelas 10 Pariwisata
            ],
            [
                'nis' => '1234567892',
                'nama_siswa' => 'Budi Santoso',
                'kelas_id' => 1, // Kelas 10 Pariwisata
            ],

            // Siswa Kelas 11 Perhotelan
            [
                'nis' => '2234567890',
                'nama_siswa' => 'Dewi Ayu',
                'kelas_id' => 2, // Kelas 11 Pariwisata
            ],
            [
                'nis' => '2234567891',
                'nama_siswa' => 'Agus Suryadi',
                'kelas_id' => 2, // Kelas 11 Pariwisata
            ],

            // Siswa Kelas 12 Akuntansi
            [
                'nis' => '3234567890',
                'nama_siswa' => 'Andi Putra',
                'kelas_id' => 3, // Kelas 12 Pariwisata
            ],
            [
                'nis' => '3234567891',
                'nama_siswa' => 'Siti Aminah',
                'kelas_id' => 3, // Kelas 12 Pariwisata
            ],

            // Siswa Kelas 10 Tata Boga
            [
                'nis' => '4234567890',
                'nama_siswa' => 'Fauzi Rahman',
                'kelas_id' => 10, // Kelas 10 Tata Boga
            ],
            [
                'nis' => '4234567891',
                'nama_siswa' => 'Lia Nurhasanah',
                'kelas_id' => 10, // Kelas 10 Tata Boga
            ],
        ]);
    }
}

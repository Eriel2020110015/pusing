<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PelajaranSeeder extends Seeder
{
    public function run()
    {
        DB::table('pelajaran')->insert([
            // Pelajaran Nasional
            ['kelas_id' => 1, 'kode_pelajaran' => 'PN001', 'nama_pelajaran' => 'Bahasa Indonesia'],
            ['kelas_id' => 2, 'kode_pelajaran' => 'PN002', 'nama_pelajaran' => 'Matematika'],
            ['kelas_id' => 3, 'kode_pelajaran' => 'PN003', 'nama_pelajaran' => 'Pendidikan Pancasila'],
            ['kelas_id' => 4, 'kode_pelajaran' => 'PN004', 'nama_pelajaran' => 'Bahasa Inggris'],

            // Pelajaran Kewilayahan
            ['kelas_id' => 5, 'kode_pelajaran' => 'PKW001', 'nama_pelajaran' => 'Sejarah Daerah'],
            ['kelas_id' => 6, 'kode_pelajaran' => 'PKW002', 'nama_pelajaran' => 'Muatan Lokal'],

            // Pelajaran Kejuruan: Pariwisata
            ['kelas_id' => 1, 'kode_pelajaran' => 'PRW001', 'nama_pelajaran' => 'Dasar-Dasar Pariwisata'],
            ['kelas_id' => 2, 'kode_pelajaran' => 'PRW002', 'nama_pelajaran' => 'Pengelolaan Destinasi Wisata'],

            // Pelajaran Kejuruan: Perhotelan
            ['kelas_id' => 4, 'kode_pelajaran' => 'PRH001', 'nama_pelajaran' => 'Dasar-Dasar Perhotelan'],
            ['kelas_id' => 5, 'kode_pelajaran' => 'PRH002', 'nama_pelajaran' => 'Manajemen Hotel'],

            // Pelajaran Kejuruan: Akuntansi
            ['kelas_id' => 7, 'kode_pelajaran' => 'PAK001', 'nama_pelajaran' => 'Akuntansi Dasar'],
            ['kelas_id' => 8, 'kode_pelajaran' => 'PAK002', 'nama_pelajaran' => 'Akuntansi Keuangan'],

            // Pelajaran Kejuruan: Tata Boga
            ['kelas_id' => 10, 'kode_pelajaran' => 'PTB001', 'nama_pelajaran' => 'Dasar-Dasar Tata Boga'],
            ['kelas_id' => 11, 'kode_pelajaran' => 'PTB002', 'nama_pelajaran' => 'Pengolahan Makanan'],
        ]);
    }
}

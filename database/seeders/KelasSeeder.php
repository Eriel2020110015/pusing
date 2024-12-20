<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KelasSeeder extends Seeder
{
    public function run()
    {
        DB::table('kelas')->insert([
            // Kelas 10
            [
                'kode_kelas' => '10-PW-A',
                'nama_kelas' => '10 Pariwisata A',
            ],
            [
                'kode_kelas' => '10-PH-A',
                'nama_kelas' => '10 Perhotelan A',
            ],
            [
                'kode_kelas' => '10-PB-A',
                'nama_kelas' => '10 Perbankan A',
            ],
            [
                'kode_kelas' => '10-TB-A',
                'nama_kelas' => '10 Tata Boga A',
            ],
            // Kelas 11
            [
                'kode_kelas' => '11-PW-A',
                'nama_kelas' => '11 Pariwisata A',
            ],
            [
                'kode_kelas' => '11-PH-A',
                'nama_kelas' => '11 Perhotelan A',
            ],
            [
                'kode_kelas' => '11-PB-A',
                'nama_kelas' => '11 Perbankan A',
            ],
            [
                'kode_kelas' => '11-TB-A',
                'nama_kelas' => '11 Tata Boga A',
            ],
            // Kelas 12
            [
                'kode_kelas' => '12-PW-A',
                'nama_kelas' => '12 Pariwisata A',
            ],
            [
                'kode_kelas' => '12-PH-A',
                'nama_kelas' => '12 Perhotelan A',
            ],
            [
                'kode_kelas' => '12-PB-A',
                'nama_kelas' => '12 Perbankan A',
            ],
            [
                'kode_kelas' => '12-TB-A',
                'nama_kelas' => '12 Tata Boga A',
            ],
        ]);
    }
}

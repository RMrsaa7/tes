<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KaryawanSeeder extends Seeder
{
    public function run()
    {
        DB::table('karyawan')->insert([
            [
                'nip' => '12345',
                'nama_pegawai' => 'John Doe',
                'no_hp' => '08123456789',
                'email' => 'john@example.com',
                'status' => 'Aktif',
                'jabatan' => 'Manager',
            ],
            [
                'nip' => '67890',
                'nama_pegawai' => 'Jane Smith',
                'no_hp' => '08987654321',
                'email' => 'jane@example.com',
                'status' => 'Non-Aktif',
                'jabatan' => 'Staff',
            ],
        ]);
    }
}

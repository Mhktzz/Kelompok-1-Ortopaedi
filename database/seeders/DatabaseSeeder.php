<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Create default admin
        User::create([
            'nama' => 'Admin Utama',
            'email' => 'admin@example.com',
            'password' => 'admin',
            'role' => 'admin',
            'spesialisasi' => null,
        ]);

        User::create([
            'nama' => 'Dr. Budi',
            'email' => 'dokter@example.com',
            'password' => 'dokter_budi',
            'role' => 'dokter',
            'spesialisasi' => 'Poli_Umum',
        ]);

        User::create([
            'nama' => 'Siti_Perawat',
            'email' => 'perawat@example.com',
            'password' => 'Siticuy',
            'role' => 'perawat',
            'spesialisasi' => null,
        ]);
    }
}

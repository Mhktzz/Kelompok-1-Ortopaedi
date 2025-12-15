<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Super Admin
        User::create([
            'name' => 'Admin Utama',
            'username' => 'superadmin',
            'email' => 'admin@example.com',
            'password' => 'admin123',
            'role' => 'super_admin',
            'spesialisasi' => null,
        ]);

        // Dokter
        User::create([
            'name' => 'Dr. Budi',
            'username' => 'drbudi',
            'email' => 'dokter@example.com',
            'password' => 'dokter123',
            'role' => 'dokter',
            'spesialisasi' => 'Poli Umum',
        ]);

        // Perawat
        User::create([
            'name' => 'Siti',
            'username' => 'siti_perawat',
            'email' => 'perawat@example.com',
            'password' => 'perawat123',
            'role' => 'perawat',
            'spesialisasi' => null,
        ]);
    }
}

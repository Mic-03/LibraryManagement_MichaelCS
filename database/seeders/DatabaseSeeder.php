<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // Hapus semua data pengguna lama (Opsional, tergantung apakah data ini penting atau tidak)
        User::truncate();

        // Panggil seeder lain atau masukkan data baru
        $this->call([
            // Daftar seeder yang Anda buat
            CDSeeder::class,
            NewspaperSeeder::class,
            FYPSeeder::class,
            // Tambahkan seeder lainnya jika ada
        ]);

        // Seeder untuk User (Pastikan hanya memasukkan jika belum ada)
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
    }
}

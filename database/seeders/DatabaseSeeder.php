<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Baris ini adalah kunci agar semua seeder Anda berjalan.
        $this->call([
            OrangSeeder::class,
            UserSeeder::class, // Menambahkan seeder user yang baru
        ]);
    }
    
}

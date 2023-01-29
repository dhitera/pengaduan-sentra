<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Kategori;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name' => 'User',
            'nik' => '0000000000000001',
            'email' => 'user@gmail.com',
            'telepon' => '123456789012',
            'password' => bcrypt('user')
        ]);

        User::create([
            'name' => 'Admin',
            'nik' => '0000000000000002',
            'email' => 'admin@gmail.com',
            'telepon' => '123456788012',
            'roles' => 'admin',
            'password' => bcrypt('admin')
        ]);

        Kategori::create([
            'name' => 'Jalanan',
            'slug' => 'jalanan'
        ]);

        Kategori::create([
            'name' => 'Warga',
            'slug' => 'warga'
        ]);

        Kategori::create([
            'name' => 'Fasilitas Publik',
            'slug' => 'fasilitas-publik'
        ]);
    }
}

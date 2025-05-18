<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Buku;
use App\Models\Kategori;
use App\Models\Penerbit;
use App\Models\Penulis;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'user_name'     => 'Rafia',
            'user_alamat'   => 'Jakarta',
            'user_username' => 'rafia9005',
            'user_email'    => 'rafia9005@gmail.com',
            'user_notlp'    => '081234567890',
            'user_password' => Hash::make('admin123'),
            'user_level'    => 'admin'
        ]);

        $faker = Faker::create();

        // Penulis
        foreach (range(1, 5) as $i) {
            Penulis::create([
                'nama_penulis' => $faker->name,
            ]);
        }

        // Penerbit
        foreach (range(1, 5) as $i) {
            Penerbit::create([
                'penerbit_nama'    => $faker->company,
                'penerbit_alamat'  => $faker->address,
                'penerbit_notelp' => $faker->url,
                'penerbit_email' => $faker->url,
            ]);
        }

        // Kategori
        foreach (range(1, 5) as $i) {
            Kategori::create([
                'kategori_nama' => $faker->word,
            ]);
        }

        // Buku
        foreach (range(1, 10) as $i) {
            Buku::create([
                'buku_judul'        => $faker->sentence(3),
                'penulis_id'   => rand(1, 5),
                'penerbit_id'  => rand(1, 5),
                'kategori_id'  => rand(1, 5),
                'buku_thnterbit'        => rand(2000, 2025),
                'buku_isbn'         => $faker->isbn13,
            ]);
        }
    }
}

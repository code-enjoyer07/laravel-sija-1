<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

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
    }
}

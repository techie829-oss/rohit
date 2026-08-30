<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::updateOrCreate(
            ['email' => 'admin@solidrix.com'],
            [
                'name' => 'Rohit Kumar (Admin)',
                'password' => Hash::make('password'),
                'email_verified_at' => now(),
            ]
        );

        User::updateOrCreate(
            ['email' => 'rohitkmarch96@gmail.com'],
            [
                'name' => 'Rohit Kumar (Coolhax RK)',
                'password' => Hash::make('password'),
                'email_verified_at' => now(),
            ]
        );
    }
}

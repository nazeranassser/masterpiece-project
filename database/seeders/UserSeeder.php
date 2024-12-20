<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name' => 'Test User',
            'email' => 'testuser@example.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password123'), // Ensure password is hashed
        ]);
    }
}

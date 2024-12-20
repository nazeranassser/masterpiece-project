<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    public function run()
    {
        Admin::create([
            'name' => 'nazera',
            'email' => 'nazera@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'), // Make sure to hash the password
            'is_active' => 1,
            'is_super' => 1,
            'remember_token' => null,
        ]);
    }
}


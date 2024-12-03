<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AdminUserSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name' => 'Admin', // Add username here
            'username' => 'admin', // Add username here
            'email' => 'admin@example.com',
            'password' => Hash::make('password'),
        ]);
    }
}

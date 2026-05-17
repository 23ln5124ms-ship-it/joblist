<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        // Admin user
        User::create([
            'name'  => 'Admin',
            'email' => 'admin@joblist.com',
            'password' => Hash::make('password'),
            'admin' => true,
        ]);

        // Regular user
        User::create([
            'name'  => 'John Doe',
            'email' => 'user@joblist.com',
            'password' => Hash::make('password'),
            'admin' => false,
        ]);
    }
}
<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        // Create an Admin user
        User::create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'password' => Hash::make('suraj'), // Use Hash::make for password hashing
            'role_id' => 1, // Assuming '1' corresponds to 'Admin' in the roles table
        ]);

        // Create a Manager user
        User::create([
            'name' => 'Manager User',
            'email' => 'manager@example.com',
            'password' => Hash::make('password123'),
            'role_id' => 2, // Assuming '2' corresponds to 'Manager'
        ]);

        // Create a User
        User::create([
            'name' => 'Regular User',
            'email' => 'user@example.com',
            'password' => Hash::make('password123'),
            'role_id' => 3, // Assuming '3' corresponds to 'User'
        ]);

        // Create an Editor user
        User::create([
            'name' => 'Editor User',
            'email' => 'editor@example.com',
            'password' => Hash::make('password123'),
            'role_id' => 4, // Assuming '4' corresponds to 'Editor'
        ]);

        // Create a Viewer user
        User::create([
            'name' => 'Viewer User',
            'email' => 'viewer@example.com',
            'password' => Hash::make('password123'),
            'role_id' => 5, // Assuming '5' corresponds to 'Viewer'
        ]);
    }
}

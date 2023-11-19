<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        {
            // Create users with roles
            $superadmin = User::create([
                'name'      => 'Super Admin',
                'role'      => 'superadmin',
                'email'     => 'superadmin@example.com',
                'password'  => Hash::make('superadmin123'),
            ]);

            $admin = User::create([
                'name'      => 'Admin User',
                'role'      => 'admin',
                'email'     => 'admin@example.com',
                'password'  => Hash::make('admin123'),
            ]);

            $user = User::create([
                'name'      => 'Regular User',
                'role'      => 'user',
                'email'     => 'user@example.com',
                'password'  => Hash::make('user123'),
            ]);
        }
    }
}
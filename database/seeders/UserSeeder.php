<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        $user = User::firstOrCreate(
            [
                'email' => 'owner@recehan.com'
            ],
            [
                'name' => 'Super Admin',
                'password' => Hash::make('password'),
                'is_active' => true
            ]
        );

        $user->assignRole('superadmin');
    }
}
<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    public function run(): void
    {
        User::updateOrCreate(
            ['email' => 'admin@tr3slog.com'],
            [
                'name' => 'TR3SLOG Admin',
                'company' => 'TR3SLOG',
                'phone' => '+1 786 123 4567',
                'password' => Hash::make('admin1234'),
                'role' => 'admin',
            ]
        );
    }
}

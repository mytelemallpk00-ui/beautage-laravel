<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    public function run(): void
    {
        $email = env('ADMIN_EMAIL', 'admin@beautage.com');
        $password = env('ADMIN_PASSWORD', 'BeautageAdmin2025!');

        User::updateOrCreate(
            ['email' => $email],
            [
                'name' => 'Beautage Admin',
                'password' => Hash::make($password),
            ]
        );
    }
}

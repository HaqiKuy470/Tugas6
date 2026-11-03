<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name'     => 'Dhiyaulhaq',
            'email'    => 'admin@test.com',
            'password' => 'password',
            'role'     => 'admin',
        ]);

        User::create([
            'name'     => 'Haqikuy',
            'email'    => 'user@test.com',
            'password' => 'password',
            'role'     => 'user',
        ]);
    }
}

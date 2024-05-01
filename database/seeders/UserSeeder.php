<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
        ]);

        User::factory()->create([
            'name' => 'Lecturer',
            'email' => 'lecturer@example.com',
        ]);

        User::factory()->create([
            'name' => 'Keebah',
            'email' => 'keebah@example.com',
        ]);
    }
}

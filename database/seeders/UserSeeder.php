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
            'name' => 'Keebah Brown',
            'email' => 'keebah@example.com',
        ]);

        User::factory()->create([
            'name' => 'Suzette Connor',
            'email' => 'soconnor@example.com',
        ]);

        User::factory()->create([
            'name' => 'Gabrielle Tennant',
            'email' => 'gtennant@example.com',
        ]);

        User::factory()->create([
            'name' => 'Latoya Samms-McNeil',
            'email' => 'lmcneil@example.com',
        ]);

        User::factory()->create([
            'name' => 'Ophilia Boyd',
            'email' => 'oboyd@example.com',
        ]);

        User::factory()->create([
            'name' => 'Fiona Edwards',
            'email' => 'fedwards@example.com',
        ]);

        User::factory()->create([
            'name' => 'Rudie Ann Rose',
            'email' => 'rrose@example.com',
        ]);

        User::factory()->create([
            'name' => 'Akevia Griffiths',
            'email' => 'agriffiths@example.com',
        ]);
    }
}

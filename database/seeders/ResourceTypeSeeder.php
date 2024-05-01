<?php

namespace Database\Seeders;

use App\Models\ResourceType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ResourceTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ResourceType::create(['name'=>'Handouts']);
        ResourceType::create(['name'=>'Courseware']);
        ResourceType::create(['name'=>'Instructional Videos']);
    }
}

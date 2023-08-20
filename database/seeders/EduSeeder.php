<?php

namespace Database\Seeders;

use App\Models\Edu;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class EduSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Edu::factory()->create([
            'coy_id' => 1,
            'id' => Str::uuid(),
            'edu_code' => 1,
            'edu_name' => 'Edu 1',
            'is_active' => 1,
            'created_by' => 'Seeder',
            'updated_by' => 'Seeder',
        ]);
    }
}

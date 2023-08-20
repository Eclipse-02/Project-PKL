<?php

namespace Database\Seeders;

use App\Models\Job;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Job::factory()->create([
            'coy_id' => 1,
            'id' => Str::uuid(),
            'job_code' => 1,
            'job_name' => 'Job 1',
            'is_active' => 1,
            'created_by' => 'Seeder',
            'updated_by' => 'Seeder',
        ]);
    }
}

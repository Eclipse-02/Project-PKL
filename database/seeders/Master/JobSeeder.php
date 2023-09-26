<?php

namespace Database\Seeders\Master;

use App\Models\Master\Job as MasterJob;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MasterJob::create([
            'coy_id' => 1,
            'id' => Str::uuid(),
            'job_code' => 1,
            'job_name' => 'Job 1',
            'is_active' => 'Y',
            'created_by' => 'Seeder',
            'updated_by' => 'Seeder',
        ]);
    }
}

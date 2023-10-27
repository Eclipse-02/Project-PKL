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
            'job_name' => 'Pegawai Negeri',
            'is_active' => 'Y',
            'created_by' => 'Seeder',
            'updated_by' => 'Seeder',
        ]);
        MasterJob::create([
            'coy_id' => 1,
            'id' => Str::uuid(),
            'job_code' => 2,
            'job_name' => 'Pegawai Swasta',
            'is_active' => 'N',
            'created_by' => 'Seeder',
            'updated_by' => 'Seeder',
        ]);
        MasterJob::create([
            'coy_id' => 1,
            'id' => Str::uuid(),
            'job_code' => 3,
            'job_name' => 'Lainnya',
            'is_active' => 'Y',
            'created_by' => 'Seeder',
            'updated_by' => 'Seeder',
        ]);
    }
}

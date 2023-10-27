<?php

namespace Database\Seeders\Master;

use App\Models\Master\Edu as MasterEdu;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class EduSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MasterEdu::create([
            'coy_id' => 1,
            'id' => Str::uuid(),
            'edu_code' => 1,
            'edu_name' => 'SD',
            'is_active' => 'N',
            'created_by' => 'Seeder',
            'updated_by' => 'Seeder',
        ]);
        MasterEdu::create([
            'coy_id' => 1,
            'id' => Str::uuid(),
            'edu_code' => 2,
            'edu_name' => 'SMP',
            'is_active' => 'N',
            'created_by' => 'Seeder',
            'updated_by' => 'Seeder',
        ]);
        MasterEdu::create([
            'coy_id' => 1,
            'id' => Str::uuid(),
            'edu_code' => 3,
            'edu_name' => 'SMA/SMK',
            'is_active' => 'Y',
            'created_by' => 'Seeder',
            'updated_by' => 'Seeder',
        ]);
        MasterEdu::create([
            'coy_id' => 1,
            'id' => Str::uuid(),
            'edu_code' => 4,
            'edu_name' => 'D1/D3',
            'is_active' => 'Y',
            'created_by' => 'Seeder',
            'updated_by' => 'Seeder',
        ]);
        MasterEdu::create([
            'coy_id' => 1,
            'id' => Str::uuid(),
            'edu_code' => 5,
            'edu_name' => 'S1',
            'is_active' => 'Y',
            'created_by' => 'Seeder',
            'updated_by' => 'Seeder',
        ]);
    }
}

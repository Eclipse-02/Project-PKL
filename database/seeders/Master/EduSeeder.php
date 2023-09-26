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
            'edu_name' => 'Edu 1',
            'is_active' => 'Y',
            'created_by' => 'Seeder',
            'updated_by' => 'Seeder',
        ]);
    }
}

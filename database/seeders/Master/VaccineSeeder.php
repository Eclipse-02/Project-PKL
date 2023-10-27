<?php

namespace Database\Seeders\Master;

use App\Models\Master\Vaccine as MasterVaccine;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class VaccineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MasterVaccine::create([
            'id' => Str::uuid(),
            'vc_code' => 1,
            'vc_name' => 'Bio Farma',
            'is_active' => 'Y',
            'created_by' => 'Seeder',
            'updated_by' => 'Seeder',
        ]);
        MasterVaccine::create([
            'id' => Str::uuid(),
            'vc_code' => 2,
            'vc_name' => 'Sinovac',
            'is_active' => 'Y',
            'created_by' => 'Seeder',
            'updated_by' => 'Seeder',
        ]);
        MasterVaccine::create([
            'id' => Str::uuid(),
            'vc_code' => 3,
            'vc_name' => 'AstraZeneca',
            'is_active' => 'N',
            'created_by' => 'Seeder',
            'updated_by' => 'Seeder',
        ]);
    }
}

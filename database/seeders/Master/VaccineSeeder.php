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
            'vc_name' => 'Vaccine 1',
            'is_active' => 'Y',
            'created_by' => 'Seeder',
            'updated_by' => 'Seeder',
        ]);
    }
}

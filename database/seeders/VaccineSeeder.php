<?php

namespace Database\Seeders;

use App\Models\Vaccine;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class VaccineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Vaccine::factory()->create([
            'id' => Str::uuid(),
            'vc_code' => 1,
            'vc_name' => 'Vaccine 1',
            'is_active' => 1,
            'created_by' => 'Seeder',
            'updated_by' => 'Seeder',
        ]);
    }
}

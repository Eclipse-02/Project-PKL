<?php

namespace Database\Seeders;

use App\Models\Area;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AreaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Area::create([
            'coy_id' => '1',
            'id' => Str::uuid(),
            'area_code' => '1',
            'area_name' => 'Jakarta',
            'is_active' => 'Y',
            'created_by' => 'Seeder',
            'updated_by' => 'Seeder',
        ]);
    }
}

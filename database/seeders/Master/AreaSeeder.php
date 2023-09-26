<?php

namespace Database\Seeders\Master;

use App\Models\Master\Area as MasterArea;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class AreaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MasterArea::create([
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

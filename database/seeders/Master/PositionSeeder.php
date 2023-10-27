<?php

namespace Database\Seeders\Master;

use App\Models\Master\Position as MasterPosition;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class PositionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MasterPosition::create([
            'coy_id' => '1',
            'id' => Str::uuid(),
            'poss_code' => '1',
            'poss_name' => 'Atasan',
            'is_active' => 'Y',
            'created_by' => 'Seeder',
            'updated_by' => 'Seeder',
        ]);
        MasterPosition::create([
            'coy_id' => '1',
            'id' => Str::uuid(),
            'poss_code' => '2',
            'poss_name' => 'Bawahan',
            'is_active' => 'Y',
            'created_by' => 'Seeder',
            'updated_by' => 'Seeder',
        ]);
        MasterPosition::create([
            'coy_id' => '1',
            'id' => Str::uuid(),
            'poss_code' => '3',
            'poss_name' => 'Tengahan',
            'is_active' => 'Y',
            'created_by' => 'Seeder',
            'updated_by' => 'Seeder',
        ]);
    }
}

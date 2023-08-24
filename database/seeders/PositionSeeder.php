<?php

namespace Database\Seeders;

use App\Models\Position;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PositionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Position::create([
            'coy_id' => '1',
            'id' => Str::uuid(),
            'poss_code' => '1',
            'poss_name' => 'Jakarta',
            'is_active' => 'Y',
            'created_by' => 'Seeder',
            'updated_by' => 'Seeder',
        ]);
    }
}

<?php

namespace Database\Seeders\Master;

use App\Models\Master\Utility as MasterUtility;
use Illuminate\Database\Seeder;

class UtiltySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MasterUtility::create([
            'coy_id' => 1,
            'seqn_code' => 'test',
            'branch_code' => 1,
            'start_value' => 1,
            'last_value' => 1,
            'max_value' => 100,
            'increment_by' => 1,
            'description' => 'test',
            'is_cycle' => 'M',
            'created_by' => 'Seeder',
            'updated_by' => 'Seeder',
        ]);
        MasterUtility::create([
            'coy_id' => 2,
            'seqn_code' => 'another',
            'branch_code' => 1,
            'start_value' => 1,
            'last_value' => 1,
            'max_value' => 100,
            'increment_by' => 1,
            'description' => 'another',
            'is_cycle' => 'Y',
            'created_by' => 'Seeder',
            'updated_by' => 'Seeder',
        ]);
    }
}

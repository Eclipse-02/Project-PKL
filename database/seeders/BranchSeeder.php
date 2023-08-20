<?php

namespace Database\Seeders;

use App\Models\Branch;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BranchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Branch::create([
            'coy_id' => '1',
            'id' => Str::uuid(),
            'branch_code' => '1',
            'branch_name' => 'Jakarta',
            'branch_addr' => 'Jakarta',
            'branch_tlp_area' => '021',
            'branch_tlp' => '35487',
            'branch_hp01' => '0234781320',
            'branch_hp02' => '0234781320',
            'prov_code' => '1',
            'kota_code' => '1',
            'kec_code' => '1',
            'kel_code' => '1',
            'zip_code' => '1',
            'branch_type' => 'HO',
            'area_code' => '1',
            'is_active' => 1,
            'created_by' => 'Seeder',
            'updated_by' => 'Seeder',
        ]);
    }
}

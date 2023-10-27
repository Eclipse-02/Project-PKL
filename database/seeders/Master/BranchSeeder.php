<?php

namespace Database\Seeders\Master;

use App\Models\Master\Branch as MasterBranch;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class BranchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MasterBranch::create([
            'coy_id' => '1',
            'id' => Str::uuid(),
            'branch_code' => '1',
            'branch_name' => 'Depok',
            'branch_addr' => 'Depok',
            'branch_tlp_area' => '021',
            'branch_tlp' => '35487',
            'branch_hp01' => '0234781320',
            'branch_hp02' => '0234781320',
            'prov_code' => '1',
            'kota_code' => '1',
            'kec_code' => '2',
            'kel_code' => '1',
            'zip_code' => '2',
            'branch_type' => 'B',
            'area_code' => '1',
            'is_active' => 'Y',
            'created_by' => 'Seeder',
            'updated_by' => 'Seeder',
        ]);
        MasterBranch::create([
            'coy_id' => '2',
            'id' => Str::uuid(),
            'branch_code' => '2',
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
            'branch_type' => 'H',
            'area_code' => '1',
            'is_active' => 'Y',
            'created_by' => 'Seeder',
            'updated_by' => 'Seeder',
        ]);
    }
}

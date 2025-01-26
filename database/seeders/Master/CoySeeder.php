<?php

namespace Database\Seeders\Master;

use App\Models\Master\Coy as MasterCoy;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class CoySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MasterCoy::create([
            'coy_id' => 1,
            'id' => Str::uuid(),
            'coy_name' => 'Great Comp .LTD',
            'coy_addr' => 'Jakarta',
            'empl_tlp_area' => '021',
            'empl_tlp' => '35487',
            'empl_hp01' => '0234781320',
            'empl_hp02' => '0234781320',
            'prov_code' => '11',
            'kota_code' => '1101',
            'kec_code' => '1101010',
            'kel_code' => '1101010001',
            'zip_code' => '23774',
            'created_by' => 'Seeder',
            'updated_by' => 'Seeder',
        ]);
        MasterCoy::create([
            'coy_id' => 2,
            'id' => Str::uuid(),
            'coy_name' => 'Vision Entrepise',
            'coy_addr' => 'Bandung',
            'empl_tlp_area' => '022',
            'empl_tlp' => '35487',
            'empl_hp01' => '0234781320',
            'empl_hp02' => '0234781320',
            'prov_code' => '11',
            'kota_code' => '1101',
            'kec_code' => '1101010',
            'kel_code' => '1101010001',
            'zip_code' => '23774',
            'created_by' => 'Seeder',
            'updated_by' => 'Seeder',
        ]);
    }
}

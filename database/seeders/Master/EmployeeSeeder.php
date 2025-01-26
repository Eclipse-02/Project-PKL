<?php

namespace Database\Seeders\Master;

use App\Models\Master\Employee as MasterEmployee;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MasterEmployee::create([
            'coy_id' => '1',
            'id' => Str::uuid(),
            'empl_id' => '1',
            'empl_branch' => '1',
            'empl_nik' => '1234567890123456',
            'empl_name' => 'Udin',
            'position_code' => '1',
            'empl_up_level' => '1',
            'empl_status' => 'PM',
            'empl_eff_date' => Carbon::now(),
            'empl_email' => 'udin@gmail.com',
            'empl_addr' => 'Jakarta',
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
        MasterEmployee::create([
            'coy_id' => '1',
            'id' => Str::uuid(),
            'empl_id' => '2',
            'empl_branch' => '1',
            'empl_nik' => '1234567890123456',
            'empl_name' => 'Agus',
            'position_code' => '1',
            'empl_up_level' => '1',
            'empl_status' => 'PM',
            'empl_eff_date' => Carbon::now(),
            'empl_email' => 'agus@gmail.com',
            'empl_addr' => 'Jakarta',
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
        MasterEmployee::create([
            'coy_id' => '1',
            'id' => Str::uuid(),
            'empl_id' => '3',
            'empl_branch' => '1',
            'empl_nik' => '1234567890123456',
            'empl_name' => 'Anton',
            'position_code' => '1',
            'empl_up_level' => '1',
            'empl_status' => 'PM',
            'empl_eff_date' => Carbon::now(),
            'empl_email' => 'anton@gmail.com',
            'empl_addr' => 'Jakarta',
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
    }
}

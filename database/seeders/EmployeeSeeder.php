<?php

namespace Database\Seeders;

use App\Models\Employee;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Employee::create([
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
            'prov_code' => '1',
            'kota_code' => '1',
            'kec_code' => '1',
            'kel_code' => '1',
            'zip_code' => '1',
            'created_by' => 'Seeder',
            'updated_by' => 'Seeder',
        ]);
    }
}

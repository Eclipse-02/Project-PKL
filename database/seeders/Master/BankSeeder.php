<?php

namespace Database\Seeders\Master;

use App\Models\Master\Bank as MasterBank;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class BankSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MasterBank::create([
            'coy_id' => 1,
            'id' => Str::uuid(),
            'bank_code' => 1,
            'bank_name' => 'BCA',
            'bank_branch' => 'Jakarta',
            'prov_code' => '1',
            'kota_code' => '1',
            'kec_code' => '1',
            'kel_code' => '1',
            'zip_code' => '1',
            'is_active' => 'Y',
            'created_by' => 'Seeder',
            'updated_by' => 'Seeder',
        ]);
        MasterBank::create([
            'coy_id' => 1,
            'id' => Str::uuid(),
            'bank_code' => 2,
            'bank_name' => 'Mandiri',
            'bank_branch' => 'Jakarta',
            'prov_code' => '1',
            'kota_code' => '1',
            'kec_code' => '1',
            'kel_code' => '1',
            'zip_code' => '1',
            'is_active' => 'Y',
            'created_by' => 'Seeder',
            'updated_by' => 'Seeder',
        ]);
        MasterBank::create([
            'coy_id' => 1,
            'id' => Str::uuid(),
            'bank_code' => 3,
            'bank_name' => 'Maybank',
            'bank_branch' => 'Jakarta',
            'prov_code' => '1',
            'kota_code' => '1',
            'kec_code' => '1',
            'kel_code' => '1',
            'zip_code' => '1',
            'is_active' => 'N',
            'created_by' => 'Seeder',
            'updated_by' => 'Seeder',
        ]);
    }
}

<?php

namespace Database\Seeders\Master;

use App\Models\Master\Zip as MasterZip;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class ZipSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MasterZip::create([
            'zip_code' => '1',
            'id' => Str::uuid(),
            'sub_zip_code' => '20657',
            'zip_desc' => 'Arongan',
            'prov_code' => '1',
            'kota_code' => '1',
            'kec_code' => '1',
            'kel_code' => '1',
            'is_active' => 'Y',
            'created_by' => 'Seeder',
            'updated_by' => 'Seeder',
        ]);
    }
}

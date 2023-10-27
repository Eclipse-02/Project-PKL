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
            'sub_zip_code' => '23652',
            'zip_desc' => 'Arongan Lambalek',
            'prov_code' => '1',
            'kota_code' => '1',
            'kec_code' => '1',
            'kel_code' => '1',
            'is_active' => 'Y',
            'created_by' => 'Seeder',
            'updated_by' => 'Seeder',
        ]);
        MasterZip::create([
            'zip_code' => '2',
            'id' => Str::uuid(),
            'sub_zip_code' => '23651',
            'zip_desc' => 'Bubon',
            'prov_code' => '1',
            'kota_code' => '1',
            'kec_code' => '2',
            'kel_code' => '1',
            'is_active' => 'Y',
            'created_by' => 'Seeder',
            'updated_by' => 'Seeder',
        ]);
        MasterZip::create([
            'zip_code' => '3',
            'id' => Str::uuid(),
            'sub_zip_code' => '23650',
            'zip_desc' => 'Samatiga',
            'prov_code' => '1',
            'kota_code' => '1',
            'kec_code' => '8',
            'kel_code' => '1',
            'is_active' => 'N',
            'created_by' => 'Seeder',
            'updated_by' => 'Seeder',
        ]);
    }
}

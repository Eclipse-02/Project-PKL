<?php

namespace Database\Seeders;

use App\Models\Supplier;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Supplier::factory()->create([
            'coy_id' => 1,
            'id' => Str::uuid(),
            'supl_code' => 1,
            'branch_code' => 1,
            'supl_status' => 'AP',
            'supl_name' => 'SUPL 1',
            'supl_type' => '1',
            'supl_sub_type' => '1',
            'supl_pic_name' => 'supl_pic_here',
            'poss_code' => '1',
            'supl_id_no' => '1234565434',
            'supl_addr' => 'Supllier ',
            'supl_tlp_area' => '021',
            'supl_tlp' => '35487',
            'supl_hp01' => '0234781320',
            'supl_hp02' => '0234781320',
            'prov_code' => '1',
            'kota_code' => '1',
            'kec_code' => '1',
            'kel_code' => '1',
            'zip_code' => '1',
            'supl_npwp_no' => '1',
            'supl_npwp_name' => 'name',
            'supl_npwp_addr' => 'jakarta',
            'supl_desc' => 'this is a description',
            'file_name_mou' => 'this is a image',
            'file_name_ktp' => 'this is a image',
            'file_name_npwp' => 'this is a image',
            'is_active' => 1,
            'created_by' => 'Seeder',
            'updated_by' => 'Seeder',
        ]);
    }
}

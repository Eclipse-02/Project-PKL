<?php

namespace Database\Seeders\Master;

use App\Models\Master\PackageDetail as MasterPackageDetail;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class PackageDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MasterPackageDetail::create([
            'coy_id' => 1,
            'id' => Str::uuid(),
            'pkg_code' => '122',
            'dtl_sq_no' => '1',
            'dtl_desc' => 'Test',
            'dtl_price' => '10000000',
            'pkg_status' => 'NW',
            "created_by" => 'Seeder',
            "updated_by" => 'Seeder',
        ]);
    }
}

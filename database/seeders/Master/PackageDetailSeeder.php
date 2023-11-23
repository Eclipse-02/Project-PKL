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
            "coy_id" => "1",
            "id" => Str::uuid(),
            "pkg_code" => "1",
            "dtl_sq_no" => 01,
            "dtl_desc" => "Test",
            "pkg_status" => "NA",
            "created_by" => "Seeder",
            "updated_by" => "Seeder",
        ]);
        MasterPackageDetail::create([
            "coy_id" => "1",
            "id" => Str::uuid(),
            "pkg_code" => "2",
            "dtl_sq_no" => 01,
            "dtl_desc" => "Test",
            "pkg_status" => "NA",
            "created_by" => "Seeder",
            "updated_by" => "Seeder",
        ]);
        MasterPackageDetail::create([
            "coy_id" => "1",
            "id" => Str::uuid(),
            "pkg_code" => "3",
            "dtl_sq_no" => 01,
            "dtl_desc" => "Test",
            "pkg_status" => "NA",
            "created_by" => "Seeder",
            "updated_by" => "Seeder",
        ]);
        MasterPackageDetail::create([
            "coy_id" => "1",
            "id" => Str::uuid(),
            "pkg_code" => "4",
            "dtl_sq_no" => 01,
            "dtl_desc" => "Test",
            "pkg_status" => "NA",
            "created_by" => "Seeder",
            "updated_by" => "Seeder",
        ]);
    }
}

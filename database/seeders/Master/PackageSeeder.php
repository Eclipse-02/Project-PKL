<?php

namespace Database\Seeders\Master;

use App\Models\Master\Package as MasterPackage;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class PackageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MasterPackage::create([
            "coy_id" => "1",
            "id" => Str::uuid(),
            "pkg_code" => "1",
            "pkg_type" => "U",
            "pkg_name" => "Test 1",
            "pkg_desc" => "Test",
            "pkg_price" => "20000000",
            // "pkg_price_limit" => "25000000",
            "pkg_start" => "2023-10-20",
            "pkg_closed" => "2023-11-20",
            "pkg_image" => "default.jpg",
            "pkg_status" => "NW",
            "pkg_is_display" => "Y",
            "created_by" => "Seeder",
            "updated_by" => "Seeder",
        ]);
        MasterPackage::create([
            "coy_id" => "1",
            "id" => Str::uuid(),
            "pkg_code" => "2",
            "pkg_type" => "U",
            "pkg_name" => "Test 2",
            "pkg_desc" => "Test",
            "pkg_price" => "20000000",
            // "pkg_price_limit" => "25000000",
            "pkg_start" => "2023-10-20",
            "pkg_closed" => "2023-11-20",
            "pkg_image" => "default.jpg",
            "pkg_status" => "NW",
            "pkg_is_display" => "Y",
            "created_by" => "Seeder",
            "updated_by" => "Seeder",
        ]);
        MasterPackage::create([
            "coy_id" => "1",
            "id" => Str::uuid(),
            "pkg_code" => "3",
            "pkg_type" => "E",
            "pkg_name" => "Test 3",
            "pkg_desc" => "Test",
            "pkg_price" => "20000000",
            // "pkg_price_limit" => "25000000",
            "pkg_start" => "2023-10-20",
            "pkg_closed" => "2023-11-20",
            "pkg_image" => "default.jpg",
            "pkg_status" => "NW",
            "pkg_is_display" => "Y",
            "created_by" => "Seeder",
            "updated_by" => "Seeder",
        ]);
        MasterPackage::create([
            "coy_id" => "1",
            "id" => Str::uuid(),
            "pkg_code" => "4",
            "pkg_type" => "E",
            "pkg_name" => "Test 4",
            "pkg_desc" => "Test",
            "pkg_price" => "20000000",
            // "pkg_price_limit" => "25000000",
            "pkg_start" => "2023-10-20",
            "pkg_closed" => "2023-11-20",
            "pkg_image" => "default.jpg",
            "pkg_status" => "NW",
            "pkg_is_display" => "Y",
            "created_by" => "Seeder",
            "updated_by" => "Seeder",
        ]);
    }
}

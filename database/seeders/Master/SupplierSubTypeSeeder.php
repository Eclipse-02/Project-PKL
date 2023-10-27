<?php

namespace Database\Seeders\Master;

use App\Models\Master\SupplierSubType as MasterSupplierSubType;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class SupplierSubTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MasterSupplierSubType::create([
            'id' => Str::uuid(),
            'sub_code' => 1,
            'sub_name' => 'Garuda',
            'is_active' => 'Y',
            'created_by' => 'Seeder',
            'updated_by' => 'Seeder',
        ]);
        MasterSupplierSubType::create([
            'id' => Str::uuid(),
            'sub_code' => 2,
            'sub_name' => 'Arab',
            'is_active' => 'N',
            'created_by' => 'Seeder',
            'updated_by' => 'Seeder',
        ]);
    }
}

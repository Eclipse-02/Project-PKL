<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use App\Models\SupplierSubType;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SupplierSubTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SupplierSubType::create([
            'id' => Str::uuid(),
            'sub_code' => 1,
            'sub_name' => 'Sub 1',
            'is_active' => 1,
            'created_by' => 'Seeder',
            'updated_by' => 'Seeder',
        ]);
    }
}

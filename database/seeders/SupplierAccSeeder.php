<?php

namespace Database\Seeders;

use App\Models\SupplierAcc;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SupplierAccSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SupplierAcc::factory()->create([
            'coy_id' => 1,
            'id' => Str::uuid(),
            'supl_code' => 1,
            'bank_code' => 1,
            'acc_no' => '1',
            'acc_name' => 'ACC 1',
            'acc_desc' => 'desc 1',
            'acc_curr' => 'IDR',
            'acc_status' => 'CL',
            'created_by' => 'Seeder',
            'updated_by' => 'Seeder',
        ]);
    }
}

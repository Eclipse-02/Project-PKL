<?php

namespace Database\Seeders\Master;

use App\Models\Master\SupplierAcc as MasterSupplierAcc;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class SupplierAccSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MasterSupplierAcc::create([
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

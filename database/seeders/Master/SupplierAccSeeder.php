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
            'acc_status' => 'NW',
            'created_by' => 'Seeder',
            'updated_by' => 'Seeder',
        ]);
        MasterSupplierAcc::create([
            'coy_id' => 1,
            'id' => Str::uuid(),
            'supl_code' => 2,
            'bank_code' => 2,
            'acc_no' => '2',
            'acc_name' => 'ACC 2',
            'acc_desc' => 'desc 2',
            'acc_curr' => 'USD',
            'acc_status' => 'NA',
            'created_by' => 'Seeder',
            'updated_by' => 'Seeder',
        ]);
    }
}

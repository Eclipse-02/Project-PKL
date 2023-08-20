<?php

namespace Database\Seeders;

use App\Models\Bank;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BankSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Bank::factory()->create([
            'coy_id' => 1,
            'id' => Str::uuid(),
            'bank_code' => 1,
            'bank_name' => 'Bank 1',
            'bank_branch' => 'Jakarta',
            'prov_code' => '1',
            'kota_code' => '1',
            'kec_code' => '1',
            'kel_code' => '1',
            'zip_code' => '1',
            'is_active' => 1,
            'created_by' => 'Seeder',
            'updated_by' => 'Seeder',
        ]);
    }
}

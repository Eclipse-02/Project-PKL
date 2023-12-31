<?php

namespace Database\Seeders\Master;

use App\Models\Master\Country as MasterCountry;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MasterCountry::create([
            'id' => Str::uuid(),
            'con_code' => 1,
            'con_name' => 'Indonesia',
            'is_active' => 'Y',
            'created_by' => 'Seeder',
            'updated_by' => 'Seeder',
        ]);
        MasterCountry::create([
            'id' => Str::uuid(),
            'con_code' => 2,
            'con_name' => 'Malaysia',
            'is_active' => 'Y',
            'created_by' => 'Seeder',
            'updated_by' => 'Seeder',
        ]);
        MasterCountry::create([
            'id' => Str::uuid(),
            'con_code' => 3,
            'con_name' => 'Singapore',
            'is_active' => 'N',
            'created_by' => 'Seeder',
            'updated_by' => 'Seeder',
        ]);
    }
}

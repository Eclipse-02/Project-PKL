<?php

namespace Database\Seeders;

use App\Models\Country;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Country::create([
            'id' => Str::uuid(),
            'con_code' => 1,
            'con_name' => 'Indonesia',
            'is_active' => 1,
            'created_by' => 'Seeder',
            'updated_by' => 'Seeder',
        ]);
    }
}

<?php

namespace Database\Seeders\Master;

use App\Models\Master\Parameter as MasterParameter;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class ParameterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MasterParameter::create([
            'coy_id' => 1,
            'id' => Str::uuid(),
            'key' => '123',
            'value' => 'random',
            'notes' => 'uhhhhhhhh',
            'created_by' => 'Seeder',
            'updated_by' => 'Seeder',
        ]);
    }
}

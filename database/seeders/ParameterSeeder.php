<?php

namespace Database\Seeders;

use App\Models\Parameter;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ParameterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Parameter::create([
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

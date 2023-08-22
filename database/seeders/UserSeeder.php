<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->create([
            'coy_id' => 1,
            'empl_id' => 1,
            'id' => Str::uuid(),
            'name' => 'Konsumen',
            'email' => 'konsumen@gmail.com',
            'password' => Hash::make('konsumen'),
            'created_by' => 'Seeder',
            'updated_by' => 'Seeder',
        ])->addRole('konsumen');

        User::factory()->create([
            'coy_id' => 1,
            'empl_id' => 2,
            'id' => Str::uuid(),
            'name' => 'Office',
            'email' => 'office@gmail.com',
            'password' => Hash::make('office'),
            'created_by' => 'Seeder',
            'updated_by' => 'Seeder',
        ])->addRole('office');

        User::factory()->create([
            'coy_id' => 1,
            'empl_id' => 3,
            'id' => Str::uuid(),
            'name' => 'Agen',
            'email' => 'agen@gmail.com',
            'password' => Hash::make('agen'),
            'created_by' => 'Seeder',
            'updated_by' => 'Seeder',
        ])->addRole('agen');
    }
}

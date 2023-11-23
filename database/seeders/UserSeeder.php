<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'coy_id' => 1,
            'empl_id' => 1,
            'empl_branch' => 1,
            'id' => Str::uuid(),
            'name' => 'Konsumen',
            'username' => 'konsumen',
            'password' => Hash::make('konsumen1'),
            'created_by' => 'Seeder',
            'updated_by' => 'Seeder',
        ])->addRole('konsumen');

        User::create([
            'coy_id' => 1,
            'empl_id' => 2,
            'empl_branch' => 1,
            'id' => Str::uuid(),
            'name' => 'Office',
            'username' => 'office',
            'password' => Hash::make('office1'),
            'created_by' => 'Seeder',
            'updated_by' => 'Seeder',
        ])->addRole('office');

        User::create([
            'coy_id' => 1,
            'empl_id' => 3,
            'empl_branch' => 1,
            'id' => Str::uuid(),
            'name' => 'Agen',
            'username' => 'agen',
            'password' => Hash::make('agen1'),
            'created_by' => 'Seeder',
            'updated_by' => 'Seeder',
        ])->addRole('agen');
    }
}

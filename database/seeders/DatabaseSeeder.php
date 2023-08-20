<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\UserUID;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(LaratrustSeeder::class);
        // $this->call(ProvinsiSeeder::class);
        // $this->call(KotaSeeder::class);
        // $this->call(KecamatanSeeder::class);
        // $this->call(KelurahanSeeder::class);

        User::factory()->create([
            'coy_id' => 1,
            'id' => Str::uuid(),
            'name' => 'Konsumen',
            'email' => 'konsumen@gmail.com',
            'password' => Hash::make('konsumen'),
            'created_by' => 'Seeder',
            'updated_by' => 'Seeder',
        ])->addRole('konsumen');

        User::factory()->create([
            'coy_id' => 1,
            'id' => Str::uuid(),
            'name' => 'Office',
            'email' => 'office@gmail.com',
            'password' => Hash::make('office'),
            'created_by' => 'Seeder',
            'updated_by' => 'Seeder',
        ])->addRole('office');

        User::factory()->create([
            'coy_id' => 1,
            'id' => Str::uuid(),
            'name' => 'Agen',
            'email' => 'agen@gmail.com',
            'password' => Hash::make('agen'),
            'created_by' => 'Seeder',
            'updated_by' => 'Seeder',
        ])->addRole('agen');
    }
}

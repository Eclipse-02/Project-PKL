<?php

namespace Database\Seeders;

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

        \App\Models\User::factory()->create([
            'name' => 'Konsumen',
            'email' => 'konsumen@gmail.com',
            'password' => Hash::make('konsumen'),
        ])->addRole('konsumen');

        \App\Models\User::factory()->create([
            'name' => 'Office',
            'email' => 'office@gmail.com',
            'password' => Hash::make('office'),
        ])->addRole('office');

        \App\Models\User::factory()->create([
            'name' => 'Agen',
            'email' => 'agen@gmail.com',
            'password' => Hash::make('agen'),
        ])->addRole('agen');
    }
}

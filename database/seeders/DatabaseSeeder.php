<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\UserUID;
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

        $user1 = User::factory()->create([
            'name' => 'Konsumen',
            'email' => 'konsumen@gmail.com',
            'password' => Hash::make('konsumen'),
        ])->addRole('konsumen');

        $user2 = User::factory()->create([
            'name' => 'Office',
            'email' => 'office@gmail.com',
            'password' => Hash::make('office'),
        ])->addRole('office');

        $user3 = User::factory()->create([
            'name' => 'Agen',
            'email' => 'agen@gmail.com',
            'password' => Hash::make('agen'),
        ])->addRole('agen');

        UserUID::create([
            'user_id' => $user1->coy_id
        ]);

        UserUID::create([
            'user_id' => $user2->coy_id
        ]);

        UserUID::create([
            'user_id' => $user3->coy_id
        ]);
    }
}

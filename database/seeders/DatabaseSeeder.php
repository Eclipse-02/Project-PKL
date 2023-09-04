<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(LaratrustSeeder::class);
        $this->call(ProvinsiSeeder::class);
        $this->call(KotaSeeder::class);
        $this->call(KecamatanSeeder::class);
        $this->call(KelurahanSeeder::class);
        $this->call(ZipSeeder::class);
        $this->call(CoySeeder::class);
        $this->call(BranchSeeder::class);
        $this->call(AreaSeeder::class);
        $this->call(PositionSeeder::class);
        $this->call(EmployeeSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(ParameterSeeder::class);
        $this->call(VaccineSeeder::class);
        $this->call(JobSeeder::class);
        $this->call(EduSeeder::class);
        $this->call(CountrySeeder::class);
        $this->call(RelationSeeder::class);
        $this->call(BankSeeder::class);
        $this->call(SupplierSubTypeSeeder::class);
        $this->call(SupplierSeeder::class);
        $this->call(SupplierAccSeeder::class);
        $this->call(UtiltySeeder::class);
    }
}

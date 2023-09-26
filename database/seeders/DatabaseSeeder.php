<?php

namespace Database\Seeders;

use Database\Seeders\Finance\AccountSeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Role
        $this->call(LaratrustSeeder::class);

        // Master
        $this->call([
            Master\ProvinsiSeeder::class,
            Master\KotaSeeder::class,
            Master\KecamatanSeeder::class,
            Master\KelurahanSeeder::class,
            Master\ZipSeeder::class,
            Master\CoySeeder::class,
            Master\BranchSeeder::class,
            Master\AreaSeeder::class,
            Master\PositionSeeder::class,
            Master\EmployeeSeeder::class,
            Master\ParameterSeeder::class,
            Master\VaccineSeeder::class,
            Master\JobSeeder::class,
            Master\EduSeeder::class,
            Master\CountrySeeder::class,
            Master\RelationSeeder::class,
            Master\BankSeeder::class,
            Master\SupplierSubTypeSeeder::class,
            Master\SupplierSeeder::class,
            Master\SupplierAccSeeder::class,
            Master\UtiltySeeder::class,
            Master\PackageSeeder::class,
            Master\RegisterPackageSeeder::class,
        ]);

        // User
        $this->call(UserSeeder::class);

        // Finance
        $this->call([
            AccountSeeder::class,
        ]);
    }
}

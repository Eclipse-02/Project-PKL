<?php

namespace Database\Seeders\Test;

use App\Models\Master\Kecamatan as MasterKecamatan;
use Illuminate\Database\Seeder;

class KecamatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Aceh
        $aceh_barat = [
            "",
            "Arongan Lambalek",
            "Bubon",
            "Johan Pahlawan",
            "Kaway XVI",
            "Meureubo",
            "Pantai Ceureumen",
            "Panton Reu",
            "Samatiga",
            "Sungai Mas",
            "Woyla",
            "Woyla Barat",
            "Woyla Timur",
        ];

        // Aceh
        for ($i=1; $i < count($aceh_barat); $i++) {
            MasterKecamatan::create([
                'kec_code' => $i,
                'kecamatan' => $aceh_barat[$i],
                'kota_code' => 1,
                'is_active' => 'Y',
                'created_by' => 'Seeder',
                'updated_by' => 'Seeder',
            ]);
        }
    }
}
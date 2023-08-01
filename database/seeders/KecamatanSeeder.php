<?php

namespace Database\Seeders;

use App\Models\Kecamatan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
            "Johan Pahlawan",
            "Samatiga",
            "Bubon",
            "Arongan Lambalek",
            "Woyla",
            "Woyla Barat",
            "Woyla Timur",
            "Kaway XVI",
            "Meureubo",
            "Pante Ceureumen",
            "Panton Reu",
            "Sungai Mas",
        ];

        $aceh_barat_daya = [
            "Johan Pahlawan",
            "Samatiga",
            "Bubon",
            "Arongan Lambalek",
            "Woyla",
            "Woyla Barat",
            "Woyla Timur",
            "Kaway XVI",
            "Meureubo",
            "Pante Ceureumen",
            "Panton Reu",
            "Sungai Mas",
        ];

        $aceh_barat_daya = [
            "Johan Pahlawan",
            "Samatiga",
            "Bubon",
            "Arongan Lambalek",
            "Woyla",
            "Woyla Barat",
            "Woyla Timur",
            "Kaway XVI",
            "Meureubo",
            "Pante Ceureumen",
            "Panton Reu",
            "Sungai Mas",
        ];

        // Aceh
        foreach ($aceh_barat as $a) {
            Kecamatan::create([
                'kecamatan' => $a,
                'kota_code' => 1,
                'created_by' => 'Seeder',
                'updated_by' => 'Seeder',
            ]);
        }
    }
}

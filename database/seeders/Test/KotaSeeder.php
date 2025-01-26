<?php

namespace Database\Seeders\Test;

use App\Models\Master\Kota as MasterKota;
use Illuminate\Database\Seeder;

class KotaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $aceh = [
            "",
            "Kab. Aceh Barat",
            "Kab. Aceh Barat Daya",
            "Kab. Aceh Besar",
            "Kab. Aceh Jaya",
            "Kab. Aceh Selatan",
            "Kab. Aceh Singkil",
            "Kab. Aceh Tamiang",
            "Kab. Aceh Tengah",
            "Kab. Aceh Tenggara",
            "Kab. Aceh Timur",
            "Kab. Aceh Utara",
            "Kab. Bener Meriah",
            "Kab. Bireuen",
            "Kab. Gayo Lues",
            "Kab. Nagan Raya",
            "Kab. Pidie",
            "Kab. Pidie Jaya",
            "Kab. Simeulue",
            "Kota Banda Aceh",
            "Kota Langsa",
            "Kota Lhokseumawe",
            "Kota Sabang",
            "Kota Subulussalam",
        ];

        // Aceh
        for ($i=1; $i < count($aceh); $i++) {
            MasterKota::create([
                'kota_code' => $i,
                'kota' => $aceh[$i],
                'prov_code' => 1,
                'is_active' => 'Y',
                'created_by' => 'Seeder',
                'updated_by' => 'Seeder',
            ]);
        }
    }
}
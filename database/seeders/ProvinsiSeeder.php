<?php

namespace Database\Seeders;

use App\Models\Provinsi;
use Illuminate\Database\Seeder;

class ProvinsiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            "",
            "Aceh",
            "Sumatera Utara",
            "Sumatera Selatan",
            "Sumatera Barat",
            "Bengkulu",
            "Riau",
            "Kepulauan Riau",
            "Jambi",
            "Lampung",
            "Bangka Belitung",
            "Kalimantan Barat",
            "Kalimantan Timur",
            "Kalimantan Selatan",
            "Kalimantan Tengah",
            "Kalimantan Utara",
            "Banten",
            "DKI Jakarta",
            "Jawa Barat",
            "Jawa Tengah",
            "Daerah Istimewa Yogyakarta",
            "Jawa Timur",
            "Bali",
            "Nusa Tenggara Timur",
            "Nusa Tenggara Barat",
            "Gorontalo",
            "Sulawesi Barat",
            "Sulawesi Tengah",
            "Sulawesi Utara",
            "Sulawesi Tenggara",
            "Sulawesi Selatan",
            "Maluku Utara",
            "Maluku",
            "Papua Barat",
            "Papua",
            "Papua Tengah",
            "Papua Pegunungan",
            "Papua Selatan",
            "Papua Barat Daya",
        ];

        for ($i=1; $i < count($data); $i++) {
            Provinsi::create([
                'prov_code' => $i,
                'provinsi' => $data[$i],
                'is_active' => 'Y',
                'created_by' => 'Seeder',
                'updated_by' => 'Seeder',
            ]);
        }
    }
}

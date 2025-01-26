<?php

namespace Database\Seeders\Master;

use App\Models\Master\Provinsi as MasterProvinsi;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProvinsiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $name = [
            "PROP NANGROE ACEH DARUSSALAM",
            "PROP SUMATERA UTARA",
            "PROP SUMATERA BARAT",
            "PROP RIAU",
            "PROP JAMBI",
            "PROP SUMATERA SELATAN",
            "PROP BENGKULU",
            "PROP LAMPUNG",
            "PROP BANGKA BELITUNG",
            "KEP RIAU",
            "PROP DKI JAKARTA",
            "PROP JAWA BARAT",
            "PROP JAWA TENGAH",
            "PROP YOGYAKARTA",
            "PROP JAWA TIMUR",
            "PROP BANTEN",
            "PROP BALI",
            "PROP NUSA TENGGARA BARAT",
            "PROP NUSA TENGGARA TIMUR",
            "PROP KALIMANTAN BARAT",
            "PROP KALIMANTAN TENGAH",
            "PROP KALIMANTAN SELATAN",
            "PROP KALIMANTAN TIMUR",
            "PROP SULAWESI UTARA",
            "PROP SULAWESI TENGAH",
            "PROP SULAWESI SELATAN",
            "PROP SULAWESI TENGGARA",
            "PROP GORONTALO",
            "SULAWESI BARAT",
            "PROP MALUKU",
            "PROP MALUKU UTARA",
            "PROP PAPUA BARAT",
            "PROP PAPUA",
        ];

        $code = [
            "11",
            "12",
            "13",
            "14",
            "15",
            "16",
            "17",
            "18",
            "19",
            "21",
            "31",
            "32",
            "33",
            "34",
            "35",
            "36",
            "51",
            "52",
            "53",
            "61",
            "62",
            "63",
            "64",
            "71",
            "72",
            "73",
            "74",
            "75",
            "76",
            "81",
            "82",
            "91",
            "92",
        ];

        DB::disableQueryLog();

        for ($i = 0; $i < count($name); $i++) {
            MasterProvinsi::create([
                'prov_code' => $code[$i],
                'provinsi' => $name[$i],
                'is_active' => 'Y',
                'created_by' => 'Seeder',
                'updated_by' => 'Seeder',
            ]);
        }
    }
}

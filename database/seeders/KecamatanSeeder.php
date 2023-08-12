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

        $aceh_barat_daya = [
            "Babah Rot",
            "Blangpidie",
            "Jeumpa",
            "Kuala Batee",
            "Lembah Sabil",
            "Manggeng",
            "Setia",
            "Susoh",
            "Tangan-Tangan",
        ];

        $aceh_besar = [
            "Baitussalam",
            "Blang Bintang",
            "Darul Imarah",
            "Darul Kamal",
            "Darussalam",
            "Indrapuri",
            "Ingin Jaya",
            "Kota Jantho",
            "Krueng Barona Jaya",
            "Kuta Baro",
            "Kuta Cot Glie",
            "Kuta Malaka",
            "Lembah Seulawah",
            "Leupung",
            "Lhoknga",
            "Lhoong",
            "Mesjid Raya",
            "Montasik",
            "Peukan Bada",
            "Pulo Aceh",
            "Seulimeum",
            "Simpang Tiga",
            "Sukamakmur",
        ];

        $aceh_jaya = [
            "Darul Hikmah",
            "Indra Jaya",
            "Jaya",
            "Krueng Sabee",
            "Panga",
            "Pasie Raya",
            "Sampoiniet",
            "Setia Bakti",
            "Teunom",
        ];

        $aceh_selatan = [
            "Bakongan",
            "Bakongan Timur",
            "Kluet Selatan",
            "Kluet Tengah",
            "Kluet Timur",
            "Kluet Utara",
            "Kota Bahagia",
            "Labuhan Haji",
            "Labuhan Haji Barat",
            "Labuhan Haji Timur",
            "Meukek",
            "Pasie Raja",
            "Samadua",
            "Sawang",
            "Tapak Tuan",
            "Trumon",
            "Trumon Tengah",
            "Trumon Timur",
        ];

        $aceh_singkil = [
            "Danau Paris",
            "Gunung Meriah",
            "Kota Baharu",
            "Kuala Baru",
            "Pulau Banyak",
            "Pulau Banyak Barat",
            "Simpang Kanan",
            "Singkil",
            "Singkil Utara",
            "Singkohor",
            "Suro Makmur",
        ];

        $aceh_tamiang = [
            "Banda Mulia",
            "Bandar Pusaka",
            "Bendahara",
            "Karang Baru",
            "Kejuruan Muda",
            "Kota Kualasimpang",
            "Manyak Payed",
            "Rantau",
            "Sekerak",
            "Seruway",
            "Tamiang Hulu",
            "Tenggulun",
        ];

        $aceh_tengah = [
            "Atu Lintang",
            "Bebesen",
            "Bies",
            "Bintang",
            "Celala",
            "Jagong Jeget",
            "Kebayakan",
            "Ketol",
            "Kute Panang",
            "Linge",
            "Lut Tawar",
            "Pegasing",
            "Rusip Antara",
            "Silih Nara",
        ];

        $aceh_tenggara = [
            "Babul Makmur",
            "Babul Rahmah",
            "Babussalam",
            "Badar",
            "Bambel",
            "Bukit Tusam",
            "Darul Hasanah",
            "Deleng Pokhkisen",
            "Ketambe",
            "Lawe Alas",
            "Lawe Bulan",
            "Lawe Sigala-Gala",
            "Lawe Sumur",
            "Leuser",
            "Semadam",
            "Tanah Alas",
        ];

        $aceh_timur = [
            "Banda Alam",
            "Birem Bayeun",
            "Darul Aman",
            "Darul Falah",
            "Darul Ihsan",
            "Idi RayeukIdi Timur",
            "Idi Tunong",
            "Indra Makmur",
            "Julok",
            "Madat",
            "Nurussalam",
            "Pante Bidari",
            "Peudawa",
            "Peunaron",
            "Peureulak",
            "Peureulak Barat",
            "Peureulak Timur",
            "Rantau Selamat",
            "Ranto Peureulak",
            "Serbajadi",
            "Simpang Jernih",
            "Simpang Ulim",
            "Sungai Raya",
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

        foreach ($aceh_barat_daya as $a) {
            Kecamatan::create([
                'kecamatan' => $a,
                'kota_code' => 2,
                'created_by' => 'Seeder',
                'updated_by' => 'Seeder',
            ]);
        }

        foreach ($aceh_besar as $a) {
            Kecamatan::create([
                'kecamatan' => $a,
                'kota_code' => 3,
                'created_by' => 'Seeder',
                'updated_by' => 'Seeder',
            ]);
        }

        foreach ($aceh_jaya as $a) {
            Kecamatan::create([
                'kecamatan' => $a,
                'kota_code' => 4,
                'created_by' => 'Seeder',
                'updated_by' => 'Seeder',
            ]);
        }

        foreach ($aceh_selatan as $a) {
            Kecamatan::create([
                'kecamatan' => $a,
                'kota_code' => 5,
                'created_by' => 'Seeder',
                'updated_by' => 'Seeder',
            ]);
        }

        foreach ($aceh_singkil as $a) {
            Kecamatan::create([
                'kecamatan' => $a,
                'kota_code' => 6,
                'created_by' => 'Seeder',
                'updated_by' => 'Seeder',
            ]);
        }

        foreach ($aceh_tamiang as $a) {
            Kecamatan::create([
                'kecamatan' => $a,
                'kota_code' => 7,
                'created_by' => 'Seeder',
                'updated_by' => 'Seeder',
            ]);
        }

        foreach ($aceh_tengah as $a) {
            Kecamatan::create([
                'kecamatan' => $a,
                'kota_code' => 8,
                'created_by' => 'Seeder',
                'updated_by' => 'Seeder',
            ]);
        }

        foreach ($aceh_tenggara as $a) {
            Kecamatan::create([
                'kecamatan' => $a,
                'kota_code' => 9,
                'created_by' => 'Seeder',
                'updated_by' => 'Seeder',
            ]);

        foreach ($aceh_timur as $a) {
            Kecamatan::create([
                'kecamatan' => $a,
                'kota_code' => 10,
                'created_by' => 'Seeder',
                'updated_by' => 'Seeder',
            ]);
        }
    }
}
}
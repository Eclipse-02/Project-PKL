<?php

namespace Database\Seeders\Test;

use App\Models\Master\Kelurahan as MasterKelurahan;
use Illuminate\Database\Seeder;

class KelurahanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Aceh
        $aceh_barat_arongan_malabek = [
            "",
            "Arongan",
            "Cot Buloh",
            "Cot Kumbang",
            "Drien Rampak",
            "Keub",
            "Kubu",
            "Pante Mutia",
            "Peuribu",
            "Seuneubok Lhong",
            "Suak Bidok",
            "Suak Ie Beuso",
            "Suak Keumudai",
            "Teupin Peuraho",
            "Ujong Beusa",
            "Alue Bagok",
            "Alue Batee",
            "Alue Sundak",
            "Cot Juru Mudi",
            "Gunong Pulo",
            "Karang Hampa",
            "Panton Bahagia",
            "Panton Makmur",
            "Peulanteu",
            "Rimba Langgeh",
            "Seuneubok Teungoh",
            "Simpang Peut",
            "Ujong Simpang",
        ];

        // Aceh
        for ($i=1; $i < count($aceh_barat_arongan_malabek); $i++) {
            MasterKelurahan::create([
                'kel_code' => $i,
                'kelurahan' => $aceh_barat_arongan_malabek[$i],
                'kec_code' => 1,
                'is_active' => 'Y',
                'created_by' => 'Seeder',
                'updated_by' => 'Seeder',
            ]);
        }
    }
}
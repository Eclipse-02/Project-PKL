<?php

namespace Database\Seeders;

use App\Models\Kelurahan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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

        $aceh_barat_bubon = [
            "Alue Bakong",
            "Alue Lhok",
            "Beurawang",
            "Blang Sibeutong",
            "Cot Keumuneng",
            "Cot Lada",
            "Gunong Panah",
            "Kuala Pling",
            "Kuta Padang",
            "Layung",
            "Liceh",
            "Peulanteu",
            "Rambong",
            "Seumuleng",
            "Seuneubok Trap",
            "Suak Pangkat",
            "Ulee Blang",
        ];

        $aceh_barat_johan_pahlawan = [
            "Blang Beurandang",
            "Drien Rampak",
            "Gampa",
            "Kampung Belakang",
            "Kampung Darat",
            "Kampung Pasir",
            "Kuta Padang",
            "Lapang",
            "Leuhan",
            "Padang Seurahet",
            "Panggong",
            "Pasar Aceh",
            "Rundeng",
            "Seuneubok",
            "Suak Nie",
            "Suak Raya",
            "Suak Ribee",
            "Suak Sigadeng",
            "Suak Indrapuri",
            "Ujong Baroh",
            "Ujung Kalak",
        ];

        $aceh_barat_kaway_xvi = [
            "Alue Lhok",
            "Padang Sikabu",
            "Sawang Teubei",
            "Alue On",
            "Blang Geunang",
            "Batu Jaya",
            "Meunasah Gantung",
            "Meunasah Rambot",
            "Muko",
            "Palimbungan",
            "Pasi Jeumpa",
            "Putim",
            "Puuk",
            "Tanjong Bungong",
            "Alue Tampak",
            "Beureugang",
            "Kampung Mesjid",
            "Keude Aron",
            "Marek",
            "Meunasah Ara",
            "Meunasah Buloh",
            "Meunasah Rayeuk",
            "Padang Mancang",
            "Pasi Jambu",
            "Pasi Teungoh",
            "Peunia",
            "Simpang",
            "Tumpok Ladang",
            "Alue Lhee",
            "Alue Peudeung",
            "Babah Meulaboh",
            "Blang Dalam",
            "Drien Caleu",
            "Keude Tanjong",
            "Keuramat",
            "Meunuang Tanjong",
            "Pasi Ara",
            "Pasi Kumbang",
            "Pasi Meugat",
            "Pucok Pungkie",
            "Pungkie",
            "Tanjong Meulaboh",
            "Teladan",
            "Teupin Panah",
        ];

        $aceh_barat_meureubo = [
            "Bukit Jaya",
            "Balee",
            "Gunong Kleng",
            "Langung",
            "Meureubo",
            "Paya Peunaga",
            "Peunaga Cut Ujong",
            "Peunaga Pasi",
            "Peunaga Rayeuk",
            "Pucok Reudeup",
            "Reudeup",
            "Sumber Batu",
            "Ujong Drien",
            "Ujong Tanjung",
            "Mesjid Tuha",
            "Buloh",
            "Pasi Aceh Baroh",
            "Pasi Aceh Tunong",
            "Pasi Mesjid",
            "Pasi Pinang",
            "Paya Baro Ranto Panyang",
            "Pulo Teungoh Ranto Panyang",
            "Ranto Panyang Barat",
            "Ranto Panyang Timur",
            "Ranub Dong",
            "Ujong Tanoh Darat",
        ];

        $aceh_barat_pantai_ceureumen = [
            "Babah Krueng Tep Lep",
            "Berdikari",
            "Gunong Tarok",
            "Keude Suak Awe",
            "Krueng Beukah",
            "Lhok Guci",
            "Lhok Sari",
            "Sawang Rambot",
            "Suak Awe",
            "Tegal Sari",
            "Canggei",
            "Lango",
            "Lawet",
            "Sikundo",
            "Jambak",
            "Keutambang",
            "Manjeng",
            "Pante Ceureumen",
            "Pulo Teungoh Manyang",
            "Alue Keumang",
            "Babah Iseung",
            "Babah Lueng",
            "Meunuang Kinco",
            "Seumantok",
            "Seumara",
        ];

        $aceh_barat_panon_reu = [
            "Antong",
            "Babah Krueng Manggie",
            "Baro Paya",
            "Blang Balee",
            "Blang Teungoh",
            "Cot Manggie",
            "Gampong Baro",
            "Gunung Mata Ie",
            "Kuala Manye",
            "Lek Lek",
            "Manggie",
            "Meutulang",
            "Mugo Cut",
            "Mugo Rayeuk",
            "Paya Baro Meuko",
            "Sibintang",
            "Tamping",
            "Tuwi Buya",
            "Ujong Raja",
        ];

        $aceh_barat_samatiga = [
            "Krueng Tinggai",
            "Leubok",
            "Deuah",
            "Pange",
            "Gampong Cot",
            "Lhok Bubon",
            "Suak Geudubang",
            "Suak Pandan",
            "Suak Pante Breuh",
            "Suak Seuke",
            "Suak Seumaseh",
            "Cot Amun",
            "Leukeun",
            "Mesjid Baro",
            "Keureuseng",
            "Cot Darat",
            "Cot Pluh",
            "Cot Seumeureng",
            "Cot Mesjid",
            "Paya Lumpat",
            "Suak Timah",
            "Cot Lampise",
            "Gampong Ladang",
            "Pinem",
            "Rangkileh",
            "Reusak",
            "Ujong Nga",
            "Alue Raya",
            "Cot Seulamat",
            "Gampong Teungoh",
            "Kuala Bubon",
            "Pucok Lueng",
        ];

        $aceh_barat_sungai_mas = [
            "Gaseu",
            "Gleung",
            "Gunong Buloh",
            "Leubok Beutong",
            "Lueng Baro",
            "Pungkie",
            "Ramitie",
            "Sipot",
            "Tanoh Mirah",
            "Drien Sibak",
            "Geudong",
            "Kajeung",
            "Lancong",
            "Sakuy",
            "Sarah Perlak",
            "Tungkop",
            "Tutut",
            "Tuwi Saya",
        ];

        $aceh_barat_woyla = [
            "Cot Lagan Bubon/CM",
            "Cot Murong",
            "Glee Siblah",
            "Suak Tring",
            "Alue Panyang",
            "Alue Sundak",
            "Bakat",
            "Cot Keumudee",
            "Cot Situah",
            "Jawa",
            "Jawi",
            "Keuleumbah",
            "Panton",
            "Pasi Birah",
            "Pulo Ie",
            "Seumantok",
            "Teumarom",
            "Alue Blang",
            "Alue Sikaya",
            "Aron Baroh",
            "Aron Tunong",
            "Blang Mee",
            "Darul Huda",
            "Drin Mangko",
            "Gempa Raya",
            "Gunong Rambong",
            "Gunung Hampa",
            "Ie Itam Baroh",
            "Ie Itam Tunong",
            "Kuala Bhee",
            "Lueng Buloh",
            "Lueng Tanoh Tho",
            "Lueng Teungku Yah",
            "Lung Jawa",
            "Padang Jawa",
            "Pasi Aceh",
            "Pasi Ara Kuala Batee",
            "Pasi Lunak",
            "Pasi Pandan",
            "Paya Dua",
            "Paya Luah",
            "Ranto Panyang",
            "Tingkeum Panyang",
        ];

        $aceh_barat_woyla_barat = [
            "Alue Keumuneng",
            "Ie Sayang",
            "Karak",
            "Mon Pasong",
            "Pasi Jeut",
            "Pasi Mali",
            "Pasi Panah",
            "Simpang Teumarom",
            "Ulee Pulo",
            "Alue Leuhob",
            "Alue Perman",
            "Blang Cot Mameh",
            "Blang Cot Rubek",
            "Blang Luah LM",
            "Cot Lagan LM",
            "Cot Rambong",
            "Kulam Kaju",
            "Lhok Malee",
            "Lubuk Pasi Ara",
            "Lueng Baro",
            "Napai",
            "Pasi Malee",
            "Peuleukeung",
            "Ulee Pasi Ara",
        ];

        $aceh_barat_woyla_timur = [
            "Alue Kuyun",
            "Alue Meuganda",
            "Alue Seuralen",
            "Blang Dalam",
            "Blang Luah",
            "Blang Makmur",
            "Bukit Meugajah",
            "Gampong Baro Woyla Timur",
            "Gunong Payang",
            "Rambong Pinto",
            "Seuneubok Dalam",
            "Teumiket Ranom",
            "Tuwi Empek",
            "Alue Bilie",
            "Alue Empeuk",
            "Cot Punti",
            "Gampong Baro KB",
            "Gayo Meugenderan",
            "Keubeu Capang",
            "Lubuk Panyang",
            "Pasi Ara WT",
            "Pasi Janeng",
            "Paya Baro",
            "Rambong",
            "Seuradeuk",
            "Tangkeh",
        ];

        $aceh_barat_daya_babah_rot = [
            "Alue Dawah",
            "Alue Jeureujak (Jerjak)",
            "Alue Peunawa",
            "Blang Dalam",
            "Cot Seumantok",
            "Gunung Samarinda",
            "Ie Mirah",
            "Lhok Gayo",
            "Pante Cermin",
            "Pantee Rakyat",
            "Rukoen Damee",
            "Simpang Gadeng",
            "Teladan Jaya",
        ];

        $aceh_barat_daya_blangpidie = [
            "Gampong Alue Manggota",
            "Gampong Baharu",
            "Gampong Gudang",
            "Gampong Keude Paya",
            "Gampong Lam Kuta",
            "Gampong Cot Jeurat",
            "Gampong Guhang",
            "Gampong Lhung Asan",
            "Gampong Lhung Tarok",
            "Gampong Seunaloh",
            "Gampong Keude Siblah",
            "Gampong Kuta Bahagia",
            "Gampong Kuta Tuha",
            "Gampong Meudang Ara",
            "Gampong Pasar Blang Pidie",
            "Gampong Geulumpang Payong",
            "Gampong Kuta Tinggi",
            "Gampong Mata Ie",
            "Gampong Babah Lhueng",
            "Gampong Panton Raya",
        ];

        $aceh_barat_daya_jeumpa = [
            "Alue Rambot",
            "Alue Seulaseh",
            "Alue Sungai Pinang",
            "Asoe Nanggroe",
            "Baru",
            "Cot Mane",
            "Iku Lhung",
            "Jeumpa Barat",
            "Kuta Jeumpa",
            "Kuta Makmur",
            "Ladang Neubok",
            "Padang Geulumpang",
        ];

        $aceh_barat_daya_kuala_batee = [
            "Alue Padee",
            "Alue Pisang",
            "Blang Makmur",
            "Blang Panyang",
            "Drien Beurumbang",
            "Gelanggang Gajah",
            "Ie Mameh",
            "Kampung Tengah",
            "Keudee Baro",
            "Krueng Batee",
            "Krueng Panto",
            "Kuala Terubu",
            "Kuta Bahagia",
            "Lama Tuha",
            "Lhok Gajah",
            "Lhung Geulumpang",
            "Muka Blang",
            "Padang Sikabu",
            "Panto Cut",
            "Pasar Kuta Bahagia",
            "Rumoh Panyang",
        ];

        $aceh_barat_daya_lembah_sabil = [
            "Cot Bak-U",
            "Geulanggang Batee",
            "Kuta Paya",
            "Meunasah Sukon",
            "Meunasah Tengah",
            "Meurandeh",
            "Padang Keulele",
            "Suka Damai",
            "Ujung Tanah",
            "Alue Rambot",
            "Kayee Aceh",
            "Tokoh II",
            "Ladang Tuha I",
            "Ladang Tuha II",
        ];

        $aceh_barat_daya_manggeng = [
            "Desa Kedai",
            "Desa Ladang Panah",
            "Desa Lhok Puntol",
            "Desa Padang",
            "Desa Paya",
            "Desa Seuneulop",
            "Desa Teungoh",
            "Desa Blang Manggeng",
            "Desa Lhueng Baro",
            "Desa Pante Raja",
            "Desa Pusu Ingin Jaya",
            "Desa Tokoh",
            "Desa Ujung Padang",
            "Desa Pante Cermin",
            "Desa Lhok Pawoh",
            "Desa Pante Pirak",
            "Desa Panton Makmur",
            "Desa Sejahtera",
        ];

        $aceh_barat_daya_setia = [
            "Lhang",
            "Rambong",
            "Pisang",
            "Ujung Tanah",
            "Alue Dama",
            "Tangan-Tangan Cut",
            "Mon Mameh",
            "Cinta Makmur",
            "Kuta Murni",
        ];

        $aceh_barat_daya_susoh = [
            "Desa Barat",
            "Desa Durian Jangek",
            "Desa Durian Rampak",
            "Desa Palak Hilir",
            "Desa Palak Hulu",
            "Desa Pantai Perak",
            "Desa Rumah Dua Lapis",
            "Desa Kedai Palak Kerambil",
            "Desa Kedai Susoh",
            "Desa Ladang",
            "Desa Panjang Baru",
            "Desa Padang Baru",
            "Desa Pawoh",
            "Desa Pinang",
            "Desa Baharu",
            "Desa Pulau Kayu",
            "Desa Rumah Panjang",
            "Desa Ujung Padang",
            "Desa Geulima Jaya",
            "Desa Gadang",
            "Desa Kepala Bandar",
            "Desa Padang Hilir",
            "Desa Tangah",
            "Desa Cot Mancang",
            "Desa Lampoh Drien",
            "Desa Meunasah",
            "Desa Padang Panjang",
            "Desa Rubek Meupayong",
            "Desa Blang Dalam",
        ];

        $aceh_barat_daya_tangan_tangan = [
            "Desa Bineh Krueng",
            "Desa Drien Jalo",
            "Desa Drien Kipah",
            "Desa Padang Bakjok",
            "Desa Suak Nibong",
            "Desa Alue Dama",
            "Desa Ie Lhop",
            "Desa Lhang",
            "Desa Pisang",
            "Desa Rambong",
            "Desa Tangan-Tangan Cut",
            "Desa Ujung Tanah",
            "Desa Adan",
            "Desa Blang Padang",
            "Desa Gunung Cut",
            "Desa Kuta Bak Drien",
            "Desa Mesjid",
            "Desa Padang Bak Jeumpa",
            "Desa Padang Kawa",
            "Desa Pante Geulumpang",
            "Desa Suak Labu",
        ];

        $aceh_besar_baitussalam = [
            "Baet",
            "Blang Krueng",
            "Cadek",
            "Cot Paya",
            "Kajhu",
            "Klieng Cot Aron",
            "Klieng Meuria",
            "Labui",
            "Lam Asan",
            "Lam Ujong",
            "Lambada Lhok",
            "Lampineung",
            "Miruk Lam Reudeup",
        ];

        $aceh_besar_blang_bintang = [
            "Bueng Pageu",
            "Bueng Sidom",
            "Cot Bagie",
            "Cot Geundreut",
            "Cot Hoho",
            "Cot Jambo",
            "Cot Karieng",
            "Cot Leu'ot",
            "Cot Madi",
            "Cot Malem",
            "Cot Mancang",
            "Cot Meulangen",
            "Cot Mon Raya",
            "Cot Nambak",
            "Cot Puklat",
            "Cot Rumpun",
            "Cot Sayun",
            "Data Makmur",
            "Eumpee Bata",
            "Gampong Blang",
            "Kayee Kunyet",
            "Lam Siem",
            "Lam Me",
            "Meulayo",
            "Paya Ue",
            "Teupin Batee",
        ];

        $aceh_besar_darul_imarah = [
            "Bayu",
            "Daroy Kameu",
            "Denong",
            "Garot Geuceu",
            "Geu Gajah",
            "Geundring",
            "Jeumpet Ajuen",
            "Kandang",
            "Kuta Karang",
            "Lagang",
            "Lam Bheu",
            "Lam Blang Manyang",
            "Lam Blang Trieng",
            "Lam Cot",
            "Lam Kawee",
            "Lampasi Engking",
            "Lampeuneun",
            "Lampeuneurut Gampong",
            "Lampeuneurut Ujong Blang",
            "Lamreung",
            "Lamsidaya",
            "Lamsiteh",
            "Lamtheun",
            "Leu Ue",
            "Leugeu",
            "Lheu Blang",
            "Pashie Beutong",
            "Payaroh",
            "Punie",
            "Tingkeum",
            "Ulee Lueng",
            "Ulee Tui",
        ];

        $aceh_besar_darul_kamal = [
            "Biluy",
            "Blang Kiree",
            "Empee Trieng",
            "Lam Baro Biluy",
            "Lam Batee",
            "Lam Bleut",
            "Lam Kunyet",
            "Lam Sot",
            "Lam Tadok",
            "Lhang",
            "Mane Dayah",
            "Neusok",
            "Teubaluy",
            "Turam",
        ];

        $aceh_besar_darussalam = [
            "Angan",
            "Barabung",
            "Gampong Blang",
            "Gampong Cot",
            "Krueng Kale",
            "Lam Asan Klieng",
            "Lam Gawe",
            "Lam Klat",
            "Lam Peudaya",
            "Lam Reh",
            "Lam Ujong Klieng",
            "Lambada Peukan",
            "Lambaro Sukon",
            "Lambiheu",
            "Lambiheu Siem",
            "Lambitra",
            "Lamduroy",
            "Lamkeunung",
            "Lampuja",
            "Lampuuk",
            "Lamtimpeung",
            "Li Eue",
            "Limpok",
            "Miruk Taman",
            "Siem",
            "Suleue",
            "Tanjung Deah",
            "Tanjung Selamat",
            "Tungkop",
            "Lam Asan Siem",
        ];

        $aceh_besar_indrapuri = [
            "Aneuk Glee",
            "Cot Kareung",
            "Cureh",
            "Empee Ara",
            "Groet Baro",
            "Groet Manyang",
            "Grot Blang",
            "Indrapuri",
            "Jruek Bak Kreh",
            "Jruk Balee",
            "Krueng Lamkreung",
            "Lam Ili Ganto",
            "Lam Ili Mesjid",
            "Lam Ili Teungoh",
            "Lam Leubok",
            "Lambeutong",
            "Lambunot",
            "Lamlueng",
            "Lampanah Baro",
            "Lampanah Dayah",
            "Lampanah Ranjo",
            "Lampanah Teungoh",
            "Lampanah Tunong",
            "Lampupok Baro",
            "Lampupok Raya",
            "Lamsiot",
            "LheuLimo Blang",
            "Limo Lamleuweung",
            "Limo Mesjid",
            "Lingom",
            "Manggra",
            "Meunara",
            "Meusale Lhok",
            "Mon Aleu",
            "Mureu Baro",
            "Mureu Bueng Ue",
            "Mureu Lamglumpang",
            "Mureu Ulee Titi",
            "Pasar Indrapuri",
            "Reukih Dayah",
            "Reukih Keupula",
            "Riting",
            "Seulangai",
            "Seuot Baroh",
            "Seuot Tunong",
            "Seureumo",
            "Sihom Cot",
            "Sihom Lhok",
            "Sinyeu",
            "Ulee Kareung",
            "Ulee Ue",
        ];

        $aceh_besar_ingin_jaya = [
            "Bineh Blang",
            "Jurong Peujeura",
            "Lambaro Kaphee",
            "Lubok Batee",
            "Meunasah Krueng",
            "Meunasah Manyang",
            "PanteeTanjong",
            "Ajee Cut",
            "Ajee Rayeuk",
            "Ateuk Anggok",
            "Ateuk Lung Ie",
            "Bada",
            "Bakoy",
            "Bueng Sidom",
            "Bung Ceukok",
            "Cot Alue",
            "Cot Bada",
            "Cot Got",
            "Cot Karieng",
            "Cot Madhi",
            "Cot Malem",
            "Cot Mentiwan",
            "Cot Suruy",
            "Dham Ceukok",
            "Dham Ceukuk",
            "Dham Pulo",
            "Dham Pulo",
            "Gampong Blang",
            "Gani",
            "Kayee Lee",
            "Lam Cot",
            "Lam Ue",
            "Lambada",
            "Lamdaya",
            "Lampreh Lamjampok",
            "Lampreh Lamteungoh",
            "Lamsinyeu",
            "Lamteungoh",
            "Lubok Gapuy",
            "Lubok Sukon",
            "Manyang",
            "Meunasah Ajee",
            "Meunasah Baro",
            "Meunasah Dayah",
            "Meunasah Kalut",
            "Meunasah Manyet",
            "Meunasah Tutong",
            "Mukim Lubok",
            "Paleuh Blang",
            "Paleuh Pulo",
            "Pasi",
            "Pasie Lubok",
            "Reuloh",
            "Santan",
            "Siron",
            "Teubang Phui",
            "Ujong XII",
        ];

        $aceh_besar_kuta_cot_glie = [
            "Bak Sukon",
            "Bandasafa",
            "Barih Lhok",
            "Bithak",
            "Bung Simek",
            "Cot Bayu",
            "Glee Jai",
            "Ie Alang Dayah",
            "Ie Alang Lam Ghuy",
            "Ie Alang Lam Keureumeh",
            "Ie Alang Meuseujid",
            "Keumireu",
            "Keureuweung Blang",
            "Keureuweung Krueng",
            "Lam Alieng",
            "Lam Beugak",
            "Lam Keupung",
            "Lam Leu'ot",
            "Lam Tui",
            "Lamkleeng",
            "Lampakuk",
            "Lampoh Raja",
            "Lamsie",
            "Leupung Balue",
            "Leupung Bruek",
            "Maheng",
            "Pakuk",
            "Peukan Lampakuk",
            "Sigapang",
            "Siron Blang",
            "Siron Krueng",
            "Tutue",
        ];

        $aceh_besar_kota_jantho = [
            "Barueh",
            "Janthoe Makmu",
            "Buket Meusara",
            "Awek",
            "Bueng",
            "Cucum",
            "Data Cut",
            "Jalin",
            "Janthoe Baro",
            "Janthoe",
            "Suka Tani",
            "Teureubeh",
            "Weue",
        ];

        $aceh_besar_kuta_malaka = [
            "Bunghu",
            "Lam Ara Cut",
            "Lam Ara Engkit",
            "Lam Ara Tunong",
            "Lambaro Samahani",
            "Lamsiteh Cot",
            "Leubok Batee",
            "Leubok Buni",
            "Leupung Cut",
            "Leupung Rayeuk",
            "Leupung Riwat",
            "Reuleung Glumpang",
            "Reuleung Karieng",
            "Teudayah",
            "Tumbo Baro",
        ];

        $aceh_besar_krueng_barona_jaya = [
            "Lam Ujong Meunasah Manyang",
            "Leung Ie",
            "Meunasah Baet",
            "Meunasah Baktrieng",
            "Meunasah Intan",
            "Meunasah Papeun",
            "Gla Dayah",
            "Gla Meunasah Baro",
            "Lam Gapang",
            "Lampeureume",
            "Miruek",
            "Rumpet",
        ];

        $aceh_besar_kuta_baro = [
            "Aron",
            "Babah Jurong",
            "Bak Buloh",
            "Beurangong",
            "Bueng Bakjok",
            "Cot Beut",
            "Cot Cut",
            "Cot Geundreut",
            "Cot Lamee",
            "Cot Lammee",
            "Cot Mancang",
            "Cot Masam",
            "Cot Mon Raya",
            "Cot Peutano",
            "Cot Preh",
            "Cot Puklat",
            "Cot Raya",
            "Cot Yang",
            "Cucum",
            "Deyah",
            "Gue",
            "Krueng Anaoi",
            "Lam Alue Cut",
            "Lam Alue Raya",
            "Lam Asan",
            "Lam Glumpang",
            "Lam Neuheun",
            "Lam Raya",
            "Lam Roh",
            "Lam Sabang",
            "Lam Siem",
            "Lam Trieng",
            "Lambaet",
            "Lambro Bileu",
            "Lambro Dayah",
            "Lambunot Paya",
            "Lambunot Tanoh",
            "Lampoh Kuede",
            "Lampoh Tarom",
            "Lampuuk",
            "Lamseunong",
            "Lamteube Geupula",
            "Lamteube Mon Ara",
            "Leupung Mesjid",
            "Meulayo",
            "Meunasah Bak Trieng",
            "Paya Ue",
            "Puuk",
            "Rabeu",
            "Seupeu",
            "Tumpok Lampoh",
            "Ujong Blang",
        ];

        $aceh_besar_lembah_seulawah = [
            "Lambaro Tunong",
            "Lamkubu",
            "Lamtamot",
            "Lon Asan",
            "Lon Baroh",
            "Panca",
            "Panca Kubu",
            "Paya Keureleh",
            "Saree Aceh",
            "Sukadamai",
            "Sukamulia",
            "Teuladan",
        ];

        $aceh_besar_leupung = [
            "Deah Mamplam",
            "Lamseunia",
            "Layeun",
            "Mesjid Leupung",
            "Meunasah Bak Ue",
            "Pulot",
        ];

        $aceh_besar_lhoknga = [
            "Aneuk Paya",
            "Kueh",
            "Lam Ateuk",
            "Lambaro Kueh",
            "Lambaro Seubun",
            "Lamcok",
            "Lamgaboh",
            "Lamkrut",
            "Lampaya",
            "Meunasah Baro",
            "Meunasah Belee",
            "Meunasah Beutong",
            "Meunasah Blang",
            "Meunasah Cut",
            "Meunasah Karieng",
            "Meunasah Lam Baro",
            "Meunasah Lam Girek",
            "Meunasah Manyang",
            "Meunasah Mesjid Lamlhom",
            "Meunasah Mesjid Lampuuk",
            "Meunasah Moncut",
            "Mon Ikeun",
            "Naga Umbang",
            "Nusa",
            "Seubun Ayon",
            "Seubun Keutapang",
            "Tanjong",
            "Weu Raya",
        ];

        $aceh_besar_lhoong = [
            "Baroh Blangmee",
            "Baroh Geunteut",
            "Baroh Kruengkala",
            "Biriek",
            "Cundien",
            "Gapui",
            "Glee Bruek",
            "Jantang",
            "Kareung",
            "Keutapang",
            "Lamgeuriheu",
            "Lamjuhang",
            "Lamkuta Blangmee",
            "Lamsujen",
            "Meunasah Cot",
            "Meunasah Krueng Kala",
            "Meunasah Lhok",
            "Monmata",
            "Paroi",
            "Pasi",
            "Pudeng",
            "Saney",
            "Seungko Mulat",
            "Teungoh Blangmee",
            "Teungoh Geunteut",
            "Tunong Kruengkala",
            "Umong Seuribee",
            "Utamong",
        ];

        $aceh_besar_mesjid_raya = [
            "Beurandeh",
            "Durung",
            "Gampong Baro",
            "Ie Seu Um",
            "Ladong",
            "Lamnga",
            "Lam Reh",
            "Meunasah Keudee",
            "Meunasah Kulam",
            "Meunasah Mon",
            "Neuheun",
            "Paya Kameng",
            "Ruyung",
        ];

        $aceh_besar_montasik = [
            "Alue",
            "Atong",
            "Bak Cirih",
            "Bak Dilib",
            "Bira Cot",
            "Bira Lhok",
            "Bueng Daroh",
            "Bueng Raya",
            "Bueng Tujoh",
            "Cot Lampoh Soh",
            "Cot Lhok",
            "Cot Seunong",
            "Dayah Daboh",
            "Empee Tanong",
            "Gampong Baroh",
            "Lam Nga",
            "Lamme Garot",
            "Lampaseh Krueng",
            "Lampaseh Lhok",
            "Lamraya",
            "Mata Ie",
            "Meunasah Tutong",
            "Mon Ara",
            "Peurumping",
            "Piyeung Datu",
            "Piyeung Kuweu",
            "Piyeung Lhang",
            "Piyeung Mane",
            "Reudeup",
            "Seubam Cot",
            "Seubang Lhok",
            "Seumet",
            "Teubang Phui Baro",
            "Teubang Phui Mesjid",
            "Ulee Lhat",
            "Warabo",
            "Weu Bada",
            "Weu Lhok",
            "Weukrueng",
        ];

        $aceh_besar_peukan_bada = [
            "Ajuen",
            "Beuradeun",
            "Gampong Baro",
            "Gurah",
            "Keuneu Ue",
            "Lam Awe",
            "Lam Geu Eu",
            "Lam Hasan",
            "Lam Isek",
            "Lam Keumok",
            "Lam Lumpu",
            "Lam Manyang",
            "Lam Rukam",
            "Lambadeuk",
            "Lambaro",
            "Lamguron",
            "Lampageu",
            "Lampisang",
            "Lamteh",
            "Lamteungoh",
            "Lamtutui",
            "Meunasah Tuha",
            "Paya Tieng",
            "Pulau Bunta",
            "Rima Jeuneu",
            "Rima Keuneurom",
        ];

        $aceh_besar_pulo_aceh = [
            "Alue Raya",
            "Alue Riyeung",
            "Blang Situngkoh",
            "Deudap",
            "Gugob",
            "Lampuyang",
            "Lamteng",
            "Lapeng",
            "Lhoh",
            "Melingge",
            "Paloh",
            "Pasi Janeng",
            "Rabo",
            "Rinon",
            "Seurapong",
            "Teunom",
            "Ulee Paya",
        ];

        $aceh_besar_seulimeum = [
            "Peukan Seulimeung",
            "Seulimeum",
            "Alue Rindang",
            "Ateuk",
            "Ayon",
            "Bak Aghu",
            "Bak Setui",
            "Batee Lhee",
            "Bayu",
            "Beureunut",
            "Blang Tingkeum",
            "Buga",
            "Capeung Baroh",
            "Capeung Dayah",
            "Iboh Tanjong",
            "Iboh Tunong",
            "Jawie",
            "Jeumpa",
            "Kampong Raya",
            "Kayee Adang",
            "Lam Apeng",
            "Lamcarak",
            "Lambada",
            "Lamjruen",
            "Lamkuk",
            "Lampanah",
            "Lampantee",
            "Lampisang Dayah",
            "Lampisang Teungoh",
            "Lampisang Tunong",
            "Lamteuba Droe",
            "Leungah",
            "Mangeu",
            "Meunasah Baro",
            "Meunasah Tunong",
            "Meurah",
            "Pinto Khop",
            "Pulo",
            "Rabo",
            "Seuneubok",
            "Ujong Keupula",
            "Ujong Mesjid Lampanah",
            "Ujong Mesjid Tanoh Abee",
        ];

        $aceh_besar_simpang_tiga = [
            "Ateuk Blang Asan",
            "Ateuk Cut",
            "Ateuk Lam Puot",
            "Ateuk Lam Ura",
            "Ateuk Lamphang",
            "Ateuk Mon Panah",
            "Batee Linteung",
            "Bha Ulee Tutue",
            "Blang Miro",
            "Blang Preh",
            "Krueng Mak",
            "Lam Urit",
            "Lambatee",
            "Lambunot",
            "Lamjamee Dayah",
            "Lamjamee Lamkrak",
            "Nyaa",
            "Tantuha",
        ];

        $aceh_besar_suka_makmur = [
            "Aneuk Batee",
            "Aneuk Galong Baro",
            "Aneuk Galong Titi",
            "Baet Lampuot",
            "Baet Mesago",
            "Blang Cut",
            "Bukloh",
            "Dilib Bukti",
            "Dilib Lamteungoh",
            "Kayee Adang",
            "Klieng Manyang",
            "Lam Geu Baro",
            "Lam Geu Tuha",
            "Lambarih Jurong Raya",
            "Lambarih Meunasah Blang Mee",
            "Lambaro Sibreh",
            "Lambirah",
            "Lamlheu",
            "Lampanah Ineu",
            "Lampisang",
            "Lamtanjong",
            "Lamteh Dayah",
            "Luthu Dayah Krueng",
            "Luthu Lamweu",
            "Maet Mesjid",
            "Meunasah Bakthue",
            "Meunasah Tuha",
            "Niron",
            "Pantee Rawam",
            "Reuhat Tuha",
            "Seumeureung",
            "Sibreh Keumudee",
            "Tampok Blang",
            "Tampok Jirat Raya",
            "Weusiteh",
        ];

        $aceh_jaya_darul_hikmah = [
            "Alue Gajah",
            "Arongan",
            "Babah Dua",
            "Babah Dalam",
            "Blang Luah",
            "Cot Pange",
            "Gampong Baro L",
            "Gampong Baro P",
            "Gunung Cut",
            "Krueng Tho",
            "Lam Teungoh",
            "Masen",
            "Pajar",
            "Panton Krueng",
            "Patek",
            "Paya Santeut",
            "Reuntang",
            "Sayeung",
            "Ujong Rimba",
        ];

        $aceh_jaya_indra_jaya = [
            "Alue Mie",
            "Babah Dua",
            "Ceunamprong",
            "Jangeut",
            "Kareng Ateuh",
            "Keude Unga",
            "Kuala",
            "Meudang Ghon",
            "Meunasah Rayeuk",
            "Meunasah Teungoh",
            "Meunasah Tutong",
            "Mukhan",
            "Teumareum",
            "Ujong Muloh",
        ];

        $aceh_jaya_jaya = [
            "Bak Paoh",
            "Pasar Lamno",
            "Alue Mie",
            "Alue Rayeuk",
            "Babah Dua",
            "Babah Ie",
            "Babah Krueng",
            "Ceunamprong",
            "Cot Dulang",
            "Darat",
            "Gampong Baro",
            "Gle Jong",
            "Gle Putoh",
            "Jambo Masi",
            "Janguet",
            "Kareung Ateuh",
            "Keude Unga",
            "Krueng Tunong",
            "Kuala",
            "Lam Asan",
            "Lam Durian",
            "Lam Tui",
            "Lambaroh",
            "Lamme",
            "Leupa",
            "Lhuet",
            "Mareu",
            "Meudhang Ghon",
            "Meudheun",
            "Meunasah Rayeuk",
            "Meunasah Serba",
            "Meunasah Teungoh",
            "Meunasah Tutong",
            "Meunasah Weh",
            "Meutara",
            "Mukhan",
            "Nusa",
            "Pante Cermin",
            "Pante Keutapang",
            "Panton Makmur",
            "Putue",
            "Rumpet",
            "Sabet",
            "Sango",
            "Sapek",
            "Teumareum",
            "Ujong Muloh",
            "Ujong Sudheun",
        ];

        $aceh_jaya_panga = [
            "Alue Abed",
            "Alue Pande",
            "Alue Raya",
            "Alue Teungoh",
            "Babah Ceupan",
            "Batee Meutudong",
            "Gampong Harapan",
            "Gle Putoh",
            "Gunong Buloh",
            "Gunong Mantok",
            "Gunong Meulinteung",
            "Keude Panga",
            "Kuta Tuha",
            "Ladang Baro",
            "Panton Kabu",
            "Panton Krueng",
            "Tuwi Empeuk",
            "Tuwi Kareung",
            "Tuwi Kayee",
        ];

        $aceh_jaya_krueng_sabee = [
            "Bahagia",
            "Sentosa",
            "Alue Tho",
            "Buntha",
            "Curek",
            "Datar Luas",
            "Dayah Baro",
            "Gampong Blang",
            "Kabong",
            "Keude Krueng Sabee",
            "Keutapang",
            "Mon Mata",
            "Padang Datar",
            "Panggong",
            "Panton Makmur",
            "Paya Seumantok",
            "Ranto Panyang",
        ];

        $aceh_jaya_pasie_raya = [
            "Alue Jang",
            "Alue Krueng",
            "Alue Punti",
            "Bintah",
            "Buket Keumuneng",
            "Ceuraceu",
            "Krueng Beukah",
            "Lhok Guci",
            "Pasi Teubee",
            "Pulo Tinggi",
            "Sarah Raya",
            "Tim Pleung",
            "Tuwi Kareung I",
            "Tuwi Perya",
        ];

        $aceh_jaya_sampoiniet = [
            "Alue Gro",
            "Babah Nipah",
            "Blang Monlueng",
            "Cot Langsat",
            "Cot Punti",
            "Crak Mong",
            "Ie Jeureungeh",
            "Jeumpheuk",
            "Krueng Ayon",
            "Krueng No",
            "Kuala Bakong",
            "Kuala Ligan",
            "Lhok Kruet",
            "Ligan",
            "Mata Ie",
            "Meunasah Kulam",
            "Pulo Raya",
            "Ranto Sabon",
            "Seumantok",
        ];

        $aceh_jaya_setia_bakti = [
            "Gampong Baro",
            "Gampong Baroh",
            "Gle Seubak",
            "Gunong Meunasah",
            "Lhok Bot",
            "Lhok Buya",
            "Lhok Geulumpang",
            "Lhok Timon",
            "Padang",
            "Pante Kuyun",
            "Paya Laot",
            "Sapek",
            "Sawang",
        ];

        $aceh_jaya_teunom = [
            "Keude Teunom",
            "Alue Ambang",
            "Alue Jang",
            "Alue Krueng",
            "Alue Meuraksa",
            "Alue Punti",
            "Batee Roo",
            "Bintah",
            "Blang Baro",
            "Blang Ramee",
            "Buket Keumuneng",
            "Ceuraceu",
            "Cot Trap",
            "Gampong Baru",
            "Krueng Beukah",
            "Kubu",
            "Lhok Guci",
            "Lueng Gayo",
            "Padang Kleng",
            "Panton",
            "Pasi Geulima",
            "Pasi Pawang",
            "Pasi Tebei",
            "Pasi Timon",
            "Pasi Tulak Bala",
            "Paya Baro",
            "Pulo Tinggi",
            "Rambong Payong",
            "Sarah Raya",
            "Seumira",
            "Seuneubok Padang",
            "Tanoh Anoe",
            "Tanoh Manyang",
            "Teupin Ara",
            "Timpleung",
            "Tuwi Kareung",
            "Tuwi Peuriya",
            "Weue Gajah",
        ];

        $aceh_selatan_bakongan = [
            "Darul Ikhsan",
            "Gampong Baro",
            "Gampong Drien",
            "Keude Bakongan",
            "Padang Barahan",
            "Ujung Mangki",
            "Ujung Padang",
        ];

        $aceh_selatan_bakongan_timur = [
            "Ladang Rimba",
            "Pasi Seubadeh",
            "Sawah Tingkeum",
            "Seuleukat",
            "Ujung Pulo Cut",
            "Ujung Pulo Rayeuk",
        ];

        $aceh_selatan_kluet_utara = [
            "Alur Mas",
            "Fajar Harapan",
            "Gunung Pudung",
            "Gunong Pulo",
            "Jambo Manyang",
            "Kampung Paya",
            "Kampung Tinggi",
            "Kedai Padang",
            "Kota Fajar",
            "Krueng Batee",
            "Krueng Batu",
            "Krueng Kluet",
            "Limau Purut",
            "Pasie Kuala Asahan",
            "Pasi Kuala Baku",
            "Pulo Ie I",
            "Pulo Kambing",
            "Ruak",
            "Simpang Dua",
            "Simpang Tiga",
            "Simpang Empat",
            "Simpang Lhee",
            "Suag Geuringgeng",
        ];

        $aceh_selatan_kluet_selatan = [
            "Barat Daya",
            "Gelumbuk",
            "Indra Damai",
            "Jua",
            "Kapeh",
            "Kedai Kandang",
            "Kedai Runding",
            "Luar",
            "Pasie Lembang",
            "Pasie Merapat",
            "Pulo Ie",
            "Rantau Binuang",
            "Sialang",
            "Suaq Bakong",
            "Ujung",
            "Ujung Padang",
            "Ujung Pasir",
        ];

        $aceh_selatan_kluet_tengah = [
            "Jambo Papan",
            "Kampung Padang",
            "Kampung Sawah",
            "Koto",
            "Koto Indarung",
            "Lawe Melang",
            "Malaka",
            "Mersak",
            "Pulo Air",
        ];

        $aceh_selatan_kluet_timur = [
            "Alai",
            "Durian Kawan",
            "Lawe Buluh Didi",
            "Lawe Sawah",
            "Paya Dapur",
            "Pucuk Lembang",
            "Sapik",
        ];

        $aceh_selatan_kota_bahagia = [
            "Alur Dua Mas",
            "Beutong",
            "Bukit Gadeng",
            "Gunong Rayek",
            "Gunong Cut",
            "Jambo Keupok",
            "Rambong",
            "Seuneubok Alur Buloh",
            "Seuneubok Keuranji",
            "Ujong Tanoh",
        ];

        $aceh_selatan_labuhan_haji = [
            "Apha",
            "Dalam",
            "Pasar Lama",
            "Tengah Pisang",
            "Bakau Hulu",
            "Cacang",
            "Hulu Pisang",
            "Kota Palak",
            "Lembah Baru",
            "Manggis Harapan",
            "Padang Bakau",
            "Padang Baru",
            "Pawoh",
            "Pisang",
            "Tengah Baru",
            "Ujung Batu",
        ];

        $aceh_selatan_labuhan_haji_timur = [
            "Aur Peulumat",
            "Beutong Peulumat",
            "Gunung Rotan Peulumat",
            "Keumumu Hilir",
            "Keumumu Hulu",
            "Keumumu Sebrang",
            "Limau Saring Peulumat",
            "Padang Peulumat",
            "Paya Peulumat",
            "Peunalop Peulumat",
            "Tengah Peulumat",
        ];

        $aceh_selatan_labuhan_haji_barat = [
            "Blang Poroh",
            "Blang Baru",
            "Iku Lhung",
            "Kuta Iboh",
            "Kuta Trieng",
            "Pante Geulima",
            "Panton Pawoh",
            "Peulokan",
            "Pulo Ie",
            "Suak Lokan",
            "Tengah Iboh",
            "Tutong",
            "Ujung Padang",
        ];

        $aceh_selatan_meukek = [
            "Alue Baro",
            "Alue Meutuah",
            "Aron Tunggai",
            "Blang Bladeh",
            "Blang Kuala",
            "Blang Teungoh",
            "Buket Meuh",
            "Drien Jalo",
            "Ie Buboh",
            "Ie Dingen",
            "Jambo Papeun",
            "Keude Meukek",
            "Kuta Baro",
            "Kuta Buloh I",
            "Kuta Buloh II",
            "Labuhan Tarok",
            "Labuhan Tarok II",
            "Ladang Baro",
            "Ladang Tuha",
            "Lhok Aman",
            "Lhok Mamplam",
            "Rot Teungoh",
            "Tanjung Harapan",
        ];

        $aceh_selatan_pasie_raja = [
            "Ie Mirah",
            "Kampong Baro",
            "Kampung Baru",
            "Krueng Kelee",
            "Ladang Teungoh",
            "Ladang Tuha",
            "Lhok Sialang Cut",
            "Lhok Sialang Rayeuk",
            "Mata Ie",
            "Panton Bili",
            "Pasi Rasian",
            "Payateuk",
            "Pucuk Krueng",
            "Pulo Ie II",
            "Silolo",
            "Sineubok",
            "Teupin Gajah",
            "Ujung Batu",
            "Ujung Padang Asahan",
            "Ujung Padang Rasian",
        ];

        $aceh_selatan_sama_dua = [
            "Baru",
            "Ujung Tanah",
            "Air Sialang Hilir",
            "Air Sialang Hulu",
            "Air Sialang Tengah",
            "Alur Pinang",
            "Alur Simerah",
            "Balai",
            "Batee Tunggai",
            "Dalam",
            "Gadang",
            "Gunung Cut",
            "Gunung Ketek",
            "Jilatang",
            "Kota Baru",
            "Kuta Blang",
            "Ladang Kasik Putih",
            "Ladang Panton Luas",
            "Luar",
            "Lubuk Layu",
            "Madat",
            "Payonan Gadang",
            "Suaq Hulu",
            "Subarang",
            "Tampang",
            "Tengah",
            "Ujung Kampung",
        ];

        $aceh_selatan_sawang = [
            "Blang Geulinggang",
            "Kuta Baro",
            "Lhok Pawoh",
            "Meuligo",
            "Mutiara",
            "Panton Luas",
            "Sawang Ba'u",
            "Sawang I",
            "Sawang II",
            "Sikulat",
            "Simpang III",
            "Trieng Meuduro Baroh",
            "Trieng Meuduro Tunon",
            "Ujung Karang",
            "Ujung Padang",
        ];

        $aceh_selatan_tapak_tuan = [
            "Hilir",
            "Hulu",
            "Jambo Apha",
            "Lhok Bengkuang",
            "Lhok Ketapang",
            "Padang",
            "Pasar",
            "Tepi Air",
            "Air Berudang",
            "Air Pinang",
            "Batu Itam",
            "Gunung Kerambil",
            "Lhok Rukam",
            "Panjupian",
            "Panton Luas",
        ];

        $aceh_selatan_trumon = [
            "Gampong Teungoh",
            "Gunong Kapho",
            "Keude Trumon",
            "Krueng Batee",
            "Kuta Baru",
            "Kuta Padang",
            "Panton Bili",
            "Pulo Paya",
            "Raket",
            "Seunabok Jaya",
            "Singleng",
            "Tepin Tinggi",
            "Ujong Tanoh",
            "UPT II Padang Harapan",
        ];

        $aceh_selatan_trumon_tengah = [
            "Cot Bayu",
            "Gampong Teungoh",
            "Gunung Kapo",
            "Ie Jeureuneh",
            "Jambo Papeun",
            "Krueng Batee",
            "Ladang Rimba",
            "Lhok Raya",
            "Naca",
            "Pulo Paya",
        ];

        $aceh_selatan_trumon_timur = [
            "Alur Bujok",
            "Ie Jeureuneh",
            "Jambo Dalem",
            "Jambo Papeun",
            "Kapai Seusak",
            "Krueng Luas",
            "Ladang Rimba",
            "Lhok Raya",
            "Naca",
            "Pinto Rimba",
            "Seuneubok Puntho",
            "Titi Poben",
            "UPT I Seuneubok Pusaka",
            "UPT III Cot Bayu",
        ];

        $aceh_singkil_danau_paris = [
            "Biskang",
            "Lae Balno",
            "Napa Galuh",
            "Sikoran",
            "Situban Makmur",
            "Situbuh Tubuh",
        ];

        $aceh_singkil_gunung_meriah = [
            "Blok 18",
            "Blok VI Baru",
            "Lae Butar",
            "Rimo",
            "Sianjo Anjo Merah",
            "Tulaan",
            "Tunas Harapan",
            "Blok 15",
            "Blok 31",
            "Bukit Harapan",
            "Cingkam",
            "Gunung Lagan",
            "Labuhan Kera",
            "Pandan Sari",
            "Penjahitan",
            "Perangusan",
            "Pertampakan",
            "Sanggaberu Silulusan",
            "Sebatang",
            "Seping Baru",
            "Sidorejo",
            "Suka Makmur",
            "Tanah Bara",
            "Tanah Merah",
            "Tanjung Betik",
        ];

        $aceh_singkil_kota_baharu = [
            "Butar",
            "Danau Bungara",
            "Ladang Bisik",
            "Lapahan Buaya",
            "Lentong",
            "Muara Pea",
            "Mukti Lincir",
            "Samar Dua",
            "Silakar Udang",
            "Singkohor",
            "Sumber Mukti",
        ];

        $aceh_singkil_kuala_baru = [
            "Kayu Menang",
            "Kuala Baru",
            "Kuala Baru Sungai",
            "Suka Jaya",
        ];

        $aceh_singkil_pulau_banyak = [
            "Pulau Baguk",
            "Pulau Balai",
            "Teluk Nibung",
        ];

        $aceh_singkil_pulau_banyak_barat = [
            "Asantola",
            "Haloban",
            "Suka Makmur",
            "Ujung Sialit",
        ];

        $aceh_singkil_simpang_kanan = [
            "Pangi",
            "Cibubukan",
            "Guha",
            "Kain Golong",
            "Kuta Karangan",
            "Kuta Tinggi",
            "Lae Gambir",
            "Lae Gecih",
            "Lae Nipe",
            "Lae Riman",
            "Lipat Kajang",
            "Lipat Kajang Atas",
            "Pakiraman",
            "Pandan Sari",
            "Pertabas",
            "Serasah",
            "Siatas",
            "Sidodadi",
            "Silatong",
            "Sukarejo",
            "Tanjung Mas",
            "Tugan",
            "Tuh Tuhan",
            "Ujung Limus",
        ];

        $aceh_singkil_singkil = [
            "Kilangan",
            "Kota Simboling",
            "Pasar Singkil",
            "Paya Bumbung",
            "Pemuka",
            "Pulo Sarok",
            "Rantau Gedang",
            "Selok Aceh",
            "Siti Ambia",
            "Suka Damai",
            "Suka Makmur",
            "Takal Pasir",
            "Teluk Rumbia",
            "Ujung",
            "Ujung Bawang",
        ];

        $aceh_singkil_singkil_utara = [
            "Baru",
            "Gosong Telaga Barat",
            "Gosong Telaga Selatan",
            "Gosong Telaga Timur",
            "Gosong Telaga Utara",
            "Ketapang Indah",
            "Telaga Sakti",
        ];

        $aceh_singkil_singkohor = [
            "Lae Pinang",
            "Lae Sipola",
            "Mukti Harapan",
            "Pea Jambu",
            "Singkohor",
            "Sri Kayu",
        ];

        $aceh_singkil_suro_makmur = [
            "Alur Linci",
            "Bulu Ara",
            "Bulu Sema",
            "Keras",
            "Ketangkuhan",
            "Lae Bangun",
            "Mandumpang",
            "Pangkalan Sulampi",
            "Siompin",
            "Sirimo Mungkur",
            "Suro",
        ];

        $aceh_tamiang_banda_mulia = [
            "Alur Nunang",
            "Kampung Besar",
            "Matang Seping",
            "Paya Rahat",
            "Suka Damai",
            "Suka Jadi",
            "Suka Mulia Upah",
            "Tanjung Keuramat",
            "Telaga Meuku Sa",
            "Telaga Meuku Dua",
        ];

        $aceh_tamiang_bandar_pusaka = [
            "Alur Jambu",
            "Aras Sembilan",
            "Babo",
            "Batang Ara",
            "Batu Bedulang",
            "Bengkelang",
            "Blang Kandis",
            "Jambu Rambong",
            "Pantai Cempa",
            "Pengidam",
            "Perkebunan Alur Jambu",
            "Perupuk",
            "Rantau Bintang",
            "Serba",
            "Sunting",
        ];

        $aceh_tamiang_bendahara = [
            "Alur Cantik",
            "Alur Munang",
            "Bandar Baru",
            "Cinta Raja",
            "Gampong Balai",
            "Gampong Bandar Khalifah",
            "Gampong Besar",
            "Gampong Jawa Tinggi",
            "Kampung Mesjid",
            "Kampung Mesjid Sungai Iyu",
            "Kampung Raja",
            "Kampung Upah",
            "Kebon Balai",
            "Kebon Sungai Iyu",
            "Kuala Geunting",
            "Kuala Peunaga",
            "Lambung Blang",
            "Lubuk Batil",
            "Marlempang",
            "Matang Seuping",
            "Matang Teupah",
            "Paya Rahat",
            "Perkebunan Upah",
            "Rantau Pakam",
            "Seuneubok Aceh",
            "Seuneubok Dalam Sungai Iyu",
            "Seuneubok Dalam Upah",
            "Suka Damai",
            "Suka Mulia",
            "Suka Mulya Upah Hulu",
            "Sukajadi",
            "Tanjung",
            "Tanjung Binjai",
            "Tanjung Keramat",
            "Tanjung Lipat Jawa",
            "Tanjung Lipat Kuala Peunaga",
            "Tanjung Mulia",
            "Tanjung Paret",
            "Telaga Muku",
            "Teluk Halban",
            "Teluk Kemiri",
            "Teluk Kepayang",
            "Tumpok Teungah",
        ];

        $aceh_tamiang_karang_baru = [
            "Alur Baung",
            "Alur Bemban",
            "Alur Lhok",
            "Alur Selalas",
            "Banai",
            "Bukit Keranji",
            "Bukit Panjang",
            "Dalam",
            "Air Tenang",
            "Bundar",
            "Johar",
            "Sukajadi",
            "Tupah",
            "Kebun Medang Ara",
            "Kebun Afd.Seleleh",
            "Kebun Tanah Terban",
            "Kebun Tanjung Seumantoh",
            "Kesehatan",
            "Medang Ara",
            "Menanggini",
            "Pahlawan",
            "Paya Awe",
            "Paya Kulbi",
            "Paya Meta",
            "Paya Tampah",
            "Rantau Panjang",
            "Simpang Empat",
            "Sukajadi Paya Bujuk",
            "Tanah Terban",
            "Tanjung Karang",
            "Tanjung Seumantoh",
        ];

        $aceh_tamiang_kejuruan_muda = [
            "Alur Jambu",
            "Alur Seulebu",
            "Bukit Rata",
            "Gerenggam",
            "Kebun Tengah",
            "Purwodadi",
            "Seumadam",
            "Sidodadi",
            "Sungai Liput",
            "Tanjung Genting",
            "Tanjung Mancang",
        ];

        $aceh_tamiang_kota_kuala_simpang = [
            "Bukit Rata",
            "Bukit Tempurung",
            "Kampung Kota",
            "Kebun Tengah",
            "Kota Kualasimpang",
            "Kota Lintang",
            "Perdamaian",
            "Sriwijaya",
            "Sungai Liput",
        ];

        $aceh_tamiang_manyak_payed = [
            "Tualang Baru",
            "Alue Ie Puteh",
            "Alue Sentang",
            "Buket Panjang I",
            "Buket Panjang II",
            "Buket Paya",
            "Dagang Setia",
            "Gelanggang Merak",
            "Geudham",
            "Ie Bintah",
            "Kasih Sayang",
            "Krueng Sikajang",
            "Lhok Medang Ara",
            "Lueng Manyo",
            "Matang Ara Aceh",
            "Matang Ara Jawa",
            "Matang Cincin",
            "Mesjid",
            "Meunasah Paya",
            "Meurandeh",
            "Pahlawan",
            "Paya Ketenggar",
            "Raja Tuha",
            "Sampaimah",
            "Seuneubok Baru",
            "Seuneubok Cantek",
            "Seuneubok Pidie",
            "Seuneubok Punti",
            "Simpang Lhee",
            "Tanjung Neraca",
            "Ujong Tanjong",
        ];

        $aceh_tamiang_rantau = [
            "Alur Cucur",
            "Alur Manis",
            "Benua Raja",
            "Durian",
            "Ingin Jaya",
            "Jamur Jelatang",
            "Jamur Labu",
            "Kebun Rantau",
            "Landuh",
            "Paya Bedi",
            "Pertamina",
            "Rantau Pauh",
            "Suka Jadi",
            "Suka Mulia",
            "Suka Rahmat",
            "Suka Rakyat",
        ];

        $aceh_tamiang_sekerak = [
            "Banda Mahligai",
            "Baling Karang",
            "Juar",
            "Kebon Batang Ara",
            "Lubuk Sidup",
            "Pantai Perlak",
            "Pantai Tinjau",
            "Pematang Durian",
            "Sekumur",
            "Sekerak Kanan",
            "Sekerak Kiri",
            "Sulum",
            "Suka Makmur",
            "Tanjung Gelumpang",
        ];

        $aceh_tamiang_seruway = [
            "Air Masin",
            "Alur Alim",
            "Binjai",
            "Gedung Biara",
            "Gelung",
            "Kampung Baru",
            "Lubuk Damar",
            "Matang Sentang",
            "Muka Sei Kuruk",
            "Padang Langgis",
            "Pantai Balai",
            "Paya Udang",
            "Perkebunan Gedung Biara",
            "Perkebunan Seruway",
            "Pusung Kapal",
            "Sei Kuruk I",
            "Sei Kuruk II",
            "Sei Kuruk III",
            "Sidodadi",
            "Sukaramai I",
            "Sukaramai II",
            "Tangsi Lama",
            "Tualang",
            "Peukan Seuruway",
        ];

        $aceh_tamiang_tamiang_hulu = [
            "Alur Jambu",
            "Alur Tani I",
            "Alur Tani II",
            "Aras Sembilan",
            "Babo",
            "Bandar Khalifah",
            "Bandar Setia",
            "Batang Ara",
            "Batu Bedulang",
            "Bengkelang",
            "Blang Kandis",
            "Harum Sari",
            "Jambo Rambong",
            "Kaloy",
            "Pantai Cempa",
            "Pengidam",
            "Perkebunan Pulau Tiga",
            "Perupuk",
            "Rantau Bintang",
            "Rongoh",
            "Serba",
            "Sunting",
            "Wonosari",
        ];

        $aceh_tamiang_tenggulun = [
            "Kampung Jawa",
            "Karang Jadi",
            "Kebun Sungai Liput",
            "Pangkalan",
            "Rimba Sawang",
            "Selamat",
            "Simpang Kanan",
            "Simpang Kiri",
            "Suka Makmur",
            "Tanjung Genteng",
            "Tebing Tinggi",
            "Tenggulun",
        ];

        $aceh_tengah_atu_lintang = [
            "Atu Lintang",
            "Berawang Dewal",
            "Delung Sekinel",
            "Geragang",
            "Jamat",
            "Lumut",
            "Merah Mege",
            "Tanoh Abu",
        ];

        $aceh_tengah_bebesen = [
            "Bebesen",
            "Blang Kolak I",
            "Blang Kolak II",
            "Empus Talu",
            "Kebet",
            "Kemili",
            "Keramat Mupakat",
            "Lemah Burbana",
            "Mongal",
            "Nunang Antara",
            "Pendere Saril",
            "Sadong Juru Mudi",
            "Simpang Empat",
            "Tan Saril",
            "Atu Gajah Reje Guru",
            "Atu Tulu",
            "Bahgie",
            "Blang Gele",
            "Bur Biah",
            "Daling",
            "Gele Lah",
            "Lelabu",
            "Mah Bengi",
            "Tensaren",
            "Ulu Nuih",
            "Umang",
        ];

        $aceh_tengah_bies = [
            "Aru Latong",
            "Atang Jungket",
            "Bies Baru",
            "Bies Penentanan",
            "Bies Mulie",
            "Karang Bayur",
            "Lenga",
            "Pucuk Deku",
            "Simpang Lukup Badak",
            "Simpang Uning Niken",
            "Tebes Lues",
            "Uning Pegantungen",
        ];

        $aceh_tengah_bintang = [
            "Atu Payung",
            "Bale Nosar",
            "Bamil Nosar",
            "Bewang",
            "Dedamar",
            "Genuren",
            "Kala Bintang",
            "Kala Segi Bintang",
            "Kejurun Syiah Utama",
            "Kelitu",
            "Kuala I Bintang",
            "Kuala II",
            "Linung Bulen I",
            "Linung Bulen II",
            "Mengaya",
            "Mode Nosar",
            "Serule",
            "Wakil Jalil",
            "Wihlah Setie",
        ];

        $aceh_tengah_celala = [
            "Arul Gading",
            "Berawang Gading",
            "Blang Kekumur",
            "Celala",
            "Cibro",
            "Kuyun",
            "Kuyun Toa",
            "Kuyun Uken",
            "Makmur",
            "Melala",
            "Paya Kolak",
            "Ramung Ara",
            "Sepakat",
            "Tanoh Depet",
            "Uning Berawang Ramung",
        ];

        $aceh_tengah_jagong_jeget = [
            "Berawang Dewal",
            "Bukit Sari",
            "Bukit Kemuning",
            "Gegarang",
            "Jeget Ayu",
            "Jagong Jeget",
            "Merah Said",
            "Paya Dedep",
            "Paya Tungel",
            "Telege Sari",
        ];

        $aceh_tengah_kebayakan = [
            "Jongok Meluem",
            "Lot Kala",
            "Mendale",
            "Pedekok",
            "Pinangan",
            "Bukit Sama",
            "Kelupak Mata",
            "Paya Reje Tamidelem",
            "Paya Tumpi",
        ];

        $aceh_tengah_ketol = [
            "Bah",
            "Belang Mancung",
            "Bintang Pepara",
            "Burlah",
            "Buter",
            "Cang Duri",
            "Gelumpang Payung",
            "Jaluk",
            "Kala Ketol",
            "Karang Ampar",
            "Kekuyang",
            "Kute Gelime",
            "Pantan Penyo",
            "Pantan Reduk",
            "Pondok Balik",
            "Rejewali",
            "Serempah",
        ];

        $aceh_tengah_kute_panang = [
            "Atu Gogop",
            "Balik",
            "Buter Balik",
            "Dedingin",
            "Kute Panang",
            "Lukup Sbun",
            "Pantan Sile",
            "Ratawali",
            "Segene Balik",
            "Tapak Moge",
            "Tawar Miko",
            "Tawardi",
            "Timang Rasa",
            "Wih Nongkal",
        ];

        $aceh_tengah_laut_tawar = [
            "Asir-asir",
            "Asir-asir Asia",
            "Bale Atu",
            "Bujang",
            "Hakim Bale",
            "Kute Nireje",
            "Takengon Barat",
            "Takengon Timur",	
            "Gunung Suku",
            "Kenawat",
            "Pedemun One-one",
            "Rawe",
            "Toweren Antara",
            "Toweren Toa",
            "Toweren Uken",
        ];

        $aceh_tengah_linge = [
            "Antara",
            "Arul Item",
            "Delung Sekinel",
            "Despot Linge",
            "Gelampang Gading",
            "Gemboyah",
            "Gewat",
            "Ise-Ise",
            "Jamat",
            "Kemerleng",
            "Kute Baru",
            "Kute Keramil",
            "Kute Rayang",
            "Kute Reje",
            "Kute Riyem",
            "Kute Robel",
            "Mungkur",
            "Linge",
            "Lumut",
            "Owaq",
            "Pantan Reduk",
            "Pantan Nangka",
            "Penarun",
            "Reje Payung",
            "Simpang Tige Uning",
            "Umang",
        ];

        $aceh_tengah_pegasing = [
            "Arul Badak",
            "Berawang Baro",
            "Gelelungi",
            "Ie Reulop",
            "Kayu Kul",
            "Kedelah",
            "Kung",
            "Kute Lintang",
            "Lelumu",
            "Paya Jeget",
            "Pedekok",
            "Pegasing",
            "Pepalang",
            "Simpang Kelaping",
            "Tebuk",
            "Terang Ulen",
            "Ujung Gele",
            "Wih Ilang",
            "Wih Nareh",
            "Wih Lah",
            "Jejem",
            "Jurusen",
            "Kala Pegasing",
            "Linung Ayu",
            "Panangan Mata",
            "Pantan Musara",
            "Wih Terjun",
            "Belang Bebangka",
            "Uning",
            "Uring",
            "Suka Damai",
        ];

        $aceh_tengah_rusip_antara = [
            "Arul Pertik",
            "Atu Singkih",
            "Kerawang",
            "Kuala Rawa",
            "Lut Jaya",
            "Mekar Maju",
            "Merandeh Paya",
            "Pantan Bener",
            "Pantan Tengah",
            "Paya Tampu",
            "Pilar",
            "Pilar Jaya",
            "Pilar Wih Kiri",
            "Rusip",
            "Tanjung",
            "Tirmi Ara",
        ];

        $aceh_tengah_silih_nara = [
            "Arul Gele",
            "Arul Kumer",
            "Arul Kumer Barat",
            "Arul Kumer Selatan",
            "Arul Kumer Timur",
            "Arul Putih",
            "Arul Relem",
            "Bius Utama",
            "Burni Bius",
            "Burni Bius Baru",
            "Genting Gerbang",
            "Gunung Singit",
            "Jerata",
            "Mekar Indah",
            "Mulie Jadi",
            "Paya Beke",
            "Paya Pelu",
            "Pepayungen Angkup",
            "Rebe Gedung",
            "Remesen",
            "Reremal",
            "Rutih",
            "Sanehen",
            "Semelit Mutiara",
            "Simpang Kemili",
            "Tenebuk Kampung Baru",
            "Terang Engon",
            "Wih Bersih",
            "Wih Pesam",
            "Wih Porak",
            "Wih Sagi Indah",
            "Wihni Bakong",
            "Wihni Durin",
        ];

        $aceh_tenggara_babul_makmur = [
            "Bintang Alga Musara",
            "Bukit Bintang Indah",
            "Bunbun Alas",
            "Cinta Damai",
            "Cinta Makmur",
            "Desky Jaya",
            "Gunung Pak-Pak",
            "Kampung Bhakti",
            "Kuta Bakti",
            "Kute Makmur",
            "Lawe Deski I",
            "Lawe Deski Sabas",
            "Lawe Deski Tongah",
            "Lawe Mantik",
            "Lawe Tawakh",
            "Lawe Perbunga",
            "Muara Setia",
            "Muara Situlen",
            "Naga Timbul",
            "Perdamaian",
            "Pardomuan I",
            "Pardomuan II",
            "Pardamean",
            "Pintu Alas",
            "Sabilussalam",
            "Sejahtera",
            "Sejahtera Baru",
            "Tanjung Sari",
            "Tanoh Alas",
        ];

        $aceh_tenggara_babul_rahmah = [
            "Alur Baning",
            "Dolok Nauli",
            "Jambur Damar",
            "Kuta Lang-Lang",
            "Lawe Malum",
            "Lawe Sumur",
            "Lumban Sitio-Tio",
            "Lumban Tua",
            "Meranti",
            "Mutiara Damai",
            "Penguhapan",
            "Perdamean",
            "Salim Pinim",
            "Salim Pipit",
            "Tenembak Alas",
            "Titi Mas",
            "Tuhi Jongkat",
            "Uning Sigugur",
        ];

        $aceh_tenggara_babussalam = [
            "Alas Merancar",
            "Batu Mbulan I",
            "Batu Mbulan II",
            "Batu Mbulan Asli",
            "Batu Mbulan Baru",
            "Batu Mbulan Sepakat",
            "Gumpang Jaya",
            "Kampung Melayu Gabungan",
            "Kampung Raja",
            "Kota Kutacane",
            "Kutacane Lama",
            "Kute Rih",
            "Melayu I",
            "Mbarung",
            "Mbarung Datuk Saudane",
            "Mendabe",
            "Muara Lawe Bulan",
            "Perapat Hilir",
            "Perapat Hulu",
            "Pulo Latong",
            "Pulo Peding",
            "Pulo Sanggakh",
            "Pulonas",
            "Pekhapat Sepakat",
            "Pekhapat Titi Panjang",
            "Terutung Pedi",
            "Ujung Barat",
        ];

        $aceh_tenggara_badar = [
            "Aunan Sepakat",
            "Bandar Indah",
            "Deleng Damar",
            "Deleng Megakhe",
            "Gusung Batu",
            "Jambur Lak Lak",
            "Jongar",
            "Kampung Baru",
            "Kampung Kaya",
            "Kampung Sepakat",
            "Kaya Pangur",
            "Ketambe",
            "Kumbang Indah",
            "Kumbang Jaya",
            "Kuta Pasir",
            "Kuta Tinggi",
            "Lawe Bekung",
            "Lawe Bekung Tampahan",
            "Lawe Mengkudu",
            "Lawe Penanggalan",
            "Lembah Alas",
            "Natam",
            "Natam Baru",
            "Penyeberangan Cingkam",
            "Peranginan",
            "Purwodadi",
            "Ranto Diur Gabungan",
            "Rumah Bundar",
            "Salang Alas",
            "Salang Baru",
            "Salang Baru Gabungan",
            "Salang Muara",
            "Salang Sigotom Gabungan",
            "Simpang III Jongar",
        ];

        $aceh_tenggara_bambel = [
            "Bambel",
            "Bambel Gabungan",
            "Berandang",
            "Biak Muli",
            "Buah Pala",
            "Cinta Damai",
            "Kisam Gabungan",
            "Kisam Kute Pasir",
            "Kuning I",
            "Kuning II",
            "Kuta Lang-lang",
            "Kuta Lesung",
            "Kute Antara",
            "Kute Bunin",
            "Kute Seri",
            "Lawe Hijo",
            "Lawe Kihing",
            "Lawe Sumur",
            "Lawe Sumur Baru",
            "Likat",
            "Pedesi",
            "Penosan",
            "Pinding",
            "Pulo Kedondong",
            "Pulo Perengge",
            "Rikit",
            "Terutung Megara Asli",
            "Terutung Megara Lawe Pasa",
            "Terutung Payung Hilir",
            "Terutung Payung Hulu",
            "Terutung Seperai",
            "Tualang Sembilar",
        ];

        $aceh_tenggara_bukit_tusam = [
            "Alur Buluh",
            "Amaliah",
            "Bambel Baru",
            "Darussalam",
            "Gumpang",
            "Kerukunan",
            "Kuta Buluh",
            "Kuta Lengat Pagan",
            "Kuta Lengat Selian",
            "Kuta Lingga",
            "Lawe Dua Gabungan",
            "Maha Singkil",
            "Pejuang",
            "Rema",
            "Rikit Bur",
            "Sebudi Jaya",
            "Tenembak Bintang",
            "Tualang Baru",
        ];

        $aceh_tenggara_darul_hasanah = [
            "Buntul Kendawi",
            "Darul Makmur",
            "Gulo",
            "Istikamah",
            "Kite Merangun",
            "Kokthan Jaya",
            "Kuning Abadi",
            "Kuta Ujung",
            "Kute Meranggun",
            "Kute Rambe",
            "Lawe Mamas Indah",
            "Lawe Pinis",
            "Lawe Stul",
            "Makmur Jaya",
            "Mamas",
            "Mamas Baru",
            "Pulo Gadung",
            "Pulo Piku",
            "Rambung Jaya",
            "Rambung Teldak",
            "Serimuda",
            "Simpang IV Tanjung",
            "Tanjung Aman",
            "Tanjung Lama",
            "Tanjung Leuser",
            "Tanjung Mbakhu",
            "Tanjung Muda",
            "Terutung Kute",
            "Ujung Baru",
        ];

        $aceh_tenggara_deleng_phokisen = [
            "Beriring Naru",
            "Bunga Melur",
            "Gusung Batu",
            "Kane Lot",
            "Kati Jeroh",
            "Kaya Pangur",
            "Lawe Hakhum",
            "Lawe Pangkat",
            "Lembah Alas",
            "Muhajirin",
            "Penampaan",
            "Peseluk Pesimbe",
            "Ranto Dior",
            "Salang Baru",
            "Salang Muara",
            "Salang Sigotom",
            "Sepakat",
            "Tading Ni Ulihi",
            "Tanoh Khukahen",
            "Tenembak Lang-Lang",
            "Terutung Mbelang",
            "Tualang Lama",
        ];

        $aceh_tenggara_ketambe = [
            "Alur Langsat",
            "Batu Hamparan",
            "Darul Amin",
            "Ngkeren",
            "Kubu",
            "Kuta Batu Baru",
            "Kuta Batu IKuta Batu II",
            "Kuta Cingkam I",
            "Kuta Cingkam II",
            "Lawe Kongker",
            "Lawe Lumbang Indah",
            "Lawe Sempilang",
            "Lawe Tungkal",
            "Muara Baru",
            "Pasir Bangun",
            "Paye Munje",
            "Perapat Batu Nunggul",
            "Pulo Sepang",
            "Rambah Sayang",
            "Rih Mebelang",
            "Rumah Kampung",
            "Rumah Luar",
        ];

        $aceh_tenggara_lawe_alas = [
            "Alur Langsat",
            "Batu Hamparan",
            "Darul Amin",
            "Ngkeren",
            "Kubu",
            "Kuta Batu Baru",
            "Kuta Batu I",
            "Kuta Batu II",
            "Kuta Cingkam I",
            "Kuta Cingkam II",
            "Lawe Kongker",
            "Lawe Lumbang Indah",
            "Lawe Sempilang",
            "Lawe Tungkal",
            "Muara Baru",
            "Pasir Bangun",
            "Paye Munje",
            "Perapat Batu Nunggul",
            "Pulo Sepang",
            "Rambah Sayang",
            "Rih Mebelang",
            "Rumah Kampung",
            "Rumah Luar",
        ];

        $aceh_tenggara_lawe_bulan = [
            "Bahagia",
            "Bunga Melur Gabungan",
            "Kampung Nangka Gabungan",
            "Kandang Belang Mandiri",
            "Kuta Bantil Gabungan",
            "Kuta Buluh Butong",
            "Kuta Galuh Asli",
            "Kuta Genting",
            "Kutambaru",
            "Kutambaru Bencawan",
            "Lawe Kinge",
            "Lawe Kolok Gabungan",
            "Lawe Pangkat",
            "Lawe Rutung",
            "Lawe Sagu",
            "Lawe Sagu Baru",
            "Lawe Sagu Hilir",
            "Lawe Sagu Hulu",
            "Mbacang Racun",
            "Pasir Gala Gabungan",
            "Pasir Penjengakan",
            "Penampaan",
            "Pekhapat Timur",
            "Perapat Timur",
            "Pulo Samupin",
            "Pulonas Baru",
            "Simpang Empat",
            "Telaga Mekar",
            "Tenembak Juhar",
            "Tenembak Lang-lang",
            "Terutung Mbelang",
            "Tualang Lama",
        ];

        $aceh_tenggara_lawe_sigala_gala = [
            "Lawe Sigala Barat",
            "Suka Jaya",
            "Bukit Merdeka",
            "Bukit Sepakat",
            "Darul Aman",
            "Enmya Batu Dua Ratus",
            "Gabungan Parsaoran",
            "Gaya Jaya",
            "Kedataran Gabungan",
            "Kuta Tengah",
            "Lawe Buyur",
            "Lawe Kesumpat",
            "Lawe Loning Aman",
            "Lawe Loning Gabungan",
            "Lawe Loning I",
            "Lawe Loning Sepakat",
            "Lawe Rakat",
            "Lawe Serke",
            "Lawe Sigala Barat Jaya",
            "Lawe Sigala II",
            "Lawe Sigala Timur",
            "Lawe Tua Gabungan",
            "Lawe Tua Makmur",
            "Lawe Tua Persatuan",
            "Sebungke",
            "Suka Damai",
            "Suka Maju",
            "Tanah Baru",
        ];

        $aceh_tenggara_lawe_sumur = [
            "Berandang",
            "Buah Pala",
            "Kisam Gabungan",
            "Kisam Kute Pasir",
            "Kisam Kute Rambe",
            "Kisam Lestari",
            "Kute Bunin",
            "Kute Lesung",
            "Lawe Sumur",
            "Lawe Sumur Baru",
            "Lawe Pasaran Tengku Mbelin",
            "Lawe Polak",
            "Lawes Sumur Sepakat",
            "Panosan",
            "Setia Baru",
            "Teger Miko",
            "Terutung Megahke MBakhu",
            "Terutung Megara Lawe Pasaran",
        ];

        $aceh_tenggara_leuser = [
            "Akhih Majile",
            "Bintang Alga Musara",
            "Bintang Bukit Indah",
            "Bukit Meriah",
            "Bun-bun Alas",
            "Bunbun Indah",
            "Gaye Sendah",
            "Gunung Pak-Pak",
            "Kane Mende",
            "Kompas",
            "Kute Hakhapen",
            "Laut Tawar",
            "Lawe Sekhakut",
            "Naga Timbul",
            "Permata Musara",
            "Punce Nali",
            "Sade Ate",
            "Sepakat",
            "Suka Damai",
            "Tanjung Sari",
            "Tuah Kekhine",
            "Tunas Mude",
            "Ukhat Peseluk",
        ];

        $aceh_tenggara_semadam = [
            "Alur Buluh",
            "Kebun Sere",
            "Kampung Baru",
            "Lawe Beringin Gayo",
            "Lawe Beringin Horas",
            "Lawe Mejile",
            "Lawe Kinga Gabungan",
            "Lawe Kinga Tinggi",
            "Lawe Kinge Lapter",
            "Lawe Petanduk",
            "Lawe Petanduk-II",
            "Pasar Puntung",
            "Selamat Indah",
            "Semadam Awal",
            "Semadam Asal",
            "Sepakat Segenep",
            "Simpang Semadam",
            "Suka Makmur",
            "Titi Pasir",
        ];

        $aceh_tenggara_tanah_alas = [
            "Alur Langsat",
            "Alur Nangke",
            "Jambur Damar",
            "Jambukh Pekhmate",
            "Khutung Mbelang",
            "Kute Mejile",
            "Lawe Tungkal",
            "Rambah Sayang",
            "Rumah Luar",
            "Salim Pinim I",
            "Salim Pinim II",
            "Stambul Jaya",
            "Timang Rasa",
            "Tenembak Alas",
        ];

        $aceh_timur_banda_alam = [
            "Blang Rambong",
            "Buket Drien",
            "Jalan Dua",
            "Jambo Reuhat",
            "Panton Rayeuk Awe",
            "Panton Rayeuk Batee",
            "Panton Rayeuk Mameh",
            "Panton Rayeuk Teungoh",
            "Paya LamanSeuneubok BayuSeuneubok BentengSeuneubok KandangSeuneubok PangeuSeuneubok SimpangUlee JalanUram Jalan",
        ];

        // Aceh
        foreach ($aceh_barat_arongan_malabek as $a) {
            Kelurahan::create([
                'kelurahan' => $a,
                'kec_code' => 1,
                'created_by' => 'Seeder',
                'updated_by' => 'Seeder',
            ]);
        }

        foreach ($aceh_barat_bubon as $a) {
            Kelurahan::create([
                'kelurahan' => $a,
                'kec_code' => 2,
                'created_by' => 'Seeder',
                'updated_by' => 'Seeder',
            ]);
        }

        foreach ($aceh_barat_johan_pahlawan as $a) {
            Kelurahan::create([
                'kelurahan' => $a,
                'kec_code' => 3,
                'created_by' => 'Seeder',
                'updated_by' => 'Seeder',
            ]);
        }

        foreach ($aceh_barat_kaway_xvi as $a) {
            Kelurahan::create([
                'kelurahan' => $a,
                'kec_code' => 4,
                'created_by' => 'Seeder',
                'updated_by' => 'Seeder',
            ]);
        }

        foreach ($aceh_barat_meureubo as $a) {
            Kelurahan::create([
                'kelurahan' => $a,
                'kec_code' => 5,
                'created_by' => 'Seeder',
                'updated_by' => 'Seeder',
            ]);
        }

        foreach ($aceh_barat_pantai_ceureumen as $a) {
            Kelurahan::create([
                'kelurahan' => $a,
                'kec_code' => 6,
                'created_by' => 'Seeder',
                'updated_by' => 'Seeder',
            ]);
        }

        foreach ($aceh_barat_panon_reu as $a) {
            Kelurahan::create([
                'kelurahan' => $a,
                'kec_code' => 7,
                'created_by' => 'Seeder',
                'updated_by' => 'Seeder',
            ]);
        }

        foreach ($aceh_barat_samatiga as $a) {
            Kelurahan::create([
                'kelurahan' => $a,
                'kec_code' => 8,
                'created_by' => 'Seeder',
                'updated_by' => 'Seeder',
            ]);
        }

        foreach ($aceh_barat_sungai_mas as $a) {
            Kelurahan::create([
                'kelurahan' => $a,
                'kec_code' => 9,
                'created_by' => 'Seeder',
                'updated_by' => 'Seeder',
            ]);
        }

        foreach ($aceh_barat_woyla as $a) {
            Kelurahan::create([
                'kelurahan' => $a,
                'kec_code' => 10,
                'created_by' => 'Seeder',
                'updated_by' => 'Seeder',
            ]);
        }

        foreach ($aceh_barat_woyla_barat as $a) {
            Kelurahan::create([
                'kelurahan' => $a,
                'kec_code' => 11,
                'created_by' => 'Seeder',
                'updated_by' => 'Seeder',
            ]);
        }

        foreach ($aceh_barat_woyla_timur as $a) {
            Kelurahan::create([
                'kelurahan' => $a,
                'kec_code' => 12,
                'created_by' => 'Seeder',
                'updated_by' => 'Seeder',
            ]);
        }

        foreach ($aceh_barat_daya_babah_rot as $a) {
            Kelurahan::create([
                'kelurahan' => $a,
                'kec_code' => 13,
                'created_by' => 'Seeder',
                'updated_by' => 'Seeder',
            ]);
        }

        foreach ($aceh_barat_daya_blangpidie as $a) {
            Kelurahan::create([
                'kelurahan' => $a,
                'kec_code' => 14,
                'created_by' => 'Seeder',
                'updated_by' => 'Seeder',
            ]);
        }

        foreach ($aceh_barat_daya_jeumpa as $a) {
            Kelurahan::create([
                'kelurahan' => $a,
                'kec_code' => 15,
                'created_by' => 'Seeder',
                'updated_by' => 'Seeder',
            ]);
        }

        foreach ($aceh_barat_daya_kuala_batee as $a) {
            Kelurahan::create([
                'kelurahan' => $a,
                'kec_code' => 16,
                'created_by' => 'Seeder',
                'updated_by' => 'Seeder',
            ]);
        }

        foreach ($aceh_barat_daya_lembah_sabil as $a) {
            Kelurahan::create([
                'kelurahan' => $a,
                'kec_code' => 17,
                'created_by' => 'Seeder',
                'updated_by' => 'Seeder',
            ]);
        }

        foreach ($aceh_barat_daya_manggeng as $a) {
            Kelurahan::create([
                'kelurahan' => $a,
                'kec_code' => 18,
                'created_by' => 'Seeder',
                'updated_by' => 'Seeder',
            ]);
        }

        foreach ($aceh_barat_daya_setia as $a) {
            Kelurahan::create([
                'kelurahan' => $a,
                'kec_code' => 19,
                'created_by' => 'Seeder',
                'updated_by' => 'Seeder',
            ]);
        }

        foreach ($aceh_barat_daya_susoh as $a) {
            Kelurahan::create([
                'kelurahan' => $a,
                'kec_code' => 20,
                'created_by' => 'Seeder',
                'updated_by' => 'Seeder',
            ]);
        }

        foreach ($aceh_barat_daya_tangan_tangan as $a) {
            Kelurahan::create([
                'kelurahan' => $a,
                'kec_code' => 21,
                'created_by' => 'Seeder',
                'updated_by' => 'Seeder',
            ]);
        }

        foreach ($aceh_besar_baitussalam as $a) {
            Kelurahan::create([
                'kelurahan' => $a,
                'kec_code' => 22,
                'created_by' => 'Seeder',
                'updated_by' => 'Seeder',
            ]);
        }

        foreach ($aceh_besar_blang_bintang as $a) {
            Kelurahan::create([
                'kelurahan' => $a,
                'kec_code' => 23,
                'created_by' => 'Seeder',
                'updated_by' => 'Seeder',
            ]);
        }

        foreach ($aceh_besar_darul_imarah as $a) {
            Kelurahan::create([
                'kelurahan' => $a,
                'kec_code' => 24,
                'created_by' => 'Seeder',
                'updated_by' => 'Seeder',
            ]);
        }

        foreach ($aceh_besar_darul_kamal as $a) {
            Kelurahan::create([
                'kelurahan' => $a,
                'kec_code' => 25,
                'created_by' => 'Seeder',
                'updated_by' => 'Seeder',
            ]);
        }

        foreach ($aceh_besar_darussalam as $a) {
            Kelurahan::create([
                'kelurahan' => $a,
                'kec_code' => 26,
                'created_by' => 'Seeder',
                'updated_by' => 'Seeder',
            ]);
        }

        foreach ($aceh_besar_indrapuri as $a) {
            Kelurahan::create([
                'kelurahan' => $a,
                'kec_code' => 27,
                'created_by' => 'Seeder',
                'updated_by' => 'Seeder',
            ]);
        }

        foreach ($aceh_besar_ingin_jaya as $a) {
            Kelurahan::create([
                'kelurahan' => $a,
                'kec_code' => 28,
                'created_by' => 'Seeder',
                'updated_by' => 'Seeder',
            ]);
        }

        foreach ($aceh_besar_kota_jantho as $a) {
            Kelurahan::create([
                'kelurahan' => $a,
                'kec_code' => 29,
                'created_by' => 'Seeder',
                'updated_by' => 'Seeder',
            ]);
        }

        foreach ($aceh_besar_krueng_barona_jaya as $a) {
            Kelurahan::create([
                'kelurahan' => $a,
                'kec_code' => 30,
                'created_by' => 'Seeder',
                'updated_by' => 'Seeder',
            ]);
        }

        foreach ($aceh_besar_kuta_baro as $a) {
            Kelurahan::create([
                'kelurahan' => $a,
                'kec_code' => 31,
                'created_by' => 'Seeder',
                'updated_by' => 'Seeder',
            ]);
        }

        foreach ($aceh_besar_kuta_cot_glie as $a) {
            Kelurahan::create([
                'kelurahan' => $a,
                'kec_code' => 32,
                'created_by' => 'Seeder',
                'updated_by' => 'Seeder',
            ]);
        }

        foreach ($aceh_besar_kuta_malaka as $a) {
            Kelurahan::create([
                'kelurahan' => $a,
                'kec_code' => 33,
                'created_by' => 'Seeder',
                'updated_by' => 'Seeder',
            ]);
        }

        foreach ($aceh_besar_lembah_seulawah as $a) {
            Kelurahan::create([
                'kelurahan' => $a,
                'kec_code' => 34,
                'created_by' => 'Seeder',
                'updated_by' => 'Seeder',
            ]);
        }

        foreach ($aceh_besar_leupung as $a) {
            Kelurahan::create([
                'kelurahan' => $a,
                'kec_code' => 35,
                'created_by' => 'Seeder',
                'updated_by' => 'Seeder',
            ]);
        }

        foreach ($aceh_besar_lhoknga as $a) {
            Kelurahan::create([
                'kelurahan' => $a,
                'kec_code' => 36,
                'created_by' => 'Seeder',
                'updated_by' => 'Seeder',
            ]);
        }

        foreach ($aceh_besar_lhoong as $a) {
            Kelurahan::create([
                'kelurahan' => $a,
                'kec_code' => 37,
                'created_by' => 'Seeder',
                'updated_by' => 'Seeder',
            ]);
        }

        foreach ($aceh_besar_mesjid_raya as $a) {
            Kelurahan::create([
                'kelurahan' => $a,
                'kec_code' => 38,
                'created_by' => 'Seeder',
                'updated_by' => 'Seeder',
            ]);
        }

        foreach ($aceh_besar_montasik as $a) {
            Kelurahan::create([
                'kelurahan' => $a,
                'kec_code' => 39,
                'created_by' => 'Seeder',
                'updated_by' => 'Seeder',
            ]);
        }

        foreach ($aceh_besar_peukan_bada as $a) {
            Kelurahan::create([
                'kelurahan' => $a,
                'kec_code' => 40,
                'created_by' => 'Seeder',
                'updated_by' => 'Seeder',
            ]);
        }

        foreach ($aceh_besar_pulo_aceh as $a) {
            Kelurahan::create([
                'kelurahan' => $a,
                'kec_code' => 41,
                'created_by' => 'Seeder',
                'updated_by' => 'Seeder',
            ]);
        }

        foreach ($aceh_besar_seulimeum as $a) {
            Kelurahan::create([
                'kelurahan' => $a,
                'kec_code' => 42,
                'created_by' => 'Seeder',
                'updated_by' => 'Seeder',
            ]);
        }

        foreach ($aceh_besar_simpang_tiga as $a) {
            Kelurahan::create([
                'kelurahan' => $a,
                'kec_code' => 43,
                'created_by' => 'Seeder',
                'updated_by' => 'Seeder',
            ]);
        }

        foreach ($aceh_besar_suka_makmur as $a) {
            Kelurahan::create([
                'kelurahan' => $a,
                'kec_code' => 44,
                'created_by' => 'Seeder',
                'updated_by' => 'Seeder',
            ]);
        }

        foreach ($aceh_jaya_darul_hikmah as $a) {
            Kelurahan::create([
                'kelurahan' => $a,
                'kec_code' => 44,
                'created_by' => 'Seeder',
                'updated_by' => 'Seeder',
            ]);
        }

        foreach ($aceh_jaya_indra_jaya as $a) {
            Kelurahan::create([
                'kelurahan' => $a,
                'kec_code' => 45,
                'created_by' => 'Seeder',
                'updated_by' => 'Seeder',
            ]);
        }

        foreach ($aceh_jaya_jaya as $a) {
            Kelurahan::create([
                'kelurahan' => $a,
                'kec_code' => 46,
                'created_by' => 'Seeder',
                'updated_by' => 'Seeder',
            ]);
        }

        foreach ($aceh_jaya_krueng_sabee as $a) {
            Kelurahan::create([
                'kelurahan' => $a,
                'kec_code' => 47,
                'created_by' => 'Seeder',
                'updated_by' => 'Seeder',
            ]);
        }

        foreach ($aceh_jaya_panga as $a) {
            Kelurahan::create([
                'kelurahan' => $a,
                'kec_code' => 48,
                'created_by' => 'Seeder',
                'updated_by' => 'Seeder',
            ]);
        }

        foreach ($aceh_jaya_pasie_raya as $a) {
            Kelurahan::create([
                'kelurahan' => $a,
                'kec_code' => 49,
                'created_by' => 'Seeder',
                'updated_by' => 'Seeder',
            ]);
        }

        foreach ($aceh_jaya_sampoiniet as $a) {
            Kelurahan::create([
                'kelurahan' => $a,
                'kec_code' => 50,
                'created_by' => 'Seeder',
                'updated_by' => 'Seeder',
            ]);
        }

        foreach ($aceh_jaya_setia_bakti as $a) {
            Kelurahan::create([
                'kelurahan' => $a,
                'kec_code' => 51,
                'created_by' => 'Seeder',
                'updated_by' => 'Seeder',
            ]);
        }

        foreach ($aceh_jaya_teunom as $a) {
            Kelurahan::create([
                'kelurahan' => $a,
                'kec_code' => 52,
                'created_by' => 'Seeder',
                'updated_by' => 'Seeder',
            ]);
        }

        foreach ($aceh_selatan_bakongan as $a) {
            Kelurahan::create([
                'kelurahan' => $a,
                'kec_code' => 53,
                'created_by' => 'Seeder',
                'updated_by' => 'Seeder',
            ]);
        }

        foreach ($aceh_selatan_bakongan_timur as $a) {
            Kelurahan::create([
                'kelurahan' => $a,
                'kec_code' => 54,
                'created_by' => 'Seeder',
                'updated_by' => 'Seeder',
            ]);
        }

        foreach ($aceh_selatan_kluet_selatan as $a) {
            Kelurahan::create([
                'kelurahan' => $a,
                'kec_code' => 55,
                'created_by' => 'Seeder',
                'updated_by' => 'Seeder',
            ]);
        }

        foreach ($aceh_selatan_kluet_tengah as $a) {
            Kelurahan::create([
                'kelurahan' => $a,
                'kec_code' => 56,
                'created_by' => 'Seeder',
                'updated_by' => 'Seeder',
            ]);
        }

        foreach ($aceh_selatan_kluet_timur as $a) {
            Kelurahan::create([
                'kelurahan' => $a,
                'kec_code' => 57,
                'created_by' => 'Seeder',
                'updated_by' => 'Seeder',
            ]);
        }

        foreach ($aceh_selatan_kluet_utara as $a) {
            Kelurahan::create([
                'kelurahan' => $a,
                'kec_code' => 58,
                'created_by' => 'Seeder',
                'updated_by' => 'Seeder',
            ]);
        }

        foreach ($aceh_selatan_kota_bahagia as $a) {
            Kelurahan::create([
                'kelurahan' => $a,
                'kec_code' => 59,
                'created_by' => 'Seeder',
                'updated_by' => 'Seeder',
            ]);
        }

        foreach ($aceh_selatan_labuhan_haji as $a) {
            Kelurahan::create([
                'kelurahan' => $a,
                'kec_code' => 60,
                'created_by' => 'Seeder',
                'updated_by' => 'Seeder',
            ]);
        }

        foreach ($aceh_selatan_labuhan_haji_barat as $a) {
            Kelurahan::create([
                'kelurahan' => $a,
                'kec_code' => 61,
                'created_by' => 'Seeder',
                'updated_by' => 'Seeder',
            ]);
        }

        foreach ($aceh_selatan_labuhan_haji_timur as $a) {
            Kelurahan::create([
                'kelurahan' => $a,
                'kec_code' => 62,
                'created_by' => 'Seeder',
                'updated_by' => 'Seeder',
            ]);
        }

        foreach ($aceh_selatan_meukek as $a) {
            Kelurahan::create([
                'kelurahan' => $a,
                'kec_code' => 63,
                'created_by' => 'Seeder',
                'updated_by' => 'Seeder',
            ]);
        }

        foreach ($aceh_selatan_pasie_raja as $a) {
            Kelurahan::create([
                'kelurahan' => $a,
                'kec_code' => 64,
                'created_by' => 'Seeder',
                'updated_by' => 'Seeder',
            ]);
        }

        foreach ($aceh_selatan_sama_dua as $a) {
            Kelurahan::create([
                'kelurahan' => $a,
                'kec_code' => 65,
                'created_by' => 'Seeder',
                'updated_by' => 'Seeder',
            ]);
        }

        foreach ($aceh_selatan_sawang as $a) {
            Kelurahan::create([
                'kelurahan' => $a,
                'kec_code' => 66,
                'created_by' => 'Seeder',
                'updated_by' => 'Seeder',
            ]);
        }

        foreach ($aceh_selatan_tapak_tuan as $a) {
            Kelurahan::create([
                'kelurahan' => $a,
                'kec_code' => 67,
                'created_by' => 'Seeder',
                'updated_by' => 'Seeder',
            ]);
        }

        foreach ($aceh_selatan_trumon as $a) {
            Kelurahan::create([
                'kelurahan' => $a,
                'kec_code' => 68,
                'created_by' => 'Seeder',
                'updated_by' => 'Seeder',
            ]);
        }

        foreach ($aceh_selatan_trumon_tengah as $a) {
            Kelurahan::create([
                'kelurahan' => $a,
                'kec_code' => 69,
                'created_by' => 'Seeder',
                'updated_by' => 'Seeder',
            ]);
        }

        foreach ($aceh_selatan_trumon_timur as $a) {
            Kelurahan::create([
                'kelurahan' => $a,
                'kec_code' => 70,
                'created_by' => 'Seeder',
                'updated_by' => 'Seeder',
            ]);
        }

        foreach ($aceh_singkil_danau_paris as $a) {
            Kelurahan::create([
                'kelurahan' => $a,
                'kec_code' => 71,
                'created_by' => 'Seeder',
                'updated_by' => 'Seeder',
            ]);
        }

        foreach ($aceh_singkil_gunung_meriah as $a) {
            Kelurahan::create([
                'kelurahan' => $a,
                'kec_code' => 72,
                'created_by' => 'Seeder',
                'updated_by' => 'Seeder',
            ]);
        }

        foreach ($aceh_singkil_kota_baharu as $a) {
            Kelurahan::create([
                'kelurahan' => $a,
                'kec_code' => 73,
                'created_by' => 'Seeder',
                'updated_by' => 'Seeder',
            ]);
        }

        foreach ($aceh_singkil_kuala_baru as $a) {
            Kelurahan::create([
                'kelurahan' => $a,
                'kec_code' => 74,
                'created_by' => 'Seeder',
                'updated_by' => 'Seeder',
            ]);
        }

        foreach ($aceh_singkil_pulau_banyak as $a) {
            Kelurahan::create([
                'kelurahan' => $a,
                'kec_code' => 75,
                'created_by' => 'Seeder',
                'updated_by' => 'Seeder',
            ]);
        }

        foreach ($aceh_singkil_pulau_banyak_barat as $a) {
            Kelurahan::create([
                'kelurahan' => $a,
                'kec_code' => 76,
                'created_by' => 'Seeder',
                'updated_by' => 'Seeder',
            ]);
        }

        foreach ($aceh_singkil_simpang_kanan as $a) {
            Kelurahan::create([
                'kelurahan' => $a,
                'kec_code' => 77,
                'created_by' => 'Seeder',
                'updated_by' => 'Seeder',
            ]);
        }

        foreach ($aceh_singkil_singkil as $a) {
            Kelurahan::create([
                'kelurahan' => $a,
                'kec_code' => 78,
                'created_by' => 'Seeder',
                'updated_by' => 'Seeder',
            ]);
        }

        foreach ($aceh_singkil_singkil_utara as $a) {
            Kelurahan::create([
                'kelurahan' => $a,
                'kec_code' => 79,
                'created_by' => 'Seeder',
                'updated_by' => 'Seeder',
            ]);
        }

        foreach ($aceh_singkil_singkohor as $a) {
            Kelurahan::create([
                'kelurahan' => $a,
                'kec_code' => 80,
                'created_by' => 'Seeder',
                'updated_by' => 'Seeder',
            ]);
        }

        foreach ($aceh_singkil_suro_makmur as $a) {
            Kelurahan::create([
                'kelurahan' => $a,
                'kec_code' => 81,
                'created_by' => 'Seeder',
                'updated_by' => 'Seeder',
            ]);
        }

        foreach ($aceh_tamiang_banda_mulia as $a) {
            Kelurahan::create([
                'kelurahan' => $a,
                'kec_code' => 82,
                'created_by' => 'Seeder',
                'updated_by' => 'Seeder',
            ]);
        }

        foreach ($aceh_tamiang_bandar_pusaka as $a) {
            Kelurahan::create([
                'kelurahan' => $a,
                'kec_code' => 83,
                'created_by' => 'Seeder',
                'updated_by' => 'Seeder',
            ]);
        }

        foreach ($aceh_tamiang_bendahara as $a) {
            Kelurahan::create([
                'kelurahan' => $a,
                'kec_code' => 84,
                'created_by' => 'Seeder',
                'updated_by' => 'Seeder',
            ]);
        }

        foreach ($aceh_tamiang_karang_baru as $a) {
            Kelurahan::create([
                'kelurahan' => $a,
                'kec_code' => 85,
                'created_by' => 'Seeder',
                'updated_by' => 'Seeder',
            ]);
        }

        foreach ($aceh_tamiang_kejuruan_muda as $a) {
            Kelurahan::create([
                'kelurahan' => $a,
                'kec_code' => 86,
                'created_by' => 'Seeder',
                'updated_by' => 'Seeder',
            ]);
        }

        foreach ($aceh_tamiang_kota_kuala_simpang as $a) {
            Kelurahan::create([
                'kelurahan' => $a,
                'kec_code' => 87,
                'created_by' => 'Seeder',
                'updated_by' => 'Seeder',
            ]);
        }

        foreach ($aceh_tamiang_manyak_payed as $a) {
            Kelurahan::create([
                'kelurahan' => $a,
                'kec_code' => 88,
                'created_by' => 'Seeder',
                'updated_by' => 'Seeder',
            ]);
        }

        foreach ($aceh_tamiang_rantau as $a) {
            Kelurahan::create([
                'kelurahan' => $a,
                'kec_code' => 89,
                'created_by' => 'Seeder',
                'updated_by' => 'Seeder',
            ]);
        }

        foreach ($aceh_tamiang_sekerak as $a) {
            Kelurahan::create([
                'kelurahan' => $a,
                'kec_code' => 90,
                'created_by' => 'Seeder',
                'updated_by' => 'Seeder',
            ]);
        }

        foreach ($aceh_tamiang_seruway as $a) {
            Kelurahan::create([
                'kelurahan' => $a,
                'kec_code' => 91,
                'created_by' => 'Seeder',
                'updated_by' => 'Seeder',
            ]);
        }

        foreach ($aceh_tamiang_tamiang_hulu as $a) {
            Kelurahan::create([
                'kelurahan' => $a,
                'kec_code' => 92,
                'created_by' => 'Seeder',
                'updated_by' => 'Seeder',
            ]);
        }

        foreach ($aceh_tamiang_tenggulun as $a) {
            Kelurahan::create([
                'kelurahan' => $a,
                'kec_code' => 93,
                'created_by' => 'Seeder',
                'updated_by' => 'Seeder',
            ]);
        }

        foreach ($aceh_tengah_atu_lintang as $a) {
            Kelurahan::create([
                'kelurahan' => $a,
                'kec_code' => 94,
                'created_by' => 'Seeder',
                'updated_by' => 'Seeder',
            ]);
        }

        foreach ($aceh_tengah_bebesen as $a) {
            Kelurahan::create([
                'kelurahan' => $a,
                'kec_code' => 95,
                'created_by' => 'Seeder',
                'updated_by' => 'Seeder',
            ]);
        }

        foreach ($aceh_tengah_bies as $a) {
            Kelurahan::create([
                'kelurahan' => $a,
                'kec_code' => 96,
                'created_by' => 'Seeder',
                'updated_by' => 'Seeder',
            ]);
        }

        foreach ($aceh_tengah_bintang as $a) {
            Kelurahan::create([
                'kelurahan' => $a,
                'kec_code' => 97,
                'created_by' => 'Seeder',
                'updated_by' => 'Seeder',
            ]);
        }

        foreach ($aceh_tengah_celala as $a) {
            Kelurahan::create([
                'kelurahan' => $a,
                'kec_code' => 98,
                'created_by' => 'Seeder',
                'updated_by' => 'Seeder',
            ]);
        }

        foreach ($aceh_tengah_jagong_jeget as $a) {
            Kelurahan::create([
                'kelurahan' => $a,
                'kec_code' => 99,
                'created_by' => 'Seeder',
                'updated_by' => 'Seeder',
            ]);
        }

        foreach ($aceh_tengah_kebayakan as $a) {
            Kelurahan::create([
                'kelurahan' => $a,
                'kec_code' => 100,
                'created_by' => 'Seeder',
                'updated_by' => 'Seeder',
            ]);
        }

        foreach ($aceh_tengah_ketol as $a) {
            Kelurahan::create([
                'kelurahan' => $a,
                'kec_code' => 101,
                'created_by' => 'Seeder',
                'updated_by' => 'Seeder',
            ]);
        }

        foreach ($aceh_tengah_kute_panang as $a) {
            Kelurahan::create([
                'kelurahan' => $a,
                'kec_code' => 102,
                'created_by' => 'Seeder',
                'updated_by' => 'Seeder',
            ]);
        }

        foreach ($aceh_tengah_linge as $a) {
            Kelurahan::create([
                'kelurahan' => $a,
                'kec_code' => 103,
                'created_by' => 'Seeder',
                'updated_by' => 'Seeder',
            ]);
        }

        foreach ($aceh_tengah_laut_tawar as $a) {
            Kelurahan::create([
                'kelurahan' => $a,
                'kec_code' => 104,
                'created_by' => 'Seeder',
                'updated_by' => 'Seeder',
            ]);
        }

        foreach ($aceh_tengah_pegasing as $a) {
            Kelurahan::create([
                'kelurahan' => $a,
                'kec_code' => 105,
                'created_by' => 'Seeder',
                'updated_by' => 'Seeder',
            ]);
        }

        foreach ($aceh_tengah_rusip_antara as $a) {
            Kelurahan::create([
                'kelurahan' => $a,
                'kec_code' => 106,
                'created_by' => 'Seeder',
                'updated_by' => 'Seeder',
            ]);
        }

        foreach ($aceh_tengah_silih_nara as $a) {
            Kelurahan::create([
                'kelurahan' => $a,
                'kec_code' => 107,
                'created_by' => 'Seeder',
                'updated_by' => 'Seeder',
            ]);
        }

        foreach ($aceh_tenggara_babul_makmur as $a) {
            Kelurahan::create([
                'kelurahan' => $a,
                'kec_code' => 108,
                'created_by' => 'Seeder',
                'updated_by' => 'Seeder',
            ]);
        }

        foreach ($aceh_tenggara_babul_rahmah as $a) {
            Kelurahan::create([
                'kelurahan' => $a,
                'kec_code' => 109,
                'created_by' => 'Seeder',
                'updated_by' => 'Seeder',
            ]);
        }

        foreach ($aceh_tenggara_babussalam as $a) {
            Kelurahan::create([
                'kelurahan' => $a,
                'kec_code' => 110,
                'created_by' => 'Seeder',
                'updated_by' => 'Seeder',
            ]);
        }

        foreach ($aceh_tenggara_badar as $a) {
            Kelurahan::create([
                'kelurahan' => $a,
                'kec_code' => 111,
                'created_by' => 'Seeder',
                'updated_by' => 'Seeder',
            ]);
        }

        foreach ($aceh_tenggara_bambel as $a) {
            Kelurahan::create([
                'kelurahan' => $a,
                'kec_code' => 112,
                'created_by' => 'Seeder',
                'updated_by' => 'Seeder',
            ]);
        }

        foreach ($aceh_tenggara_bukit_tusam as $a) {
            Kelurahan::create([
                'kelurahan' => $a,
                'kec_code' => 113,
                'created_by' => 'Seeder',
                'updated_by' => 'Seeder',
            ]);
        }

        foreach ($aceh_tenggara_darul_hasanah as $a) {
            Kelurahan::create([
                'kelurahan' => $a,
                'kec_code' => 114,
                'created_by' => 'Seeder',
                'updated_by' => 'Seeder',
            ]);
        }

        foreach ($aceh_tenggara_deleng_phokisen as $a) {
            Kelurahan::create([
                'kelurahan' => $a,
                'kec_code' => 115,
                'created_by' => 'Seeder',
                'updated_by' => 'Seeder',
            ]);
        }

        foreach ($aceh_tenggara_ketambe as $a) {
            Kelurahan::create([
                'kelurahan' => $a,
                'kec_code' => 116,
                'created_by' => 'Seeder',
                'updated_by' => 'Seeder',
            ]);
        }

        foreach ($aceh_tenggara_lawe_alas as $a) {
            Kelurahan::create([
                'kelurahan' => $a,
                'kec_code' => 117,
                'created_by' => 'Seeder',
                'updated_by' => 'Seeder',
            ]);
        }

        foreach ($aceh_tenggara_lawe_bulan as $a) {
            Kelurahan::create([
                'kelurahan' => $a,
                'kec_code' => 118,
                'created_by' => 'Seeder',
                'updated_by' => 'Seeder',
            ]);
        }

        foreach ($aceh_tenggara_lawe_bulan as $a) {
            Kelurahan::create([
                'kelurahan' => $a,
                'kec_code' => 119,
                'created_by' => 'Seeder',
                'updated_by' => 'Seeder',
            ]);
        }

        foreach ($aceh_tenggara_lawe_sumur as $a) {
            Kelurahan::create([
                'kelurahan' => $a,
                'kec_code' => 120,
                'created_by' => 'Seeder',
                'updated_by' => 'Seeder',
            ]);
        }

        foreach ($aceh_tenggara_leuser as $a) {
            Kelurahan::create([
                'kelurahan' => $a,
                'kec_code' => 121,
                'created_by' => 'Seeder',
                'updated_by' => 'Seeder',
            ]);
        }

        foreach ($aceh_tenggara_semadam as $a) {
            Kelurahan::create([
                'kelurahan' => $a,
                'kec_code' => 122,
                'created_by' => 'Seeder',
                'updated_by' => 'Seeder',
            ]);
        }

        foreach ($aceh_tenggara_tanah_alas as $a) {
            Kelurahan::create([
                'kelurahan' => $a,
                'kec_code' => 123,
                'created_by' => 'Seeder',
                'updated_by' => 'Seeder',
            ]);
        }
    }
}

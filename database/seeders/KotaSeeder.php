<?php

namespace Database\Seeders;

use App\Models\Kota;
use Illuminate\Database\Seeder;

class KotaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $aceh = [
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

        $sumatera_utara = [
            "Kab. Asahan",
            "Kab. Batu Bara",
            "Kab. Dairi",
            "Kab. Deli Serdang",
            "Kab. Humbang Hasundutan",
            "Kab. Karo",
            "Kab. Labuhanbatu",
            "Kab. Labuhanbatu Selatan",
            "Kab. Labuhanbatu Utara",
            "Kab. Langkat",
            "Kab. Mandailing Natal",
            "Kab. Nias",
            "Kab. Nias Barat",
            "Kab. Nias Selatan",
            "Kab. Nias Utara",
            "Kab. Padang Lawas",
            "Kab. Padang Lawas Utara",
            "Kab. Pakpak Bharat",
            "Kab. Samosir",
            "Kab. Serdang Bedagai",
            "Kab. Tapanuli Selatan",
            "Kab. Tapanuli Tengah",
            "Kab. Tapanuli Utara",
            "Kab. Toba",
            "Kota Binjai",
            "Kota Gunungsitoli",
            "Kota Medan",
            "Kota Padang Sidempuan",
            "Kota Pematangsiantar",
            "Kota Sibolga",
            "Kota Tanjungbalai",
            "Kota Tebing Tinggi",
        ];

        $sumatera_selatan = [
            "Kab. Banyuasin",
            "Kab. Empat Lawang",
            "Kab. Lahat",
            "Kab. Muara Enim",
            "Kab. Musi Banyuasin",
            "Kab. Musi Rawas",
            "Kab. Musi Rawas Utara",
            "Kab. Ogan Ilir",
            "Kab. Ogan Komering Ilir",
            "Kab. Ogan Komering Ulu",
            "Kab. Ogan Komering Ulu Selatan",
            "Kab. Ogan Komering Ulu Timur",
            "Kab. Penukal Abab Lematang Ilir",
            "Kota Lubuklinggau",
            "Kota Pagar Alam",
            "Kota Palembang",
            "Kota Prabumulih",
        ];

        $sumatera_barat = [
            "Kab. Agam",
            "Kab. Dharmasraya",
            "Kab. Kepulauan Mentawai",
            "Kab. Lima Puluh Kota",
            "Kab. Padang Pariaman",
            "Kab. Pasaman",
            "Kab. Pasaman Barat",
            "Kab. Pesisir Selatan",
            "Kab. Sijunjung",
            "Kab. Solok",
            "Kab. Solok Selatan",
            "Kab. Tanah Datar",
            "Kota Bukittinggi",
            "Kota Padang",
            "Kota Padang Panjang",
            "Kota Pariaman",
            "Kota Payakumbuh",
            "Kota Sawahlunto",
            "Kota Solok",
        ];

        $bengkulu = [
            "Kab. Bengkulu Selatan",
            "Kab. Bengkulu Tengah",
            "Kab. Bengkulu Utara",
            "Kab. Kaur",
            "Kab. Kepahiang",
            "Kab. Lebong",
            "Kab. Mukomuko",
            "Kab. Rejang Lebong",
            "Kab. Seluma",
            "Kota Bengkulu",
        ];

        $riau = [
            "Kab. Bengkalis",
            "Kab. Indragiri Hilir",
            "Kab. Indragiri Hulu",
            "Kab. Kampar",
            "Kab. Kepulauan Meranti",
            "Kab. Kuantan Singingi",
            "Kab. Pelalawan",
            "Kab. Rokan Hilir",
            "Kab. Rokan Hulu",
            "Kab. Siak",
            "Kota Dumai",
            "Kota Pekanbaru",
        ];

        $kepulauan_riau = [
            "Kab. Bintan",
            "Kab. Karimun",
            "Kab. Kepulauan Anambas",
            "Kab. Lingga",
            "Kab. Natuna",
            "Kota Batam",
            "Kota Tanjungpinang",
        ];

        $jambi = [
            "Kab. Batanghari",
            "Kab. Bungo",
            "Kab. Kerinci",
            "Kab. Merangin",
            "Kab. Muaro Jambi",
            "Kab. Sarolangun",
            "Kab. Tanjung Jabung Barat",
            "Kab. Tanjung Jabung Timur",
            "Kab. Tebo",
            "Kota Jambi",
            "Kota Sungai Penuh",
        ];

        $lampung = [
            "Kab. Lampung Barat",
            "Kab. Lampung Selatan",
            "Kab. Lampung Tengah",
            "Kab. Lampung Timur",
            "Kab. Lampung Utara",
            "Kab. Mesuji",
            "Kab. Pesawaran",
            "Kab. Pesisir Barat",
            "Kab. Pringsewu",
            "Kab. Tanggamus",
            "Kab. Tulang Bawang",
            "Kab. Tulang Bawang Barat",
            "Kab. Way Kanan",
            "Kota Bandar Lampung",
            "Kota Metro",
        ];

        $bangka_belitung = [
            "Kab. Bangka",
            "Kab. Bangka Barat",
            "Kab. Bangka Selatan",
            "Kab. Bangka Tengah",
            "Kab. Belitung",
            "Kab. Belitung Timur",
            "Kota Pangkalpinang",
        ];

        $kalimantan_barat = [
            "Kab. Bengkayang",
            "Kab. Kapuas Hulu",
            "Kab. Kayong Utara",
            "Kab. Ketapang",
            "Kab. Kubu Raya",
            "Kab. Landak",
            "Kab. Melawi",
            "Kab. Mempawah",
            "Kab. Sambas",
            "Kab. Sanggau",
            "Kab. Sekadau",
            "Kab. Sintang",
            "Kota Pontianak",
            "Kota Singkawang",
        ];

        $kalimantan_timur = [
            "Kab. Berau",
            "Kab. Kutai Barat",
            "Kab. Kutai Kartanegara",
            "Kab. Kutai Timur",
            "Kab. Mahakam Ulu",
            "Kab. Paser",
            "Kab. Penajam Paser Utara",
            "Kota Balikpapan",
            "Kota Bontang",
            "Kota Samarinda",
        ];

        $kalimantan_selatan = [
            "Kab. Balangan",
            "Kab. Banjar",
            "Kab. Barito Kuala",
            "Kab. Hulu Sungai Selatan",
            "Kab. Hulu Sungai Tengah",
            "Kab. Hulu Sungai Utara",
            "Kab. Kotabaru",
            "Kab. Tabalong",
            "Kab. Tanah Bumbu",
            "Kab. Tanah Laut",
            "Kab. Tapin",
            "Kota Banjarbaru",
            "Kota Banjarmasin",
        ];

        $kalimantan_tengah = [
            "Kab. Barito Selatan",
            "Kab. Barito Timur",
            "Kab. Barito Utara",
            "Kab. Gunung Mas",
            "Kab. Kapuas",
            "Kab. Katingan",
            "Kab. Kotawaringin Barat",
            "Kab. Kotawaringin Timur",
            "Kab. Lamandau",
            "Kab. Murung Raya",
            "Kab. Pulang Pisau",
            "Kab. Sukamara",
            "Kab. Seruyan",
            "Kota Palangka Raya",
        ];

        $kalimantan_utara = [
            "Kab. Bulungan",
            "Kab. Malinau",
            "Kab. Nunukan",
            "Kab. Tidung",
            "Kota Tarakan",
        ];

        $banten = [
            "Kab. Lebak",
            "Kab. Pandeglang",
            "Kab. Serang",
            "Kab. Tangerang",
            "Kota Cilegon",
            "Kota Serang",
            "Kota Tangerang",
            "Kota Tangerang Selatan",
        ];

        $jakarta = [
            "Kab. Kepulauan Seribu",
            "Kota Jakarta Barat",
            "Kota Jakarta Pusat",
            "Kota Jakarta Selatan",
            "Kota Jakarta Timur",
            "Kota Jakarta Utara",
        ];

        $jawa_barat = [
            "Kab. Bandung",
            "Kab. Bandung Barat",
            "Kab. Bekasi",
            "Kab. Bogor",
            "Kab. Ciamis",
            "Kab. Cianjur",
            "Kab. Cirebon",
            "Kab. Garut",
            "Kab. Indramayu",
            "Kab. Karawang",
            "Kab. Kuningan",
            "Kab. Majalengka",
            "Kab. Pangandaran",
            "Kab. Purwakarta",
            "Kab. Subang",
            "Kab. Sukabumi",
            "Kab. Sumedang",
            "Kab. Tasikmalaya",
            "Kota Bandung",
            "Kota Banjar",
            "Kota Bekasi",
            "Kota Bogor",
            "Kota Cimahi",
            "Kota Depok",
            "Kota Sukabumi",
            "Kota Tasikmalaya",
        ];

        $jawa_tengah = [
            "Kab. Banjarnegara",
            "Kab. Banyumas",
            "Kab. Batang",
            "Kab. Blora",
            "Kab. Boyolali",
            "Kab. Brebes",
            "Kab. Cilacap",
            "Kab. Demak",
            "Kab. Grobogan",
            "Kab. Jepara",
            "Kab. Karanganyar",
            "Kab. Kebumen",
            "Kab. Kendal",
            "Kab. Klaten",
            "Kab. Kudus",
            "Kab. Magelang",
            "Kab. Pati",
            "Kab. Pekalongan",
            "Kab. Pemalang",
            "Kab. Purbalingga",
            "Kab. Purworejo",
            "Kab. Rembang",
            "Kab. Semarang",
            "Kab. Sragen",
            "Kab. Sukoharjo",
            "Kab. Tegal",
            "Kab. Temanggung",
            "Kab. Wonogiri",
            "Kab. Wonosobo",
            "Kota Magelang",
            "Kota Pekalongan",
            "Kota Salatiga",
            "Kota Semarang",
            "Kota Surakarta",
            "Kota Tegal",
        ];

        $yogyakarta = [
            "Kab. Bantul",
            "Kab. Gunungkidul",
            "Kab. Kulon Progo",
            "Kab. Sleman",
            "Kota Yogyakarta",
        ];

        $jawa_timur = [
            "Kab. Bangkalan",
            "Kab. Banyuwangi",
            "Kab. Blitar",
            "Kab. Bojonegoro",
            "Kab. Bondowoso",
            "Kab. Gresik",
            "Kab. Jember",
            "Kab. Jombang",
            "Kab. Kediri",
            "Kab. Lamongan",
            "Kab. Lumajang",
            "Kab. Madiun",
            "Kab. Magetan",
            "Kab. Malang",
            "Kab. Mojokerto",
            "Kab. Nganjuk",
            "Kab. Ngawi",
            "Kab. Pacitan",
            "Kab. Pamekasan",
            "Kab. Pasuruan",
            "Kab. Ponorogo",
            "Kab. Probolinggo",
            "Kab. Sampang",
            "Kab. Sidoarjo",
            "Kab. Situbondo",
            "Kab. Sumenep",
            "Kab. Trenggalek",
            "Kab. Tuban",
            "Kab. Tulungagung",
            "Kota Batu",
            "Kota Blitar",
            "Kota Kediri",
            "Kota Madiun",
            "Kota Malang",
            "Kota Mojokerto",
            "Kota Pasuruan",
            "Kota Probolinggo",
            "Kota Surabaya",
        ];

        $bali = [
            "Kab. Badung",
            "Kab. Bangli",
            "Kab. Buleleng",
            "Kab. Gianyar",
            "Kab. Jembrana",
            "Kab. Karangasem",
            "Kab. Klungkung",
            "Kab. Tabanan",
            "Kota Denpasar",
        ];

        $ntt = [
            "Kab. Alor",
            "Kab. Belu",
            "Kab. Ende",
            "Kab. Flores Timur",
            "Kab. Kupang",
            "Kab. Lembata",
            "Kab. Malaka",
            "Kab. Manggarai",
            "Kab. Manggarai Barat",
            "Kab. Manggarai Timur",
            "Kab. Nagekeo",
            "Kab. Ngada",
            "Kab. Rote Ndao",
            "Kab. Sabu Raijua",
            "Kab. Sikka",
            "Kab. Sumba Barat",
            "Kab. Sumba Barat Daya",
            "Kab. Sumba Tengah",
            "Kab. Sumba Timur",
            "Kab. Timor Tengah Selatan",
            "Kab. Timor Tengah Utara",
            "Kota Kupang",
        ];

        $ntb = [
            "Kab. Bima",
            "Kab. Dompu",
            "Kab. Lombok Barat",
            "Kab. Lombok Tengah",
            "Kab. Lombok Timur",
            "Kab. Lombok Utara",
            "Kab. Sumbawa",
            "Kab. Sumbawa Barat",
            "Kota Bima",
            "Kota Mataram",
        ];

        $gorontalo = [
            "Kab. Boalemo",
            "Kab. Bone Bolango",
            "Kab. Gorontalo",
            "Kab. Gorontalo Utara",
            "Kab. Pohuwato",
            "Kota Gorontalo",
        ];

        $sulawesi_barat = [
            "Kab. Majene",
            "Kab. Mamasa",
            "Kab. Mamuju",
            "Kab. Mamuju Tengah",
            "Kab. Pasangkayu",
            "Kab. Polewali Mandar",
        ];

        $sulawesi_tengah = [
            "Kab. Banggai",
            "Kab. Banggai Kepulauan",
            "Kab. Banggai Laut",
            "Kab. Buol",
            "Kab. Donggala",
            "Kab. Morowali",
            "Kab. Morowali Utara",
            "Kab. Parigi Moutong",
            "Kab. Poso",
            "Kab. Sigi",
            "Kab. Tojo Una-Una",
            "Kab. Tolitoli",
            "Kota Palu",
        ];

        $sulawesi_utara = [
            "Kab. Bolaang Mongondow",
            "Kab. Bolaang Mongondow Selatan",
            "Kab. Bolaang Mongondow Timur",
            "Kab. Bolaang Mongondow Utara",
            "Kab. Kepulauan Sangihe",
            "Kab. Kepulauan Siau Tagulandang Biaro",
            "Kab. Kepulauan Talaud",
            "Kab. Minahasa",
            "Kab. Minahasa Selatan",
            "Kab. Minahasa Tenggara",
            "Kab. Minahasa Utara",
            "Kota Bitung",
            "Kota Kotamobagu",
            "Kota Manado",
            "Kota Tomohon",
        ];

        $sulawesi_tenggara = [
            "Kab. Bombana",
            "Kab. Buton",
            "Kab. Buton Selatan",
            "Kab. Buton Tengah",
            "Kab. Buton Utara",
            "Kab. Kolaka",
            "Kab. Kolaka Timur",
            "Kab. Kolaka Utara",
            "Kab. Konawe",
            "Kab. Konawe Kepulauan",
            "Kab. Konawe Selatan",
            "Kab. Konawe Utara",
            "Kab. Muna",
            "Kab. Muna Barat",
            "Kab. Wakatobi",
            "Kota Baubau",
            "Kota Kendari",
        ];

        $sulawesi_selatan = [
            "Kab. Bantaeng",
            "Kab. Barru",
            "Kab. Bone",
            "Kab. Bulukumba",
            "Kab. Enrekang",
            "Kab. Gowa",
            "Kab. Jeneponto",
            "Kab. Kepulauan Selayar",
            "Kab. Luwu",
            "Kab. Luwu Timur",
            "Kab. Luwu Utara",
            "Kab. Maros",
            "Kab. Pangkajene dan Kepulauan",
            "Kab. Pinrang",
            "Kab. Sidenreng Rappang",
            "Kab. Sinjai",
            "Kab. Soppeng",
            "Kab. Takalar",
            "Kab. Tana Toraja",
            "Kab. Toraja Utara",
            "Kab. Wajo",
            "Kota Makassar",
            "Kota Palopo",
            "Kota Parepare",
        ];

        $maluku_utara = [
            "Kab. Halmahera Barat",
            "Kab. Halmahera Tengah",
            "Kab. Halmahera Timur",
            "Kab. Halmahera Selatan",
            "Kab. Halmahera Utara",
            "Kab. Kepulauan Sula",
            "Kab. Pulau Morotai",
            "Kab. Pulau Taliabu",
            "Kota Ternate",
            "Kota Tidore Kepulauan",
        ];

        $maluku = [
            "Kab. Buru",
            "Kab. Buru Selatan",
            "Kab. Kepulauan Aru",
            "Kab. Kepulauan Tanimbar",
            "Kab. Maluku Barat Daya",
            "Kab. Maluku Tengah",
            "Kab. Maluku Tenggara",
            "Kab. Seram Bagian Barat",
            "Kab. Seram Bagian Timur",
            "Kota Ambon",
            "Kota Tual",
        ];

        $papua_barat = [
            "Kab. Fakfak",
            "Kab. Kaimana",
            "Kab. Manokwari",
            "Kab. Manokwari Selatan",
            "Kab. Pegunungan Arfak",
            "Kab. Teluk Bintuni",
            "Kab. Teluk Wondama",
        ];

        $papua = [
            "Kab. Biak Numfor",
            "Kab. Jayapura",
            "Kab. Keerom",
            "Kab. Kepulauan Yapen",
            "Kab. Mamberamo Raya",
            "Kab. Sarmi",
            "Kab. Supiori",
            "Kab. Waropen",
            "Kota Jayapura",
        ];

        $papua_tengah = [
            "Kab. Deiyai",
            "Kab. Dogiyai",
            "Kab. Intan Jaya",
            "Kab. Mimika",
            "Kab. Nabire",
            "Kab. Paniai",
            "Kab. Puncak",
            "Kab. Puncak Jaya",
        ];

        $papua_pegunungan = [
            "Kab. Jayawijaya",
            "Kab. Lanny Jaya",
            "Kab. Mamberamo Tengah",
            "Kab. Nduga",
            "Kab. Pegunungan Bintang",
            "Kab. Tolikara",
            "Kab. Yalimo",
            "Kab. Yahukimo",
        ];

        $papua_selatan = [
            "Kab. Asmat",
            "Kab. Boven Digoel",
            "Kab. Mappi",
            "Kab. Merauke",
        ];

        $papua_barat_daya = [
            "Kab. Maybrat",
            "Kab. Raja Ampat",
            "Kab. Sorong",
            "Kab. Sorong Selatan",
            "Kab. Tambrauw",
            "Kota Sorong",
        ];

        // Aceh
        foreach ($aceh as $a) {
            Kota::create([
                'kota' => $a,
                'prov_code' => 1,
                'created_by' => 'Seeder',
                'updated_by' => 'Seeder',
            ]);
        }

        // Sumatera Utara
        foreach ($sumatera_utara as $a) {
            Kota::create([
                'kota' => $a,
                'prov_code' => 2,
                'created_by' => 'Seeder',
                'updated_by' => 'Seeder',
            ]);
        }

        // Sumatera Selatan
        foreach ($sumatera_selatan as $a) {
            Kota::create([
                'kota' => $a,
                'prov_code' => 3,
                'created_by' => 'Seeder',
                'updated_by' => 'Seeder',
            ]);
        }

        // Sumatera Barat
        foreach ($sumatera_barat as $a) {
            Kota::create([
                'kota' => $a,
                'prov_code' => 4,
                'created_by' => 'Seeder',
                'updated_by' => 'Seeder',
            ]);
        }

        // Bengkulu
        foreach ($bengkulu as $a) {
            Kota::create([
                'kota' => $a,
                'prov_code' => 5,
                'created_by' => 'Seeder',
                'updated_by' => 'Seeder',
            ]);
        }

        // Riau
        foreach ($riau as $a) {
            Kota::create([
                'kota' => $a,
                'prov_code' => 6,
                'created_by' => 'Seeder',
                'updated_by' => 'Seeder',
            ]);
        }

        // Kepulauan Riau
        foreach ($kepulauan_riau as $a) {
            Kota::create([
                'kota' => $a,
                'prov_code' => 7,
                'created_by' => 'Seeder',
                'updated_by' => 'Seeder',
            ]);
        }

        // Jambi
        foreach ($jambi as $a) {
            Kota::create([
                'kota' => $a,
                'prov_code' => 8,
                'created_by' => 'Seeder',
                'updated_by' => 'Seeder',
            ]);
        }

        // Lampung
        foreach ($lampung as $a) {
            Kota::create([
                'kota' => $a,
                'prov_code' => 9,
                'created_by' => 'Seeder',
                'updated_by' => 'Seeder',
            ]);
        }

        // Bangka Belitung
        foreach ($bangka_belitung as $a) {
            Kota::create([
                'kota' => $a,
                'prov_code' => 10,
                'created_by' => 'Seeder',
                'updated_by' => 'Seeder',
            ]);
        }

        // Kalimantan Barat
        foreach ($kalimantan_barat as $a) {
            Kota::create([
                'kota' => $a,
                'prov_code' => 11,
                'created_by' => 'Seeder',
                'updated_by' => 'Seeder',
            ]);
        }

        // Kalimantan Timur
        foreach ($kalimantan_timur as $a) {
            Kota::create([
                'kota' => $a,
                'prov_code' => 12,
                'created_by' => 'Seeder',
                'updated_by' => 'Seeder',
            ]);
        }

        // Kalimantan Selatan
        foreach ($kalimantan_selatan as $a) {
            Kota::create([
                'kota' => $a,
                'prov_code' => 13,
                'created_by' => 'Seeder',
                'updated_by' => 'Seeder',
            ]);
        }

        // Kalimantan Tengah
        foreach ($kalimantan_tengah as $a) {
            Kota::create([
                'kota' => $a,
                'prov_code' => 14,
                'created_by' => 'Seeder',
                'updated_by' => 'Seeder',
            ]);
        }

        // Kalimantan Utara
        foreach ($kalimantan_utara as $a) {
            Kota::create([
                'kota' => $a,
                'prov_code' => 15,
                'created_by' => 'Seeder',
                'updated_by' => 'Seeder',
            ]);
        }

        // Banten
        foreach ($banten as $a) {
            Kota::create([
                'kota' => $a,
                'prov_code' => 16,
                'created_by' => 'Seeder',
                'updated_by' => 'Seeder',
            ]);
        }

        // Jakarta
        foreach ($jakarta as $a) {
            Kota::create([
                'kota' => $a,
                'prov_code' => 17,
                'created_by' => 'Seeder',
                'updated_by' => 'Seeder',
            ]);
        }

        // Jawa Barat
        foreach ($jawa_barat as $a) {
            Kota::create([
                'kota' => $a,
                'prov_code' => 18,
                'created_by' => 'Seeder',
                'updated_by' => 'Seeder',
            ]);
        }

        // Jawa Tengah
        foreach ($jawa_tengah as $a) {
            Kota::create([
                'kota' => $a,
                'prov_code' => 19,
                'created_by' => 'Seeder',
                'updated_by' => 'Seeder',
            ]);
        }

        // Jawa Timur
        foreach ($jawa_timur as $a) {
            Kota::create([
                'kota' => $a,
                'prov_code' => 20,
                'created_by' => 'Seeder',
                'updated_by' => 'Seeder',
            ]);
        }

        // Bali
        foreach ($bali as $a) {
            Kota::create([
                'kota' => $a,
                'prov_code' => 21,
                'created_by' => 'Seeder',
                'updated_by' => 'Seeder',
            ]);
        }

        // NTT
        foreach ($ntt as $a) {
            Kota::create([
                'kota' => $a,
                'prov_code' => 22,
                'created_by' => 'Seeder',
                'updated_by' => 'Seeder',
            ]);
        }

        // NTB
        foreach ($ntb as $a) {
            Kota::create([
                'kota' => $a,
                'prov_code' => 23,
                'created_by' => 'Seeder',
                'updated_by' => 'Seeder',
            ]);
        }

        // Gorontalo
        foreach ($gorontalo as $a) {
            Kota::create([
                'kota' => $a,
                'prov_code' => 24,
                'created_by' => 'Seeder',
                'updated_by' => 'Seeder',
            ]);
        }

        // Sulawesi Barat
        foreach ($sulawesi_barat as $a) {
            Kota::create([
                'kota' => $a,
                'prov_code' => 25,
                'created_by' => 'Seeder',
                'updated_by' => 'Seeder',
            ]);
        }

        // Sulawesi Tengah
        foreach ($sulawesi_tengah as $a) {
            Kota::create([
                'kota' => $a,
                'prov_code' => 26,
                'created_by' => 'Seeder',
                'updated_by' => 'Seeder',
            ]);
        }

        // Sulawesi Utara
        foreach ($sulawesi_utara as $a) {
            Kota::create([
                'kota' => $a,
                'prov_code' => 27,
                'created_by' => 'Seeder',
                'updated_by' => 'Seeder',
            ]);
        }

        // Sulawesi Tenggara
        foreach ($sulawesi_tenggara as $a) {
            Kota::create([
                'kota' => $a,
                'prov_code' => 28,
                'created_by' => 'Seeder',
                'updated_by' => 'Seeder',
            ]);
        }

        // Sulawesi Selatan
        foreach ($sulawesi_selatan as $a) {
            Kota::create([
                'kota' => $a,
                'prov_code' => 29,
                'created_by' => 'Seeder',
                'updated_by' => 'Seeder',
            ]);
        }

        // Maluku Utara
        foreach ($maluku_utara as $a) {
            Kota::create([
                'kota' => $a,
                'prov_code' => 30,
                'created_by' => 'Seeder',
                'updated_by' => 'Seeder',
            ]);
        }

        // Maluku
        foreach ($maluku as $a) {
            Kota::create([
                'kota' => $a,
                'prov_code' => 31,
                'created_by' => 'Seeder',
                'updated_by' => 'Seeder',
            ]);
        }

        // Papua Barat
        foreach ($papua_barat as $a) {
            Kota::create([
                'kota' => $a,
                'prov_code' => 32,
                'created_by' => 'Seeder',
                'updated_by' => 'Seeder',
            ]);
        }

        // Papua
        foreach ($papua as $a) {
            Kota::create([
                'kota' => $a,
                'prov_code' => 33,
                'created_by' => 'Seeder',
                'updated_by' => 'Seeder',
            ]);
        }

        // Papua Tengah
        foreach ($papua_tengah as $a) {
            Kota::create([
                'kota' => $a,
                'prov_code' => 34,
                'created_by' => 'Seeder',
                'updated_by' => 'Seeder',
            ]);
        }

        // Papua Pegunungan
        foreach ($papua_pegunungan as $a) {
            Kota::create([
                'kota' => $a,
                'prov_code' => 35,
                'created_by' => 'Seeder',
                'updated_by' => 'Seeder',
            ]);
        }

        // Papua Selatan
        foreach ($papua_selatan as $a) {
            Kota::create([
                'kota' => $a,
                'prov_code' => 36,
                'created_by' => 'Seeder',
                'updated_by' => 'Seeder',
            ]);
        }

        // Papua Barat Daya
        foreach ($papua_barat_daya as $a) {
            Kota::create([
                'kota' => $a,
                'prov_code' => 37,
                'created_by' => 'Seeder',
                'updated_by' => 'Seeder',
            ]);
        }

        // Yogyakarta
        foreach ($yogyakarta as $a) {
            Kota::create([
                'kota' => $a,
                'prov_code' => 38,
                'created_by' => 'Seeder',
                'updated_by' => 'Seeder',
            ]);
        }
    }
}

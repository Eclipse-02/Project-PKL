<?php

namespace Database\Seeders\Test;

use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use App\Models\Master\RegisterPackage as MasterRegisterPackage;

class RegisterPackageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MasterRegisterPackage::create([
            "coy_id" => "1",
            "id" => Str::uuid(),
            "appl_no" => "1ORD231000000001",
            "pkg_code" => "1",
            "appl_st" => "NW",
            "appl_date" => Carbon::now(),
            "appl_name" => "Joko",
            "appl_gender" => "1",
            "appl_title" => "MR",
            "appl_id_type" => "1",
            "appl_id_no" => "1234567890123456",
            "appl_birth_place" => "Jakarta",
            "appl_birth_date" => "2001-07-22",
            "appl_addr" => "liuk",
            "prov_code" => "1",
            "kota_code" => "1",
            "kec_code" => "1",
            "kel_code" => "1",
            "appl_status" => "1",
            "con_code" => "1",
            "edu_code" => "1",
            "job_code" => "1",
            "appl_fth_name" => "Budi",
            "rel_code" => "1",
            "appl_mahram" => "asd",
            "appl_pass_no" => "24236334",
            "appl_pass_name" => "asnjkfsad",
            "appl_pass_iss_date" => "2023-09-12",
            "appl_pass_exp_date" => "2023-09-12",
            "appl_pass_iss_place" => "dfhfds",
            "appl_vac_name_id" => "adsagre",
            "vc_code_01" => "1",
            "appl_vac_id_date_01" => "2023-09-12",
            "vc_code_02" => "1",
            "appl_vac_id_date_02" => "2023-09-06",
            "vc_code_03" => "1",
            "appl_vac_id_date_03" => "2023-09-26",
            "vc_code_04" => "1",
            "appl_vac_id_date_04" => "2023-09-22",
            "appl_tlp" => "12423234",
            "appl_email" => "jokotaro@gmail.com",
            "appl_is_img_full" => "Y",
            "appl_is_img_half" => "Y",
            "appl_is_pass" => "Y",
            "appl_is_yb" => "Y",
            "supl_code" => "1",
            "appl_is_copy_id" => "Y",
            "appl_is_copy_kk" => "Y",
            "appl_is_copy_pass" => "Y",
            "appl_is_copy_akta_n" => "Y",
            "appl_is_copy_akta_l" => "Y",
            "appl_is_img_full_name" => "default.jpg",
            "appl_is_img_half_name" => "default.jpg",
            "appl_is_pass_name" => "default.jpg",
            "appl_is_copy_pass_name" => "default.jpg",
            "appl_is_yb_name" => "default.jpg",
            "appl_is_id_name" => "default.jpg",
            "appl_is_kk_name" => "default.jpg",
            "appl_is_akta_n_name" => "default.jpg",
            "appl_is_akta_l_name" => "default.jpg",
            "appl_posting_date" => "",
            "created_by" => "Seeder",
            "updated_by" => "Seeder"
        ]);
    }
}
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('appl_trn_reg', function (Blueprint $table) {
            $table->string('coy_id', 5);
            $table->uuid('id');
            $table->string('appl_no', 30);
            $table->string('pkg_code', 30);
            $table->string('appl_st', 2)->default('NW');
            $table->date('appl_date');
            $table->string('appl_name', 60);
            $table->string('appl_gender', 1);
            $table->string('appl_title', 5);
            $table->string('appl_id_type', 1);
            $table->string('appl_id_no', 60);
            $table->string('appl_birth_place', 60);
            $table->date('appl_birth_date');
            $table->string("prov_code", 5);
            $table->string("kota_code", 5);
            $table->string("kec_code", 5);
            $table->string("kel_code", 5);
            $table->string("zip_code", 5);
            $table->string('appl_status', 1);
            $table->string("con_code", 5);
            $table->string("edu_code", 5);
            $table->string("job_code", 5);
            $table->string("branch_code", 5);
            $table->string("appl_fth_name", 60);
            $table->string("rel_code", 5);
            $table->string("appl_mahram", 60);
            $table->string("appl_pass_no", 30);
            $table->string("appl_pass_name", 60);
            $table->date("appl_pass_iss_date");
            $table->date("appl_pass_exp_date");
            $table->string("appl_pass_iss_palace", 30);
            $table->string("appl_vac_name_id", 60);
            $table->string("vc_code_01", 5);
            $table->date("appl_vac_id_date_01");
            $table->string("vc_code_02", 5);
            $table->date("appl_vac_id_date_02");
            $table->string("vc_code_03", 5);
            $table->date("appl_vac_id_date_03");
            $table->string("vc_code_04", 5);
            $table->date("appl_vac_id_date_04");
            $table->string("appl_tlp", 30);
            $table->string("appl_email", 60);
            $table->string("appl_is_img_full", 1);
            $table->string("appl_is_img_half", 1);
            $table->string("appl_is_pass", 1);
            $table->string("appl_is_yb", 1);
            $table->string("supl_code", 5);
            $table->string("appl_is_copy_id", 1);
            $table->string("appl_is_copy_kk", 1);
            $table->string("appl_is_copy_pass", 1);
            $table->string("appl_is_copy_akta_n", 1);
            $table->string("appl_is_copy_akta_l", 1);
            $table->binary("appl_is_img_full_name");
            $table->binary("appl_is_img_half_name");
            $table->binary("appl_is_pass_name");
            $table->binary("appl_is_yb_name");
            $table->binary("appl_is_id_name");
            $table->binary("appl_is_kk_name");
            $table->binary("appl_is_akta_n_name");
            $table->binary("appl_is_akta_l_name");
            $table->string("created_by", 12);
            $table->string("updated_by", 15);
            $table->timestamps();
            $table->foreign("coy_id")->references('coy_id')->on('coys')->onDelete('cascade');
            $table->foreign("prov_code")->references('prov_code')->on('provinsis')->onDelete('cascade');
            $table->foreign("kota_code")->references('kota_code')->on('kotas')->onDelete('cascade');
            $table->foreign("kec_code")->references('kec_code')->on('kecamatans')->onDelete('cascade');
            $table->foreign("kel_code")->references('kel_code')->on('kelurahans')->onDelete('cascade');
            $table->foreign("zip_code")->references('zip_code')->on('zips')->onDelete('cascade');
            $table->foreign("con_code")->references('con_code')->on('countries')->onDelete('cascade');
            $table->foreign("job_code")->references('job_code')->on('jobs')->onDelete('cascade');
            $table->foreign("edu_code")->references('edu_code')->on('edus')->onDelete('cascade');
            $table->foreign("rel_code")->references('rel_code')->on('relations')->onDelete('cascade');
            $table->foreign("supl_code")->references('supl_code')->on('suppliers')->onDelete('cascade');
            $table->foreign("branch_code")->references('branch_code')->on('branches')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appl_trn_reg');
    }
};

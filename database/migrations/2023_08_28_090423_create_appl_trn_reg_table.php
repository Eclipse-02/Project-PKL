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
            $table->string('coy_id', 5)->nullable();
            $table->uuid('id');
            $table->string('appl_no', 30)->primary();
            $table->string('pkg_code', 30)->nullable();
            $table->string('appl_st', 2)->default('NW');
            $table->date('appl_date')->nullable();
            $table->string('appl_name', 60)->nullable();
            $table->string('appl_gender', 1)->nullable();
            $table->string('appl_title', 5)->nullable();
            $table->string('appl_id_type', 1);
            $table->string('appl_id_no', 60);
            $table->string('appl_birth_place', 60)->nullable();
            $table->date('appl_birth_date')->nullable();
            $table->string("appl_addr", 200)->nullable();
            $table->string("prov_code", 3)->nullable();
            $table->string("kota_code", 4)->nullable();
            $table->string("kec_code", 7)->nullable();
            $table->string("kel_code", 10)->nullable();
            $table->string('appl_status', 1)->nullable();
            $table->string("con_code", 5)->nullable();
            $table->string("edu_code", 5)->nullable();
            $table->string("job_code", 5)->nullable();
            $table->string("appl_fth_name", 60)->nullable();
            $table->string("rel_code", 5)->nullable();
            $table->string("appl_mahram", 60)->nullable();
            $table->string("appl_pass_no", 30);
            $table->string("appl_pass_name", 60);
            $table->date("appl_pass_iss_date");
            $table->date("appl_pass_exp_date");
            $table->string("appl_pass_iss_place", 30);
            $table->string("appl_vac_name_id", 60)->nullable();
            $table->string("vc_code_01", 5)->nullable();
            $table->date("appl_vac_id_date_01")->nullable();
            $table->string("vc_code_02", 5)->nullable();
            $table->date("appl_vac_id_date_02")->nullable();
            $table->string("vc_code_03", 5)->nullable();
            $table->date("appl_vac_id_date_03")->nullable();
            $table->string("vc_code_04", 5)->nullable();
            $table->date("appl_vac_id_date_04")->nullable();
            $table->string("appl_tlp", 30)->nullable();
            $table->string("appl_email", 60)->nullable();
            $table->string("appl_is_img_full", 1)->nullable();
            $table->string("appl_is_img_half", 1)->nullable();
            $table->string("appl_is_pass", 1)->nullable();
            $table->string("appl_is_yb", 1)->nullable();
            $table->string("supl_code", 5)->nullable();
            $table->string("appl_is_copy_id", 1)->nullable();
            $table->string("appl_is_copy_kk", 1)->nullable();
            $table->string("appl_is_copy_pass", 1)->nullable();
            $table->string("appl_is_copy_akta_n", 1)->nullable();
            $table->string("appl_is_copy_akta_l", 1)->nullable();
            $table->string("appl_is_img_full_name", 32)->nullable();
            $table->string("appl_is_img_half_name", 32)->nullable();
            $table->string("appl_is_pass_name", 32)->nullable();
            $table->string("appl_is_copy_pass_name", 32)->nullable();
            $table->string("appl_is_yb_name", 32)->nullable();
            $table->string("appl_is_id_name", 32)->nullable();
            $table->string("appl_is_kk_name", 32)->nullable();
            $table->string("appl_is_akta_n_name", 32)->nullable();
            $table->string("appl_is_akta_l_name", 32)->nullable();
            $table->date('appl_posting_date')->nullable();
            $table->string("created_by", 12);
            $table->string("updated_by", 15);
            $table->timestamps();
            $table->foreign("coy_id")->references('coy_id')->on('coys')->onDelete('cascade');
            $table->foreign("pkg_code")->references('pkg_code')->on('appl_trn_pkg')->onDelete('cascade');
            $table->foreign("prov_code")->references('prov_code')->on('provinsis')->onDelete('cascade');
            $table->foreign("kota_code")->references('kota_code')->on('kotas')->onDelete('cascade');
            $table->foreign("kec_code")->references('kec_code')->on('kecamatans')->onDelete('cascade');
            $table->foreign("kel_code")->references('kel_code')->on('kelurahans')->onDelete('cascade');
            $table->foreign("con_code")->references('con_code')->on('countries')->onDelete('cascade');
            $table->foreign("job_code")->references('job_code')->on('jobs')->onDelete('cascade');
            $table->foreign("edu_code")->references('edu_code')->on('edus')->onDelete('cascade');
            $table->foreign("rel_code")->references('rel_code')->on('relations')->onDelete('cascade');
            $table->foreign("supl_code")->references('supl_code')->on('suppliers')->onDelete('cascade');
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

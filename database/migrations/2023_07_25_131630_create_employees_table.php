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
        Schema::create('employees', function (Blueprint $table) {
            $table->id("coy_id");
            $table->uuid("id");
            $table->string("empl_id");
            $table->string("empl_branch"); // fs_mst_branch
            $table->string("empl_nik");
            $table->string("empl_name");
            $table->string("position_code"); // fs_mst_position
            $table->string("empl_up_level"); // fs_mst_employees
            $table->string("empl_status");
            $table->date("empl_eff_date");
            $table->string("empl_email");
            $table->string("empl_addr");
            $table->string("empl_tlp_area");
            $table->string("empl_tlp");
            $table->string("empl_hp01");
            $table->string("empl_hp02");
            $table->unsignedBigInteger("prov_code"); // fs_mst_provinsi
            $table->unsignedBigInteger("kota_code"); // fs_mst_kota
            $table->unsignedBigInteger("kec_code"); // fs_mst_kecamatan
            $table->unsignedBigInteger("kel_code"); // fs_mst_kelurahan
            $table->integer("zip_code"); // fs_mst_zip
            $table->string("created_by");
            $table->string("updated_by");
            $table->timestamps();
            $table->foreign("prov_code")->references('prov_code')->on('provinsis')->onDelete('cascade');
            $table->foreign("kota_code")->references('kota_code')->on('kotas')->onDelete('cascade');
            $table->foreign("kec_code")->references('kec_code')->on('kecamatans')->onDelete('cascade');
            $table->foreign("kel_code")->references('kel_code')->on('kelurahans')->onDelete('cascade');
        });

        // Schema::create('employees', function (Blueprint $table) {
        //     $table->foreign("empl_branch")->references('branch_code')->on('branches')->onDelete('cascade');
        // });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};

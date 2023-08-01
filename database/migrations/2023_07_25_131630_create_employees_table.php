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
        Schema::create('fs_mst_employees', function (Blueprint $table) {
            $table->id("coy_id");
            $table->string("empl_id");
            $table->string("empl_branch"); // fs_mst_branch
            $table->string("empl_nik");
            $table->string("empl_name"); // fs_mst_kota
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
            $table->string("prov_code"); // fs_mst_provinsi
            $table->string("kota_code"); // fs_mst_kota
            $table->string("kec_code"); // fs_mst_kecamatan
            $table->string("kel_code"); // fs_mst_kelurahan
            $table->string("zip_code"); // fs_mst_zip
            $table->string("created_by");
            $table->string("updated_by");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fs_mst_employees');
    }
};

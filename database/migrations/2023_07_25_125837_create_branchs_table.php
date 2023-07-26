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
        Schema::create('fs_mst_branch', function (Blueprint $table) {
            $table->string("coy_id")->primary();
            $table->string("branch_code");
            $table->string("branch_name");
            $table->string("branch_addr");
            $table->string("branch_tlp_area");
            $table->string("branch_tlp");
            $table->string("branch_hp01");
            $table->string("branch_hp02");
            $table->string("prov_code"); // fs_mst_provinsi
            $table->string("kota_code"); // fs_mst_kota
            $table->string("kec_code"); // fs_mst_kecamatan
            $table->string("kel_code"); // fs_mst_kelurahan
            $table->string("zip_code"); // fs_mst_zip
            $table->string("branch_type");
            $table->string("area_code"); // fs_mst_area
            $table->boolean("is_active")->nullable();
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
        Schema::dropIfExists('fs_mst_branch');
    }
};

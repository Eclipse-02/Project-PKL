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
        Schema::create('branches', function (Blueprint $table) {
            $table->id("coy_id");
            $table->uuid("id");
            $table->string("branch_code", 5);
            $table->string("branch_name", 60);
            $table->string("branch_addr", 200);
            $table->string("branch_tlp_area", 5);
            $table->string("branch_tlp", 6);
            $table->string("branch_hp01", 10);
            $table->string("branch_hp02", 10);
            $table->unsignedBigInteger("prov_code"); // fs_mst_provinsi
            $table->unsignedBigInteger("kota_code"); // fs_mst_kota
            $table->unsignedBigInteger("kec_code"); // fs_mst_kecamatan
            $table->unsignedBigInteger("kel_code"); // fs_mst_kelurahan
            $table->string("zip_code", 5); // fs_mst_zip
            $table->string("branch_type", 2);
            $table->string("area_code", 5); // fs_mst_area
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
        Schema::dropIfExists('branches');
    }
};

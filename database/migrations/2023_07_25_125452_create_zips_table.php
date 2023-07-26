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
        Schema::create('fs_mst_zip', function (Blueprint $table) {
            $table->string("zip_code")->primary();
            $table->string("sub_zip_code");
            $table->string("zip_desc");
            $table->string("prov_code"); // fs_mst_provinsi
            $table->string("kota_code"); // fs_mst_kota
            $table->string("kec_code"); // fs_mst_kecamatan
            $table->string("kel_code"); // fs_mst_kelurahan
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
        Schema::dropIfExists('fs_mst_zip');
    }
};

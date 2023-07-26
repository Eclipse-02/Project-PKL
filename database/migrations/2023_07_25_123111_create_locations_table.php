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
        Schema::create('fs_mst_provinsi', function (Blueprint $table) {
            $table->string("prov_code")->primary();
            $table->string("provinsi");
            $table->boolean("is_active")->nullable();
            $table->string("created_by");
            $table->string("updated_by");
            $table->timestamps();
        });

        Schema::create('fs_mst_kota', function (Blueprint $table) {
            $table->string("kota_code")->primary();
            $table->string("kota");
            $table->string("prov_code"); // fs_mst_provinsi
            $table->boolean("is_active")->nullable();
            $table->string("created_by");
            $table->string("updated_by");
            $table->timestamps();
        });

        Schema::create('fs_mst_kecamatan', function (Blueprint $table) {
            $table->string("kec_code")->primary();
            $table->string("kecamatan");
            $table->string("kota_code"); // fs_mst_kota
            $table->boolean("is_active")->nullable();
            $table->string("created_by");
            $table->string("updated_by");
            $table->timestamps();
        });

        Schema::create('fs_mst_kelurahan', function (Blueprint $table) {
            $table->string("kel_code")->primary();
            $table->string("kelurahan");
            $table->string("kec_code"); // fs_mst_kecamatan
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
        Schema::dropIfExists('fs_mst_provinsi');
        Schema::dropIfExists('fs_mst_kota');
        Schema::dropIfExists('fs_mst_kecamatan');
        Schema::dropIfExists('fs_mst_kelurahan');
    }
};

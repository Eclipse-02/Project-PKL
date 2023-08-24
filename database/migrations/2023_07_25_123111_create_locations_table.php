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
        Schema::create('provinsis', function (Blueprint $table) {
            $table->string('prov_code', 5)->unique()->primary();
            $table->uuid('id');
            $table->string("provinsi", 100);
            $table->string("is_active", 1)->nullable();
            $table->string("created_by");
            $table->string("updated_by");
            $table->timestamps();
        });

        Schema::create('kotas', function (Blueprint $table) {
            $table->string("kota_code", 5)->unique()->primary();
            $table->uuid("id");
            $table->string("kota", 100);
            $table->string('prov_code', 5);
            $table->string("is_active", 1)->nullable();
            $table->string("created_by");
            $table->string("updated_by");
            $table->timestamps();
            $table->foreign("prov_code")->references('prov_code')->on('provinsis')->onDelete('cascade'); // fs_mst_provinsi
        });

        Schema::create('kecamatans', function (Blueprint $table) {
            $table->string("kec_code", 5)->unique()->primary();
            $table->uuid("id");
            $table->string("kecamatan", 100);
            $table->string('kota_code', 5);
            $table->string("is_active", 1)->nullable();
            $table->string("created_by");
            $table->string("updated_by");
            $table->timestamps();
            $table->foreign("kota_code")->references('kota_code')->on('kotas')->onDelete('cascade'); // fs_mst_provinsi// fs_mst_kota
        });

        Schema::create('kelurahans', function (Blueprint $table) {
            $table->string("kel_code", 5)->unique()->primary();
            $table->uuid("id");
            $table->string("kelurahan", 100);
            $table->string('kec_code', 5);
            $table->string("is_active", 1)->nullable();
            $table->string("created_by");
            $table->string("updated_by");
            $table->timestamps();
            $table->foreign("kec_code")->references('kec_code')->on('kecamatans')->onDelete('cascade'); // fs_mst_kecamatan
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('provinsis');
        Schema::dropIfExists('kotas');
        Schema::dropIfExists('kecamatans');
        Schema::dropIfExists('kelurahans');
    }
};

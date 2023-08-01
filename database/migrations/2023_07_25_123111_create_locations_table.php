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
            $table->id('prov_code');
            $table->string("provinsi");
            $table->boolean("is_active")->nullable();
            $table->string("created_by")->nullable();
            $table->string("updated_by")->nullable();
            $table->timestamps();
        });

        Schema::create('kotas', function (Blueprint $table) {
            $table->id("kota_code");
            $table->string("kota");
            $table->unsignedBigInteger('prov_code');
            $table->boolean("is_active")->nullable();
            $table->string("created_by");
            $table->string("updated_by");
            $table->timestamps();
            $table->foreign("prov_code")->references('prov_code')->on('provinsis')->onDelete('cascade'); // fs_mst_provinsi
        });

        Schema::create('kecamatans', function (Blueprint $table) {
            $table->id("kec_code");
            $table->string("kecamatan");
            $table->unsignedBigInteger('kota_code')->unsigned();
            $table->boolean("is_active")->nullable();
            $table->string("created_by");
            $table->string("updated_by");
            $table->timestamps();
            $table->foreign("kota_code")->references('kota_code')->on('kotas')->onDelete('cascade'); // fs_mst_provinsi// fs_mst_kota
        });

        Schema::create('kelurahans', function (Blueprint $table) {
            $table->id("kel_code");
            $table->string("kelurahan");
            $table->unsignedBigInteger('kec_code')->unsigned();
            $table->boolean("is_active")->nullable();
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

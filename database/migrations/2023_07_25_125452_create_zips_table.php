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
        Schema::create('zips', function (Blueprint $table) {
            $table->string("zip_code", 5);
            $table->uuid("id");
            $table->string("sub_zip_code", 5);
            $table->string("zip_desc", 100);
            $table->unsignedBigInteger("prov_code"); // fs_mst_provinsi
            $table->unsignedBigInteger("kota_code"); // fs_mst_kota
            $table->unsignedBigInteger("kec_code"); // fs_mst_kecamatan
            $table->unsignedBigInteger("kel_code"); // fs_mst_kelurahan
            $table->boolean("is_active")->nullable()->default(0);
            $table->string("created_by");
            $table->string("updated_by");
            $table->timestamps();
            $table->foreign("prov_code")->references('prov_code')->on('provinsis')->onDelete('cascade');
            $table->foreign("kota_code")->references('kota_code')->on('kotas')->onDelete('cascade');
            $table->foreign("kec_code")->references('kec_code')->on('kecamatans')->onDelete('cascade');
            $table->foreign("kel_code")->references('kel_code')->on('kelurahans')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('zips');
    }
};

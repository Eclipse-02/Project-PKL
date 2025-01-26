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
            $table->string("prov_code", 3); // fs_mst_provinsi
            $table->string("kota_code", 4); // fs_mst_kota
            $table->string("kec_code", 7); // fs_mst_kecamatan
            $table->string("kel_code", 10); // fs_mst_kelurahan
            $table->string("is_active", 1)->nullable()->default(0);
            $table->string("created_by");
            $table->string("updated_by");
            $table->timestamps();
            // $table->primary(['zip_code', 'sub_zip_code']);
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

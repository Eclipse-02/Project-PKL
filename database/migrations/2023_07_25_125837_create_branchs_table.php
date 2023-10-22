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
            $table->string("coy_id", 5);
            $table->uuid("id");
            $table->string("branch_code", 5)->primary();
            $table->string("branch_name", 60);
            $table->string("branch_addr", 200);
            $table->string("branch_tlp_area", 5);
            $table->string("branch_tlp", 6);
            $table->string("branch_hp01", 10);
            $table->string("branch_hp02", 10);
            $table->string("prov_code", 5); // fs_mst_provinsi
            $table->string("kota_code", 5); // fs_mst_kota
            $table->string("kec_code", 5); // fs_mst_kecamatan
            $table->string("kel_code", 5); // fs_mst_kelurahan
            $table->string("zip_code", 5); // fs_mst_zip
            $table->string("branch_type", 2);
            $table->string("area_code", 5); // fs_mst_area
            $table->string("is_active", 1)->nullable();
            $table->string("created_by");
            $table->string("updated_by");
            $table->timestamps();
            $table->foreign("coy_id")->references('coy_id')->on('coys')->onDelete('cascade');
            $table->foreign("prov_code")->references('prov_code')->on('provinsis')->onDelete('cascade');
            $table->foreign("kota_code")->references('kota_code')->on('kotas')->onDelete('cascade');
            $table->foreign("kec_code")->references('kec_code')->on('kecamatans')->onDelete('cascade');
            $table->foreign("kel_code")->references('kel_code')->on('kelurahans')->onDelete('cascade');
            $table->foreign("zip_code")->references('zip_code')->on('zips')->onDelete('cascade');
            // $table->foreign("area_code")->references("area_code")->on('areas')->onDelete('cascade');
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

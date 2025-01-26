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
        Schema::create('coys', function (Blueprint $table) {
            $table->string("coy_id", 5)->primary();
            $table->uuid('id');
            $table->string('coy_name', 100);
            $table->string('coy_addr', 150);
            $table->string('empl_tlp_area', 5)->nullable();
            $table->string('empl_tlp', 6)->nullable();
            $table->string('empl_hp01', 10)->nullable();
            $table->string('empl_hp02', 10)->nullable();
            $table->string('prov_code', 3)->nullable();
            $table->string('kota_code', 4)->nullable();
            $table->string('kec_code', 7)->nullable();
            $table->string('kel_code', 10)->nullable();
            $table->string('zip_code', 5)->nullable();
            $table->string("created_by");
            $table->string("updated_by");
            $table->timestamps();
            $table->foreign("prov_code")->references('prov_code')->on('provinsis')->onDelete('cascade');
            $table->foreign("kota_code")->references('kota_code')->on('kotas')->onDelete('cascade');
            $table->foreign("kec_code")->references('kec_code')->on('kecamatans')->onDelete('cascade');
            $table->foreign("kel_code")->references('kel_code')->on('kelurahans')->onDelete('cascade');
            // $table->foreign("zip_code")->references('zip_code')->on('zips')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('coys');
    }
};

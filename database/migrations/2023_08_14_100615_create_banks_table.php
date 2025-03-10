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
        Schema::create('banks', function (Blueprint $table) {
            $table->string("coy_id", 5);
            $table->uuid('id');
            $table->string('bank_code', 5)->primary();
            $table->string('bank_name', 100);
            $table->string('bank_branch', 100);
            $table->string('is_active', 1)->nullable();
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
            $table->foreign("coy_id")->references('coy_id')->on('coys')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('banks');
    }
};

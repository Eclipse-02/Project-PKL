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
        Schema::create('fin_mst_pcash', function (Blueprint $table) {
            $table->string('coy_id', 5);
            $table->string('trxdtl_code', 30)->primary();
            $table->uuid('id');
            $table->string('status', 2)->default('N')->nullable();
            $table->string("created_by", 12);
            $table->string("updated_by", 15);
            $table->timestamps();
            $table->foreign("trxdtl_code")->references('trxdtl_code')->on('fin_mst_trxdtl')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fin_mst_pcash');
    }
};

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
        Schema::create('fin_mst_invdtl', function (Blueprint $table) {
            $table->string('coy_id', 5);
            $table->uuid('id');
            $table->string('invmst_code', 30)->primary();
            $table->string('trxdtl_code', 30);
            $table->string('status', 2)->nullable();
            $table->string("created_by", 12);
            $table->string("updated_by", 15);
            $table->timestamps();
            $table->foreign("invmst_code")->references('invmst_code')->on('fin_mst_invhdr')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign("trxdtl_code")->references('trxdtl_code')->on('fin_mst_trxdtl')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fin_mst_invdtl');
    }
};

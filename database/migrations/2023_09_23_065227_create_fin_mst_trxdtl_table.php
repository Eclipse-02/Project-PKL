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
        Schema::create('fin_mst_trxdtl', function (Blueprint $table) {
            $table->string('coy_id', 5);
            $table->string('trxdtl_code', 30)->primary();
            $table->uuid('id');
            $table->string('trxdtl_desc', 100)->nullable();
            $table->string('trxdtl_flag', 1)->nullable();
            $table->string('trxdtl_param', 10)->nullable();
            $table->string('trxdtl_segment1', 30)->nullable();
            $table->string('trxdtl_segment2', 30)->nullable();
            $table->string('trxdtl_segment3', 30)->nullable();
            $table->string('trxdtl_segment4', 30)->nullable();
            $table->string('trxdtl_segment5', 30)->nullable();
            $table->string('trxdtl_segment6', 30)->nullable();
            $table->string('trxdtl_segment7', 30)->nullable();
            $table->string('trxdtl_segment8', 30)->nullable();
            $table->string('trxdtl_segment9', 30)->nullable();
            $table->string('trxdtl_segment10', 30)->nullable();
            $table->string('trxdtl_segment11', 30)->nullable();
            $table->string('trxdtl_segment12', 30)->nullable();
            $table->string('trxdtl_by_isshare', 1)->nullable();
            $table->string("created_by", 12);
            $table->string("updated_by", 15);
            $table->timestamps();
            $table->foreign("trxdtl_param")->references('param_code')->on('fin_mst_trxhdr')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fin_mst_trxdtl');
    }
};

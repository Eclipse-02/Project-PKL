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
        Schema::create('fin_mst_rvhdr', function (Blueprint $table) {
            $table->string('coy_id', 5);
            $table->string('rvmst_code', 30)->primary();
            $table->uuid('id');
            $table->string('rvmst_disply_code', 30)->nullable();
            $table->string('rvmst_desc', 100)->nullable();
            $table->string('rvmst_type', 1)->nullable();
            $table->string('rvmst_gl_category', 100)->nullable();
            $table->string('rvmst_auto', 1)->default('N')->nullable();
            $table->string('rvmst_status', 2)->default('Y')->nullable();
            $table->string("created_by", 12);
            $table->string("updated_by", 15);
            $table->timestamps();
            $table->string('rvmst_exec_func', 255)->nullable();
            $table->foreign("rvmst_code")->references('trx_code')->on('fin_mst_trx')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fin_mst_rvhdr');
    }
};

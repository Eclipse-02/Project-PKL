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
        Schema::create('fin_mst_invhdr', function (Blueprint $table) {
            $table->string('coy_id', 5);
            $table->string('invmst_code', 30)->primary();
            $table->uuid('id');
            $table->string('invmst_display_code', 30)->nullable();
            $table->string('invmst_desc', 100)->nullable();
            $table->string('invmst_gl_category', 100)->nullable();
            $table->string('invmst_auto', 1)->default('N')->nullable();
            $table->string('invmst_jurnal_on_paid', 1)->default('N')->nullable();
            $table->string('invmst_status', 2)->default('Y')->nullable();
            $table->string("created_by", 12);
            $table->string("updated_by", 15);
            $table->timestamps();
            $table->foreign("invmst_code")->references('trx_code')->on('fin_mst_trx')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fin_mst_rvdtl');
    }
};

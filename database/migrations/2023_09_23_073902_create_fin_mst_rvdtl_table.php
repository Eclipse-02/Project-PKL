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
        Schema::create('fin_mst_rvdtl', function (Blueprint $table) {
            $table->string('coy_id', 5);
            $table->uuid('id');
            $table->string('rmst_code', 30)->unique();
            $table->string('trxdtl_code', 30)->unique();
            $table->string('status', 2);
            $table->string("created_by", 12);
            $table->string("updated_by", 15);
            $table->timestamps();
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

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
        Schema::create('appl_trn_pkg_dtls', function (Blueprint $table) {
            $table->string('coy_id', 5);
            $table->uuid('id');
            $table->string('pkg_code', 30)->primary();
            $table->integer('dtl_sq_no');
            $table->string('dtl_desc', 200);
            $table->bigInteger('dtl_price');
            $table->string('pkg_status', 2)->default('NW');
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
        Schema::dropIfExists('appl_trn_pkg_dtls');
    }
};

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
        Schema::create('appl_trn_pkg', function (Blueprint $table) {
            $table->string('coy_id', 5);
            $table->uuid('id');
            $table->string('pkg_code', 30);
            $table->string('pkg_name', 60);
            $table->string('pkg_desc', 200);
            $table->integer('pkg_price');
            $table->integer('pkg_price_limit');
            $table->integer('pkg_price_agent');
            $table->date('pkg_start');
            $table->date('pkg_closed');
            $table->string('pkg_image', 100);
            $table->string('pkg_status', 2)->default('NW');
            $table->string('pkg_is_display', 1)->default('N');
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
        Schema::dropIfExists('appl_trn_pkg');
    }
};

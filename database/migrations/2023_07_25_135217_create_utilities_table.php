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
        Schema::create('utilities', function (Blueprint $table) {
            $table->string("coy_id", 5);
            $table->uuid("id");
            $table->string("seqn_code", 4)->primary();
            $table->string("branch_code", 5); // fs_mst_branch
            $table->bigInteger("start_value");
            $table->bigInteger("last_value");
            $table->bigInteger("max_value");
            $table->integer("increment_by");
            $table->string("description", 50);
            $table->string("is_cycle", 1)->default('M');
            $table->string("created_by");
            $table->string("updated_by");
            $table->timestamps();
            $table->foreign("coy_id")->references('coy_id')->on('coys')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('utilities');
    }
};

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
            $table->id("coy_id");
            $table->uuid("id");
            $table->string("branch_code", 5); // fs_mst_branch
            $table->bigInteger("start_value");
            $table->bigInteger("last_value");
            $table->bigInteger("max_value");
            $table->integer("increment_by");
            $table->string("description", 50);
            $table->boolean("is_cycle")->nullable();
            $table->string("created_by");
            $table->string("updated_by");
            $table->timestamps();
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

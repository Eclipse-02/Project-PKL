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
        Schema::create('edus', function (Blueprint $table) {
            $table->string("coy_id", 5);
            $table->uuid('id');
            $table->string('edu_code', 5)->unique();
            $table->string('edu_name', 100);
            $table->string('is_active', 1)->nullable();
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
        Schema::dropIfExists('edus');
    }
};

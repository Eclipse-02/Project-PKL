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
            $table->id('coy_id');
            $table->uuid('id');
            $table->string('edu_code', 5);
            $table->string('edu_name', 100);
            $table->boolean('is_active');
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
        Schema::dropIfExists('edus');
    }
};

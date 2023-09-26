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
        Schema::create('gl_period', function (Blueprint $table) {
            $table->string('coy_id', 5);
            $table->string('period_name', 6)->unique();
            $table->uuid('id');
            $table->string('period_status', 2);
            $table->string('period_year', 4);
            $table->string('period_num', 2);
            $table->date('period_start_date');
            $table->date('period_end_date');
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
        Schema::dropIfExists('gl_period');
    }
};

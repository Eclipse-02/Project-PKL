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
        Schema::create('supplier_sub_types', function (Blueprint $table) {
            $table->string('sub_code', 5);
            $table->uuid('id');
            $table->string('sub_name', 100);
            $table->string('is_active', 1)->nullable();
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
        Schema::dropIfExists('supl_sub_types');
    }
};

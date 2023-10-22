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
        Schema::create('supplier_accs', function (Blueprint $table) {
            $table->string("coy_id", 5);
            $table->uuid('id');
            $table->string('supl_code', 10)->primary();
            $table->string('bank_code', 5);
            $table->string('acc_no', 30)->nullable();
            $table->string('acc_name', 100)->nullable();
            $table->string('acc_desc', 200)->nullable();
            $table->string('acc_curr', 4)->nullable();
            $table->string('acc_status', 2)->nullable();
            $table->string("created_by");
            $table->string("updated_by");
            $table->timestamps();
            $table->foreign("supl_code")->references('supl_code')->on('suppliers')->onDelete('cascade');
            $table->foreign("coy_id")->references('coy_id')->on('coys')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('supplier_accs');
    }
};

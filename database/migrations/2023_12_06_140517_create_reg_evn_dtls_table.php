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
        Schema::create('reg_evn_dtls', function (Blueprint $table) {
            $table->string('coy_id', 5);
            $table->uuid('id');
            $table->string('evn_code', 30);
            $table->integer('dtl_sq_no');
            $table->string('dtl_desc', 200);
            $table->bigInteger('dtl_unit_price');
            $table->integer('dtl_qty');
            $table->bigInteger('dtl_price');
            $table->string("created_by", 12);
            $table->string("updated_by", 15);
            $table->timestamps();
            $table->primary(['evn_code', 'dtl_sq_no']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reg_evn_dtls');
    }
};

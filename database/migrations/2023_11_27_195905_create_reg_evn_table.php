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
        Schema::create('reg_evn', function (Blueprint $table) {
            $table->string('coy_id', 5);
            $table->uuid('id');
            $table->string('pkg_code', 30);
            $table->string('evn_code', 30)->primary();
            $table->string('evn_status', 2);
            $table->string('evn_name', 60);
            $table->date('evn_date');
            $table->string('evn_addr', 200);
            $table->string('evn_npwp_no', 16);
            $table->string('evn_contact', 60);
            $table->string('evn_tlp_no', 30);
            $table->string("created_by", 12);
            $table->string("updated_by", 15);
            $table->timestamps();
            $table->foreign("pkg_code")->references('pkg_code')->on('appl_trn_pkg')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invoices');
    }
};

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
        Schema::create('gl_mst_account', function (Blueprint $table) {
            $table->string('coy_id', 5);
            $table->string('glacct_code', 8)->primary()->nullable();
            $table->uuid('id');
            $table->string('glacct_description', 100);
            $table->string('glacct_acct_type', 1);
            $table->string('glacct_acct_summ', 1);
            $table->string('glacct_acct_enable', 1);
            $table->string('glacct_acct_flag', 1);
            $table->string('glacct_acct_default', 30)->nullable();
            $table->string('glacct_acct_parent', 8)->nullable()->default(null);
            $table->string('glacct_rpt_flag', 1)->nullable()->default('N');
            $table->string('glacct_segment1_allow', 30)->nullable()->default('ALL');
            $table->string("created_by", 12);
            $table->string("updated_by", 15);
            $table->timestamps();
        });

        Schema::table('gl_mst_account', function (Blueprint $table) {
            $table->foreign("glacct_acct_parent")->references('glacct_code')->on('gl_mst_account')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gl_mst_account');
    }
};

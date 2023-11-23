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
        Schema::create('users', function (Blueprint $table) {
            $table->string("coy_id", 5);
            $table->uuid("id");
            $table->string("empl_id", 16)->nullable()->primary(); // fs_mst_employees
            $table->string("empl_branch", 5)->nullable(); // fs_mst_branch
            $table->timestamp("access_last")->nullable();
            $table->integer("max_session")->nullable();
            $table->timestamp("expired_pwd")->nullable();
            $table->string('name');
            $table->string('username');
            $table->string('password');
            $table->timestamp('password_change_at')->nullable();
            $table->string('copy_ktp_name')->nullable();
            $table->string('copy_npwp_name')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};

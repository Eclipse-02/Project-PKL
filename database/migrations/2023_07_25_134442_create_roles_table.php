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
        Schema::create('fs_sec_role', function (Blueprint $table) {
            $table->string("role_id")->primary();
            $table->string("role_name");
            $table->text("description");
            $table->boolean("is_active")->nullable();
            $table->string("created_by");
            $table->string("updated_by");
            $table->timestamps();
        });

        Schema::create('fs_sec_rolemenus', function (Blueprint $table) {
            $table->string("role_id")->primary(); // fs_sec_role
            $table->string("menu_id"); // fs_sec_menus
            $table->boolean("is_active")->nullable();
            $table->string("created_by");
            $table->string("updated_by");
            $table->timestamps();
        });

        Schema::create('fs_sec_userroles', function (Blueprint $table) {
            $table->string("role_id")->primary(); // fs_sec_role
            $table->string("user_id"); // fs_sec_employees
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
        Schema::dropIfExists('fs_sec_role');
        Schema::dropIfExists('fs_sec_rolemenus');
        Schema::dropIfExists('fs_sec_userroles');
    }
};

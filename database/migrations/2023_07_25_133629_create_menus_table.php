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
        Schema::create('fs_sec_menus', function (Blueprint $table) {
            $table->string("menu_id")->primary();
            $table->string("menu_desc");
            $table->string("menu_name");
            $table->tinyText("menu_type");
            $table->string("file_name");
            $table->string("menu_id_parent")->nullable(); //fs_sec_menus
            $table->boolean("is_active")->nullable();
            $table->date("started_timestamp");
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
        Schema::dropIfExists('fs_sec_menus');
    }
};

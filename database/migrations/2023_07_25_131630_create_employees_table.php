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
        Schema::create('employees', function (Blueprint $table) {
            $table->id("coy_id");
            $table->uuid("id");
            $table->string("empl_id", 10);
            $table->string("empl_branch", 5); // fs_mst_branch
            $table->string("empl_nik", 10);
            $table->string("empl_name", 30);
            $table->string("position_code", 10); // fs_mst_position
            $table->string("empl_up_level", 10)->nullable(); // fs_mst_employees
            $table->string("empl_status", 2);
            $table->date("empl_eff_date");
            $table->string("empl_email", 25);
            $table->string("empl_addr", 200)->nullable();
            $table->string("empl_tlp_area", 5)->nullable();
            $table->string("empl_tlp", 6)->nullable();
            $table->string("empl_hp01", 10)->nullable();
            $table->string("empl_hp02", 10)->nullable();
            $table->unsignedBigInteger("prov_code")->nullable(); // fs_mst_provinsi
            $table->unsignedBigInteger("kota_code")->nullable(); // fs_mst_kota
            $table->unsignedBigInteger("kec_code")->nullable(); // fs_mst_kecamatan
            $table->unsignedBigInteger("kel_code")->nullable(); // fs_mst_kelurahan
            $table->string("zip_code", 5)->nullable(); // fs_mst_zip
            $table->string("created_by");
            $table->string("updated_by");
            $table->timestamps();
            $table->foreign("prov_code")->references('prov_code')->on('provinsis')->onDelete('cascade');
            $table->foreign("kota_code")->references('kota_code')->on('kotas')->onDelete('cascade');
            $table->foreign("kec_code")->references('kec_code')->on('kecamatans')->onDelete('cascade');
            $table->foreign("kel_code")->references('kel_code')->on('kelurahans')->onDelete('cascade');
        });

        // Schema::create('employees', function (Blueprint $table) {
        //     $table->foreign("empl_branch")->references('branch_code')->on('branches')->onDelete('cascade');
        // });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};

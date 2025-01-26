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
            $table->string("coy_id", 5);
            $table->uuid("id");
            $table->string("empl_id", 10)->primary();
            $table->string("empl_branch", 5); // fs_mst_branch
            $table->string("empl_nik", 20);
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
            $table->string("prov_code", 3)->nullable(); // fs_mst_provinsi
            $table->string("kota_code", 4)->nullable(); // fs_mst_kota
            $table->string("kec_code", 7)->nullable(); // fs_mst_kecamatan
            $table->string("kel_code", 10)->nullable(); // fs_mst_kelurahan
            $table->string("zip_code", 5)->nullable(); // fs_mst_zip
            $table->string("created_by");
            $table->string("updated_by");
            $table->timestamps();
            $table->foreign("position_code")->references('poss_code')->on('positions')->onDelete('cascade');
            $table->foreign("prov_code")->references('prov_code')->on('provinsis')->onDelete('cascade');
            $table->foreign("kota_code")->references('kota_code')->on('kotas')->onDelete('cascade');
            $table->foreign("kec_code")->references('kec_code')->on('kecamatans')->onDelete('cascade');
            $table->foreign("kel_code")->references('kel_code')->on('kelurahans')->onDelete('cascade');
            // $table->foreign("zip_code")->references('zip_code')->on('zips')->onDelete('cascade');
            $table->foreign("coy_id")->references('coy_id')->on('coys')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};

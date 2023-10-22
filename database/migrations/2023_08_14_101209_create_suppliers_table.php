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
        Schema::create('suppliers', function (Blueprint $table) {
            $table->string("coy_id", 5);
            $table->uuid('id');
            $table->string('supl_code', 10)->primary();
            $table->string('branch_code', 5)->nullable();
            $table->string('is_active', 1)->nullable();
            $table->string('supl_status', 2)->default('NW')->nullable();
            $table->string('supl_name', 100);
            $table->string('supl_type', 1)->nullable();
            $table->unsignedBigInteger('supl_sub_type')->nullable();
            $table->string('supl_pic_name')->nullable();
            $table->string('poss_code', 5)->nullable();
            $table->string('supl_id_no', 100)->nullable();
            $table->string('supl_addr', 200);
            $table->string('supl_tlp_area', 5)->nullable();
            $table->string('supl_tlp', 6)->nullable();
            $table->string('supl_hp01', 10)->nullable();
            $table->string('supl_hp02', 10)->nullable();
            $table->string('prov_code', 5)->nullable();
            $table->string('kota_code', 5)->nullable();
            $table->string('kec_code', 5)->nullable();
            $table->string('kel_code', 5)->nullable();
            $table->string('zip_code', 5)->nullable();
            $table->string('supl_npwp_no', 20)->nullable();
            $table->string('supl_npwp_name', 100)->nullable();
            $table->string('supl_npwp_addr', 200);
            $table->string('supl_desc', 200)->nullable();
            $table->string('file_name_mou')->nullable();
            $table->string('file_name_ktp')->nullable();
            $table->string('file_name_npwp')->nullable();
            $table->string("created_by");
            $table->string("updated_by");
            $table->timestamps();
            $table->foreign("prov_code")->references('prov_code')->on('provinsis')->onDelete('cascade');
            $table->foreign("kota_code")->references('kota_code')->on('kotas')->onDelete('cascade');
            $table->foreign("kec_code")->references('kec_code')->on('kecamatans')->onDelete('cascade');
            $table->foreign("kel_code")->references('kel_code')->on('kelurahans')->onDelete('cascade');
            $table->foreign("zip_code")->references('kel_code')->on('kelurahans')->onDelete('cascade');
            $table->foreign("poss_code")->references('poss_code')->on('positions')->onDelete('cascade');
            $table->foreign("branch_code")->references('branch_code')->on('branches')->onDelete('cascade');
            $table->foreign("coy_id")->references('coy_id')->on('coys')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('suppliers');
    }
};

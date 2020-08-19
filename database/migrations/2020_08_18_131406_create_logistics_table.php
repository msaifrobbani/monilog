<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLogisticsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('logistics', function (Blueprint $table) {
            $table->id();
            $table->string('purchasers',255);
            $table->date('tgl_terima');
            $table->string('group_materials',255);
            $table->string('no_spp',255);
            $table->date('tgl_spp');
            $table->string('ref_spp',255);
            $table->string('id_proyek',255);
            $table->string('nama_proyek',255);
            $table->string('kode_materials',255);
            $table->string('deskripsi_materials', 255);
            $table->string('specification',255);
            $table->string('status_delivery',255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('logistics');
    }
}

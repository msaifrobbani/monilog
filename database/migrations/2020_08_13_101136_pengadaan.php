<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Pengadaan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengadaan', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('tgl_terima', 255)->nullable()->default('text');
            $table->string('no_spp', 255);
            $table->string('tgl_spp', 255);
            $table->string('ref_spp', 255);
            $table->string('id_project', 255);
            $table->string('name_project', 255);
            $table->string('komat', 255); 
            $table->string('desc_material', 255);
            $table->string('spec', 255);
            $table->string('status_delivery', 255);
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
        Schema::dropIfExists('pengadaan');
    }
}

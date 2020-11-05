<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKuisPerkembanganTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kuis_perkembangan', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('id_admin');
            $table->string('soal_kuis');
            $table->string('jenis_kuis');
            $table->string('id_periode');
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
        Schema::dropIfExists('kuis_perkembangan');
    }
}

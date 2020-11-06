<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;


class CreateKuisionerTable extends Migration
{

    public function up()
    {
      Schema::table('kuisioner', function (Blueprint $table) {
        $table->dropColumn(['A2', 'A3', 'A4', 'B2', 'B3', 'B4']);
      });
        Schema::create('kuisioner', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->char('A1')->nullable();
            $table->char('A2')->nullable();
            $table->char('A3')->nullable();
            $table->char('A4')->nullable();
            $table->char('B1')->nullable();
            $table->char('B2')->nullable();
            $table->char('B3')->nullable();
            $table->char('B4')->nullable();
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('kuisioner');
    }
}

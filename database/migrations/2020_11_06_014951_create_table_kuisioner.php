<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableKuisioner extends Migration
{

    public function up()
    {
        Schema::create('table_kuisioner', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->char('A1')->nullable();
            $table->char('B1')->nullable();
            $table->char('C1')->nullable();
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('table_kuisioner');
    }
}

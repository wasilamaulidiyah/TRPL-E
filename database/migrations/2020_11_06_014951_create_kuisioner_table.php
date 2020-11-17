<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKuisionerTable extends Migration
{

    public function up()
    {
        Schema::create('kuisioner', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->char('P1')->nullable();
            $table->char('P2')->nullable();
            $table->char('P3')->nullable();
            $table->char('P4')->nullable();
            $table->char('P5')->nullable();
            $table->char('P6')->nullable();
            $table->char('P7')->nullable();
            $table->char('P8')->nullable();
            $table->char('P9')->nullable();
            $table->char('Q2')->nullable();
            $table->char('Q3')->nullable();
            $table->char('Q4')->nullable();
            $table->char('Q5')->nullable();
            $table->char('Q6')->nullable();
            $table->char('Q7')->nullable();
            $table->char('Q8')->nullable();

            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('kuisioner');
    }
}

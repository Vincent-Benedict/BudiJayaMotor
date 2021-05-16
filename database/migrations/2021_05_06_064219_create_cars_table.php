<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarsTable extends Migration
{

    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('image');
            $table->bigInteger('type_id');
            $table->bigInteger('price');
            $table->string("merk");
            $table->string('mileage');
            $table->string('color');
            $table->string('variant');
            $table->integer('year');
            $table->string('fuel');
            $table->string('transmition');
            $table->string('machine');
            $table->text('description');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('cars');
    }
}

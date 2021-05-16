<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarDetailImagesTable extends Migration
{

    public function up()
    {
        Schema::create('car_detail_images', function (Blueprint $table) {
            $table->id();
            $table->bigInteger("car_id");
            $table->string("image");
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('car_detail_images');
    }
}

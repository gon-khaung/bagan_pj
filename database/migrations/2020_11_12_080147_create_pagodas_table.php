<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePagodasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pagodas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->longText('first_part');
            $table->longText('second_part');
            $table->string('first_photo');
            $table->string('second_photo');
            $table->string('third_photo');
            $table->string('background_photo');
            $table->string('pagoda_name');
            $table->string('near_pagoda_1');
            $table->string('near_pagoda_2');
            $table->string('near_pagoda_3');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pagodas');
    }
}
